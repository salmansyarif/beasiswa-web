@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto bg-gray-800 text-white p-6 rounded-2xl shadow-lg mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Hasil Pendaftaran Beasiswa</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-600 text-sm">
        <thead>
            <tr class="bg-gray-700">
                <th class="border border-gray-600 px-4 py-2">Nama</th>
                <th class="border border-gray-600 px-4 py-2">Email</th>
                <th class="border border-gray-600 px-4 py-2">Nomor HP</th>
                <th class="border border-gray-600 px-4 py-2">Semester</th>
                <th class="border border-gray-600 px-4 py-2">IPK</th>
                <th class="border border-gray-600 px-4 py-2">Pilihan</th>
                <th class="border border-gray-600 px-4 py-2">Status</th>
                <th class="border border-gray-600 px-4 py-2">Berkas</th>
            </tr>
        </thead>
        <tbody>
            @forelse($beasiswas as $data)
                <tr>
                    <td class="border border-gray-600 px-4 py-2">{{ $data->nama }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $data->email }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $data->nomor_hp }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $data->semester }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $data->ipk }}</td>
                    <td class="border border-gray-600 px-4 py-2">{{ $data->pilihan_beasiswa ?? '-' }}</td>
                    <td class="border border-gray-600 px-4 py-2 text-yellow-400">{{ $data->status_ajuan }}</td>
                    <td class="border border-gray-600 px-4 py-2">
                        <a href="{{ route('beasiswa.download', $data->berkas_syarat) }}" 
                           class="text-blue-400 hover:underline">Download</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center py-3 text-gray-400">Belum ada data pendaftar</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
