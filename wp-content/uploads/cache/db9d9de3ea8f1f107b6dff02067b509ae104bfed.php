<header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden fadeInDown">
    <div class="container">
        <nav class="row navbar items-center">
            <div
                class="col w-full down_lg:flex down_lg:flex-wrap lg:w-1/5 header-mobile relative justify-between items-center">
                <div class="lg:w-full relative">
                    <a id="header-logo" class="navbar-brand header-logo py-5 inline-block align-middle"
                        href="<?php echo $data->module['logo']->link->url; ?>">
                        <img src="<?php echo $data->module['logo']->logo->url; ?>" class="logonhom1 w-full" alt="<?php echo $data->module['logo']->logo->alt; ?>">
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
                    <li class="menu-item mb-0 down_lg:text-center down_lg:mx-auto ">
                        <a class="block py-9 lg:px-9 lg:py-16 xl:py-15 font-semibold down_lg:w-125 no-underline text-black hover:text-blue-700 third after" href="#">TRANG CH???</a>
                    </li>
                    <li class="menu-item mb-0 down_lg:text-center down_lg:mx-auto">
                        <a class="block py-9 lg:px-9 lg:py-16 xl:py-15 font-semibold down_lg:w-125 no-underline text-black hover:text-blue-700 third after" href="#aboutus">GI???I THI???U</a>
                    </li>
                    <li class="menu-item mb-0 down_lg:text-center down_lg:mx-auto">
                        <a class="block py-9 lg:px-9 lg:py-16 xl:py-15 font-semibold down_lg:w-125 no-underline text-black hover:text-blue-700 third after" href="#projecthome">D??? ??N</a>
                    </li>
                    <li class="menu-item mb-0 down_lg:text-center down_lg:mx-auto">
                        <a class="block py-9 lg:px-9 lg:py-16 xl:py-15 font-semibold down_lg:w-125 no-underline text-black hover:text-blue-700 third after" href="#contacthome">LI??N H???</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
