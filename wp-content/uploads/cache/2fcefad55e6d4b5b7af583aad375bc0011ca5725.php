<?php $i=0; ?>
<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 fadeInUp">
    <div class="container">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4 list-posts">    
            <?php $__currentLoopData = $data->member->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="max-w-[312px]">
                    <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-[224] md:h-[256px] xl:h-[320px]" src="<?php echo $mem->img['url']; ?>" alt="Person" />
                        <div class="member-info absolute inset-0 flex flex-col justify-center px-10 py-8 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <a href="<?php echo $mem->mem_link['url']; ?>">
                                <?php echo $mem->mem_link['title']; ?>

                            </a>
                            <?php echo $mem->about_me; ?>

                            <div class="flex items-center justify-center space-x-3">
                                <?php $__currentLoopData = $mem->mem_social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e($social['link']['url']); ?>" rel="noreferrer" target="<?php echo e($social['link']['target']); ?>"
                                        class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4 p-6">
                                        <img src="<?php echo e($social['icon']['url']); ?>" alt="<?php echo e($social['icon']['alt']); ?>" class="h-8 iconow" />
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <button class="btn btn- mx-auto block btn-loadmore mt-10" data-page="2">Xem thêm</button>
    </div>
</section>

<div id="projecthome"></div>  