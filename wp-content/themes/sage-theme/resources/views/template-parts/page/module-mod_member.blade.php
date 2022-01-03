<section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 fadeInUp">
    <div class="container">
<<<<<<< HEAD
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4 list-posts">    
            @foreach ($data->member->posts as $mem)
                <div class="max-w-[312px]">
                    <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-[224] md:h-[256px] xl:h-[320px]" src="{!! $mem->img['url'] !!}" alt="Person" />
                        <div class="member-info absolute inset-0 flex flex-col justify-center px-10 py-8 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <a href="{!! $mem->mem_link['url'] !!}">
                                {!! $mem->mem_link['title'] !!}
=======
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">    
            @foreach ($data->module['content'] as $value)
            <div class="max-w-[312px]">
                <div
                    class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                    <img class="object-cover imgmb w-full h-[224] md:h-[256px] xl:h-[320px]" src="{!!$value->image->url!!}" alt="Person" />
                    <div
                        class="member-info absolute inset-0 flex flex-col justify-center px-10 py-8 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                        <a href="{!! $value->link_member->url!!}">
                            {!! $value->link_member->title!!}
                        </a>
                        {!! $value->about_us!!}
                        <div class="flex items-center justify-center space-x-3">
                            <a class="p-6" href="{!! $value->instagram->url!!}" rel="noreferrer" target="_blank"
                                class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="instagram link" class="icomoon h-8" />
                            </a>
                            <a class="p-6" href="{!! $value->facebook->url!!}" rel="noreferrer" target="_blank"
                                class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="facebook link" class="icomoon h-8" />
                            </a>
                            <a class="p-6" href="{!! $value->git->url!!}" rel="noreferrer" target="_blank"
                                class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/githuub_blue.svg" alt="github link" class="icomoon h-8" />
>>>>>>> d0a6412e24e000c9fec52e16f0234ba19a6ac4f1
                            </a>
                            {!! $mem->about_me !!}
                            <div class="flex items-center justify-center space-x-3">
                                @foreach ($mem->mem_social as $social)
                                    <a class="p-6" href="{{ $social['link']['url'] }}" rel="noreferrer" target="{{ $social['link']['target'] }}"
                                        class="text-white transition-colors duration-300 hover:text-teal-accent-400 px-4">
                                        <img src="{{ $social['icon']['url'] }}" alt="instagram link" class="h-8" />
                                    </a>
                                @endforeach                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn- mx-auto block btn-loadmore mt-10" data-page="2">Xem thêm</button>
    </div>
</section>