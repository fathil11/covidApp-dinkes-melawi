<table>
    <thead>
        <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
            <th><b>Umur</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>Kecamatan</b></th>
            <th><b>Desa</b></th>
            <th><b>Dusun</b></th>
            <th><b>Nomor HP</b></th>
            <th><b>Berkunjung Dari</b></th>
            <th><b>Kendaraan</b></th>
            <th><b>Waktu Masuk</b></th>
            <th><b>Gejala</b></th>
            <th><b>Status</b></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td><?php echo e($person->name); ?></td>
            <td><?php echo e($person->age); ?></td>
            <td><?php echo e(($person->gender == 'm') ? 'Laki-Laki' : 'Perempuan'); ?></td>
            <td><?php echo e($person->district); ?></td>
            <td><?php echo e($person->village); ?></td>
            <td><?php echo e($person->sub_village); ?></td>
            <td><?php echo e($person->phone); ?></td>
            <td><?php echo e($person->track); ?></td>
            <td><?php echo e($person->vehicle); ?></td>
            <td><?php echo e(Carbon::create($person->created_at->toDateTimeString())->locale('id')); ?></td>
            <td><?php echo e($person->phenomenon); ?></td>
            <td><?php echo e($person->status); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/exports/laporanHarianInternal.blade.php ENDPATH**/ ?>