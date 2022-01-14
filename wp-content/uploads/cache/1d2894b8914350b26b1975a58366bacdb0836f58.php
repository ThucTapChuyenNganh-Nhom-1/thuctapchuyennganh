<section class="mod-about_us px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="container">
        <div class="max-w-[640px] sm:text-center sm:mx-auto visible relative z-2">
            <?php echo $data->module['content']; ?>

            <img src="<?php echo e(IMG_BASE64); ?>" alt="<?php echo $data->module['image']->alt; ?>" class="w-14 text-center mx-auto mb-2 lazy"
                data-src="<?php echo $data->module['image']->url; ?>">
            <?php echo $data->module['sub_content']; ?>

            <hr class="w-full my-8 border-gray-300" />
        </div>
    </div>
</section>
