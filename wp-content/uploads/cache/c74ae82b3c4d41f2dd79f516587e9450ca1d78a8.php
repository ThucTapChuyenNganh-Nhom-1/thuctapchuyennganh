<section id="info" class="info md:ml-60 -mt-90">
    <div class="container">
        <div class="pb-4 text-center">
            <?php
                // var_dump($data);
                var_dump($data->module);
                ?>
            
        </div>
        <div class="info-table row justify-center">
            <!-- nội dung trái-->
            <div class="col md:w-4/5 lg:w-1/2">
                <img class="rounded-3xl" src="<?php echo get_template_directory_uri(); ?>/assets/images/long.jpg" alt="avata_long">
            </div>
            <!-- nội dung phải -->
            <div class="info-table-content col mt-10 md:w-4/5 lg:w-1/2">
                <div class="row">
                    <div class="col w-1/2">
                        <h6>
                            Họ tên:
                        </h6>
                        <p>
                            Lê Minh Long
                        </p>
                    </div>
                    <div class="col w-1/2 ">
                        <h6>
                            Ngày sinh
                        </h6>
                        <p>
                            01/06/2000
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col w-1/2 ">
                        <h6>
                            Giới tính
                        </h6>
                        <p>
                            Nam
                        </p>
                    </div>
                    <div class="col w-1/2  ">
                        <h6>
                            Sở thích
                        </h6>
                        <p>
                            Nghe nhạc, chơi game, bơi lội, ăn uống
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>