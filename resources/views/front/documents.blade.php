@extends('layouts.front')

@section('content')
    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]"
      style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          Documents
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">Main</a>
          -
          <span class="text-[20px]">Documents</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3  py-7 sm:py-16">
      <div class="main-content mx-auto max-w-screen-xl">
        @foreach($contents as $content)
        <div class="text-content">
          {!! $content->{'content_' . app()->getLocale()} !!}
        </div>
        <div class="card-wrapper my-7 w-full">
          @foreach($categories as $category)
          <div class="card w-full border-t-2 py-7 h-fit">
            <div class="title text-[20px] font-[600] w-full">{{ $category->{'title_' . app()->getLocale()} }}</div>
            @foreach($category->documents as $document)
            <div class="text my-2 text-[16px] overflow-hidden flex items-center">
              <div class="truncate w-fit">{{ $document->{'title_' . app()->getLocale()} }}</div>
              <a href="{{ $document->image }}" download class="ml-3 w-fit font-[900] text-cred">Download</a>
            </div>
            @endforeach
          </div>
          @endforeach
        </div>
        <!-- main end -->
        @endforeach
      </div>
    </div>

  @endsection