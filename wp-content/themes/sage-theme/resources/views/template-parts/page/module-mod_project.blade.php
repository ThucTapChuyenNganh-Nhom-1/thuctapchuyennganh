<?php
$project = $data->resource->posts;
$i = 0;
?>
<section class="mod-project">
    <div class="container">
        <hr class="w-full my-8 border-gray-300" />
        <div class="pb-4 text-center">
            <h2> Các dự án đã thực hiện </h2>
        </div>
        <hr class="w-full my-8 border-gray-300" />
        <div
            class="grid gap-16 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-full down_md:max-w-sm mx-auto project_tex">
            @foreach ($project[0]->project as $item2)
                <div
                    class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-xl flex flex-col justify-between">
                    <a href="{!! $item2['link_project']['url'] !!}" target="{{ $item2['link_project']['target'] }}"
                        rel="noreferrer">
                        <img src="{{ IMG_BASE64 }}" alt="{!! $item2['image_project']['url'] !!}"
                            class=" object-cover project w-full h-[190px] zoom lazy" data-src="{!! empty($item2['image_project']['url']) ? img_project : $item2['image_project']['url'] !!}">
                    </a>
                    <div class="p-5 border border-t-0">
                        <p class="mb-3 text-base font-semibold tracking-wide uppercase">
                            <span class="text-gray-600">{!! $item2['start'] !!} </span>
                            <span>-</span>
                            <span class="text-gray-600"> {!! $item2['end'] !!}</span>
                        </p>
                        {!! $item2['content'] !!}
                    </div>
                    <div class="flex project-a afmp pl-5 pb-5">
                        @foreach ($item2['link_member'] as $item3)
                            <a href="{!! $item3['link']['url'] !!}" class="mr-5">
                                <img src="{{ IMG_BASE64 }}" alt="{!! $item3['image']['alt'] !!}"
                                    class="object-cover member-project w-20 h-20 rounded-full shadow-sm lazy"
                                    data-src=" {{ empty($item3['image']['url']) ? img_avt : $item3['image']['url'] }}">
                            </a>
                        @endforeach
                    </div>
                </div>
                @if ($i >= 5) @break @endif
                <?php $i++; ?>
            @endforeach
        </div>
        <hr class="w-full my-8 border-gray-300" />
        <div class="pb-4 text-center">
            <a href="{!! $data->module['link']->url !!}">
                <h4>{!! $data->module['link']->title !!} <span class="icomoon icon-chevron-right relative top-1"></span></h4>
            </a>
        </div>
        <hr class="w-full my-8 border-gray-300" />
    </div>
</section>
