<?php $__env->startSection('title', 'Edit Post'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <?php if($errors->any()): ?>
    <div class="col-md-12 mb-2" id="msg" style="transition:.5s ease-in-out !important;">
        <div class="card">
            <div class="card-body">
                <span class="align-items-center">
                    <h3 class="text-danger">Ada kesalahan !</h3>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <p class="text-danger"><?php echo e($error); ?></p>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </span>
            </div>
        </div>
    </div>
    <?php elseif(session('success')): ?>
    <div class="col-md-12 mb-2" id="msg" style="transition:.5s ease-in-out !important;">
        <div class="card">
            <div class="card-body">
                <span class="align-items-center">
                    <h3 class="text-success"><?php echo e(session('success')); ?></h3>
                </span>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="/admin/content/post/<?php echo e($post->id); ?>" method="post"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('patch'); ?>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" value="<?php echo e($post->title); ?>" class="form-control"
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
                                <?php echo e($post->content); ?>

                            </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded btn-block btn-gradient-primary mt-4">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/post-admin/file-upload.js')); ?>"></script>
<script src="<?php echo e(asset('js/post-admin/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
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
                    uploadUrl: 'http://localhost:8000/api/upload-image',

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.post-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/e/Web/dinkes-melawi-corona/resources/views/post-admin/edit.blade.php ENDPATH**/ ?>