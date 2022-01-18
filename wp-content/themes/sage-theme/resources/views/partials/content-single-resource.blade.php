<?php
$project = App::getResourceInfo($post)->project;
?>
<section id="project">
    <div class="container">
        <hr class="w-full my-8 gray-300" />
        <div class="pb-4 text-center">
            <h2> Các dự án đã thực hiện 123 </h2>
        </div>
        <hr class="w-full my-8 gray-300" />
        <div class="grid gap-16 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($project as $item2)
                <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-xl max-w-[410px]">
                    <a href="{!! $item2['link_project']['url'] !!}" target="{{ $item2['link_project']['target'] }}">
                        <img src="{{ empty($item2['image_project']['url']) ? img_project : $item2['image_project']['url'] }}"
                            class="object-cover project w-full h-[256px] zoom" alt="{!! $item2['image_project']['alt'] !!}" />
                    </a>

                    <div class="p-5 border border-t-0">
                        <p class="mb-3 text-base font-semibold tracking-wide uppercase">
                            <span class="text-gray-600">{!! $item2['start'] !!} </span>
                            <span>-</span>
                            <span class="text-gray-600"> {!! $item2['end'] !!}</span>
                        </p>
                        {!! $item2['content'] !!}
                        <div class="flex project-a afmp">
                            @foreach ($item2['link_member'] as $item3)
                                <a href="{!! $item3['link']['url'] !!}" class="mr-5">
                                    <img src="{{ empty($item3['image']['url']) ? img_avt : $item3['image']['url'] }}"
                                        alt="{!! $item3['image']['alt'] !!}"
                                        class="object-cover member-project w-20 h-20 rounded-full shadow-sm" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr class="w-full my-8 gray-300" />
        <div class="pb-4 text-center">
            <a href="{!! App::getResourceInfo($post)->link_home['url'] !!}">
                <h3>Trở Về Trang Chủ</h3>
            </a>
        </div>
        <hr class="w-full my-8 gray-300" />
    </div>
</section>
