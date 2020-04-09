@extends('layouts.post-admin')
@section('title', 'Kelola Post')
@section('content')
<div class="row">
    @if ($errors->any())
    <div class="col-md-12 mb-2" id="msg" style="transition:.5s ease-in-out !important;">
        <div class="card">
            <div class="card-body">
                <span class="align-items-center">
                    <h3 class="text-danger">Ada kesalahan !</h3>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            <p class="text-danger">{{ $error }}</p>
                        </li>
                        @endforeach
                    </ul>
                </span>
            </div>
        </div>
    </div>
    @elseif(session('success'))
    <div class="col-md-12 mb-2" id="msg" style="transition:.5s ease-in-out !important;">
        <div class="card">
            <div class="card-body">
                <span class="align-items-center">
                    <h3 class="text-success">{{ session('success') }}</h3>
                </span>
            </div>
        </div>
    </div>
    @endif
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
                        @forelse ($posts as $key=>$post)
                        <tr class="text-center">
                            <td class="font-weight-bold">{{ ($key+1) }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td>
                                <form action="/admin/content/post/{{ $post->id }}/edit" method="GET">
                                    <button type="submit" class="btn btn-gradient-warning btn-rounded btn-icon">
                                        <i class="mdi mdi-lead-pencil"></i>
                                    </button>
                                </form>
                                <form action="/admin/content/post/{{ $post->id }}/delete" method="GET">
                                    <button class="btn btn-gradient-danger btn-rounded btn-icon">
                                        <i class="mdi mdi-delete-forever"></i>
                                    </button>
                                </form>
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
