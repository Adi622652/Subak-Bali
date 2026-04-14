<?php $__env->startSection('title', 'Edit Data Subak'); ?>

<?php $__env->startSection('breadcrumb', 'Edit Subak'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-5xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-green-dark">Edit Data Subak</h1>
        <a href="<?php echo e(route('admin.subak.index')); ?>" class="text-gray-600 hover:text-green-medium transition-colors">
            &larr; Kembali
        </a>
    </div>
    
    <!-- Form -->
    <form action="<?php echo e(route('admin.subak.update', $subak->id)); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <!-- Informasi Dasar -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-green-medium text-white px-6 py-4">
                <h2 class="text-lg font-bold">Informasi Dasar</h2>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Subak <span class="text-red-500">*</span></label>
                    <input type="text" name="nama" id="nama" required value="<?php echo e(old('nama', $subak->nama)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div>
                    <label for="kabupaten" class="block text-sm font-medium text-gray-700 mb-1">Kabupaten <span class="text-red-500">*</span></label>
                    <select name="kabupaten" id="kabupaten" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium <?php $__errorArgs = ['kabupaten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <option value="">Pilih Kabupaten</option>
                        <?php $__currentLoopData = $kabupatens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kab); ?>" <?php echo e(old('kabupaten', $subak->kabupaten) == $kab ? 'selected' : ''); ?>><?php echo e($kab); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['kabupaten'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div>
                    <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-1">Kecamatan <span class="text-red-500">*</span></label>
                    <input type="text" name="kecamatan" id="kecamatan" required value="<?php echo e(old('kecamatan', $subak->kecamatan)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium <?php $__errorArgs = ['kecamatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['kecamatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div>
                    <label for="desa" class="block text-sm font-medium text-gray-700 mb-1">Desa <span class="text-red-500">*</span></label>
                    <input type="text" name="desa" id="desa" required value="<?php echo e(old('desa', $subak->desa)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium <?php $__errorArgs = ['desa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['desa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div>
                    <label for="luas_subak" class="block text-sm font-medium text-gray-700 mb-1">Luas Subak <span class="text-red-500">*</span></label>
                    <input type="text" name="luas_subak" id="luas_subak" required value="<?php echo e(old('luas_subak', $subak->luas_subak)); ?>" placeholder="contoh: 50 Hektar" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium <?php $__errorArgs = ['luas_subak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['luas_subak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div>
                    <label for="jumlah_anggota" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Anggota/Krama</label>
                    <input type="text" name="jumlah_anggota" id="jumlah_anggota" value="<?php echo e(old('jumlah_anggota', $subak->jumlah_anggota)); ?>" placeholder="contoh: 120 Orang" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="nama_pekaseh" class="block text-sm font-medium text-gray-700 mb-1">Nama Pekaseh</label>
                    <input type="text" name="nama_pekaseh" id="nama_pekaseh" value="<?php echo e(old('nama_pekaseh', $subak->nama_pekaseh)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-1">No. Telp/WA</label>
                    <input type="text" name="no_telp" id="no_telp" value="<?php echo e(old('no_telp', $subak->no_telp)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
            </div>
        </div>
        
        <!-- Batas Wilayah -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-green-dark text-white px-6 py-4">
                <h2 class="text-lg font-bold">Batas Wilayah</h2>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="batas_timur" class="block text-sm font-medium text-gray-700 mb-1">Batas Timur</label>
                    <input type="text" name="batas_timur" id="batas_timur" value="<?php echo e(old('batas_timur', $subak->batas_timur)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                <div>
                    <label for="batas_barat" class="block text-sm font-medium text-gray-700 mb-1">Batas Barat</label>
                    <input type="text" name="batas_barat" id="batas_barat" value="<?php echo e(old('batas_barat', $subak->batas_barat)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                <div>
                    <label for="batas_utara" class="block text-sm font-medium text-gray-700 mb-1">Batas Utara</label>
                    <input type="text" name="batas_utara" id="batas_utara" value="<?php echo e(old('batas_utara', $subak->batas_utara)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                <div>
                    <label for="batas_selatan" class="block text-sm font-medium text-gray-700 mb-1">Batas Selatan</label>
                    <input type="text" name="batas_selatan" id="batas_selatan" value="<?php echo e(old('batas_selatan', $subak->batas_selatan)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
            </div>
        </div>
        
        <!-- Data Irigasi -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-green-light text-white px-6 py-4">
                <h2 class="text-lg font-bold">Data Irigasi</h2>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="sumber_air" class="block text-sm font-medium text-gray-700 mb-1">Sumber Air Irigasi</label>
                    <input type="text" name="sumber_air" id="sumber_air" value="<?php echo e(old('sumber_air', $subak->sumber_air)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="kecukupan_kemarau" class="block text-sm font-medium text-gray-700 mb-1">Kecukupan Air Musim Kemarau</label>
                    <select name="kecukupan_kemarau" id="kecukupan_kemarau" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        <option value="">Pilih</option>
                        <?php $__currentLoopData = $kecukupanOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($opt); ?>" <?php echo e(old('kecukupan_kemarau', $subak->kecukupan_kemarau) == $opt ? 'selected' : ''); ?>><?php echo e($opt); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div>
                    <label for="kecukupan_hujan" class="block text-sm font-medium text-gray-700 mb-1">Kecukupan Air Musim Hujan</label>
                    <select name="kecukupan_hujan" id="kecukupan_hujan" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        <option value="">Pilih</option>
                        <?php $__currentLoopData = $kecukupanOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($opt); ?>" <?php echo e(old('kecukupan_hujan', $subak->kecukupan_hujan) == $opt ? 'selected' : ''); ?>><?php echo e($opt); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div>
                    <label for="sistem_pembagian_air" class="block text-sm font-medium text-gray-700 mb-1">Sistem Pembagian Air</label>
                    <input type="text" name="sistem_pembagian_air" id="sistem_pembagian_air" value="<?php echo e(old('sistem_pembagian_air', $subak->sistem_pembagian_air)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div class="md:col-span-2">
                    <label for="solusi_kekurangan_air" class="block text-sm font-medium text-gray-700 mb-1">Solusi Kekurangan Air</label>
                    <textarea name="solusi_kekurangan_air" id="solusi_kekurangan_air" rows="2" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium"><?php echo e(old('solusi_kekurangan_air', $subak->solusi_kekurangan_air)); ?></textarea>
                </div>
                
                <div>
                    <label for="panjang_saluran_primer" class="block text-sm font-medium text-gray-700 mb-1">Panjang Saluran Primer</label>
                    <input type="text" name="panjang_saluran_primer" id="panjang_saluran_primer" value="<?php echo e(old('panjang_saluran_primer', $subak->panjang_saluran_primer)); ?>" placeholder="contoh: 2 Km" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="panjang_saluran_sekunder" class="block text-sm font-medium text-gray-700 mb-1">Panjang Saluran Sekunder</label>
                    <input type="text" name="panjang_saluran_sekunder" id="panjang_saluran_sekunder" value="<?php echo e(old('panjang_saluran_sekunder', $subak->panjang_saluran_sekunder)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="panjang_saluran_tersier" class="block text-sm font-medium text-gray-700 mb-1">Panjang Saluran Tersier</label>
                    <input type="text" name="panjang_saluran_tersier" id="panjang_saluran_tersier" value="<?php echo e(old('panjang_saluran_tersier', $subak->panjang_saluran_tersier)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="kondisi_permanen" class="block text-sm font-medium text-gray-700 mb-1">Kondisi Saluran Permanen</label>
                    <input type="text" name="kondisi_permanen" id="kondisi_permanen" value="<?php echo e(old('kondisi_permanen', $subak->kondisi_permanen)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="kondisi_tidak_permanen" class="block text-sm font-medium text-gray-700 mb-1">Kondisi Saluran Tidak Permanen</label>
                    <input type="text" name="kondisi_tidak_permanen" id="kondisi_tidak_permanen" value="<?php echo e(old('kondisi_tidak_permanen', $subak->kondisi_tidak_permanen)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="kondisi_tembuku_arya" class="block text-sm font-medium text-gray-700 mb-1">Kondisi Tembuku Arya</label>
                    <select name="kondisi_tembuku_arya" id="kondisi_tembuku_arya" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        <option value="">Pilih</option>
                        <?php $__currentLoopData = $kondisiOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($opt); ?>" <?php echo e(old('kondisi_tembuku_arya', $subak->kondisi_tembuku_arya) == $opt ? 'selected' : ''); ?>><?php echo e($opt); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div>
                    <label for="kondisi_tembuku_gede" class="block text-sm font-medium text-gray-700 mb-1">Kondisi Tembuku Gede</label>
                    <select name="kondisi_tembuku_gede" id="kondisi_tembuku_gede" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        <option value="">Pilih</option>
                        <?php $__currentLoopData = $kondisiOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($opt); ?>" <?php echo e(old('kondisi_tembuku_gede', $subak->kondisi_tembuku_gede) == $opt ? 'selected' : ''); ?>><?php echo e($opt); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div>
                    <label for="kondisi_tembuku_pemaron" class="block text-sm font-medium text-gray-700 mb-1">Kondisi Tembuku Pemaron</label>
                    <select name="kondisi_tembuku_pemaron" id="kondisi_tembuku_pemaron" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                        <option value="">Pilih</option>
                        <?php $__currentLoopData = $kondisiOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($opt); ?>" <?php echo e(old('kondisi_tembuku_pemaron', $subak->kondisi_tembuku_pemaron) == $opt ? 'selected' : ''); ?>><?php echo e($opt); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div>
                    <label for="keberadaan_sampah" class="block text-sm font-medium text-gray-700 mb-1">Keberadaan Sampah</label>
                    <input type="text" name="keberadaan_sampah" id="keberadaan_sampah" value="<?php echo e(old('keberadaan_sampah', $subak->keberadaan_sampah)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="pencemaran_ternak" class="block text-sm font-medium text-gray-700 mb-1">Pencemaran Limbah Ternak</label>
                    <input type="text" name="pencemaran_ternak" id="pencemaran_ternak" value="<?php echo e(old('pencemaran_ternak', $subak->pencemaran_ternak)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="pencemaran_industri" class="block text-sm font-medium text-gray-700 mb-1">Pencemaran Limbah Industri</label>
                    <input type="text" name="pencemaran_industri" id="pencemaran_industri" value="<?php echo e(old('pencemaran_industri', $subak->pencemaran_industri)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="penggunaan_non_pertanian" class="block text-sm font-medium text-gray-700 mb-1">Penggunaan Air Non-Pertanian</label>
                    <input type="text" name="penggunaan_non_pertanian" id="penggunaan_non_pertanian" value="<?php echo e(old('penggunaan_non_pertanian', $subak->penggunaan_non_pertanian)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
            </div>
        </div>
        
        <!-- Data Pertanian -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-brown text-white px-6 py-4">
                <h2 class="text-lg font-bold">Data Pertanian</h2>
            </div>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="pola_tanam" class="block text-sm font-medium text-gray-700 mb-1">Pola Tanam</label>
                    <input type="text" name="pola_tanam" id="pola_tanam" value="<?php echo e(old('pola_tanam', $subak->pola_tanam)); ?>" placeholder="contoh: Padi-Padi" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="intensitas_tanam" class="block text-sm font-medium text-gray-700 mb-1">Intensitas Tanam</label>
                    <input type="text" name="intensitas_tanam" id="intensitas_tanam" value="<?php echo e(old('intensitas_tanam', $subak->intensitas_tanam)); ?>" placeholder="contoh: 2 kali tanam dalam 1 tahun" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="alih_fungsi_1_tahun" class="block text-sm font-medium text-gray-700 mb-1">Alih Fungsi Lahan (1 Tahun)</label>
                    <input type="text" name="alih_fungsi_1_tahun" id="alih_fungsi_1_tahun" value="<?php echo e(old('alih_fungsi_1_tahun', $subak->alih_fungsi_1_tahun)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="peruntukan_1_tahun" class="block text-sm font-medium text-gray-700 mb-1">Peruntukan (1 Tahun)</label>
                    <input type="text" name="peruntukan_1_tahun" id="peruntukan_1_tahun" value="<?php echo e(old('peruntukan_1_tahun', $subak->peruntukan_1_tahun)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="alih_fungsi_5_tahun" class="block text-sm font-medium text-gray-700 mb-1">Alih Fungsi Lahan (5 Tahun)</label>
                    <input type="text" name="alih_fungsi_5_tahun" id="alih_fungsi_5_tahun" value="<?php echo e(old('alih_fungsi_5_tahun', $subak->alih_fungsi_5_tahun)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="peruntukan_5_tahun" class="block text-sm font-medium text-gray-700 mb-1">Peruntukan (5 Tahun)</label>
                    <input type="text" name="peruntukan_5_tahun" id="peruntukan_5_tahun" value="<?php echo e(old('peruntukan_5_tahun', $subak->peruntukan_5_tahun)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="produktivitas_padi" class="block text-sm font-medium text-gray-700 mb-1">Produktivitas Padi</label>
                    <input type="text" name="produktivitas_padi" id="produktivitas_padi" value="<?php echo e(old('produktivitas_padi', $subak->produktivitas_padi)); ?>" placeholder="contoh: 5.8 Ton/Hektar" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div>
                    <label for="varietas" class="block text-sm font-medium text-gray-700 mb-1">Varietas</label>
                    <input type="text" name="varietas" id="varietas" value="<?php echo e(old('varietas', $subak->varietas)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
                
                <div class="md:col-span-2">
                    <label for="diversifikasi_tanaman" class="block text-sm font-medium text-gray-700 mb-1">Diversifikasi Tanaman</label>
                    <input type="text" name="diversifikasi_tanaman" id="diversifikasi_tanaman" value="<?php echo e(old('diversifikasi_tanaman', $subak->diversifikasi_tanaman)); ?>" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium">
                </div>
            </div>
        </div>
        
        <!-- Foto Subak -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="bg-gray-700 text-white px-6 py-4">
                <h2 class="text-lg font-bold">Foto Subak</h2>
            </div>
            <div class="p-6">
                <?php if($subak->foto_url): ?>
                <div class="mb-4">
                    <p class="text-sm font-medium text-gray-700 mb-2">Foto Saat Ini:</p>
                    <img src="<?php echo e($subak->foto_url); ?>" alt="<?php echo e($subak->nama); ?>" class="max-w-xs rounded-lg shadow-sm">
                </div>
                <?php endif; ?>
                
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700 mb-1"><?php echo e($subak->foto_url ? 'Ganti Foto' : 'Upload Foto'); ?></label>
                    <input type="file" name="foto" id="foto" accept="image/*" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-green-medium focus:ring-1 focus:ring-green-medium <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <p class="text-gray-500 text-xs mt-1">Format: JPG, JPEG, PNG, WebP. Maksimal 2MB.</p>
                    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <!-- Image Preview -->
                <div id="image-preview-container" class="mt-4 hidden">
                    <p class="text-sm font-medium text-gray-700 mb-2">Preview Baru:</p>
                    <img id="image-preview" src="" alt="Preview" class="max-w-xs rounded-lg shadow-sm">
                </div>
            </div>
        </div>
        
        <!-- Buttons -->
        <div class="flex items-center justify-end space-x-4">
            <a href="<?php echo e(route('admin.subak.index')); ?>" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">
                Batal
            </a>
            <button type="submit" class="px-6 py-3 bg-green-medium text-white rounded-lg font-medium hover:bg-green-dark transition-colors">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
    // Image preview
    document.getElementById('foto').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('image-preview').src = e.target.result;
                document.getElementById('image-preview-container').classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    });
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\Downloads\Kimi_Agent_Subak Bali 网站开发\subak-bali\resources\views/admin/subak/edit.blade.php ENDPATH**/ ?>