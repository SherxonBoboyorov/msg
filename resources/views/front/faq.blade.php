@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]"
      style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          FAQ
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="./index.html">Main</a>
          -
          <span class="text-[20px]">FAQ</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        <div class="accordion w-full py-5 mx-auto bg-[white]">
          <div class="w-full mx-auto" x-data="{selected:null}">
            <!-- proxima prayectida qilingani kabi bunda ham takrorlanmas sonlar bo'ladi va qayerda raqam ko'rsez o'sha joyga qo'yasiz -->
            <!-- foreach start -->

            <div class="accordion-item">
              <button type="button" class="w-full py-3 p-5 flex justify-between transition-all duration-100 ease-linear"
                @click="selected !== 1 ? selected = 1 : selected = null"
                x-bind:style="selected == 1 ? 'background: #D60000' : 'background: white'">
                <div x-bind:style="selected == 1 ? 'color: white' : 'color: black'"
                  class="title transition-all text-left duration-100 ease-linear sm:text-[18px] max-sm:text-[16px] font-[600]">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                </div>
              </button>

              <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1"
                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                <div class="p-5 py-3 sm:text-[16px] text-dimgray max-sm:text-[14px] text-description-accordion">
                  <p>
                    Sed ut perspiciatis, unde omnis iste natus error sit
                    voluptatem accusanti udiandae sint et molestiae non
                    recusandae. Itaque earum rerum hic tenetur a sapiente
                    delectus, ut aut reiciendis voluptatibus maiores alias
                    consequatur aut perferendis doloribus asperiores repellat.
                  </p>
                </div>
              </div>
            </div>

            <!-- foreach end -->
          </div>
        </div>
      </div>
    </div>
    <!-- main end -->

@endsection