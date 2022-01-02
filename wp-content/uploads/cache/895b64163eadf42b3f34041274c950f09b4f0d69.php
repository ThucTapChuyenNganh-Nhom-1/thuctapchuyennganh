
<section id="project" class="mod-project">
    <div class="container">
        <hr class="w-full my-8 border-gray-300" />
        <div class="pb-4 text-center">
            <h2> Các dự án đã thực hiện </h2>
        </div>
        <hr class="w-full my-8 border-gray-300" />
        <div class="grid gap-16 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            
            <?php $__currentLoopData = $data->module['project']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>           
            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-xl max-w-[410px]">                       
                
                <a href="<?php echo $item2->link_project->url; ?>">
                    <img src="<?php echo $item2->img_project->url; ?>"
                        class="object-cover w-full h-[190px]" alt="<?php echo $item2->img_project->alt; ?>" />
                </a>

                <div class="p-5 border border-t-0">
                    <p class="mb-3 text-base font-semibold tracking-wide uppercase max-h-[32px]">
                        
                        <span class="text-gray-600"><?php echo $item2->start; ?> </span>
                        <span>-</span>
                        <span class="text-gray-600"> <?php echo $item2->end; ?></span>
                    </p>             
                    <span>
                        <?php echo $item2->content; ?>

                    </span>
                    <div class="flex pt-19">
                        <?php $__currentLoopData = $item2->link_member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                        <a href="<?php echo $item3->link->url; ?>" class="mr-5">
                            <img src="<?php echo $item3->img->url; ?>" alt="<?php echo $item3->img->alt; ?>"
                                class="object-cover w-20 h-20 rounded-full shadow-sm" />
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>         
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        </div>
    </div>
</section>
