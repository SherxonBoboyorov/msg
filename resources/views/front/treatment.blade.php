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
    <div class="main w-full mx-auto px-3 pb-4">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        @foreach($pages as $page)
        <div class="h-fit max-w-screen-xl px-4 mx-auto  ">
          <div class="flex justify-between items-center flex-wrap [@media(min-width:850px)]:h-[500px] [@media(max-width:850px)]:h-fit">
            <div class="col [@media(max-width:850px)]:mb-2 pb-3 [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full h-fit flex justify-start items-center">
              <div class="text-content">
                <div class=" mb-7 decription max-h-[500px] text-[16px] max-sm:text-[14px] overflow-hidden">
                 {!! $page->{'sub_content_' . app()->getLocale()} !!}
                </div>
              </div>
            </div>

            <div class="col overflow-hidden [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full [@media(min-width:850px)]:h-full [@media(min-width:768px)]:h-[500px] [@media(min-width:576px)]:h-[400px] [@media(max-width:576px)]:h-[300px]">
              <img src="{{ asset($page->image) }}" alt="" class="w-full h-full object-cover" />
            </div>

          </div>
        </div>
        <div class="text-content my-6">
          <div class=" mb-7 decription max-h-[500px] text-[16px] max-sm:text-[14px] overflow-hidden">
            {!! $page->{'content_' . app()->getLocale()} !!}
          </div>
        </div>
        @endforeach
        <!-- main end -->
      </div>
    </div>

    @endsection