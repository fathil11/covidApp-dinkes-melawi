<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <p class="card-category">Positif</p>
                        <h3 class="card-title"><?php echo e($stat['positive']); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">check</i>
                        </div>
                        <p class="card-category">Sembuh</p>
                        <h3 class="card-title"><?php echo e($stat['recovered']); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-dark card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">airline_seat_flat</i>
                        </div>
                        <p class="card-category">Meninggal</p>
                        <h3 class="card-title"><?php echo e($stat['died']); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">search</i>
                        </div>
                        <p class="card-category">Orang Dalam Pengawasan</p>
                        <h3 class="card-title"><?php echo e($stat['odp']); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">location_city</i>
                        </div>
                        <p class="card-category">Pasien Dalam Pengawasan</p>
                        <h3 class="card-title"><?php echo e($stat['pdp']); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Statistik per Kecamatan</h4>
                        <p class="card-category">Kabupaten Melawi</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-info">
                                <th>#</th>
                                <th>Kecamatan</th>
                                <th>Positif</th>
                                <th>PDP</th>
                                <th>ODP</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    use \App\Http\Controllers\AdminController;
                                    ?>
                                    <td>1</td>
                                    <td>Sokan</td>
                                    <td><?php echo e(AdminController::getDistrictStat('0', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('0', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('0', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tanah Pinoh Barat</td>
                                    <td><?php echo e(AdminController::getDistrictStat('1', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('1', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('1', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tanah Pinoh</td>
                                    <td><?php echo e(AdminController::getDistrictStat('2', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('2', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('2', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sayan</td>
                                    <td><?php echo e(AdminController::getDistrictStat('3', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('3', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('3', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Belimbing Hulu</td>
                                    <td><?php echo e(AdminController::getDistrictStat('4', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('4', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('4', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Belimbing</td>
                                    <td><?php echo e(AdminController::getDistrictStat('5', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('5', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('5', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Pinoh Selatan</td>
                                    <td><?php echo e(AdminController::getDistrictStat('6', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('6', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('6', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Nanga Pinoh</td>
                                    <td><?php echo e(AdminController::getDistrictStat('7', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('7', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('7', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Pinoh Utara</td>
                                    <td><?php echo e(AdminController::getDistrictStat('8', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('8', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('8', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Ella Hilir</td>
                                    <td><?php echo e(AdminController::getDistrictStat('9', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('9', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('9', '2')); ?></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Menukung</td>
                                    <td><?php echo e(AdminController::getDistrictStat('10', '5')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('10', '0')); ?></td>
                                    <td><?php echo e(AdminController::getDistrictStat('10', '2')); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function () {

// md.initDashboardPageCharts();

});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>