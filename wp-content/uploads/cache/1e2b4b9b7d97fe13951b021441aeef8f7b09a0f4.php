<header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden">
    <div class="container">
        <nav class="row navbar items-center">
            <div
                class="col w-full down_lg:flex down_lg:flex-wrap lg:w-1/5 header-mobile relative justify-between items-center">
                <div class="lg:w-full relative">
                    <a id="header-logo" class="navbar-brand header-logo py-5 inline-block align-middle"
                        href="<?php echo App::getLogo()['href']; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_nhom1.png" class="w-full">
                    </a>
                </div>
                <div class="block lg:hidden">
                    <button class="navbar-toggler hamburger-menu p-4 mt-0 cursor-pointer" type="button"
                        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar block bg-blue-500 relative ml-auto w-16 h-2"></span>
                        <span class="icon-bar block bg-blue-500 relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="icon-bar block bg-blue-500 relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="sr-only">Open Menu</span>
                    </button>
                </div>
            </div>

            <div class="col w-full lg:w-4/5 navbar-collapse main-menu flex flex-col justify-between" id="main-menu"
                data-module="menu">
                <ul
                    class="main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
        lg:flex-row lg:justify-end">
                    <li class="menu-item mb-0 ">
                        <a class="block py-9 lg:p-9 no-underline text-black" href="#">TRANG CHỦ</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline text-black" href="#">GIỚI THIỆU</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline text-black" href="#">DỰ ÁN</a>
                    </li>

                    <li class="active menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline text-black" href="#">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>