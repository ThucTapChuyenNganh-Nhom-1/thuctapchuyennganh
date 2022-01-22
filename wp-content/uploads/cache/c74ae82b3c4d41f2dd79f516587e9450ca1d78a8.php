
<div
    class="menu-info w-full z-1 md:w-60 px-2 bg-darkBlue text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-27 md:h-screen md:border-r-2 md:border-gray-600">
    <div class="md:relative mx-auto lg:float-right">
        <ul class="list-none pl-5 flex justify-between flex-row md:flex-col text-center md:text-left">
            <li class="mr-3">
                <a href="<?php echo $data->memberid->link_home['url']; ?>"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 text-gray-800 no-underline hover:text-blue-700 border-b-2 border-gray-800 md:border-gray-900 hover:border-blue-700 third after ">
                    <span class="pt-2 pr-3 block icomoon icon-home"></span>
                    <span class="pb-1 md:pb-0 text-base"><?php echo $data->memberid->link_home['title']; ?></span>
                </a>
            </li>
            <li class="mr-3">
                <a href="#info"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 text-gray-800 no-underline hover:text-blue-700 border-b-2 border-gray-800 md:border-gray-900 hover:border-blue-700 third after">
                    <span class="pt-2 pr-3 block icomoon icon-user"></span>
                    <span class="pb-1 md:pb-0 text-base">Thông tin</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="#ability"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 align-middle text-gray-800 no-underline hover:text-blue-700 border-b-2 border-gray-800 md:border-gray-900 hover:border-blue-700 third after">
                    <span class="pt-2 pr-3 block icomoon icon-trophy"></span>
                    <span class="pb-1 md:pb-0 text-base">Năng lực</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="#project"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 align-middle text-gray-800 no-underline hover:text-blue-700 border-b-2 border-gray-800 md:border-gray-900 hover:border-blue-700 third after">
                    <span class="pt-2 pr-3 block icomoon icon-folder"></span>
                    <span class="pb-1 md:pb-0 text-base">Dự án</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="#contact"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 align-middle text-gray-800 no-underline hover:text-blue-700 border-b-2 border-gray-800 md:border-gray-900 hover:border-blue-700 third after">
                    <span class="pt-2 pr-3 block icomoon icon-mail-envelope-closed2"></span>
                    <span class="pb-1 md:pb-0 text-base">Liên hệ</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="bg-lightBlue ">
    
    <section id="info" class="info md:ml-60 -mt-50 pt-10">
        <div class="container">
            <div class="pb-10 text-center">
                <div class="fadeInDown">
                    <h1><?php echo e($data->memberid->name); ?></h1>
                    <p> <?php echo e($data->memberid->description); ?> </p>
                </div>
                <div class="info-table row justify-center ">
                    <!-- nội dung trái-->
                    <div class="col md:w-4/5 lg:w-1/2 fadeInLeft">
                        <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $data->memberid->img['alt']; ?>" class="rounded-3xl lazy"
                            data-src=" <?php echo e(empty($data->memberid->img['url']) ? img_avt : $data->memberid->img['url']); ?>">
                    </div>
                    <!-- nội dung phải -->
                    <div class="info-table-content col mt-10 md:w-4/5 lg:w-1/2 fadeInRight">
                        <div class="row info-table-content-1">
                            <div class="col w-1/2">
                                <h5>
                                    Họ tên
                                </h5>
                                <p>
                                    <?php echo e($data->memberid->name); ?>

                                </p>
                            </div>
                            <div class="col w-1/2 ">
                                <h5>
                                    Ngày sinh
                                </h5>
                                <p>
                                    <?php echo e($data->memberid->date); ?>

                                </p>
                            </div>
                        </div>
                        <div class="row info-table-content-1">
                            <div class="col w-1/2 ">
                                <h5>
                                    Giới tính
                                </h5>
                                <p>
                                    <?php echo e($data->memberid->sex); ?>


                                </p>
                            </div>
                            <div class="col w-1/2  ">
                                <h5>
                                    Sở thích
                                </h5>
                                <p>
                                    <?php echo e($data->memberid->hobby); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="w-full my-8 border-gray-300" />

    

    <section id="ability" class="md:ml-60 fadeInDown">
        <div class="container">
            <div class="pb-10 text-center">
                <h2> Năng lực </h2>
            </div>
            <div class="px-4 mx-auto sm:max-w-sm md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 ">
                <div class="ability-content grid gap-8 sm:mx-auto md:grid-cols-2 lg:max-w-full lg:grid-cols-3">
                    <?php $__currentLoopData = $data->memberid->ability; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex ">
                            <div class="sm:mr-4">
                                <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                                    <svg class="w-12 h-12" stroke="currentColor" viewBox="0 0 52 52">
                                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                            fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <?php echo $item['title']; ?>

                                <ul class="p-0 grid grid-cols-2 gap-x-10">
                                    <?php $__currentLoopData = $item['att']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="flex items-start">
                                            <span class="mr-1 mt-4">
                                                <svg class="w-5 h-5 mt-px" stroke="currentColor" viewBox="0 0 52 52">
                                                    <polygon stroke-width="4" stroke-linecap="round"
                                                        stroke-linejoin="round" fill="none"
                                                        points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                                </svg>
                                            </span>
                                            <?php echo $item1['attribute']; ?>

                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="h-50"></div>
    <hr class="w-full my-8 border-gray-300" />

    
    <section id="project" class="mod-project info md:ml-60 -mt-40 ">
        <div class="container">
            <hr class="w-full my-8 border-gray-300" />
            <div class="pb-4 text-center">
                <h2> Các dự án đã thực hiện </h2>
            </div>
            <hr class="w-full my-8 border-gray-300" />
            
            <?php if($data->resource): ?>
                <div
                    class="grid gap-16 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-full down_md:max-w-md mx-auto project_text">
                    <?php $__currentLoopData = $data->resource; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-xl flex flex-col justify-between">
                            <a href="<?php echo $item2['link_project']['url']; ?>" target="<?php echo e($item2['link_project']['target']); ?>"
                            rel="noreferrer">
                                <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $item2['image_project']['alt']; ?>"
                                    class="object-cover project w-full min-h-200 zoom lazy"
                                    data-src=" <?php echo e(empty($item2['image_project']['url']) ? img_project : $item2['image_project']['url']); ?>">
                            </a>
                            <div class="p-5 border border-t-0">
                                <p class="mb-3 text-base font-semibold tracking-wide uppercase">
                                    <span class="text-gray-600"><?php echo $item2['start']; ?> </span>
                                    <span>-</span>
                                    <span class="text-gray-600"> <?php echo $item2['end']; ?></span>
                                </p>
                                <?php echo $item2['content']; ?>

                            </div>
                            <div class="flex project-a afmp pl-5 pb-5">
                                <?php $__currentLoopData = $item2['link_member']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo $item3['link']['url']; ?>" class="mr-5">
                                        <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $item3['image']['alt']; ?>"
                                            class="object-cover member-project w-20 h-20 rounded-full shadow-sm lazy"
                                            data-src=" <?php echo e(empty($item3['image']['url']) ? img_avt : $item3['image']['url']); ?>">
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <h3 class="text-center text-yellow">Hiện tại chưa có dự án!!!</h3>
            <?php endif; ?>
        </div>
    </section>
    <hr class="w-full my-8 border-gray-300" />

    

    <section id="contact" class="md:ml-60 bg-footer bg-cover h-440 bg-no-repeat -mb-25 md:-mb-50">
        <div class="container pt-95">
            <div class="pb-10 text-center">
                <h2>
                    Liên hệ
                </h2>
            </div>
            <div class="grid row-gap-6b grid-cols-2">
                <div class="space-y-2 mx-auto ">
                    <div class="flex">
                        <div class="text-2xl pr-6 self-center p-2">
                            <span class="icomoon icon-mobile"></span>
                        </div>
                        <div class="contact-content">
                            <p>Điện thoại:</p>
                            <a href="tel:<?php echo $data->memberid->contact['tel']; ?>" aria-label="Our phone" title="Our phone"
                                class="transition-colors duration-300">
                                <?php echo $data->memberid->contact['tel']; ?>

                            </a>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="text-2xl pr-6 self-center p-2">
                            <span class="icomoon icon-mail-envelope-closed2"></span>
                        </div>
                        <div class="contact-content">
                            <p>Email:</p>
                            <a href="mailto:<?php echo $data->memberid->contact['mail']; ?>" aria-label="Our email" title="Our email"
                                class="transition-colors duration-300">
                                <?php echo $data->memberid->contact['mail']; ?>

                            </a>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="text-2xl pr-6 self-center p-2">
                            <span class="icomoon icon-icon-map"></span>
                        </div>
                        <div class="contact-content">
                            <p>Địa chỉ:</p>
                            <a href="<?php echo $data->memberid->contact['link_address']['url']; ?>" target="_blank" rel="noopener noreferrer"
                                aria-label="Our address" title="Our address" class="transition-colors duration-300">
                                <?php echo $data->memberid->contact['address']; ?>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="space-y-2 mx-auto ">
                    <span class=" font-bold tracking-wide text-gray-900">
                        Mạng xã hội
                    </span>
                    <div class="flex justify-around items-center mt-1 space-x-3 iconfooter">
                        <?php $__currentLoopData = $data->memberid->contact['mxh']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo $item5['link']['url']; ?>" target="<?php echo e($item5['link']['target']); ?>"
                                class="no-underline px-5" rel="noopener">
                                <img alt="<?php echo $item5['image']['alt']; ?>" src="<?php echo $item5['image']['url']; ?> "
                                    class="h-15" />
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php unset($data->memberid); ?>
</div>
