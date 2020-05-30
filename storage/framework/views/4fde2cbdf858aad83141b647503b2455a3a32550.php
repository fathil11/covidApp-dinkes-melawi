<?php $__env->startSection('title', 'Kelola Orang'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s12 m12">
        <table class="centered nowrap" id="all_table" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>No Hp</th>
                    <th>Kecamatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($key+1); ?></td>
                    <td><?php echo e($person->name); ?></td>
                    <td><?php echo e($person->gender); ?></td>
                    <td><?php echo e($person->phone); ?></td>
                    <td><?php echo e($person->district); ?></td>
                    <td>
                        
                        <div class="row">
                            <div class="flexbox">
                                <div class="col">
                                    <form action="/admin-perbatasan/enter/<?php echo e($person->id); ?>" method="post"><?php echo csrf_field(); ?>
                                        <?php echo method_field('post'); ?>
                                        <button class="btn green waves-effect" type="submit">Catat</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/admin/jquery.dataTables.min.js')); ?>"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function () {
        $('#all_table').DataTable({
            "responsive": {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            },
            "language": {
                "emptyTable": "Belum ada data",
                "search": "Cari : ",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": ">",
                    "previous": "<"
                },
                "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                "infoEmpty": "",
                "zeroRecords": "Tidak ada daya yang sesuai",
                "lengthMenu": "Tampilkan _MENU_ data",
            },
        });
    });
</script>
<?php if(session('msg')): ?>
<script>
    M.toast({html: 'Berhasil Hapus Data' })
</script>
<?php endif; ?>
<?php if(session('enter')): ?>
<script>
    M.toast({html: 'Berhasil Mencatat Orang' })
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.perbatasan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/perbatasan/kelolaOrang.blade.php ENDPATH**/ ?>