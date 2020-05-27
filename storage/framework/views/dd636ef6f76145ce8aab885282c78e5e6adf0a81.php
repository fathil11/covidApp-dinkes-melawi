<?php $__env->startSection('title', 'Kelola Peta'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php elseif(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Peta</h4>
                        <p class="card-category">Update peta COVID-19 Melawi</p>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('admin/peta')); ?>" method="post" autocomplete="off"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="row mb-4 mt-3">
                                <div class="col-md-12">
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <input type="file" name="map" multiple="" class="inputFileHidden"
                                            accept="image/*">
                                        <div class=" input-group">
                                            <input type="text" class="form-control inputFileVisible"
                                                placeholder="Single File">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-fab btn-round btn-info"
                                                    id="btnFile">
                                                    <i class="material-icons">attach_file</i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-block mt-4">Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $('#btnFile').click(function() {
    $('.inputFileHidden').trigger('click');
    });

    $('.form-file-upload .inputFileVisible').click(function() {
    $('.inputFileHidden').trigger('click');
    });

    $('.form-file-upload .inputFileHidden').change(function() {
    var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
    $('.inputFileVisible').val(filename);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/admin/map.blade.php ENDPATH**/ ?>