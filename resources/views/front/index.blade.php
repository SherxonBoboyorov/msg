@extends('layouts.front')

@section('content')

    <!-- main start -->
    <div class="main w-full mx-auto">
      <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full mx-auto [@media(min-width:880px)]:h-[650px]  [@media(min-width:768px)]:h-[550px] [@media(min-width:576px)]:h-[400px] [@media(max-width:576px)]:h-[320px]">
        <div class="swiper mySwiper w-full h-full mx-auto">
          <div class="swiper-wrapper w-full h-full mx-auto">
            @foreach($sliders as $slider)
            <div class="swiper-slide w-full h-full mx-auto relative">
              <img src="{{ asset($slider->image) }}" class="w-full h-full object-cover" />
              <div class="text-block absolute  [@media(max-width:1400px)]:px-16 left-1/2 top-1/2 -translate-x-1/2  -translate-y-1/2 max-w-screen-xl h-full w-full flex justify-start items-center">
                <div class="text-content w-fit h-fit">
                  <div class="title md:text-[60px] sm:text-[40px] max-sm:text-[30px] h-fit text-white font-[700]">
                     {{ $slider->{'title_' . app()->getLocale()} }}
                  </div>
                  <div class="description text-[20px] max-sm:text-[16px] text-white"> {{ $slider->{'content_' . app()->getLocale()} }}</div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-button-next md:right-[20px] max-md:right-[10px]"></div>
          <div class="swiper-button-prev md:left-[20px] max-md:left-[10px]"></div>
          <div class="swiper-pagination bottom-[60px] max-w-screen-xl mx-auto [@media(max-width:1400px)]:px-16 left-0 right-0 m-0 flex justify-start items-center">
          </div>
        </div>
      </div>

      <div class="what-we-do h-fit max-w-screen-xl px-4 mx-auto [@media(max-width:850px)]:my-10 [@media(min-width:850px)]:my-20">
        @foreach($companies as $company)
        <div class="flex justify-between items-center flex-wrap [@media(min-width:850px)]:h-[500px] [@media(max-width:850px)]:h-fit">
          <div class="col [@media(max-width:850px)]:mb-2 pb-3 [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full h-fit flex justify-start items-center">
            <div class="text-content">
              <div class="title text-[40px]  font-[700] max-sm:text-[32px]">
                @lang('main.about_company')
              </div>

              <div class="mt-5 mb-7 decription max-h-[340px] text-[16px] max-sm:text-[14px] overflow-hidden">
                 {!! $company->{'content_' . app()->getLocale()} !!} 
              </div>

              <a href="{{ route('about') }}" class="uppercase bg-cyellow px-5 py-3 rounded-lg text-[14px] max-sm:text-[15px] font-[500]">
              @lang('main.more')
              </a>
            </div>
          </div>

          <div class="col overflow-hidden [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full [@media(min-width:850px)]:h-full [@media(min-width:768px)]:h-[500px] [@media(min-width:576px)]:h-[400px] [@media(max-width:576px)]:h-[300px]">
            <img src="{{ asset($company->image) }}" alt="" class="w-full h-full object-cover" />
          </div>
        </div>
        @endforeach
      </div>

      <div class="services px-1 pt-10 pb-12 bg-[#F6F6F6] w-full mx-auto">
        <div class="title text-[40px] text-center font-[700] max-sm:text-[32px]">
          @lang('main.services')
        </div>

        <div class="servises-wrapper mx-auto max-w-screen-xl mt-5 w-full flex flex-wrap">


          <div class="servises text-center [@media(max-width:576px)]:w-full [@media(min-width:576px)]:w-1/2 [@media(min-width:768px)]:w-1/3 [@media(min-width:992px)]:w-1/4 p-3">
            <div class="services-content flex min-h-full flex-col w-full h-full bg-white rounded-md shadow-[0_2px_14px_0px_rgba(0,0,0,0.10)] px-5 py-7">
              <div class="body w-full mb-3">
                <div class="icon mx-auto w-[80px] h-[80px]">
                  <img src="{{ asset('front/src/public/icons/services-icon-1.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="text text-[20px] mt-5 font-[500]">@lang('main.treatment_in_germany')</div>
              </div>
              <a href="{{ route('treatment') }}" class="more w-fit mx-auto flex justify-center items-center text-cred mt-auto uppercase font-[600]">
                @lang('main.more')
                <span class="ml-2 mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                    <path d="M1 11L6.02092 6L1 1" stroke="#D60000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="servises text-center [@media(max-width:576px)]:w-full [@media(min-width:576px)]:w-1/2 [@media(min-width:768px)]:w-1/3 [@media(min-width:992px)]:w-1/4 p-3">
            <div class="services-content flex min-h-full flex-col w-full h-full bg-white rounded-md shadow-[0_2px_14px_0px_rgba(0,0,0,0.10)] px-5 py-7">
              <div class="body w-full mb-3">
                <div class="icon mx-auto w-[80px] h-[80px]">
                  <img src="{{ asset('front/src/public/icons/diagnostics-icon.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="text text-[20px] mt-5 font-[500]">@lang('main.diseases_diagnostics')</div>
              </div>
              <a href="{{ route('diagnostics') }}" class="more w-fit mx-auto flex justify-center items-center text-cred mt-auto uppercase font-[600]">
                @lang('main.more')
                <span class="ml-2 mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                    <path d="M1 11L6.02092 6L1 1" stroke="#D60000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="servises text-center [@media(max-width:576px)]:w-full [@media(min-width:576px)]:w-1/2 [@media(min-width:768px)]:w-1/3 [@media(min-width:992px)]:w-1/4 p-3">
            <div class="services-content flex min-h-full flex-col w-full h-full bg-white rounded-md shadow-[0_2px_14px_0px_rgba(0,0,0,0.10)] px-5 py-7">
              <div class="body w-full mb-3">
                <div class="icon mx-auto w-[80px] h-[80px]">
                  <img src="{{ asset('front/src/public/icons/information-icon.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="text text-[20px] mt-5 font-[500]">@lang('main.information_for_patients')</div>
              </div>
              <a href="{{ route('information') }}" class="more w-fit mx-auto flex justify-center items-center text-cred mt-auto uppercase font-[600]">
                @lang('main.more')
                <span class="ml-2 mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                    <path d="M1 11L6.02092 6L1 1" stroke="#D60000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </a>
            </div>
          </div>


          <div class="servises text-center [@media(max-width:576px)]:w-full [@media(min-width:576px)]:w-1/2 [@media(min-width:768px)]:w-1/3 [@media(min-width:992px)]:w-1/4 p-3">
            <div class="services-content flex min-h-full flex-col w-full h-full bg-white rounded-md shadow-[0_2px_14px_0px_rgba(0,0,0,0.10)] px-5 py-7">
              <div class="body w-full mb-3">
                <div class="icon mx-auto w-[80px] h-[80px]">
                  <img src="{{ asset('front/src/public/icons/doctor-icon.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="text text-[20px] mt-5 font-[500]">@lang('main.trainings_for_medical_personnel')</div>
              </div>
              <a href="{{ route('doctor') }}" class="more w-fit mx-auto flex justify-center items-center text-cred mt-auto uppercase font-[600]">
                @lang('main.more')
                <span class="ml-2 mt-0.5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                    <path d="M1 11L6.02092 6L1 1" stroke="#D60000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      @include('alert')


      <div class="form px-4 md:pt-16 max-md:pt-10 md:pb-20 max-md:pb-14  w-full mx-auto h-fit bg-cover bg-no-repeat" style="background-image: url('{{ asset('front/src/public/images/contact-back-img.png') }}')">
        <div class="title text-[40px] text-center font-[700] max-sm:text-[32px]">
          @lang('main.contact_us')
        </div>

        <div class="form-content mx-auto max-w-screen-md">
          <form method="POST" action="{{ route('contact-form.store') }}" class="my-3">
            {{ csrf_field() }}
            <div class="input-content">
              <input name="fullname" type="text" class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white" placeholder="@lang('main.name_and_surname')" required>
              <input name="gmail" type="email" class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white" placeholder="@lang('main.email')" required>
              <input name="phone_number" type="text" class="w-full border contact-input-number border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white" placeholder="@lang('main.phone_number')" required>
              <textarea name="comment" type="text" rows="4" class="w-full border contact-input-number border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white" placeholder="@lang('main.your_message')"required></textarea>
            </div>
            <div class="upload mt-1 mb-5 w-full">
              <input name="file" type="file" class="hidden" onchange="takeFileName(event)" id="file">
              <label id="fileLabel" for="file" class="cursor-pointer rounded-lg shadow-[0_2px_14px_0_rgba(0,0,0,0.10)] block bg-white truncate py-3 px-5 text-[14px] font-[600] uppercase" required>
                @lang('main.ipload_the_medical_reports')
              </label>
            </div>
            <div class="privacy-policy flex justify-between items-start">
              @foreach(\App\Models\Department::take(1)->get() as $department)
              {{-- <a href="{{ route('department-informations', $department->{'slug_' . app()->getLocale()}) }}"> --}}
                <div class="text text-[15px] text-black mr-[60px]">
                  @lang('main.i_have_read') <span class="text-cred font-[700]"><a href="{{ route('department-informations', ['id' => 1]) }}">@lang('main.privacy_policy')</a></span> @lang('main.and_agree_following')
                  <span class="text-cred font-[700]"><a href="{{ route('department-informations', ['id' => 4]) }}">@lang('main.collection_of_personal_policy')</a> </span>
                 @lang('main.einverstanden')
                </div>
               {{-- </a> --}}
              @endforeach
              <div class="radio-buttons  [@media(max-width:576px)]:ml-[38px] flex w-[35px] justify-between">
                <div class="form-group ">
                  <input type="checkbox" id="privacy-yes"/>
                  <label for="privacy-yes">@lang('main.yes')</label>
                </div>
              </div>
            </div>
            <div class="auth mt-3 flex justify-between items-start flex-wrap  ">
              <div class="text text-[17px] text-black [@media(max-width:576px)]:w-full mb-2">
                @lang('main.authorization_for_third_parties')<span class="text-cred">*</span>
              </div>
              <div class="radio-buttons [@media(max-width:576px)]:ml-[38px] mr-2 flex w-[120px] justify-between">
                <div class="form-group">
                  <input type="radio" id="yes" name="bolean" checked/>
                  <label for="yes">@lang('main.yes')</label>
                </div>

                <div class="form-group">
                  <input type="radio" id="female" name="bolean"/>
                  <label for="female">@lang('main.no')</label>
                </div>
              </div>
            </div>
            <div class="button-content mt-7 w-full flex justify-center items-center">
              <button id="submitFormBtn" type="submit" disabled class="border-none rounded-md disabled:opacity-[0.7] text-[12px] font-[600] bg-cyellow uppercase py-3 px-7">
                @lang('main.send') </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- main end -->

    @endsection
   