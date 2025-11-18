@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">

    <h2 class="text-4xl font-bold text-white text-center mb-10">Hasil Pendaftaran Beasiswa</h2>

    @if (session('success'))
        <div class="bg-green-600 bg-opacity-70 text-white px-4 py-3 rounded-lg mb-8 text-center border-l-4 border-green-400 font-medium shadow-md">
            {{ session('success') }}
        </div>
    @endif
    
    @if ($beasiswas->isEmpty())
        <div class="bg-yellow-900 bg-opacity-30 p-8 rounded-xl text-center text-yellow-300 border border-yellow-600">
            <p class="text-xl font-semibold">Belum ada data pendaftar yang tersimpan.</p>
            <p class="mt-2 text-gray-300">Silakan coba <a href="{{ route('beasiswa.daftar') }}" class="underline hover:text-white">mendaftar terlebih dahulu.</a></p>
        </div>
    @else
        <div class="overflow-x-auto card rounded-2xl shadow-xl p-6">
            <table class="min-w-full text-left border-collapse text-gray-300">
                <thead>
                    <tr class="border-b border-gray-600 text-yellow-400 bg-gray-800 bg-opacity-30">
                        <th class="p-4">Nama</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Semester</th>
                        <th class="p-4">IPK</th>
                        <th class="p-4">Beasiswa Pilihan</th>
                        <th class="p-4">Berkas</th>
                        <th class="p-4">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($beasiswas as $b)
                    <tr class="border-b border-gray-700 hover:bg-gray-800 transition duration-150">
                        <td class="p-4 font-semibold text-white">{{ $b->nama }}</td>
                        <td class="p-4">{{ $b->email }}</td>
                        <td class="p-4">{{ $b->semester }}</td>
                        <td class="p-4 font-mono">{{ number_format($b->ipk, 2) }}</td>
                        <td class="p-4">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold 
                                {{ $b->pilihan_beasiswa ? 'bg-indigo-600 text-white' : 'bg-red-900 text-red-300' }}">
                                {{ $b->pilihan_beasiswa ?? 'IPK < 3.00 (Tidak Eligible)' }}
                            </span>
                        </td>

                        <td class="p-4">
                            <a href="{{ route('beasiswa.download', $b->berkas) }}"
                               class="text-yellow-400 underline hover:text-yellow-300 font-medium">
                                Download Berkas
                            </a>
                        </td>

                        <td class="p-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold uppercase
                                {{ $b->status == 'Sudah di verifikasi' ? 'bg-red-700 text-red-100' : 'bg-green-700 text-green-100' }}">
                                {{ ucfirst($b->status) }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</div>
@endsection