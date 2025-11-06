<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Beasiswa;

class BeasiswaController extends Controller
{
    // Menampilkan halaman awal
    public function pilihan()
    {
        return view('welcome');
    }

    // Menampilkan daftar beasiswa dengan IPK acak
    public function daftar()
    {
        $randomIPK = round(rand(200, 400) / 100, 2);

        $isEligible = $randomIPK >= 3.0;
        $pilihanBeasiswaOtomatis = null;

        if ($isEligible) {
            $options = ['Beasiswa Akademik', 'Beasiswa Non-Akademik'];
            $pilihanBeasiswaOtomatis = $options[array_rand($options)];
        }

        return view('beasiswa.list', [
            'ipk' => $randomIPK,
            'isEligible' => $isEligible,
            'pilihanBeasiswaOtomatis' => $pilihanBeasiswaOtomatis,
        ]);
    }

    // Menyimpan data pendaftaran
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:beasiswas,email',
            'nomor_hp' => 'required|string|max:15',
            'semester' => 'required|integer|min:1|max:14',
            'ipk' => 'required|numeric|min:0|max:4',
            'pilihan_beasiswa' => 'nullable|string|max:255',
            'berkas' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Upload berkas
        $berkas = $request->file('berkas');
        $berkasName = $berkas->hashName();
        $berkas->storeAs('public/berkas', $berkasName);

        // Simpan data ke database
        Beasiswa::create([
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'nomor_hp' => $validatedData['nomor_hp'],
            'semester' => $validatedData['semester'],
            'ipk' => $validatedData['ipk'],
            'pilihan_beasiswa' => ($validatedData['ipk'] < 3.0) ? null : $validatedData['pilihan_beasiswa'],
            'berkas' => $berkasName,
            'status_ajuan' => 'belum diverifikasi',
        ]);

        return redirect()->route('beasiswa.hasil')->with('success', 'Pendaftaran beasiswa berhasil dikirim!');
    }

    // Menampilkan hasil pendaftaran
    public function hasil()
    {
        $beasiswas = Beasiswa::orderBy('created_at', 'desc')->get();
        return view('beasiswa.hasil', compact('beasiswas'));
    }

    // Mengunduh berkas pendaftar
    public function downloadBerkas($filename)
    {
        $path = 'public/berkas/' . $filename;

        if (!Storage::exists($path)) {
            abort(404, 'Berkas tidak ditemukan.');
        }

        $beasiswa = Beasiswa::where('berkas_syarat', $filename)->first();
        $originalName = 'Berkas-Beasiswa-' . ($beasiswa->nama ?? 'Anonim') . '-' . time() . '.' . pathinfo($filename, PATHINFO_EXTENSION);

        return Storage::download($path, $originalName);
    }
}
