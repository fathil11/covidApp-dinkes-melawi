<?php $__env->startSection('title', 'Tambah Orang'); ?>
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
                        <h4 class="card-title">Menu Manual</h4>
                        <p class="card-category">Entri data COVID-19 manual</p>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('admin/manual')); ?>" method="post" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>
                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>OTG</h5>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Belum Tes</label>
                                        <input name="otg_pre" value="<?php echo e($manual->otg_pre); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Menunggu Hasil</label>
                                        <input name="otg_waiting" value="<?php echo e($manual->otg_waiting); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Negatif</label>
                                        <input name="otg_negative" value="<?php echo e($manual->otg_negative); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Positif</label>
                                        <input name="otg_positive" value="<?php echo e($manual->otg_positive); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>Reaktif</h5>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Belum Tes</label>
                                        <input name="reactive_pre" value="<?php echo e($manual->reactive_pre); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Menunggu Hasil</label>
                                        <input name="reactive_waiting" value="<?php echo e($manual->reactive_waiting); ?>"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Negatif</label>
                                        <input name="reactive_negative" value="<?php echo e($manual->reactive_negative); ?>"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Positif</label>
                                        <input name="reactive_positive" value="<?php echo e($manual->reactive_positive); ?>"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>PDP</h5>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Dirawat</label>
                                        <input name="pdp_process" value="<?php echo e($manual->pdp_process); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Meninggal ?</label>
                                        <input name="pdp_died_unknown" value="<?php echo e($manual->pdp_died_unknown); ?>"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Negatif</label>
                                        <input name="pdp_negative" value="<?php echo e($manual->pdp_negative); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Positif</label>
                                        <input name="pdp_positive" value="<?php echo e($manual->pdp_positive); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>Lainnya</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sembuh</label>
                                        <input name="healed" value="<?php echo e($manual->healed); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Meninggal Positif</label>
                                        <input name="died_positive" value="<?php echo e($manual->died_positive); ?>" type="number"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info btn-block mt-4">Simpan</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/admin/manual.blade.php ENDPATH**/ ?>