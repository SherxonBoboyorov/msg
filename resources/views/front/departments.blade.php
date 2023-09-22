@extends('layouts.front')

@section('content')

    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]" style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          {{ $department->{'title_' . app()->getLocale()} }}
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">@lang('main.home')</a>
          -
          <span class="text-[20px]">{{ $department->{'title_' . app()->getLocale()} }}</span>
        </div>
      </div>
    </div>

    <div class="main w-full mx-auto px-3 pb-6">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="text-content">
          {!! $department->{'content_' . app()->getLocale()} !!}
        </div>
      </div>
    </div>

  @endsection