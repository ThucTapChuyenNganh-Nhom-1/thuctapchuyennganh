<section class="mod-banner bg_content mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl md:px-24 -mt-105">
    <div class="container">
        <div class="row show-up ">
            <div class="left-banner col pr-0 lg:p-10 slideInLeft self-center w-full lg:w-6/12 fadeInLeft itemh1">
                {{-- <a href="/" aria-label="Go Home" title="Logo" class="inline-block mb-5">
                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-indigo-50">
                        <svg class="icomoon w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon strokeWidth="3" strokeLinecap="round" strokeLinejoin="round" fill="none"
                                points="29 13 14 29 25 29 23 39 38 23 27 23" />
                        </svg>
                    </div>
                </a> --}}

                {!! $data->module['content'] !!}

                {{-- chưa đổ BE list icon --}}
                <div class="flex items-center justify-center lg:justify-start ls_icon space-x-6 ">
                    @foreach ($data->module['link'] as $value)
                        <a href="{!! $value->link->url !!}" target="{{ $value->link->target }}" rel="noreferrer"
                            class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400 px-5">
                            <img src="{{ IMG_BASE64 }}" alt="{!! $value->image->alt !!}" class="icomoon h-15 lazy"
                                data-src="{!! $value->image->url !!}">
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col slideInRight w-full lg:w-6/12 right-banner fadeInRight imgbh">
                <img src="{{ IMG_BASE64 }}" alt="{!! $data->module['image']->alt !!}" class=" lazy"
                    data-src="{!! $data->module['image']->url !!}">
            </div>
        </div>
    </div>
</section>
<div id="aboutus"></div>
