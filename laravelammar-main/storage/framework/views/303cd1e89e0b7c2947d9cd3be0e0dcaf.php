<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/animate.css">
    <!-- owl carousel CSS --> 
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('intro/css')); ?>/style.css">

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu <?php if(Route::currentRouteName()=='front.homepage'): ?> home_menu <?php else: ?> single_page_menu  <?php endif; ?> ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo e(route('front.homepage')); ?>"> <img src="<?php echo e(asset('intro/img')); ?>//logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo e(route('front.homepage')); ?>">Home</a>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Courses
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="dropdown-item" href="<?php echo e(route('front.cat',$cat->id)); ?>"><?php echo e($cat->name); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('front.contact')); ?>">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end--><?php /**PATH C:\xampp2\htdocs\programmer1000\laravel\homework\resources\views/front/include/header.blade.php ENDPATH**/ ?>