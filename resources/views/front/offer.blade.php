@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]"
      style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          Offer cooperation
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">Main</a>
          -
          <span class="text-[20px]">Offer cooperation</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3 pb-6">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="form w-full mx-auto h-fit">
          <div class="form-content mx-auto w-full">
            <form action="http://uybozorim.sosgroup.uz/uz/save_callback" class="my-3">
              <div class="input-content">
                <input required type="text"
                  class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="Name and surname">
                <input required type="text"
                  class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="Company / hospital">
                <input required type="number"
                  class="w-full border contact-input-number border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="Phone number">
                <input required type="email"
                  class="w-full border border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="Email">
                <textarea required type="number" rows="4"
                  class="w-full border contact-input-number border-[#D6D6D6] text-black placeholder:text-black rounded-lg py-3 px-5 my-2.5 text-[18px] outline-none bg-white"
                  placeholder="What kind of cooperation would you like to offer?"></textarea>
              </div>
              <div class="privacy-policy flex justify-between items-start">
                <div class="text text-[15px] text-black mr-[60px]">
                  I have read the <span class="text-cred font-[700]">Privacy Policy</span> and agree to the following
                  <span class="text-cred font-[700]">Collection of Personal Data Policy* </span>
                </div>
                <div class="radio-buttons  [@media(max-width:576px)]:ml-[38px] flex w-[35px] justify-between">
                  <div class="form-group ">
                    <input type="checkbox" id="privacy-yes" />
                    <label for="privacy-yes">Yes</label>
                  </div>
                </div>
              </div>
              <div class="button-content mt-7 w-full flex items-center">
                <button id="submitFormBtn" type="submit" disabled
                  class="border-none rounded-md disabled:opacity-[0.7] text-[12px] font-[600] bg-cyellow uppercase py-3 px-7">
                  Send </button>
              </div>
            </form>
          </div>


        </div>

      </div>
    </div>
    <!-- main end -->
@endsection