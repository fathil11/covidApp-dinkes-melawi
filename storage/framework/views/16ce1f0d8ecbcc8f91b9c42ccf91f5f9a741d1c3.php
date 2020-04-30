<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!--Let browser know website is optimized for mobile-->
    <style>
        .flexbox {
            display: flex;
            flew-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav>
        <div class="nav-wrapper teal lighten-2">
            <a href="#!" class="brand-logo">Perbatasan</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="<?php if(request()->is('admin-perbatasan')): ?> active <?php endif; ?>"><a href="/admin-perbatasan">Tambah
                        Orang</a></li>
                <li class="<?php if(request()->is('admin-perbatasan/pelaku-perjalanan')): ?> active <?php endif; ?>"><a
                        href="/admin-perbatasan/pelaku-perjalanan">Pelaku Perjalanan</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="<?php echo e(asset('img/banner/office.jpg')); ?>">
                </div>
                <a href="#user"><img class="circle" src="<?php echo e(asset('img/profile.jpg')); ?>"></a>
                <a href="#name"><span class="white-text name">Admin Perbatasan</span></a>
                <a href="#email"><span class="white-text email">perbatasan@dinkesmelawi.com</span></a>
            </div>
        </li>
        <li class="<?php if(request()->is('admin-perbatasan')): ?> active <?php endif; ?>"><a href="/admin-perbatasan"><i
                    class="material-icons">add</i>Tambah Orang</a></li>
        <li class="<?php if(request()->is('admin-perbatasan/pelaku-perjalanan')): ?> active <?php endif; ?>"><a
                href="/admin-perbatasan/pelaku-perjalanan"><i class="material-icons">account_box</i>Pelaku
                Perjalanan</a>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="/logout"><i class="material-icons">keyboard_return</i>Keluar</a></li>
    </ul>

    <div class="container">
        <div class="center">
            <h3><?php echo $__env->yieldContent('title'); ?></h3>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH /mnt/e/Web/dinkes-melawi-corona/resources/views/layouts/perbatasan.blade.php ENDPATH**/ ?>