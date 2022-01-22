<footer id="contacthome" class="mod-footer fadeIn_1 -mb-50">
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-1280 md:px-24 lg:px-8 ">
        
        <div class="footer-list grid gap-10 row-gap-3 mb-8 sm:grid-cols-2 lg:grid-cols-4 contact">
            <div class="footer-logo sm:col-span-2 hidden lg:block">
                <a href="<?php echo $data->module['logo']->link->url; ?>" aria-label="Go home" class="inline-flex items-center">
                    <img src="<?php echo e(IMG_BASE64); ?>" alt="!! $data->module['logo']->logo->alt!!}" class="logof lazy"
                        data-src="<?php echo $data->module['logo']->logo->url; ?>">
                </a>
                <div class="mt-6 lg:max-w-sm">
                    <?php echo $data->module['content']; ?>

                </div>
            </div>
            <div class="footer-contact text-sm">
                <p>
                    Liên hệ
                </p>
                <div class="contact_item mx-auto pb-4">

                    <a href="tel:<?php echo $data->module['contact']->tel; ?>" aria-label="Our phone" title="Our phone"
                        class="transition-colors duration-300 text-deep-purple-accent-400 text-white hover:text-deep-purple-800">
                        Điện thoại: <?php echo $data->module['contact']->tel; ?>

                    </a>
                </div>
                <div class="contact_item pb-4">

                    <a href="mailto:<?php echo $data->module['contact']->mail; ?>" aria-label="Our email" title="Our email"
                        class="transition-colors duration-300 text-deep-purple-accent-400 text-white hover:text-deep-purple-800">
                        Email: <?php echo $data->module['contact']->mail; ?>

                    </a>
                </div>
                <div class="contact_item pb-4">

                    <a href="<?php echo $data->module['contact']->link_address->url; ?>" target="_blank" rel="noopener noreferrer" aria-label="Our address"
                        title="Our address"
                        class="transition-colors text-white duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                        Địa chỉ: <?php echo $data->module['contact']->address; ?>

                    </a>
                </div>
            </div>
            <div class="footer-social iconfooter">
                <span>
                    Mạng xã hội
                </span>
                <div class="flex items-center mt-1 space-x-3 justify-center md:justify-start">
                    <?php $__currentLoopData = $data->module['mxh']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo $value->link->url; ?>"
                            class="transition-colors  duration-300 hover:text-deep-purple-accent-400 px-2">
                            <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $value->image->alt; ?>" class=" lazy"
                                data-src="<?php echo $value->image->url; ?>">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php echo $data->module['mxh_title']; ?>

            </div>
        </div>

        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row p-0 iconow c-center">
            <?php echo $data->module['copyright']; ?>

            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row justify-center">
                <?php $__currentLoopData = $data->module['fax']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo $value2->link->url; ?>"
                            class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400 px-5">
                            <?php echo $value2->link->title; ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</footer>
