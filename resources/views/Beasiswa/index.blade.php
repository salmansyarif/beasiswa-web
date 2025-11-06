{{-- resources/views/beasiswa/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Program Beasiswa')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 py-20 relative overflow-hidden">
    
    {{-- Animated Background --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob top-0 -left-20"></div>
        <div class="absolute w-96 h-96 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000 top-0 -right-20"></div>
        <div class="absolute w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000 bottom-0 left-1/2"></div>
    </div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        
        {{-- Hero Header --}}
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-400 to-orange-500 px-6 py-2 rounded-full mb-8 animate-bounce">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-white font-bold text-sm">PROGRAM BEASISWA 2025</span>
            </div>
            
            <h1 class="text-6xl md:text-7xl font-black text-white mb-6 tracking-tight">
                Wujudkan Impian
                <span class="block bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-400 bg-clip-text text-transparent">
                    Pendidikanmu!
                </span>
            </h1>
            
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Jangan biarkan biaya menghalangi masa depanmu. Bergabunglah dengan ribuan mahasiswa yang telah meraih kesuksesan melalui program beasiswa kami.
            </p>
        </div>

        {{-- Cards Section --}}
        <div class="grid lg:grid-cols-2 gap-8 mb-16">
            
            {{-- Card 1: Beasiswa Akademik --}}
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-white">Beasiswa Akademik</h3>
                            <span class="inline-block bg-blue-500/30 text-blue-200 px-3 py-1 rounded-full text-sm font-semibold mt-1">
                                Prestasi Unggulan
                            </span>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                        Untuk mahasiswa berprestasi dengan IPK minimal 3.50. Dapatkan dukungan penuh biaya kuliah dan pengembangan karir!
                    </p>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3 text-white">
                            <div class="w-6 h-6 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Bebas biaya kuliah 100%</span>
                        </div>
                        <div class="flex items-center gap-3 text-white">
                            <div class="w-6 h-6 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Uang saku Rp 2.000.000/bulan</span>
                        </div>
                        <div class="flex items-center gap-3 text-white">
                            <div class="w-6 h-6 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Laptop & pelatihan gratis</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-6 border-t border-white/20">
                        <div>
                            <p class="text-gray-400 text-sm">Kuota tersedia</p>
                            <p class="text-white font-bold text-xl">50 Penerima</p>
                        </div>
                        <div class="text-right">
                            <p class="text-gray-400 text-sm">Deadline</p>
                            <p class="text-white font-bold text-xl">31 Des 2025</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2: Beasiswa Sosial --}}
            <div class="group relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-pink-500/20 to-purple-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-white">Beasiswa Sosial</h3>
                            <span class="inline-block bg-pink-500/30 text-pink-200 px-3 py-1 rounded-full text-sm font-semibold mt-1">
                                Bantuan Pendidikan
                            </span>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                        Untuk mahasiswa kurang mampu dengan semangat belajar tinggi. Kami percaya setiap orang berhak mendapat pendidikan!
                    </p>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center gap-3 text-white">
                            <div class="w-6 h-6 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Subsidi biaya kuliah 100%</span>
                        </div>
                        <div class="flex items-center gap-3 text-white">
                            <div class="w-6 h-6 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Bantuan hidup Rp 1.500.000/bulan</span>
                        </div>
                        <div class="flex items-center gap-3 text-white">
                            <div class="w-6 h-6 bg-green-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Mentoring & bimbingan gratis</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-6 border-t border-white/20">
                        <div>
                            <p class="text-gray-400 text-sm">Kuota tersedia</p>
                            <p class="text-white font-bold text-xl">100 Penerima</p>
                        </div>
                        <div class="text-right">
                            <p class="text-gray-400 text-sm">Deadline</p>
                            <p class="text-white font-bold text-xl">31 Des 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <button onclick="openModal()" class="group px-10 py-5 bg-gradient-to-r from-yellow-400 to-orange-500 text-slate-900 font-bold text-lg rounded-2xl shadow-2xl hover:shadow-yellow-500/50 transform hover:scale-105 transition-all duration-300 flex items-center gap-3">
                <svg class="w-6 h-6 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                </svg>
                Daftar Sekarang
            </button>

            <a href="{{ route('beasiswa.hasil') }}" class="group px-10 py-5 bg-white/10 backdrop-blur-lg border-2 border-white/30 text-white font-bold text-lg rounded-2xl hover:bg-white/20 transform hover:scale-105 transition-all duration-300 flex items-center gap-3">
    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
    </svg>
    Lihat Semua Program
</a>

        </div>
    </div>
</div>

{{-- Modal --}}
<div id="modalForm" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center p-4">
    <div class="bg-slate-900 rounded-3xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto border border-white/10">
        
        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 px-8 py-6 rounded-t-3xl">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-3xl font-black text-slate-900">Form Pendaftaran</h2>
                    <p class="text-slate-800">Lengkapi data dirimu</p>
                </div>
                <button onclick="closeModal()" class="w-10 h-10 bg-slate-900/20 hover:bg-slate-900/40 rounded-xl flex items-center justify-center transition-all">
                    <svg class="w-6 h-6 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

     <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
    @csrf

    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <label class="block text-white font-semibold mb-2">Nama Lengkap</label>
            <input type="text" name="nama" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white" placeholder="John Doe">
        </div>
        <div>
            <label class="block text-white font-semibold mb-2">Email</label>
            <input type="email" name="email" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white" placeholder="john@example.com">
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <label class="block text-white font-semibold mb-2">No. Telepon</label>
            <input type="tel" name="nomor_hp" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white" placeholder="08xxxxxxxxxx">
        </div>
        <div>
            <label class="block text-white font-semibold mb-2">Jenis Beasiswa</label>
            <select name="jenis_beasiswa" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white">
                <option value="">Pilih</option>
                <option value="akademik">Beasiswa Akademik</option>
                <option value="sosial">Beasiswa Sosial</option>
            </select>
        </div>
    </div>

    <div>
        <label class="block text-white font-semibold mb-2">Semester</label>
        <input type="number" name="semester" min="1" max="14" class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white" placeholder="6">
    </div>

    <div>
        <label class="block text-white font-semibold mb-2">IPK</label>
        <input type="number" step="0.01" name="ipk" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white" placeholder="3.75">
    </div>

    <div>
        <label class="block text-white font-semibold mb-2">Upload Berkas Persyaratan (PDF/JPG/PNG)</label>
        <input type="file" name="berkas_syarat" accept=".pdf,.jpg,.jpeg,.png" required class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white">
    </div>

    <div class="flex gap-4 pt-6">
        <button type="button" onclick="closeModal()" class="flex-1 px-6 py-4 bg-white/5 border border-white/10 text-white font-bold rounded-xl hover:bg-white/10 transition-all">
            Batal
        </button>
        <button type="submit" class="flex-1 px-6 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-slate-900 font-bold rounded-xl hover:shadow-xl hover:shadow-yellow-500/50 transform hover:scale-105 transition-all">
            Kirim Pendaftaran
        </button>
    </div>
</form>

    </div>
</div>

@push('styles')
<style>
    @keyframes blob {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
    }
    .animate-blob {
        animation: blob 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    .animation-delay-4000 {
        animation-delay: 4s;
    }
</style>
@endpush

@push('scripts')
<script>
    // Pastikan DOM sudah loaded
    document.addEventListener('DOMContentLoaded', function() {
        
        // Function untuk membuka modal
        window.openModal = function() {
            const modal = document.getElementById('modalForm');
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        // Function untuk menutup modal
        window.closeModal = function() {
            const modal = document.getElementById('modalForm');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal ketika klik di luar modal
        const modal = document.getElementById('modalForm');
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });
        }

        // Close modal dengan tombol ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    });
</script>
@endpush
@endsection