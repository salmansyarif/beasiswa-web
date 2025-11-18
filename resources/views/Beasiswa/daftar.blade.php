@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-8 card rounded-2xl shadow-2xl">

    <h2 class="text-3xl font-bold text-white text-center mb-8">Formulir Pendaftaran Beasiswa</h2>

    <!-- Tampilkan IPK yang Digenerate -->
    <div class="bg-blue-900 bg-opacity-30 p-5 rounded-xl mb-8 border border-blue-700">
        <p class="text-lg text-gray-300 font-semibold mb-2">IPK Semester Saat Ini (Digenerate Otomatis):</p>
        <span class="text-6xl font-extrabold block text-center 
            {{ $isEligible ? 'text-green-400' : 'text-red-400' }}">
            {{ number_format($ipk, 2) }}
        </span>
        <p class="text-center mt-3 text-sm font-medium {{ $isEligible ? 'text-green-300' : 'text-red-300' }}">
            Status: {{ $isEligible ? 'ANDA MEMENUHI SYARAT untuk memilih beasiswa.' : 'IPK Belum Memenuhi Syarat (Min. 3.00).' }}
        </p>
    </div>

    
    <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-300 mb-1">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required
                class="w-full p-3 rounded-lg bg-gray-700 text-white border-none focus:ring-yellow-500 focus:border-yellow-500 @error('nama') border-red-500 @enderror">
            @error('nama')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

       
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                class="w-full p-3 rounded-lg bg-gray-700 text-white border-none focus:ring-yellow-500 focus:border-yellow-500 @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        
       
        <div class="mb-4">
            <label for="nomor_telepon" class="block text-sm font-medium text-gray-300 mb-1">Nomor Telepon</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required
                class="w-full p-3 rounded-lg bg-gray-700 text-white border-none focus:ring-yellow-500 focus:border-yellow-500 @error('nomor_telepon') border-red-500 @enderror">
            @error('nomor_telepon')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

     
        <div class="mb-4">
            <label for="semester" class="block text-sm font-medium text-gray-300 mb-1">Semester Saat Ini</label>
            <select id="semester" name="semester" required
                class="w-full p-3 rounded-lg bg-gray-700 text-white border-none focus:ring-yellow-500 focus:border-yellow-500 @error('semester') border-red-500 @enderror">
                <option value="">Pilih Semester</option>
                @for ($i = 1; $i <= 8; $i++)
                    <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
            @error('semester')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

      
        <input type="hidden" name="ipk" value="{{ $ipk }}">

    
        <div class="mb-6">
            <label for="pilihan_beasiswa" class="block text-sm font-medium text-gray-300 mb-1">Pilihan Beasiswa</label>
            <select id="pilihan_beasiswa" name="pilihan_beasiswa" {{ $isEligible ? 'required' : 'disabled' }}
                class="w-full p-3 rounded-lg border-none focus:ring-yellow-500 focus:border-yellow-500 
                    {{ $isEligible ? 'bg-gray-700 text-white' : 'bg-gray-800 text-gray-500 cursor-not-allowed' }}">
                
                @if ($isEligible)
                    <option value="Beasiswa Akademik" {{ old('pilihan_beasiswa', $pilihanBeasiswa) == 'Beasiswa Akademik' ? 'selected' : '' }}>Beasiswa Akademik</option>
                    <option value="Beasiswa Non-Akademik" {{ old('pilihan_beasiswa', $pilihanBeasiswa) == 'Beasiswa Non-Akademik' ? 'selected' : '' }}>Beasiswa Non-Akademik</option>
                @else
                    <option value="">Tidak dapat memilih (IPK kurang dari 3.00)</option>
                @endif
            </select>
            @if (!$isEligible)
                <p class="text-red-400 text-xs mt-1">Anda tidak dapat memilih beasiswa karena IPK di bawah 3.00.</p>
            @endif
            @error('pilihan_beasiswa')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

      
        <div class="mb-6">
            <label for="berkas" class="block text-sm font-medium text-gray-300 mb-1">Upload Berkas Persyaratan (PDF/Gambar/ZIP, Max 2MB)</label>
            <input type="file" id="berkas" name="berkas" required
                class="w-full p-3 rounded-lg bg-gray-700 text-white border-none file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-yellow-500 file:text-gray-900 hover:file:bg-yellow-600 transition duration-150">
            @error('berkas')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        
    
        <div class="flex justify-center space-x-4 mt-8">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition duration-150 transform hover:scale-105">
                Daftar Sekarang
            </button>
            <a href="{{ route('beasiswa.pilihan') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded-xl shadow-lg transition duration-150 transform hover:scale-105">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection