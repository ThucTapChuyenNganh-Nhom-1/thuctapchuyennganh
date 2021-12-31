<?php
// foreach ($post as $test) {
//     $mota = get_field('mota', $test->ID);
//     $image_avt = get_field('personal_image', $test->ID);
// }
var_dump(App::getMemberInfo($post));

?>
<section id="info" class="info md:ml-60 mt-50">
    <div class="container">
        <div class="pb-4 text-center">
            <h1><?php echo e(App::getMemberInfo($post)->name); ?></h1>
            <p> <?php echo e(App::getMemberInfo($post)->des); ?> </p>
            <div class="info-table row justify-center">
                <!-- nội dung trái-->
                <div class="col md:w-4/5 lg:w-1/2">
                    <img class="rounded-3xl" src=" <?php echo e(App::getMemberInfo($post)->avt['url']); ?> "
                        alt="<?php echo e(App::getMemberInfo($post)->avt['alt']); ?>">
                </div>
                <!-- nội dung phải -->
                <div class="info-table-content col mt-10 md:w-4/5 lg:w-1/2">
                    <div class="row">
                        <div class="col w-1/2">
                            <h6>
                                Họ tên:
                            </h6>
                            <p>
                                <?php echo e(App::getMemberInfo($post)->name); ?>

                            </p>
                        </div>
                        <div class="col w-1/2 ">
                            <h6>
                                Ngày sinh
                            </h6>
                            <p>
                                <?php echo e(App::getMemberInfo($post)->dateOB); ?>


                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w-1/2 ">
                            <h6>
                                Giới tính
                            </h6>
                            <p>
                                <?php echo e(App::getMemberInfo($post)->sex); ?>


                            </p>
                        </div>
                        <div class="col w-1/2  ">
                            <h6>
                                Sở thích
                            </h6>
                            <p>
                                <?php echo e(App::getMemberInfo($post)->hobby); ?>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
