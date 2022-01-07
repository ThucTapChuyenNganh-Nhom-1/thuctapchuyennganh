<footer id="contacthome" class="mod-footer fadeIn_1 -mb-50">
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-[1280px] md:px-24 lg:px-8 ">
        <div class="footer-input_mail w-2/4 text-center mx-auto text-sm hidden xl:block md:block lg:block">
            <div class="col-lg-8 offset-lg-2">
                <div class="xl:text-2xl md:text-2xl lg:text-4xl font-bold lg:mb-10 itemh1">
                    <?php echo $data->module['title']; ?>

                </div>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <form id="search" action="#" method="GET">
                    <div class="flex justify-center">
                        <div class="">
                            <fieldset class="fieldset w-[160px] md:w-[320px] text-sm lg:text-xl">
                                <label class="hidden" for="email">Email</label>
                                <input id="email" type="email" name="email" class="email rounded-3xl" placeholder="Địa chỉ Email..."
                                    autoComplete="on" required />
                            </fieldset>
                        </div>
                        <div class="">
                            <fieldset class="fieldset w-[80px] md:w-[176px] ml-3 text-sm lg:text-xl">
                                <button type="submit" class="main-button">Gửi Ngay <i
                                        class="fa fa-angle-right"></i></button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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

                    <a href="<?php echo $data->module['contact']->link_address->url; ?>" target="_blank" rel="noopener noreferrer"
                        aria-label="Our address" title="Our address"
                        class="transition-colors text-white duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                        Địa chỉ: <?php echo $data->module['contact']->address; ?>

                    </a>
                </div>
            </div>
            <div class="footer-social">
                <span>
                    Mạng xã hội
                </span>
                <div class="flex items-center mt-1 space-x-3 justify-center md:justify-start">
                    <?php $__currentLoopData = $data->module['mxh']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo $value->link->url; ?>" class="transition-colors  duration-300 hover:text-deep-purple-accent-400 px-2">
                        <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $value->image->alt; ?>" class="iconfooter lazy"
                                         data-src="<?php echo $value->image->url; ?>">
                        

                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php echo $data->module['mxh_title']; ?>

            </div>
        </div>
        
        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row p-0">
            <?php echo $data->module['copyright']; ?>

            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
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
