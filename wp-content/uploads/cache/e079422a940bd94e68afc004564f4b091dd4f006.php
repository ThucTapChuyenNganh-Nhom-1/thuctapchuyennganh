<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 fadeInUp">
    <div class="container">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">    
            <?php $__currentLoopData = $data->module['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="max-w-[312px]">
                <div
                    class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                    <img class="object-cover imgmb w-full h-[224] md:h-[256px] xl:h-[320px]" src="<?php echo $value->image->url; ?>" alt="Person" />
                    <div
                        class="member-info absolute inset-0 flex flex-col justify-center px-10 py-8 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                        <a href="<?php echo $value->link_member->url; ?>">
                            <?php echo $value->link_member->title; ?>

                        </a>
                        <?php echo $value->about_us; ?>

                        <div class="flex items-center justify-center space-x-3">
                            <a class="p-6" href="<?php echo $value->instagram->url; ?>" rel="noreferrer" target="_blank"
                                class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="instagram link" class="icomoon h-8" />
                            </a>
                            <a class="p-6" href="<?php echo $value->facebook->url; ?>" rel="noreferrer" target="_blank"
                                class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="facebook link" class="icomoon h-8" />
                            </a>
                            <a class="p-6" href="<?php echo $value->git->url; ?>" rel="noreferrer" target="_blank"
                                class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/githuub_blue.svg" alt="github link" class="icomoon h-8" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
