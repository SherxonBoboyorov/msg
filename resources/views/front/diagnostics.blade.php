@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]" style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          @lang('main.diseases_diagnostics')
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">@lang('main.home')</a>
          -
          <span class="text-[20px]">@lang('main.diseases_diagnostics')</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3 pb-6">
      <div class="main-content mx-auto max-w-screen-xl py-7 sm:py-16">
        @foreach($diseases as $disease)
        <div class="text-content">
          {!! $disease->{'content_' . app()->getLocale()} !!}
        </div>
        @endforeach


        <div class="cards mt-6 mb-3">
          @foreach($diagnostics as $diagnostic)
          <div class="card p-7 max-sm:p-5 rounded-md shadow-[0_2px_14px_0_rgba(0,0,0,0.10)]" style="margin-bottom: 30px">
            <div class="title w-fit flex items-center">
              <div class="w-[40px] h-[40px] max-sm:w-[30px] max-sm:h-[30px] mr-3 truncate">
                <img src="{{ asset($diagnostic->image) }}" class="w-full h-full" alt="">
              </div>
              <div class="text text-[20px] max-sm:text-[16px] font-[600]">{{ $diagnostic->{'title_' . app()->getLocale()} }}</div>
            </div>
            <div class="description mt-3 text-[20px] max-sm:text-[16px]">
              {!! $diagnostic->{'content_' . app()->getLocale()} !!}
            </div>
          </div>

          @endforeach
        </div>

      </div>
    </div>
    <!-- main end -->

 @endsection