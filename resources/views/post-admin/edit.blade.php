@extends('layouts.post-admin')
@section('title', 'Edit Post')
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
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="/admin/content/post/{{$post->id}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" value="{{ $post->title }}" class="form-control"
                            placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label>Banner upload</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary"
                                    type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="content" id="editor" rows="5">
                                {{ $post->content }}
                            </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded btn-block btn-gradient-primary mt-4">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/post-admin/file-upload.js') }}"></script>
<script src="{{ asset('js/post-admin/ckeditor.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    // var msg = document.getElementById("msg");
    // if(msg){

    // }
    ClassicEditor
			.create(document.querySelector('#editor'), {
                toolbar: {
					items: [
						'heading',
						'|',
						'fontFamily',
						'fontSize',
						'fontColor',
						'|',
						'alignment',
						'indent',
						'outdent',
						'|',
						'bold',
						'underline',
						'italic',
						'|',
						'bulletedList',
						'numberedList',
						'|',
						'imageUpload',
						'mediaEmbed',
						'link',
						'insertTable',
						'specialCharacters',
						'blockQuote',
						'undo',
						'redo'
					]
                },
                simpleUpload: {
                    // The URL that the images are uploaded to.
                    uploadUrl: 'https://covid.dinkesmelawi.com/api/upload-image',

                    // Headers sent along with the XMLHttpRequest to the upload server.
                    headers: {
                        'X-CSRF-TOKEN': 'CSFR-Token',
                    }
                },
				language: 'id',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
				licenseKey: '',

			})
			.then(editor => {
				window.editor = editor;




			})
			.catch(error => {
				console.error('Oops, something gone wrong!');
				console.error('Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:');
				console.warn('Build id: 4jq4bsutdje-glz1cwno3luv');
				console.error(error);
            });
            $(document).ready(function(){
                if($('#msg')){
                    $('#msg').delay( 4000 ).fadeOut( 400 );
                }
            })
</script>
@endsection
