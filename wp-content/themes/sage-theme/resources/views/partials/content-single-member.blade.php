<?php
// foreach ($post as $test) {
//     $mota = get_field('mota', $test->ID);
//     $image_avt = get_field('personal_image', $test->ID);
// }
// var_dump(App::getMemberInfo($post));
?>
<section id="info" class="info md:ml-60 mt-50">
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

{{-- Project --}}
<?php 
    $project = App::getMemberInfo($post)->project;
?>

<section id="project" class="mod-banner">
    <div class="container">
        <hr class="w-full my-8 border-gray-300" />
        <div class="pb-4 text-center">
            <h2> Các dự án đã thực hiện </h2>
        </div>
        <hr class="w-full my-8 border-gray-300" />
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