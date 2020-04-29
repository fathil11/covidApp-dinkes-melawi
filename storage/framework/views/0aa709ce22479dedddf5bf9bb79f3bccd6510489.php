<?php $__env->startSection('title', 'Edit Orang'); ?>
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
                        <h4 class="card-title">Edit Orang</h4>
                        <p class="card-category">Mengubah data orang</p>
                    </div>
                    <div class="card-body">
                        <form action="/admin/orang/<?php echo e($person->id); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="row mb-4 mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama</label>
                                        <input name="name" value="<?php echo e($person->name); ?>" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Umur</label>
                                        <input name="age" value="<?php echo e($person->age); ?>" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group bmd-form-group">
                                        <div class="row">
                                            <div class="col-md-3 position-relative">
                                                <label class="bmd-label-floating d-md-none">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-9 position-relative">
                                                <div class="form-check form-check-radio form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            <?php echo e($person->gender == "Laki-Laki" ? 'checked' : ''); ?>

                                                            id="inlineRadio1" value="m">
                                                        Laki-Laki
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            <?php echo e($person->gender == "Perempuan" ? 'checked' : ''); ?>

                                                            id="inlineRadio2" value="f">
                                                        Perempuan
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alamat</label>
                                        <input name="address" value="<?php echo e($person->address); ?>" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kecamatan</label>
                                        <input name="district" value="<?php echo e($person->district); ?>" id="district" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <h3>Status</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row justify-content-center mb-2">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Pengawasan" ? 'checked' : ''); ?>

                                                                        id="inlineRadio1" value="0">
                                                                    ODP
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Aman" ? 'checked' : ''); ?>

                                                                        id="inlineRadio1" value="1">
                                                                    Selesai Pengawasan (Aman)
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center mb-2">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "OTG" ? 'checked' : ''); ?>

                                                                        id="inlineRadio1" value="11">
                                                                    OTG
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center mb-2">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Dirawat" ? 'checked' : ''); ?>

                                                                        id="inlineRadio2" value="2">
                                                                    PDP
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Negatif" ? 'checked' : ''); ?>

                                                                        id="inlineRadio2" value="3">
                                                                    Negatif (Pulang)
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Positif" ? 'checked' : ''); ?>

                                                                        id="inlineRadio2" value="5">
                                                                    Terkonfirmasi
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Sembuh" ? 'checked' : ''); ?>

                                                                        id="inlineRadio2" value="7">
                                                                    Sembuh
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Meninggal?" ? 'checked' : ''); ?>

                                                                        id="inlineRadio2" value="4">
                                                                    Meninggal ?
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Meninggal+" ? 'checked' : ''); ?>

                                                                        id="inlineRadio2" value="6">
                                                                    Meninggal Terkonfirmasi
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        <?php echo e($person->status == "Meninggal-" ? 'checked' : ''); ?>

                                                                        id="inlineRadio2" value="8">
                                                                    Meninggal Negatif
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-block mt-4">Edit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/e/Web/dinkes-melawi-corona/resources/views/admin/editPerson.blade.php ENDPATH**/ ?>