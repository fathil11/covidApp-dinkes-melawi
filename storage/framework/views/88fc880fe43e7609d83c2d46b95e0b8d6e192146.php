<?php $__env->startSection('title', 'Laporan'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Pilih Laporan</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h5 class="mb-0">Laporan Harian Internal</h5>
                            <a href="/admin/download/laporan/harian/internal" type="button" rel="tooltip"
                                class="btn btn-info">
                                Laporan Harian Internal
                            </a>
                        </div>

                        <div class="mb-4">
                            <h5 class="mb-0">Laporan Harian Provinsi</h5>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-warning">
                                Laporan Harian Provinsi ODP
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-warning">
                                Laporan Harian Provinsi PDP
                            </a>
                        </div>

                        <div class="mb-4">
                            <h5 class="mb-0">Laporan Total per Kecamatan (Kepala Puskesmas)</h5>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Nanga Pinoh
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Pinoh Utara
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Pinoh Selatan
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Sokan
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Tanah Pinoh Barat
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Tanah Pinoh
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Sayan
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Belimbing Hulu
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Belimbing
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Ella Hilir
                            </a>
                            <a href="/admin/download/laporan/harian/provinsi/odp" type="button" rel="tooltip"
                                class="btn btn-success">
                                Menukung
                            </a>

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
        $('#all_table').DataTable({
            "responsive": true,
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/admin/report.blade.php ENDPATH**/ ?>