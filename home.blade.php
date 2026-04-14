@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=1920" alt="Sawah Bali" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <!-- Badge -->
        <div class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
            <span class="text-lg">🌿</span>
            <span class="text-white text-sm font-medium">Warisan Budaya UNESCO 2012</span>
        </div>
        
        <!-- Title -->
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
            Menjaga Warisan,<br>
            Melestarikan Subak Bali
        </h1>
        
        <!-- Subtitle -->
        <p class="text-lg md:text-xl text-white/80 mb-8 max-w-2xl mx-auto">
            Platform digital untuk mendata dan menyajikan informasi sistem irigasi tradisional Subak di seluruh Bali
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('subak.index') }}" class="bg-green-pale text-green-dark px-8 py-3 rounded-full font-bold hover:bg-white transition-colors">
                Jelajahi Data Subak
            </a>
            <a href="{{ route('about') }}" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-green-dark transition-colors">
                Tentang Subak
            </a>
        </div>
    </div>
    
</section>

<!-- Statistics Section -->
<section class="bg-cream py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Stat 1 -->
            <div class="bg-white rounded-xl p-8 shadow-sm card-hover">
                <div class="flex items-start space-x-4">
                    <div class="p-3 rounded-lg flex items-center justify-center w-14 h-14">
                        <i class="fa-solid fa-earth-asia text-2xl text-green-medium"></i>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-green-dark">1.500+</p>
                        <p class="text-gray-600">Subak Terdaftar</p>
                    </div>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-white rounded-xl p-8 shadow-sm card-hover">
                <div class="flex items-start space-x-4">
                    <div class="p-3 rounded-lg flex items-center justify-center w-14 h-14">
                        <i class="fa-solid fa-map-location-dot text-2xl text-green-medium"></i>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-green-dark">9</p>
                        <p class="text-gray-600">Kabupaten di Bali</p>
                    </div>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-white rounded-xl p-8 shadow-sm card-hover">
                <div class="flex items-start space-x-4">
                    <div class="p-3 rounded-lg flex items-center justify-center w-14 h-14">
                        <i class="fa-solid fa-layer-group text-2xl text-green-medium"></i>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-green-dark">150.000+</p>
                        <p class="text-gray-600">Hektar Lahan Subak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-green-medium mb-2">TENTANG SUBAK</p>
                <h2 class="text-3xl md:text-4xl font-bold text-green-dark mb-6">
                    Sistem Irigasi Tradisional Warisan Leluhur
                </h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    Subak adalah organisasi kemasyarakatan khusus yang mengatur sistem pengairan sawah di Bali. Berakar dari filosofi Tri Hita Karana, Subak menjaga keseimbangan antara manusia dengan Tuhan, sesama manusia, dan alam semesta dalam setiap aspek pertanian.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Pada tahun 2012, UNESCO secara resmi menetapkan Subak sebagai Warisan Budaya Dunia. Pengakuan ini menegaskan nilai universal luar biasa dari sistem pertanian berkelanjutan yang telah bertahan lebih dari seribu tahun di Bali.
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center bg-green-medium text-white px-8 py-3 rounded-full font-semibold hover:bg-green-dark transition-all shadow-md hover:shadow-lg">
                    Pelajari Lebih Lanjut
                    <i class="fa-solid fa-arrow-right ml-2 text-sm"></i>
                </a>
            </div>
            
            <!-- Image -->
            <div class="relative">
                <img src="{{ asset('images/subak/about.jpg') }}" alt="Sawah Terasering Bali" class="rounded-2xl shadow-lg w-full aspect-[4/3] object-cover">
                <div class="absolute bottom-4 left-4 bg-green-medium text-white px-4 py-2 rounded-lg flex items-center space-x-2">
                    <span>🌿</span>
                    <span class="text-sm font-medium">UNESCO World Heritage 2012</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="bg-green-bg py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <p class="text-xs font-semibold uppercase tracking-wider text-green-medium mb-2">APA YANG BISA ANDA TEMUKAN?</p>
            <h2 class="text-3xl md:text-4xl font-bold text-green-dark mb-4">Informasi Lengkap Dalam Satu Platform</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Semua yang perlu Anda ketahui tentang Subak Bali tersedia di sini</p>
        </div>
        
        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-sm card-hover">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-server text-2xl text-green-medium"></i>
                </div>
                <h3 class="text-xl font-bold text-green-dark mb-3">Data Lengkap & Terstruktur</h3>
                <p class="text-gray-600">Informasi lengkap setiap subak mulai dari lokasi, batas wilayah, sistem irigasi, hingga data pertanian yang terorganisir dengan baik.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-sm card-hover">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-map-location-dot text-2xl text-green-medium"></i>
                </div>
                <h3 class="text-xl font-bold text-green-dark mb-3">Sebaran di Seluruh Bali</h3>
                <p class="text-gray-600">Temukan subak berdasarkan kabupaten dan kecamatan. Data mencakup seluruh 9 kabupaten/kota di Bali.</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-sm card-hover">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-landmark text-2xl text-green-medium"></i>
                </div>
                <h3 class="text-xl font-bold text-green-dark mb-3">Nilai Budaya & Sejarah</h3>
                <p class="text-gray-600">Pelajari filosofi Tri Hita Karana dan sejarah panjang sistem Subak yang telah ada sejak abad ke-9 Masehi.</p>
            </div>
        </div>
    </div>
</section>

<!-- Preview Data Subak Section -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-12">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-green-medium mb-2">DATA SUBAK</p>
                <h2 class="text-3xl md:text-4xl font-bold text-green-dark">Jelajahi Subak di Bali</h2>
            </div>
            <a href="{{ route('subak.index') }}" class="mt-4 md:mt-0 inline-flex items-center text-green-medium font-bold hover:text-green-dark transition-all group">
                Lihat Semua
                <i class="fa-solid fa-circle-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
        
        <!-- Subak Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($latestSubaks as $subak)
            <div class="bg-white rounded-2xl overflow-hidden shadow-md card-hover group">
                <!-- Image Area -->
                <div class="h-48 bg-gradient-to-br from-green-medium to-green-light relative overflow-hidden">
                    @if($subak->foto_url)
                        <img src="{{ $subak->foto_url }}" alt="{{ $subak->nama }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fa-solid fa-leaf text-6xl text-white/20"></i>
                        </div>
                    @endif
                </div>
                
                <!-- Content -->
                <div class="p-5">
                    <span class="inline-block bg-green-bg text-green-medium text-xs font-medium px-3 py-1 rounded-full mb-2">{{ $subak->kabupaten }}</span>
                    <h3 class="text-lg font-bold text-green-dark mb-1">{{ $subak->nama }}</h3>
                    <p class="text-gray-500 text-sm mb-3">{{ $subak->kecamatan }}</p>
                    
                    <div class="flex items-center text-sm text-gray-600 mb-2">
                        <i class="fa-solid fa-maximize w-5 text-green-medium"></i>
                        <span>{{ $subak->luas_subak }}</span>
                    </div>
                    
                    <div class="flex items-center text-sm text-gray-600 mb-5">
                        <i class="fa-solid fa-users w-5 text-green-medium"></i>
                        <span>{{ $subak->jumlah_anggota }} Anggota</span>
                    </div>
                    
                    <a href="{{ route('subak.show', $subak->slug) }}" class="block w-full bg-green-medium text-white text-center py-2 rounded-lg font-medium hover:bg-green-dark transition-colors">
                        Lihat Detail &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('subak.index') }}" class="inline-flex items-center bg-green-medium text-white px-10 py-4 rounded-full font-bold hover:bg-green-dark transition-all shadow-lg hover:shadow-xl group">
                Jelajahi Semua Subak
                <i class="fa-solid fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

<!-- Tri Hita Karana Section -->
<section class="relative py-24">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=1920" alt="Sawah Bali" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-green-dark/80"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-xs font-semibold uppercase tracking-wider text-green-pale mb-2">FILOSOFI SUBAK</p>
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Tri Hita Karana</h2>
        <p class="text-white/80 mb-12 max-w-2xl mx-auto">Tiga sumber kebahagiaan yang menjadi fondasi sistem Subak Bali</p>
        
        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Parahyangan -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 rotate-3">
                    <i class="fa-solid fa-sun text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Parahyangan</h3>
                <p class="text-white/70">Hubungan harmonis antara manusia dengan Tuhan Yang Maha Esa</p>
            </div>
            
            <!-- Pawongan -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 -rotate-3">
                    <i class="fa-solid fa-users text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Pawongan</h3>
                <p class="text-white/70">Hubungan harmonis antara sesama manusia dalam komunitas Subak</p>
            </div>
            
            <!-- Palemahan -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 rotate-6">
                    <i class="fa-solid fa-mountain-sun text-3xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Palemahan</h3>
                <p class="text-white/70">Hubungan harmonis antara manusia dengan alam dan lingkungan</p>
            </div>
        </div>
    </div>
</section>
@endsection
