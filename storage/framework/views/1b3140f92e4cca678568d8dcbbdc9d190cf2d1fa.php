<?php $__env->startSection('content'); ?>
<div class="bg-main">
    <div class="container">
        <div class="row pt-4 pb-5 py-md-4">
            <div class="col-md-6 col-sm-12 text-md-left text-center my-auto text-white">
                <h1 class="display-4 font-weight-bolder">Siaga Corona</h1>
                <h3 class="font-weight-light">Kabupaten Melawi</h3>
            </div>
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <img data-src="<?php echo e(asset('img/corona.png')); ?>" width="130%" class="lazyload banner-img" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body px-sm-2 px-md-5 pt-5">
                    <div class="text-center mb-4">
                        <h1 class="font-weight-bolder text-main d-none d-md-block"><?php echo e($post->title); ?></h1>
                        <h3 class="font-weight-bolder text-main d-md-none d-sm-block"><?php echo e($post->title); ?></h3>
                        <p class="mt-3">Dinkes Melawi -
                            <?php echo e(Carbon::make($post->created_at)->locale('id_ID')->isoFormat('LLLL')); ?></p>
                        <img class="img-fluid img-thumbnail" src="<?php echo e(asset('storage/'.$post->banner)); ?>" alt="">
                    </div>
                    <?php echo $post->content; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key=3869ef82f1d53f3d7930a9"></script>
<script>
    document.querySelectorAll( 'oembed[url]' ).forEach( element => {
        iframely.load( element, element.attributes.url.value );
    } );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/public/openPost.blade.php ENDPATH**/ ?>