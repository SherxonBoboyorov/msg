@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]"
      style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          @lang('main.offer_cooperation')
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">@lang('main.home')</a>
          -
          <span class="text-[20px]">@lang('main.offer_cooperation')</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    @include('alert')

    <!-- main start -->
    <div class="main w-full mx-auto px-3 pb-6">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="form w-full mx-auto h-fit">
          <div class="form-content mx-auto w-full">
            <form action="{{ route('youSave') }}" class="my-3" method="POST">
              @csrf
              <div class="input-content">
                <input required type="text" name="names"
                  class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="@lang('main.name_and_surname')">
                <input required type="text" name="hospital_names"
                  class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="@lang('main.hospital')">
                <input required type="text" name="phone"
                  class="w-full border contact-input-number border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="@lang('main.phone_number')">
                <input required type="email" name="email"
                  class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="@lang('main.email')">
                <textarea required type="text" name="content" rows="4"
                  class="w-full border contact-input-number border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="@lang('main.what_kind_of_cooperation_offer')"></textarea>
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

              {{-- <div class="privacy-policy flex justify-between items-start">
                <div class="text text-[15px] text-black mr-[60px]">
                  @lang('main.i_have_read') <span class="text-cred font-[700]">@lang('main.privacy_policy')</span> @lang('main.and_agree_following')
                  <span class="text-cred font-[700]">@lang('main.collection_of_personal_policy') </span>
                </div>
                <div class="radio-buttons  [@media(max-width:576px)]:ml-[38px] flex w-[35px] justify-between">
                  <div class="form-group ">
                    <input type="checkbox" id="privacy-yes" translate="no"/>
                    <label for="privacy-yes">@lang('main.yes')</label>
                  </div>
                </div>
              </div> --}}
              <div class="button-content mt-7 w-full flex items-center">
                <button id="submitFormBtn" type="submit" disabled
                  class="border-none rounded-md disabled:opacity-[0.7] text-[12px] font-[600] bg-cyellow uppercase py-3 px-7">
                  @lang('main.send') </button>
              </div>
            </form>
          </div>


        </div>

      </div>
    </div>
    <!-- main end -->
@endsection