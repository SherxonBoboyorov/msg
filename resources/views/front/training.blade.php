@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]" style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          @lang('main.trainings_for_medical_personnel')
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">@lang('main.home')</a>
          -
          <span class="text-[20px]">@lang('main.trainings_for_medical_personnel')</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3 pb-6">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="buttons mb-7">
          <a href="{{ route('doctor') }}"
            class="border-none mb-2 mr-3 shadow-[0_2px_14px_0_rgba(0,0,0,0.10)] rounded-md text-cred text-[12px] max-sm:text-[10px] font-[600] py-3 px-7 max-sm:px-4 max-sm:py-2 uppercase transition-all duration-200 ease-linear hover:bg-cyellow hover:text-black [&.active]:bg-cyellow [&.active]:text-black">
            @lang('main.for_doctors')
          </a>
          <a href="{{ route('nurse') }}"
            class="border-none mb-2 mr-3  shadow-[0_2px_14px_0_rgba(0,0,0,0.10)] active rounded-md text-cred text-[12px] max-sm:text-[10px] font-[600] py-3 px-7 max-sm:px-4 max-sm:py-2 transition-all duration-200 ease-linear uppercase hover:bg-cyellow hover:text-black [&.active]:bg-cyellow [&.active]:text-black">
            @lang('main.for_nurses')
          </a>
         
        </div>
        @foreach($nurses as $nurse)
          
        <div class="text-content">
           {!! $nurse->{'content_' . app()->getLocale()} !!}
        </div>
        @endforeach
      </div>
    </div>
    <!-- main end -->

@endsection

