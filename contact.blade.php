@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<!-- Page Header -->
<section class="relative min-h-[280px] flex items-end pb-8">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=1920" alt="Sawah Bali" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-green-dark/75"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">Kontak Kami</h1>
        <nav class="text-white/70 text-sm">
            <a href="{{ route('home') }}" class="hover:text-white">Beranda</a>
            <span class="mx-2">&gt;</span>
            <span class="text-white">Kontak</span>
        </nav>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="bg-white py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- WhatsApp -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-lg transition-all shadow-sm">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-brands fa-whatsapp text-3xl text-green-medium"></i>
                </div>
                <h3 class="text-lg font-bold text-green-dark mb-1">WhatsApp</h3>
                <p class="text-gray-500 text-sm mb-2">Hubungi kami langsung</p>
                <p class="text-green-medium font-bold">087759035322</p>
            </div>
            
            <!-- Email -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-lg transition-all shadow-sm">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-envelope text-3xl text-green-medium"></i>
                </div>
                <h3 class="text-lg font-bold text-green-dark mb-1">Email</h3>
                <p class="text-gray-500 text-sm mb-2">Kirim pesan via email</p>
                <p class="text-green-medium font-bold text-xs truncate">putra.2308561035@student.unud.ac.id</p>
            </div>
            
            <!-- Location -->
            <div class="border border-green-bg rounded-2xl p-8 text-center hover:shadow-lg hover:border-green-pale transition-all">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-location-dot text-3xl text-green-medium"></i>
                </div>
                <h3 class="text-lg font-bold text-green-dark mb-1">Lokasi</h3>
                <p class="text-gray-500 text-sm mb-2">Wilayah pengelolaan</p>
                <p class="text-green-medium font-bold">Bali, Indonesia</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map Section -->
<section class="bg-cream py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold text-green-dark mb-2">Sampaikan Pesan Anda</h2>
                <p class="text-gray-600 mb-6">Kami siap membantu pertanyaan Anda seputar Subak Bali</p>
                
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="nama" id="nama" required class="w-full border border-green-pale rounded-lg px-4 py-3 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        </div>
                        <div>
                            <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                            <input type="tel" name="telepon" id="telepon" class="w-full border border-green-pale rounded-lg px-4 py-3 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" id="email" class="w-full border border-green-pale rounded-lg px-4 py-3 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        </div>
                        <div>
                            <label for="subjek" class="block text-sm font-medium text-gray-700 mb-1">Subjek <span class="text-red-500">*</span></label>
                            <input type="text" name="subjek" id="subjek" required class="w-full border border-green-pale rounded-lg px-4 py-3 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        </div>
                    </div>
                    
                    <div>
                        <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">Pesan <span class="text-red-500">*</span></label>
                        <textarea name="pesan" id="pesan" rows="5" required class="w-full border border-green-pale rounded-lg px-4 py-3 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-green-medium text-white py-3 rounded-lg font-semibold hover:bg-green-dark transition-colors flex items-center justify-center">
                        Kirim via WhatsApp
                        <i class="fa-brands fa-whatsapp ml-2 text-lg"></i>
                    </button>
                </form>
            </div>
            
            <!-- Map -->
            <div>
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm h-full min-h-[400px]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010292.4643707548!2d114.43032245!3d-8.4553714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22f7520fca7d3%3A0x2872b62cc456cd84!2sBali!5e0!3m2!1sen!2sid!4v1704067200000!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0; min-height: 450px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
