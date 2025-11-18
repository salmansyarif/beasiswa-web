@extends('layouts.app')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center px-4">
    <div class="max-w-5xl mx-auto text-center">
        
      
        <div class="mb-6 inline-block">
            <div class="w-20 h-20 mx-auto bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center shadow-2xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
        </div>

    
        <h1 class="text-6xl md:text-7xl font-extrabold mb-6 bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-500 bg-clip-text text-transparent leading-tight">
            Selamat Datang di<br>Portal Beasiswa
        </h1>

      
        <p class="text-gray-300 text-xl md:text-2xl mb-4 max-w-2xl mx-auto leading-relaxed">
            Raih masa depan cerah dengan berbagai pilihan beasiswa
        </p>
        
        <p class="text-gray-400 text-base md:text-lg mb-12 max-w-xl mx-auto">
            Silakan pilih jenis beasiswa dan mulai pendaftaran sekarang.
        </p>

       
        <div class="mt-10">
            <a href="{{ route('beasiswa.pilihan') }}"
                class="group relative inline-flex items-center gap-3 px-12 py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-black font-bold text-xl rounded-2xl shadow-2xl hover:shadow-yellow-500/50 transition-all duration-300 transform hover:scale-105">
                <span>Mulai Sekarang</span>
                <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>

   
    </div>
</div>
@endsection