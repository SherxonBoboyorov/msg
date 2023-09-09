@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]"
      style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          @lang('main.faq')
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">@lang('main.home')</a>
          -
          <span class="text-[20px]">@lang('main.faq')</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="accordion w-full py-5 mx-auto bg-[white]">
          <div class="w-full mx-auto" x-data="{selected:null}">
            @foreach($faqs as $faq)
              
            <div class="accordion-item">
              <button type="button" class="w-full py-3 p-5 flex justify-between transition-all duration-100 ease-linear"
                @click="selected !== {{ $faq->id }} ? selected = {{ $faq->id }} : selected = null"
                x-bind:style="selected == {{ $faq->id }} ? 'background: #D60000' : 'background: white'">
                <div x-bind:style="selected == {{ $faq->id }} ? 'color: white' : 'color: black'"
                  class="title transition-all text-left duration-100 ease-linear sm:text-[18px] max-sm:text-[16px] font-[600]">
                  {{ $faq->{'title_' . app()->getLocale()} }}
                </div>
              </button>

              <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container{{ $faq->id }}"
                x-bind:style="selected == {{ $faq->id }} ? 'max-height: ' + $refs.container{{ $faq->id }}.scrollHeight + 'px' : ''">
                <div class="p-5 py-3 sm:text-[16px] text-dimgray max-sm:text-[14px] text-description-accordion">
                  <p>
                   {!! $faq->{'content_' . app()->getLocale()} !!}
                  </p>
                </div>
              </div>
            </div>

            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- main end -->

@endsection