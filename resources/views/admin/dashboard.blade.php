@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
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
                        <h3 class="card-title">0</h3>
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
                        <h3 class="card-title">0</h3>
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
                        <h3 class="card-title">0</h3>
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
                        <h3 class="card-title">251</h3>
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
                        <h3 class="card-title">87</h3>
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
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header card-header-success">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Statistik ODP Perhari</h4>
                        <p class="card-category">Data dalam seminggu</p>
                        <p class="card-category">
                            <span class="text-danger"><i class="fa fa-long-arrow-up"></i> 55% </span>
                            kenaikan hari ini.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header card-header-warning">
                        <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Statistik PDP Perhari</h4>
                        <p class="card-category">Data dalam seminggu</p>
                        <p class="card-category">
                            <span class="text-danger"><i class="fa fa-long-arrow-up"></i> 35% </span>
                            kenaikan hari ini.
                        </p>
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
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Positif</th>
                                <th>PDP</th>
                                <th>ODP</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nanga Pinoh</td>
                                    <td>2</td>
                                    <td>400</td>
                                    <td>302</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sokan</td>
                                    <td>0</td>
                                    <td>50</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Belimbing</td>
                                    <td>0</td>
                                    <td>30</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ella Hilir</td>
                                    <td>0</td>
                                    <td>24</td>
                                    <td>10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
