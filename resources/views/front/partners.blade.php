@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]"
      style="background-image: url('./src/public/images/bac-img.png')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          Our partners
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="./index.html">Main</a>
          -
          <span class="text-[20px]">Our partners</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3 pb-6">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="card-wrapper my-5 w-full">
          <!-- foreach start -->

          <div class="card w-full mb-7 shadow-[0_2px_14px_0_rgba(0,0,0,0.10)] rounded-md p-7 max-sm:px-4 h-fit">
            <div class="card-content flex max-sm:flex-wrap items-center w-full h-full">
              <div class="img-content mr-5 h-[150px] max-sm:mx-auto w-[150px] max-sm:h-[100px] max-sm:w-[100px]">
                <img src="./src/public/images/dell-img.png" alt="" class="w-full h-full object-cover">
              </div>
              <div class="text-content md:w-[80%] sm:w-[68%] max-sm:w-full max-sm:mt-3 flex items-center">
                <div class="text-body max-sm:text-center  h-fit w-full">
                  <div class="description text-dimgray text-[16px] max-h-[125px] overflow-hidden">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero possimus debitis tempora ducimus
                    dolores optio fugiat nihil recusandae, beatae sapiente est odio ab voluptate quisquam cumque autem
                    ipsum aliquid vitae!
                  </div>
                  <a href="#" class="site text-cred font-[600] text-[18px]">www.dell.com</a>
                </div>
                </a>
              </div>
              <!-- foreach end -->

            </div>
          </div>

          <!-- foreach end -->
        </div>
        <!-- main end -->
      </div>
    </div>

@endsection