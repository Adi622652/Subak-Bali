<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('breadcrumb', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<!-- Stat Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Subak -->
    <div class="bg-green-bg rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm mb-1">Total Subak</p>
                <p class="text-3xl font-bold text-green-dark"><?php echo e($totalSubaks); ?></p>
            </div>
            <div class="w-12 h-12 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-earth-asia text-xl text-green-medium"></i>
            </div>
        </div>
    </div>
    
    <!-- Total Kabupaten -->
    <div class="bg-yellow-50 rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm mb-1">Total Kabupaten</p>
                <p class="text-3xl font-bold text-yellow-700"><?php echo e($totalKabupaten); ?></p>
            </div>
            <div class="w-12 h-12 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-map-location-dot text-xl text-yellow-600"></i>
            </div>
        </div>
    </div>
    
    <!-- Subak with Foto -->
    <div class="bg-blue-50 rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm mb-1">Subak dengan Foto</p>
                <p class="text-3xl font-bold text-blue-700"><?php echo e($subakWithFoto); ?></p>
            </div>
            <div class="w-12 h-12 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-camera text-xl text-blue-600"></i>
            </div>
        </div>
    </div>
    
    <!-- Subak without Foto -->
    <div class="bg-red-50 rounded-xl p-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm mb-1">Subak tanpa Foto</p>
                <p class="text-3xl font-bold text-red-700"><?php echo e($subakWithoutFoto); ?></p>
            </div>
            <div class="w-12 h-12 rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-triangle-exclamation text-xl text-red-600"></i>
            </div>
        </div>
    </div>
</div>

<!-- Latest Subaks Table -->
<div class="bg-white rounded-xl shadow-sm">
    <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
        <h2 class="text-lg font-bold text-green-dark">10 Data Subak Terbaru</h2>
        <a href="<?php echo e(route('admin.subak.index')); ?>" class="text-green-medium hover:text-green-dark text-sm font-medium">Lihat Semua &rarr;</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Subak</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kabupaten</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Luas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Anggota</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php $__currentLoopData = $latestSubaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $subak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-cream transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo e($index + 1); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-dark"><?php echo e($subak->nama); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo e($subak->kabupaten); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo e($subak->luas_subak); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?php echo e($subak->jumlah_anggota ?? '-'); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex items-center space-x-2">
                            <a href="<?php echo e(route('admin.subak.edit', $subak->id)); ?>" class="text-blue-600 hover:text-blue-800" title="Edit">
                                <i class="fa-solid fa-pen-to-square text-lg"></i>
                            </a>
                            <form action="<?php echo e(route('admin.subak.destroy', $subak->id)); ?>" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus subak ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:text-red-800" title="Hapus">
                                    <i class="fa-solid fa-trash-can text-lg"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Downloads\Kimi_Agent_Subak Bali 网站开发\subak-bali\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>