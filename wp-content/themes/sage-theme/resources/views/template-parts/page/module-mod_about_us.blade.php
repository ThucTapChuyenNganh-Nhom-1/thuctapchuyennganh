<section class="mod-about_us px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="container">
        <div class="max-w-[640px] sm:text-center sm:mx-auto fadeInDown visible relative z-2">
            {!! $data->module['content']!!}
            <img src="{!! $data->module['image']->url!!}" alt="{!! $data->module['image']->alt!!}" class="w-14 text-center mx-auto mb-2"/>
            {!! $data->module['sub_content']!!}
            <hr class="w-full my-8 border-gray-300" />
        </div>
    </div>
</section>