<?php $__env->startSection('title', 'Kelola Post'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Post</h4>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr class="text-primary text-center">
                            <th>#</th>
                            <th>Judul</th>
                            <th>Banner</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="text-center">
                            <td class="font-weight-bold"><?php echo e(($key+1)); ?></td>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->banner); ?></td>
                            <td><?php echo e($post->created_at); ?></td>
                            <td>
                                <button type="button" class="btn btn-gradient-warning btn-rounded btn-icon">
                                    <i class="mdi mdi-lead-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-gradient-danger btn-rounded btn-icon">
                                    <i class="mdi mdi-delete-forever"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.post-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/e/Web/dinkes-melawi-corona/resources/views/post-admin/posts.blade.php ENDPATH**/ ?>