<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeasiswaController extends Controller
{
  
    public function pilihan()
    {
        return view('beasiswa.pilihan');
    }

   
    public function daftar()
    {
       
        $randomIpk = round(rand(200, 400) / 100, 2);
        $isEligible = $randomIpk >= 3.00;

        $pilihanBeasiswaOtomatis = null;
        if ($isEligible) {
          
            $options = ['Beasiswa Akademik', 'Beasiswa Non-Akademik'];
            $pilihanBeasiswaOtomatis = $options[array_rand($options)];
        }

        return view('beasiswa.daftar', [
            'ipk' => $randomIpk,
            'isEligible' => $isEligible,
            'pilihanBeasiswa' => $pilihanBeasiswaOtomatis
        ]);
    }

   public function store(Request $request)
{
  
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:beasiswas,email',
        'nomor_telepon' => 'required|numeric|digits_between:10,15',
        'semester' => 'required|integer|min:1|max:8',
        'ipk' => 'required|numeric|min:2.00|max:4.00',
        'pilihan_beasiswa' => ($request->ipk >= 3.00) 
                                ? 'required|in:Beasiswa Akademik,Beasiswa Non-Akademik' 
                                : 'nullable',
        'berkas' => 'required|file|mimes:pdf,jpg,jpeg,png,zip|max:2048'
    ]);

  
    $berkas = $request->file('berkas');
    $berkasName = $berkas->hashName();
    $berkas->storeAs('public/berkas', $berkasName);


    Beasiswa::create([
        'nama' => $validated['nama'],
        'email' => $validated['email'],
        'nomor_telepon' => $validated['nomor_telepon'],
        'semester' => $validated['semester'],
        'ipk' => $validated['ipk'],
        'pilihan_beasiswa' =>
            ($validated['ipk'] < 3.00)
                ? null
                : ($validated['pilihan_beasiswa'] ?? null),
        'berkas' => $berkasName,
        'status' => 'Sudah di Verifikasi'
    ]);

   
    return redirect()->route('beasiswa.hasil')
        ->with('success', 'Pendaftaran beasiswa berhasil!');
}


    
     
    public function hasil()
    {
       
        $beasiswas = Beasiswa::orderBy('created_at', 'desc')->get();
        
        return view('beasiswa.hasil', compact('beasiswas'));
    }

   
    public function downloadBerkas($filename)
    {
        $path = 'public/berkas/' . $filename;

     
        if (!Storage::exists($path)) {
            abort(404, 'Berkas tidak ditemukan.');
        } 

       
        $beasiswa = Beasiswa::where('berkas', $filename)->first();
        
      
        $namaPendaftar = $beasiswa ? $beasiswa->nama : 'Pendaftar';
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        
        $originalName = 'Berkas-Beasiswa-' . $namaPendaftar . '.' . $extension;

        return Storage::download($path, $originalName);
    }
}