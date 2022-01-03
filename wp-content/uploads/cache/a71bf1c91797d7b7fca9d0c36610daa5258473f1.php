<section class="mod-banner bg_content mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 mt-[-210px]">
    <div class="container">
        <div class="row show-up ">
            <div class="left-banner col pr-0 lg:p-10 slideInLeft self-center w-full lg:w-6/12">
                <a href="/" aria-label="Go Home" title="Logo" class="inline-block mb-5">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
                        <svg class="icomoon cw-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon strokeWidth="3" strokeLinecap="round" strokeLinejoin="round" fill="none"
                                points="29 13 14 29 25 29 23 39 38 23 27 23" />
                        </svg>
                    </div>
                </a>
                
                <?php echo $data->module['content']; ?>


                <hr class="mb-5 border-gray-300" />

                
                <div class="flex items-center justify-center lg:justify-start ls_icon space-x-6">
                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400 px-5">
                        <img alt="instagram link" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" class="icomoon h-15" />
                    </a>
                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400 px-5">
                        <img alt="facebook link" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" class="icomoon h-14" />
                    </a>
                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400 px-5">
                        <img alt="youtube link" src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" class="icomoon h-16" />
                    </a>
                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400 px-5">
                        <img alt="github link" src="<?php echo get_template_directory_uri(); ?>/assets/images/github.svg" class="icomoon h-16" />
                    </a>
                </div>
            </div>
            <div class="col slideInRight w-full lg:w-6/12 right-banner">
                <img src="<?php echo $data->module['image']->url; ?>" alt="<?php echo $data->module['image']->alt; ?>" />
            </div>
        </div>
    </div>
</section>
