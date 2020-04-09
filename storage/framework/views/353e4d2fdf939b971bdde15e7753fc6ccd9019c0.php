<?php $__env->startSection('title', 'Kelola Post'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <?php if($errors->any()): ?>
    <div class="col-md-12 mb-2" id="msg" style="transition:.5s ease-in-out !important;">
        <div class="card">
            <div class="card-body">
                <span class="align-items-center">
                    <h3 class="text-danger">Ada kesalahan !</h3>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <p class="text-danger"><?php echo e($error); ?></p>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </span>
            </div>
        </div>
    </div>
    <?php elseif(session('success')): ?>
    <div class="col-md-12 mb-2" id="msg" style="transition:.5s ease-in-out !important;">
        <div class="card">
            <div class="card-body">
                <span class="align-items-center">
                    <h3 class="text-success"><?php echo e(session('success')); ?></h3>
                </span>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Post</h4>
                <table class="table table-hover">
                    <thead>
                        <tr class="text-primary text-center">
                            <th>#</th>
                            <th>Judul</th>
                            <th>Tanggal Dibuat</th>
                            <th>Terakhir Diubah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="text-center">
                            <td class="font-weight-bold"><?php echo e(($key+1)); ?></td>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->created_at); ?></td>
                            <td><?php echo e($post->updated_at); ?></td>
                            <td>
                                <form action="/admin/content/post/<?php echo e($post->id); ?>/edit" method="GET">
                                    <button type="submit" class="btn btn-gradient-warning btn-rounded btn-icon">
                                        <i class="mdi mdi-lead-pencil"></i>
                                    </button>
                                </form>
                                <form action="/admin/content/post/<?php echo e($post->id); ?>/delete" method="GET">
                                    <button class="btn btn-gradient-danger btn-rounded btn-icon">
                                        <i class="mdi mdi-delete-forever"></i>
                                    </button>
                                </form>
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