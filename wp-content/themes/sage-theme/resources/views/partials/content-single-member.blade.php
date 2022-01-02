<?php
// foreach ($post as $test) {
//     $mota = get_field('mota', $test->ID);
//     $image_avt = get_field('personal_image', $test->ID);
// }
// var_dump(App::getMemberInfo($post));
?>

{{-- Menu --}}
<div
    class="menu-info w-full z-1 md:w-60 px-2 bg-blue-500 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-27 md:h-screen md:border-r-2 md:border-gray-600">
    <div class="md:relative mx-auto lg:float-right">
        <ul class="list-none pl-5 flex justify-between flex-row md:flex-col text-center md:text-left">
            <li class="mr-3">
                <a href="#info"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                    <span class="pt-2 pr-3 block icomoon icon-user"></span>
                    <span class="pb-1 md:pb-0 text-base">Thông tin</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="#project"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                    <span class="pt-2 pr-3 block icomoon icon-folder"></span>
                    <span class="pb-1 md:pb-0 text-base">Dự án</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="#ability"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                    <span class="pt-2 pr-3 block icomoon icon-trophy"></span>
                    <span class="pb-1 md:pb-0 text-base">Năng lực</span>
                </a>
            </li>
            <li class="mr-3">
                <a href="#contact"
                    class="md:w-50 self-center inline-block md:inline-flex py-1 md:py-3 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                    <span class="pt-2 pr-3 block icomoon icon-mail-envelope-closed2"></span>
                    <span class="pb-1 md:pb-0 text-base">Liên hệ</span>
                </a>
            </li>
        </ul>
    </div>
</div>

{{-- Info --}}
<section id="info" class="info md:ml-60 -mt-40">
    <div class="container">
        <div class="pb-4 text-center">
            <h1>{{ App::getMemberInfo($post)->name }}</h1>
            <p> {{ App::getMemberInfo($post)->des }} </p>
            <div class="info-table row justify-center">
                <!-- nội dung trái-->
                <div class="col md:w-4/5 lg:w-1/2">
                    <img class="rounded-3xl" src=" {{ App::getMemberInfo($post)->avt['url'] }} "
                        alt="{{ App::getMemberInfo($post)->avt['alt'] }}">
                </div>
                <!-- nội dung phải -->
                <div class="info-table-content col mt-10 md:w-4/5 lg:w-1/2">
                    <div class="row">
                        <div class="col w-1/2">
                            <h6>
                                Họ tên
                            </h6>
                            <p>
                                {{ App::getMemberInfo($post)->name }}
                            </p>
                        </div>
                        <div class="col w-1/2 ">
                            <h6>
                                Ngày sinh
                            </h6>
                            <p>
                                {{ App::getMemberInfo($post)->dateOB }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w-1/2 ">
                            <h6>
                                Giới tính
                            </h6>
                            <p>
                                {{ App::getMemberInfo($post)->sex }}

                            </p>
                        </div>
                        <div class="col w-1/2  ">
                            <h6>
                                Sở thích
                            </h6>
                            <p>
                                {{ App::getMemberInfo($post)->hobby }}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="h-50"></div>
{{-- Ability --}}

<?php 
    $ability = App::getMemberInfo($post)->ability;
?>

<section id="ability" class="md:ml-60">
    <div class="container">
        <div class="pb-4 text-center">
            <h2> Năng lực </h2>    
        </div>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="ability-content grid gap-8 sm:mx-auto md:grid-cols-2 lg:max-w-full lg:grid-cols-3">            
               
                @foreach ($ability as $item)
                <div class="flex justify-center">
                    <div class="sm:mr-4">
                        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
                            <svg class="w-12 h-12" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                        </div>
                    </div>
                    <div>
                        {!! $item['title'] !!}               
                        <ul class="p-0 grid grid-cols-2 gap-x-10">
                            @foreach ($item['att'] as $item1)                                        
                            <li class="flex items-start">
                                <span class="mr-1 mt-4">
                                    <svg class="w-5 h-5 mt-px" stroke="currentColor" viewBox="0 0 52 52">
                                        <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                                            fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </span>
                                {!! $item1['attribute'] !!}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="h-50"></div>

{{-- Project --}}
<?php 
    $project = App::getMemberInfo($post)->project;
?>

<section id="project" class="mod-banner md:ml-60">
    <div class="container">
        <div class="pb-4 text-center">
            <h2> Các dự án đã thực hiện </h2>
        </div>
        <div class="grid gap-16 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            
            @foreach ($project as $item2)           
            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-xl max-w-[410px]">                       
                <a href="{!! $item2['link_project']['url'] !!}">
                    <img src="{!! $item2['img_project']['url']!!}"
                        class="object-cover w-full h-[256px]" alt="{!! $item2['img_project']['alt'] !!}" />
                </a>

                <div class="p-5 border border-t-0">
                    <p class="mb-3 text-base font-semibold tracking-wide uppercase">                      
                        <span class="text-gray-600">{!! $item2['start'] !!} </span>
                        <span>-</span>
                        <span class="text-gray-600"> {!! $item2['end'] !!}</span>
                    </p>             
                    {!! $item2['content'] !!}
                    <div class="flex">
                        @foreach ($item2['link_member'] as $item3)                   
                        <a href="{!! $item3['link']['url'] !!}" class="mr-5">
                            <img src="{!! $item3['img']['url'] !!}" alt="{!! $item3['img']['alt'] !!}"
                                class="object-cover w-20 h-20 rounded-full shadow-sm" />
                        </a>
                        @endforeach
                    </div>
                </div>
            </div> 
            @endforeach   
        </div>
    </div>
</section>

<div class="h-50"></div>

{{-- Contact --}}

<section id="contact" class="md:ml-60 bg-footer bg-cover h-440 bg-no-repeat">
    <div class="container pt-95">
        <div class="pb-4 text-center">
            <h2>
                Liên hệ
            </h2>
        </div>
        <div class="grid row-gap-6b grid-cols-2">
            <div class="space-y-2 mx-auto ">
                <div class="flex">
                    <div class="text-2xl pr-6 self-center p-2">
                        <span class="icomoon icon-icon-phone"></span>
                    </div>
                    <div class="contact-content">
                        <p>Điện thoại:</p>
                        <a href="tel:0356827189" aria-label="Our phone" title="Our phone"
                            class="transition-colors duration-300">
                            0356827189
                        </a>
                    </div>
                </div>

                <div class="flex">
                    <div class="text-2xl pr-6 self-center p-2">
                        <span class="icomoon icon-mail-envelope-closed2"></span>
                    </div>
                    <div class="contact-content">
                        <p>Email:</p>
                        <a href="#" aria-label="Our email" title="Our email"
                            class="transition-colors duration-300">
                            leminhlong11b7@gmail.com
                        </a>
                    </div>
                </div>
                <div class="flex">
                    <div class="text-2xl pr-6 self-center p-2">
                        <span class="icomoon icon-icon-map"></span>
                    </div>
                    <div class="contact-content">
                        <p>Địa chỉ:</p>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                            aria-label="Our address" title="Our address"
                            class="transition-colors duration-300">
                            Cam Lâm, Khánh Hòa
                        </a>
                    </div>
                </div>
            </div>
            <div class="space-y-2 mx-auto ">
                <span class=" font-bold tracking-wide text-gray-900">
                    Mạng xã hội
                </span>
                <div class="flex justify-around items-center mt-1 space-x-3">
                    <a href="#" class="no-underline"><span class="icomoon icon-facebook"></span></a>
                    <a href="#" class="no-underline"><span class="icomoon icon-twitter"></span></a>
                    <a href="#" class="no-underline"><span class="icomoon icon-instagram"></span></a>
                    <a href="#" class="no-underline"><span class="icomoon icon-linkedin2"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
