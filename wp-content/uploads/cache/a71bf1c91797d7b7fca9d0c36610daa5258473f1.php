<section class="mod-banner bg_content mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 -mt-105">
    <div class="container">
        <div class="row show-up ">
            <div class="left-banner col pr-0 lg:p-10 slideInLeft self-center w-full lg:w-6/12 fadeInLeft itemh1">
                

                <?php echo $data->module['content']; ?>


                <hr class="mb-5 border-gray-300" />

                
                <div class="flex items-center justify-center lg:justify-start ls_icon space-x-6 ">
                    <?php $__currentLoopData = $data->module['link']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo $value->link->url; ?>" target="<?php echo e($value->link->target); ?>" rel="noreferrer"
                            class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400 px-5">
                            <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $value->image->alt; ?>" class="icomoon h-15 lazy"
                                data-src="<?php echo $value->image->url; ?>">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col slideInRight w-full lg:w-6/12 right-banner fadeInRight">
                <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $data->module['image']->alt; ?>" class="imgbh lazy"
                    data-src="<?php echo $data->module['image']->url; ?>">
            </div>
        </div>
    </div>
</section>
<div id="aboutus"></div>
