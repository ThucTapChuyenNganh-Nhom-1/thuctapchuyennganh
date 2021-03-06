<?php $i = 0; ?>
<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 fadeInUp">
    <div class="container">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4 list-posts down_sm:w-3/4 mx-auto">
            @foreach ($data->member->posts as $mem)
                <div
                    class="relative imgbh overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                    <img class="object-cover w-full h-107 2xl:h-157 lazy" src="{{ IMG_BASE64 }}"
                        data-src="{!! $mem->img['url'] !!}" alt="Person" />

                    {{-- <img src="{{ IMG_BASE64 }}" alt="Person"
                        class=" object-cover project w-full h-100 zoom lazy" 
                        data-src="{!! empty($item2['image_project']['url']) ? img_project : $item2['image_project']['url'] !!}"> --}}

                    <div
                        class="member-info absolute inset-0 flex flex-col justify-center px-10 py-8 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100 ">
                        <a href="{!! $mem->mem_link['url'] !!}">
                            {!! $mem->mem_link['title'] !!}
                        </a>
                        {!! $mem->about_me !!}
                        <div class="flex items-center justify-center space-x-3">
                            @foreach ($mem->mem_social as $social)
                                <a href="{{ $social['link']['url'] }}" rel="noreferrer"
                                    target="{{ $social['link']['target'] }}"
                                    class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4 p-6">
                                    <img src="{{ $social['icon']['url'] }}" alt="{{ $social['icon']['alt'] }}"
                                        class="h-8 iconow" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn- mx-auto block btn-loadmore mt-10" data-page="2">Xem th??m</button>
    </div>
</section>

<div id="projecthome"></div>
