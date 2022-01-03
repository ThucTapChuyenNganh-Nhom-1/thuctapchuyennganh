<footer class="mod-footer fadeIn_1 -mb-50">
    <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-[1280px] md:px-24 lg:px-8 ">
        <div class="footer-input_mail w-2/4 text-center mx-auto text-sm hidden xl:block md:block lg:block">
            <div class="col-lg-8 offset-lg-2">
                <div class="xl:text-2xl md:text-2xl lg:text-4xl font-bold lg:mb-10">
                    <h2>Tham gia danh sách gửi thư của chúng tôi để nhận tin tức &amp; xu hướng mới nhất</h2>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <form id="search" action="#" method="GET">
                    <div class="flex justify-center">
                        <div class="">
                            <fieldset class=" fieldset w-[160px] md:w-[320px] text-sm lg:text-xl">
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
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <img class="logonhom1" alt="Logo footer"  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_nhomwhile.png" />
                </a>
                <div class="mt-6 lg:max-w-sm">
                    <p>
                        Nhóm thực tập sinh 5 người, đến từ Đại học Nha Trang và đang thực hiện đề tài tại 9thWonder.
                    </p>
                </div>
            </div>
            <div class="footer-contact text-sm">
                <p>
                    Liên hệ
                </p>
                <div class="contact_item mx-auto pb-4">

                    <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone"
                        class="transition-colors duration-300 text-deep-purple-accent-400 text-white hover:text-deep-purple-800">
                        Điện thoại: 850-123-5021
                    </a>
                </div>
                <div class="contact_item pb-4">

                    <a href="mailto:info_nhom1@gmail.com" aria-label="Our email" title="Our email"
                        class="transition-colors duration-300 text-deep-purple-accent-400 text-white hover:text-deep-purple-800">
                        Email: info_nhom1@gmail.com
                    </a>
                </div>
                <div class="contact_item pb-4">

                    <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                        aria-label="Our address" title="Our address"
                        class="transition-colors text-white duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                        Địa chỉ: Số 2 Nguyễn Đình Chiểu, Vĩnh Thọ, Thành phố Nha Trang, Khánh Hòa
                    </a>
                </div>
            </div>
            <div class="footer-social">
                <span>
                    Mạng xã hội
                </span>
                <div class="flex items-center mt-1 space-x-3 justify-center md:justify-start">
                    <a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-400 px-2">
                        <img alt="instagram link" class="icomoon" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" />

                    </a>
                    <a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-400 px-2">
                        <img alt="facebook link" class="icomoon" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" />
                    </a>
                    <a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-400 px-2">
                        <img alt="youtube link" class="icomoon" src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.svg" />
                    </a>
                    <a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-400 px-2">
                        <img alt="github link" class="icomoon" src="<?php echo get_template_directory_uri(); ?>/assets/images/github.svg" />
                    </a>
                </div>
                <p>
                    Theo dõi bài viết và các dự án trên các trang mạng xã hội cùng chúng tôi.
                </p>
            </div>
        </div>
        
        <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row p-0">
            <p class="text-sm text-white">
                © Copyright 2021 by Nhóm 1. All rights reserved.
            </p>
            <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                <li>
                    <a href="/"
                        class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                        F.A.Q
                    </a>
                </li>
                <li>
                    <a href="/"
                        class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="/"
                        class="text-sm text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                        Terms &amp; Conditions
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
