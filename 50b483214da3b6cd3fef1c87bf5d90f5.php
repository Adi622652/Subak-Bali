<?php $__env->startSection('title', 'Data Subak Bali'); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<section class="relative min-h-[280px] flex items-end pb-8">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=1920" alt="Sawah Bali" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-green-dark/75"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">Data Subak Bali</h1>
        <nav class="text-white/70 text-sm">
            <a href="<?php echo e(route('home')); ?>" class="hover:text-white">Beranda</a>
            <span class="mx-2">&gt;</span>
            <span class="text-white">Data Subak</span>
        </nav>
    </div>
</section>

<!-- Filter Bar -->
<section class="bg-white shadow-sm sticky top-20 z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <form action="<?php echo e(route('subak.index')); ?>" method="GET" class="flex flex-col md:flex-row md:items-center gap-4">
            <!-- Kabupaten Filter -->
            <div class="md:w-48">
                <select name="kabupaten" class="w-full border border-green-pale rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                    <option value="">Semua Kabupaten</option>
                    <?php $__currentLoopData = $kabupatens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kab); ?>" <?php echo e($kabupaten == $kab ? 'selected' : ''); ?>><?php echo e($kab); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <!-- Search Input -->
            <div class="flex-1 relative">
                <input type="text" name="search" value="<?php echo e($search); ?>" placeholder="Cari nama subak..." class="w-full border border-green-pale rounded-lg px-4 py-2 pr-10 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-green-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
            
            <!-- Result Count -->
            <div class="text-gray-600 text-sm whitespace-nowrap">
                Menampilkan <?php echo e($subaks->total()); ?> subak
            </div>
        </form>
    </div>
</section>

<!-- Subak Grid -->
<section class="bg-cream py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if($subaks->count() > 0): ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php $__currentLoopData = $subaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative aspect-square rounded-2xl overflow-hidden cursor-pointer">
                    <!-- Background Image or Gradient -->
                    <?php if($subak->foto_url): ?>
                        <img src="<?php echo e($subak->foto_url); ?>" alt="<?php echo e($subak->nama); ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                    <?php else: ?>
                        <div class="w-full h-full bg-gradient-to-b from-green-dark to-green-light relative">
                            <!-- Pattern Overlay -->
                            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                            <!-- Icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-20 h-20 text-white/30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,21,5,14,5.25,9,6.25S2,11.5,2,13.5a6.22,6.22,0,0,0,1.75,3.75C7,13,11,9,17,8Z"/>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Default Overlay (Bottom Gradient) -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    
                    <!-- Kabupaten Badge -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-dark/90 text-white text-xs font-medium px-3 py-1 rounded-full"><?php echo e($subak->kabupaten); ?></span>
                    </div>
                    
                    <!-- Default Content (Bottom) -->
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-white font-bold text-lg"><?php echo e($subak->nama); ?></h3>
                    </div>
                    
                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 bg-green-dark/85 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <div class="text-center text-white p-4 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-xl font-bold mb-1"><?php echo e($subak->nama); ?></h3>
                            <p class="text-white/80 text-sm mb-1"><?php echo e($subak->kecamatan); ?>, <?php echo e($subak->kabupaten); ?></p>
                            <p class="text-white/80 text-sm mb-1"><?php echo e($subak->luas_subak); ?></p>
                            <p class="text-white/80 text-sm mb-4"><?php echo e($subak->jumlah_anggota); ?></p>
                            <a href="<?php echo e(route('subak.show', $subak->slug)); ?>" class="inline-block border-2 border-white text-white px-6 py-2 rounded-full font-medium hover:bg-white hover:text-green-dark transition-colors">
                                Lihat Detail &rarr;
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <!-- Pagination -->
            <div class="mt-12">
                <?php echo e($subaks->links()); ?>

            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="text-center py-16">
                <svg class="w-20 h-20 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Tidak ada data subak</h3>
                <p class="text-gray-500">Coba ubah filter atau kata kunci pencarian Anda</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Downloads\Kimi_Agent_Subak Bali 网站开发\subak-bali\resources\views/pages/subak/index.blade.php ENDPATH**/ ?>