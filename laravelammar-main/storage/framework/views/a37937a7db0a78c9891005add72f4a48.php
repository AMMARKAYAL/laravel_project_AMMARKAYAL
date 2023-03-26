

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Course Details</h2>
                            <p>HomePage<span>/</span>Courses<span>/</span><?php echo e($course->cat->name); ?><span>/</span><?php echo e($course->name); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="<?php echo e(asset('uploads/courses/' . $course->img)); ?>" alt="">
                    </div>
                    <div class="content_wrapper py-5">
                        <?php echo $course->desc; ?>

                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Trainer’s Name</p>
                                    <span class="color"><?php echo e($course->trainer->name); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Course Fee </p>
                                    <span>$<?php echo e($course->price); ?></span>
                                </a>
                            </li>


                        </ul>
                    </div>
                    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\programmer1000\laravel\homework\resources\views/front/courses/show.blade.php ENDPATH**/ ?>