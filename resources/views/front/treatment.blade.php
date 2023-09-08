@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]" style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          @lang('main.treatment_in_germany')
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">@lang('main.home')</a>
          -
          <span class="text-[20px]">@lang('main.treatment_in_germany')</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3 pb-6 ">
      @foreach($pages as $page)
        
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="text-content">
          {!! $page->{'content_' . app()->getLocale()} !!}
        </div>

        <!-- video start -->
        {{-- <div id="videoWrapper"
          class="back-video w-full mx-auto max-sm:h-[300px] sm:h-[400px] md:h-[500px]  cursor-pointer mt-10 relative">
          <div class="video-play-wrapper absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" class="max-sm:w-[30px] max-sm:h-[30px] w-[40px] h-[40px]"
              viewBox="0 0 60 60" fill="none">
              <circle cx="30" cy="30" r="30" fill="white" />
              <path d="M38 30L26 36.9282L26 23.0718L38 30Z" fill="#D60000" />
            </svg>
          </div>
          <a data-fancybox href="./src/public/videos/video.mp4" class="w-full h-full">
            <img id="videoImg" class="w-full h-full object-cover" src="./src/public/images/video-img.png" />
          </a>
        </div> --}}
        <!-- video end -->

      </div>
      @endforeach
    </div>
    <!-- main end -->

    @endsection