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
    <div class="col-md-12 mt-5">
        <h1 class="display-4 text-center mb-5">Berita</h1>
    </div>
    <div class="row mb-md-3">
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
            <a class="no-style" href="<?php echo e(url('/berita/lihat') .'/'. $post->slug); ?>">
                <div class="card">
                    <div class="position-relative">
                        <div class="tgl py-2 px-4 position-absolute">
                            <h5 class="text-center"><?php echo e(date('d', strtotime($post->created_at))); ?></h5>
                            <h6 class="text-center"><?php echo e(substr(date('F', strtotime($post->created_at)), 0, 3)); ?></h6>
                        </div>
                    </div>
                    <img src="<?php echo e(asset('storage/'.$post->banner)); ?>" class="lazyload card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e($post->title); ?></h4>
                        <p class="card-text">
                            <?php
                            $content = new HtmlToText($post->content);
                            $content = $content->getText();
                            ?>
                            <?php echo e(Str::limit($content,100)); ?>

                        </p>
                    </div>
                </div>
            </a>
        </div>
        <?php if(($key+1) % 3 == 0): ?>
        <div class="col-md-12 mb-md-4"></div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-md-12 text-center">
            <h2 class="mt-5">Mohon maaf, belum ada berita.</h2>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/public/allPost.blade.php ENDPATH**/ ?>