

<?php $__env->startSection('content'); ?>


<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Our Courses</h2>
                        <p>Homepage<span>/</span>Courses<span>/</span><?php echo e($cat->name); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <img src="<?php echo e(asset('uploads/courses'.$c->img)); ?>" class="special_img" alt="">
                    <div class="special_cource_text">
                        <a href="<?php echo e(route("front.cat",$c->cat->id)); ?>" class="btn_4"><?php echo e($c->cat->name); ?></a>
                        <h4><?php echo e($c->price); ?></h4>
                        <a href="<?php echo e(route("front.show",[$c->cat->id,$c->id])); ?>"><h3><?php echo e($c->name); ?></h3></a>
                        <p><?php echo e($c->small_desc); ?></p>
                        
                        <div class="author_info">
                            <div class="author_img">
                                <img src="<?php echo e(asset('uploads/trainers'.$c->trainer->img)); ?>" alt="">
                                <div class="author_info_text">
                                    <p>Conduct by:</p>
                                    <h5><?php echo e($c->trainer->name); ?></h5>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div>
            </div>                 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class=" d-flex justify-content-center w-100 mb-5">
                <?php echo $courses->render(); ?>

            </div>
            
        </div>
    </div>
</section>
<!--::blog_part end::-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\programmer1000\laravel\homework\resources\views/front/courses/cat.blade.php ENDPATH**/ ?>