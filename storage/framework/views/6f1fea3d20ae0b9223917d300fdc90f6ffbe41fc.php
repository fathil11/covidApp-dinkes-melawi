<?php $__env->startSection('title', 'Daftar PDP'); ?>
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
                        <h4 class="card-title ">Daftar Pasien Dalam Pengawasan</h4>
                        <p class="card-category">Total : <?php echo e($people->count()); ?> Orang</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="pdp_table">
                                <thead class=" text-info">
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th class="text-center">
                                        Nama
                                    </th>
                                    <th class="text-center">
                                        Umur
                                    </th>
                                    <th class="text-center">
                                        Jenis Kelamin
                                    </th>
                                    <th class="text-center">
                                        Status
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="<?php echo e($person->getActualAttribute('status') == 4 ? 'bg-warning' : ''); ?>">
                                        <td class="text-center">
                                            <?php echo e($key + 1); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($person->name); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($person->age); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($person->gender); ?>

                                        </td>
                                        <td class="text-center">
                                            <?php echo e($person->status); ?>

                                        </td>
                                        <td class="td-actions text-center text-white">
                                            <a href="/admin/orang/<?php echo e($person->id); ?>/positif" type="button" rel="tooltip"
                                                class="btn btn-danger">
                                                Positif
                                            </a>
                                            <a href="/admin/orang/<?php echo e($person->id); ?>/negatif" type="button" rel="tooltip"
                                                class="btn btn-success">
                                                Negatif
                                            </a>
                                            <a href="/admin/orang/<?php echo e($person->id); ?>/meninggal" type="button"
                                                rel="tooltip" class="btn btn-warning">
                                                Meninggal
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
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
        $('#pdp_table').DataTable({
            "columnDefs": [{
                "targets": 4,
                "orderable": false
            }],
            "language": {
                "emptyTable": "Belum ada data",
                "search": "Cari : ",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Kembali"
                },
                "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                "infoEmpty": "",
                "zeroRecords": "Tidak ada daya yang sesuai",
                "lengthMenu": "Tampilkan _MENU_ data",
            },
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/e/Web/dinkes-melawi-corona/resources/views/admin/pdpPeople.blade.php ENDPATH**/ ?>