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
          <a class="text-[20px]" href="./index.html">Main</a>
          -
          <span class="text-[20px]">Documents</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3  py-7 sm:py-16">
      <div class="main-content mx-auto max-w-screen-xl">
        <div class="text-content">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam consequatur repudiandae, explicabo,
          tenetur
          saepe consequuntur accusamus perspiciatis recusandae ex iste facere molestias voluptates maiores eveniet quo
          excepturi voluptatibus fugiat!
        </div>
        <div class="card-wrapper my-7 w-full">
          <!-- foreach start -->

          <div class="card w-full border-t-2 py-7 h-fit">
            <div class="title text-[20px] font-[600] w-full">Courtney Ramos</div>
            <!-- foreach start -->
            <div class="text my-2 text-[16px] overflow-hidden flex items-center">
              <div class="truncate w-fit">Lorem ipsum</div>
              <!-- file url ini href ichiga qo'yasiz href="https://doc.pdf" -->
              <a href="#" download class="ml-3 w-fit font-[900] text-cred">Download</a>
            </div>
            <!-- foreach end -->
          </div>

          <!-- foreach end -->
        </div>
        <!-- main end -->
      </div>
    </div>

  @endsection