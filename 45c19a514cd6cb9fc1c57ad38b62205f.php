<?php $__env->startSection('title', $subak->nama . ' - Detail Subak'); ?>

<?php $__env->startSection('content'); ?>
<!-- Detail Hero -->
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <?php if($subak->foto_url): ?>
            <img src="<?php echo e($subak->foto_url); ?>" alt="<?php echo e($subak->nama); ?>" class="w-full h-full object-cover scale-105 transition-transform duration-1000 group-hover:scale-100">
        <?php else: ?>
            <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=1920" alt="Sawah Bali" class="w-full h-full object-cover">
        <?php endif; ?>
        <div class="absolute inset-0 bg-gradient-to-t from-green-dark/90 via-green-dark/60 to-transparent"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-center mt-20">
        <!-- Floating Info Card -->
        <div class="inline-block p-8 mb-8 animate-fade-in-up">
            <span class="inline-block bg-green-pale text-green-dark text-[10px] font-bold uppercase tracking-[0.2em] px-4 py-1.5 rounded-full mb-4 shadow-sm">
                <i class="fa-solid fa-location-dot mr-1.5"></i> <?php echo e($subak->kabupaten); ?>

            </span>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 drop-shadow-lg leading-tight"><?php echo e($subak->nama); ?></h1>
            
            <!-- Breadcrumb Modern -->
            <nav class="flex items-center justify-center space-x-2 text-white/70 text-xs font-semibold uppercase tracking-widest">
                <a href="<?php echo e(route('home')); ?>" class="hover:text-white transition-colors">Beranda</a>
                <span class="opacity-30">/</span>
                <a href="<?php echo e(route('subak.index')); ?>" class="hover:text-white transition-colors">Data Subak</a>
                <span class="opacity-30">/</span>
                <span class="text-white"><?php echo e($subak->nama); ?></span>
            </nav>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="bg-gray-50 py-16 -mt-12 relative z-20 rounded-t-[3rem] shadow-[0_-20px_50px_-20px_rgba(28,58,26,0.3)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Main Content (Left) -->
            <div class="lg:col-span-8 space-y-10" x-data="{ activeTab: 'umum' }">
                
                <!-- Tab Navigation -->
                <div class="bg-white rounded-2xl p-2 shadow-sm flex items-center space-x-2 overflow-x-auto">
                    <button 
                        @click="activeTab = 'umum'" 
                        :class="activeTab === 'umum' ? 'bg-green-medium text-white shadow-lg' : 'text-gray-500 hover:bg-gray-50'"
                        class="flex-1 whitespace-nowrap px-6 py-3 rounded-xl font-bold text-sm transition-all duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-circle-info mr-2"></i> Data Umum
                    </button>
                    <button 
                        @click="activeTab = 'irigasi'" 
                        :class="activeTab === 'irigasi' ? 'bg-green-medium text-white shadow-lg' : 'text-gray-500 hover:bg-gray-50'"
                        class="flex-1 whitespace-nowrap px-6 py-3 rounded-xl font-bold text-sm transition-all duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-droplet mr-2"></i> Irigasi
                    </button>
                    <button 
                        @click="activeTab = 'pertanian'" 
                        :class="activeTab === 'pertanian' ? 'bg-green-medium text-white shadow-lg' : 'text-gray-500 hover:bg-gray-50'"
                        class="flex-1 whitespace-nowrap px-6 py-3 rounded-xl font-bold text-sm transition-all duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-wheat-awn mr-2"></i> Pertanian
                    </button>
                    <button 
                        @click="activeTab = 'galeri'" 
                        :class="activeTab === 'galeri' ? 'bg-green-medium text-white shadow-lg' : 'text-gray-500 hover:bg-gray-50'"
                        class="flex-1 whitespace-nowrap px-6 py-3 rounded-xl font-bold text-sm transition-all duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-camera mr-2"></i> Galeri
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="space-y-8 min-h-[400px]">
                    
                    <!-- TAB: UMUM -->
                    <div x-show="activeTab === 'umum'" x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="space-y-8">
                        <!-- Batas Wilayah Card -->
                        <div class="bg-white rounded-[2rem] p-8 shadow-sm">
                            <h3 class="text-xl font-bold text-green-dark mb-6 flex items-center">
                                <span class="w-8 h-8 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fa-solid fa-map text-green-medium text-sm"></i>
                                </span>
                                Batas Wilayah
                            </h3>
                            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="p-4 bg-gray-50 rounded-2xl">
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Utara</p>
                                    <p class="text-sm font-semibold text-green-dark"><?php echo e($subak->batas_utara ?? '-'); ?></p>
                                </div>
                                <div class="p-4 bg-gray-50 rounded-2xl">
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Selatan</p>
                                    <p class="text-sm font-semibold text-green-dark"><?php echo e($subak->batas_selatan ?? '-'); ?></p>
                                </div>
                                <div class="p-4 bg-gray-50 rounded-2xl">
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Timur</p>
                                    <p class="text-sm font-semibold text-green-dark"><?php echo e($subak->batas_timur ?? '-'); ?></p>
                                </div>
                                <div class="p-4 bg-gray-50 rounded-2xl">
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1">Barat</p>
                                    <p class="text-sm font-semibold text-green-dark"><?php echo e($subak->batas_barat ?? '-'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: IRIGASI -->
                    <div x-show="activeTab === 'irigasi'" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php
                            $irigasiData = [
                                ['label' => 'Sumber Air', 'value' => $subak->sumber_air, 'icon' => 'fa-water'],
                                ['label' => 'Kecukupan Kemarau', 'value' => $subak->kecukupan_kemarau, 'icon' => 'fa-sun', 'isBadge' => true],
                                ['label' => 'Kecukupan Hujan', 'value' => $subak->kecukupan_hujan, 'icon' => 'fa-cloud-showers-heavy', 'isBadge' => true],
                                ['label' => 'Pembagian Air', 'value' => $subak->sistem_pembagian_air, 'icon' => 'fa-diagram-project'],
                                ['label' => 'Tembuku Arya', 'value' => $subak->kondisi_tembuku_arya, 'icon' => 'fa-bridge', 'isBadge' => true],
                                ['label' => 'Tembuku Gede', 'value' => $subak->kondisi_tembuku_gede, 'icon' => 'fa-bridge', 'isBadge' => true],
                            ];
                        ?>

                        <?php $__currentLoopData = $irigasiData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item['value']): ?>
                        <div class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-2xl flex items-center justify-center text-green-medium">
                                    <i class="fa-solid <?php echo e($item['icon']); ?> text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-0.5"><?php echo e($item['label']); ?></p>
                                    <?php if(isset($item['isBadge'])): ?>
                                        <?php
                                            $badgeClass = match($item['value']) {
                                                'Baik', 'Cukup Baik', 'Tercukupi' => 'bg-green-100 text-green-700',
                                                'Rusak', 'Kurang' => 'bg-red-100 text-red-700',
                                                default => 'bg-blue-100 text-blue-700'
                                            };
                                        ?>
                                        <span class="inline-block px-3 py-1 rounded-full text-[10px] font-bold uppercase <?php echo e($badgeClass); ?>"><?php echo e($item['value']); ?></span>
                                    <?php else: ?>
                                        <p class="text-sm font-bold text-green-dark"><?php echo e($item['value']); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- TAB: PERTANIAN -->
                    <div x-show="activeTab === 'pertanian'" x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php
                            $pertanianData = [
                                ['label' => 'Pola Tanam', 'value' => $subak->pola_tanam, 'icon' => 'fa-seedling'],
                                ['label' => 'Intensitas Tanam', 'value' => $subak->intensitas_tanam, 'icon' => 'fa-rotate'],
                                ['label' => 'Produktivitas', 'value' => $subak->produktivitas_padi, 'icon' => 'fa-chart-line'],
                                ['label' => 'Varietas Padi', 'value' => $subak->varietas, 'icon' => 'fa-leaf'],
                                ['label' => 'Alih Fungsi 1th', 'value' => $subak->alih_fungsi_1_tahun, 'icon' => 'fa-calendar-day'],
                            ];
                        ?>

                        <?php $__currentLoopData = $pertanianData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item['value']): ?>
                        <div class="bg-white p-6 rounded-3xl shadow-sm hover:shadow-md transition-shadow">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-2xl flex items-center justify-center text-brown">
                                    <i class="fa-solid <?php echo e($item['icon']); ?> text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-0.5"><?php echo e($item['label']); ?></p>
                                    <p class="text-sm font-bold text-green-dark"><?php echo e($item['value']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- TAB: GALERI -->
                    <div x-show="activeTab === 'galeri'" x-transition:enter="transition ease-out duration-500 transform opacity-0" class="space-y-6">
                        <?php if($subak->foto_url): ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="group relative aspect-video rounded-[2rem] overflow-hidden shadow-xl">
                                    <img src="<?php echo e($subak->foto_url); ?>" alt="<?php echo e($subak->nama); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-green-dark/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="border-4 border-dashed border-gray-100 bg-white rounded-[3rem] p-20 text-center">
                                <i class="fa-solid fa-cloud-arrow-up text-6xl text-gray-200 mb-6 block"></i>
                                <h4 class="text-xl font-bold text-gray-400">Belum Ada Foto</h4>
                                <p class="text-gray-300 text-sm">Dokumentasi subak akan segera diperbarui oleh pengelola.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Navigation Bottom -->
                <div class="flex items-center justify-between border-t border-gray-200 pt-10">
                    <?php if($prevSubak): ?>
                        <a href="<?php echo e(route('subak.show', $prevSubak->slug)); ?>" class="flex items-center group">
                            <div class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-green-medium group-hover:text-white group-hover:border-green-medium transition-all">
                                <i class="fa-solid fa-chevron-left text-xs"></i>
                            </div>
                            <div class="ml-4 text-left hidden sm:block">
                                <p class="text-[10px] uppercase font-bold text-gray-400 tracking-tighter">Sebelumnya</p>
                                <p class="text-sm font-bold text-green-dark"><?php echo e($prevSubak->nama); ?></p>
                            </div>
                        </a>
                    <?php else: ?>
                        <div></div>
                    <?php endif; ?>

                    <a href="<?php echo e(route('subak.index')); ?>" class="px-8 py-3 bg-white rounded-full text-xs font-bold uppercase tracking-widest text-green-medium hover:bg-green-medium hover:text-white transition-all shadow-sm">
                        Data Subak
                    </a>

                    <?php if($nextSubak): ?>
                        <a href="<?php echo e(route('subak.show', $nextSubak->slug)); ?>" class="flex items-center group">
                            <div class="mr-4 text-right hidden sm:block">
                                <p class="text-[10px] uppercase font-bold text-gray-400 tracking-tighter">Berikutnya</p>
                                <p class="text-sm font-bold text-green-dark"><?php echo e($nextSubak->nama); ?></p>
                            </div>
                            <div class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-green-medium group-hover:text-white group-hover:border-green-medium transition-all">
                                <i class="fa-solid fa-chevron-right text-xs"></i>
                            </div>
                        </a>
                    <?php else: ?>
                        <div></div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar (Right) -->
            <div class="lg:col-span-4 space-y-8">
                <!-- Info Overview Card -->
                <div class="bg-green-dark rounded-[2.5rem] p-8 text-white shadow-2xl shadow-green-900/40 relative overflow-hidden group">
                    <div class="absolute -right-10 -bottom-10 opacity-10 rotate-12 transition-transform duration-1000 group-hover:rotate-0">
                        <i class="fa-solid fa-seedling text-[12rem]"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-8 relative z-10">Ringkasan Data</h3>
                    <div class="space-y-6 relative z-10">
                        <div class="flex items-center justify-between border-b border-white/10 pb-4">
                            <div class="flex items-center">
                                <i class="fa-solid fa-map-pin w-8 text-green-pale"></i>
                                <span class="text-sm font-medium opacity-70">Desa</span>
                            </div>
                            <span class="text-sm font-bold"><?php echo e($subak->desa); ?></span>
                        </div>
                        <div class="flex items-center justify-between border-b border-white/10 pb-4">
                            <div class="flex items-center">
                                <i class="fa-solid fa-building w-8 text-green-pale"></i>
                                <span class="text-sm font-medium opacity-70">Kecamatan</span>
                            </div>
                            <span class="text-sm font-bold"><?php echo e($subak->kecamatan); ?></span>
                        </div>
                        <div class="flex items-center justify-between border-b border-white/10 pb-4">
                            <div class="flex items-center">
                                <i class="fa-solid fa-chart-area w-8 text-green-pale"></i>
                                <span class="text-sm font-medium opacity-70">Luas Lahan</span>
                            </div>
                            <span class="text-sm font-bold"><?php echo e($subak->luas_subak); ?></span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fa-solid fa-users w-8 text-green-pale"></i>
                                <span class="text-sm font-medium opacity-70">Anggota</span>
                            </div>
                            <span class="text-sm font-bold"><?php echo e($subak->jumlah_anggota); ?> Orang</span>
                        </div>
                    </div>
                </div>

                <!-- Pekaseh Contact Card -->
                <div class="bg-white rounded-[2.5rem] p-8 shadow-sm text-center">
                    <div class="w-20 h-20 rounded-2xl flex items-center justify-center text-green-medium text-3xl font-bold mx-auto mb-6">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-2">Kontak Pekaseh</p>
                    <h4 class="text-xl font-bold text-green-dark mb-1"><?php echo e($subak->nama_pekaseh ?? 'Nama Tidak Ada'); ?></h4>
                    <p class="text-gray-500 text-sm mb-8">Pimpinan Organisasi Subak</p>
                    
                    <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $subak->no_telp)); ?>" target="_blank" class="block w-full bg-green-bg text-green-dark py-4 rounded-2xl font-bold text-sm hover:bg-green-medium hover:text-white transition-all shadow-sm">
                        <i class="fa-brands fa-whatsapp text-lg mr-2"></i> Kirim Pesan
                    </a>
                </div>

                <!-- Info Tip Card -->
                <div class="bg-cream rounded-[2.5rem] p-8 flex flex-col items-center text-center">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-green-medium shadow-sm mb-4">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h5 class="text-sm font-bold text-green-dark mb-2">Tahukah Anda?</h5>
                    <p class="text-xs text-gray-600 leading-relaxed">
                        Sistem Subak telah diakui UNESCO sebagai Warisan Budaya Dunia karena mencerminkan filosofi Tri Hita Karana.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Downloads\Kimi_Agent_Subak Bali 网站开发\subak-bali\resources\views/pages/subak/show.blade.php ENDPATH**/ ?>