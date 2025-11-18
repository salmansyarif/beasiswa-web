@extends('layouts.app')

@section('content')
<div class="min-h-screen py-12 px-4">
    <div class="max-w-6xl mx-auto">
        
       
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4 text-white">
                Portal Beasiswa
            </h1>
            <p class="text-lg md:text-xl text-gray-400">
                Pilih jenis beasiswa yang sesuai dengan prestasi Anda
            </p>
        </div>

       
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            
         
            <div class="bg-gray-800/50 rounded-lg p-8 border border-gray-700 hover:border-yellow-500/50 transition-all duration-300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Beasiswa Akademik</h3>
                </div>
                
                <p class="text-gray-400 mb-6 text-base">
                    Diberikan kepada mahasiswa dengan prestasi akademik cemerlang berdasarkan IPK minimal 3.00
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-yellow-500/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                        </div>
                        <span class="text-gray-300 text-sm">IPK minimal 3.00</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-yellow-500/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                        </div>
                        <span class="text-gray-300 text-sm">Fokus pada prestasi akademik</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-yellow-500/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                        </div>
                        <span class="text-gray-300 text-sm">Bantuan biaya pendidikan penuh</span>
                    </div>
                </div>
            </div>

          
            <div class="bg-gray-800/50 rounded-lg p-8 border border-gray-700 hover:border-yellow-500/50 transition-all duration-300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-yellow-500/10 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Beasiswa Non-Akademik</h3>
                </div>
                
                <p class="text-gray-400 mb-6 text-base">
                    Diberikan kepada mahasiswa dengan prestasi di bidang olahraga, seni, dan organisasi
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-yellow-500/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                        </div>
                        <span class="text-gray-300 text-sm">Prestasi olahraga, seni, atau organisasi</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-yellow-500/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                        </div>
                        <span class="text-gray-300 text-sm">Fokus pada bakat dan keterampilan</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-yellow-500/20 flex items-center justify-center mt-0.5 flex-shrink-0">
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                        </div>
                        <span class="text-gray-300 text-sm">Dukungan pengembangan potensi</span>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="flex flex-col md:flex-row justify-center gap-6">
           
            <a href="{{ route('beasiswa.daftar') }}"
                class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-4 px-10 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out text-xl">
                Daftar Beasiswa
            </a>

       
            <a href="{{ route('beasiswa.hasil') }}"
                class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-4 px-10 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out text-xl">
                Lihat Hasil Pendaftaran
            </a>
        </div>

    </div>
</div>
@endsection