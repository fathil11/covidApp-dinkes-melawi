@extends('layouts.post-admin')
@section('title', 'Kelola Post')
@section('content')
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
                        @forelse ($posts as $key=>$post)
                        <tr class="text-center">
                            <td class="font-weight-bold">{{ ($key+1) }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->banner }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-gradient-warning btn-rounded btn-icon">
                                    <i class="mdi mdi-lead-pencil"></i>
                                </button>
                                <button type="button" class="btn btn-gradient-danger btn-rounded btn-icon">
                                    <i class="mdi mdi-delete-forever"></i>
                                </button>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
