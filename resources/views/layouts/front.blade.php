<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/src/public/icons/favicon.png') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/src/public/icons/favicon.png') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link href="{{ asset('front/src/styles/tailwindcss/output.css') }}" rel="stylesheet" />
  <link href="{{ asset('front/src/styles/sass/custom.css') }}" rel="stylesheet" />
  <title>MSG</title>
</head>

<body>
  <div class="w-full mx-auto wrapper-fluid overflow-hidden relative flex min-h-screen flex-col">
    <!-- heder start -->
    <div class="header bg-white w-full mx-auto fixed top-0 z-50">
      <div class="header-top px-3">
        <div class="header-content mx-auto max-w-screen-xl header-top py-3 flex justify-between items-center">
          <a href="{{ route('/') }}" class="logo block sm:w-[200px] max-sm:w-[150px]">
            <img src="{{ asset('front/src/public/icons/logo.png') }}" class="w-full h-full" alt="">
          </a>
          <div class="languages-content flex justify-between items-center">

            <div class="sm-icons mr-10 justify-between items-center hidden sm:flex">
              <a href="{{ $options->where('key', 'instagram')->first()->value }}" class="sm-icon w-[35px] h-[35px] rounded-full block overflow-hidden mr-5 ">
                <img src="{{ asset('front/src/public/icons/instagram-icon.png') }}" alt="">
              </a>
              <a href="{{ $options->where('key', 'facebook')->first()->value }}" class="sm-icon w-[35px] h-[35px] rounded-full block overflow-hidden">
                <img src="{{ asset('front/src/public/icons/facebook-icon.webp') }}" alt="">
              </a>
            </div>

            
            <div class="languages hidden sm:flex justify-between items-center w-fit">
              <div class="globe w-[35px] h-[35px]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 24 24" fill="none">
                  <path d="M12 22C10.6333 22 9.34167 21.7373 8.125 21.212C6.90833 20.6867 5.84567 19.97 4.937 19.062C4.029 18.154 3.31233 17.0917 2.787 15.875C2.26167 14.6583 1.99933 13.3667 2 12C2 10.6167 2.26267 9.32067 2.788 8.112C3.31333 6.90333 4.03 5.84533 4.938 4.938C5.846 4.02933 6.908 3.31267 8.124 2.788C9.34 2.26333 10.632 2.00067 12 2C13.3833 2 14.6793 2.26267 15.888 2.788C17.0967 3.31333 18.1547 4.03 19.062 4.938C19.9707 5.846 20.6873 6.90433 21.212 8.113C21.7367 9.32167 21.9993 10.6173 22 12C22 13.3667 21.7373 14.6583 21.212 15.875C20.6867 17.0917 19.97 18.1543 19.062 19.063C18.154 19.971 17.0957 20.6877 15.887 21.213C14.6783 21.7383 13.3827 22.0007 12 22ZM12 19.95C12.4333 19.35 12.8083 18.725 13.125 18.075C13.4417 17.425 13.7 16.7333 13.9 16H10.1C10.3 16.7333 10.5583 17.425 10.875 18.075C11.1917 18.725 11.5667 19.35 12 19.95ZM9.4 19.55C9.1 19 8.83734 18.429 8.612 17.837C8.38667 17.245 8.19934 16.6327 8.05 16H5.1C5.58333 16.8333 6.18767 17.5583 6.913 18.175C7.63833 18.7917 8.46733 19.25 9.4 19.55ZM14.6 19.55C15.5333 19.25 16.3627 18.7917 17.088 18.175C17.8133 17.5583 18.4173 16.8333 18.9 16H15.95C15.8 16.6333 15.6127 17.246 15.388 17.838C15.1633 18.43 14.9007 19.0007 14.6 19.55ZM4.25 14H7.65C7.6 13.6667 7.56234 13.3373 7.537 13.012C7.51167 12.6867 7.49933 12.3493 7.5 12C7.5 11.65 7.51267 11.3127 7.538 10.988C7.56333 10.6633 7.60067 10.334 7.65 10H4.25C4.16667 10.3333 4.104 10.6627 4.062 10.988C4.02 11.3133 3.99933 11.6507 4 12C4 12.35 4.021 12.6873 4.063 13.012C4.105 13.3367 4.16733 13.666 4.25 14ZM9.65 14H14.35C14.4 13.6667 14.4377 13.3373 14.463 13.012C14.4883 12.6867 14.5007 12.3493 14.5 12C14.5 11.65 14.4873 11.3127 14.462 10.988C14.4367 10.6633 14.3993 10.334 14.35 10H9.65C9.6 10.3333 9.56233 10.6627 9.537 10.988C9.51167 11.3133 9.49933 11.6507 9.5 12C9.5 12.35 9.51267 12.6873 9.538 13.012C9.56333 13.3367 9.60067 13.666 9.65 14ZM16.35 14H19.75C19.8333 13.6667 19.896 13.3373 19.938 13.012C19.98 12.6867 20.0007 12.3493 20 12C20 11.65 19.979 11.3127 19.937 10.988C19.895 10.6633 19.8327 10.334 19.75 10H16.35C16.4 10.3333 16.4377 10.6627 16.463 10.988C16.4883 11.3133 16.5007 11.6507 16.5 12C16.5 12.35 16.4873 12.6873 16.462 13.012C16.4367 13.3367 16.3993 13.666 16.35 14ZM15.95 8H18.9C18.4167 7.16667 17.8127 6.44167 17.088 5.825C16.3633 5.20833 15.534 4.75 14.6 4.45C14.9 5 15.1627 5.571 15.388 6.163C15.6133 6.755 15.8007 7.36733 15.95 8ZM10.1 8H13.9C13.7 7.26667 13.4417 6.575 13.125 5.925C12.8083 5.275 12.4333 4.65 12 4.05C11.5667 4.65 11.1917 5.275 10.875 5.925C10.5583 6.575 10.3 7.26667 10.1 8ZM5.1 8H8.05C8.2 7.36667 8.38767 6.754 8.613 6.162C8.83833 5.57 9.10067 4.99933 9.4 4.45C8.46667 4.75 7.63733 5.20833 6.912 5.825C6.18667 6.44167 5.58267 7.16667 5.1 8Z" fill="#D60000" />
                </svg>
              </div>
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="uppercase font-[600] ml-2 text-[16px] [&.active]:text-cred hover:text-cred transition-all duration-150 lang{{ $properties['native'] }}">
                  {{ $properties['native'] }}
                </a>
              @endforeach
            </div>

            <div class="navbar-toggler hidden ml-5 max-lg:block max-sm:w-[25px] max-sm:h-[25px] w-[30px] h-[30px] cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 50 50">
                <path d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z">
                </path>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="header-bottom w-full pt-3 px-3 bg-[#F6F6F6] max-lg:hidden block">
        <div class="header-content mx-auto max-w-screen-xl flex items-center justify-between ">
          <div class="home-link nav-link w-fit ">
            <a href="{{ route('/') }}" class="text-[16px] font-[600] ">
              @lang('main.home')
            </a>
          </div>
          <div class="services-link nav-link w-fit ">
            <div class="text-[16px] font-[600] div ">
              @lang('main.services')
            </div>
            <div class="dropdown">
              <a href="{{ route('treatment') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.treatment_in_germany')</a>
              <a href="{{ route('diagnostics') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.diseases_diagnostics')</a>
              <a href="{{ route('information') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.information_for_patients')</a>
              <a href="{{ route('doctor') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.trainings_for_medical_personnel')</a>
            </div>
          </div>
          <div class="cooperations-link nav-link w-fit">
            <div class="text-[16px] font-[600] div ">
              @lang('main.cooperations')
            </div>
            <div class="dropdown">
              <a href="{{ route('partners') }}"  class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.our_partners')</a>
              <a href="{{ route('offer') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.offer_cooperation')</a>
            </div>
          </div>
          <div class="about-link nav-link w-fit">
            <div class="text-[16px] font-[600] div ">
              @lang('main.about_us')
            </div>

            <div class="dropdown">
              <a href="{{ route('about') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300">@lang('main.about')</a>
              <a href="{{ route('ourTeam') }}" class="text-[16px] font-[600]  hover:text-cred transition-all duration-300">@lang('main.our_team_and_goals')</a>
              <a href="{{ route('documents', ['id' => 1]) }}" class="text-[16px] font-[600]  hover:text-cred transition-all duration-300">@lang('main.documents')</a>
              <a href="{{ route('faq') }}" class="text-[16px] font-[600]  hover:text-cred transition-all duration-300">@lang('main.faq')</a>
            </div>
          </div>
          <div class="contacts-link nav-link w-fit">
            <a href="{{ route('contacts') }}" class="text-[16px] font-[600] ">
              @lang('main.contacts')
            </a>
          </div>
        </div>
      </div>

      <!-- off-canvas start -->
      <div id="header-off-canvas" class="overflow-hidden [&.open-canvas]:-translate-x-[0px] w-[100vw] -translate-x-[100%] header-off-canvas absolute z-20 top-0 left-0 h-[100vh] bg-[rgba(0,0,0,0.3)]">
        <div class="transition-all duration-[0.15s] left-side max-w-[400px] -translate-x-[100%]  h-full mr-[60px] bg-white p-7">
          
          <div class="languages hidden max-sm:flex justify-between items-center w-fit -ml-[2px] mb-3">
            
            <div class="globe w-[35px] h-[35px]">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 24 24" fill="none">
                <path d="M12 22C10.6333 22 9.34167 21.7373 8.125 21.212C6.90833 20.6867 5.84567 19.97 4.937 19.062C4.029 18.154 3.31233 17.0917 2.787 15.875C2.26167 14.6583 1.99933 13.3667 2 12C2 10.6167 2.26267 9.32067 2.788 8.112C3.31333 6.90333 4.03 5.84533 4.938 4.938C5.846 4.02933 6.908 3.31267 8.124 2.788C9.34 2.26333 10.632 2.00067 12 2C13.3833 2 14.6793 2.26267 15.888 2.788C17.0967 3.31333 18.1547 4.03 19.062 4.938C19.9707 5.846 20.6873 6.90433 21.212 8.113C21.7367 9.32167 21.9993 10.6173 22 12C22 13.3667 21.7373 14.6583 21.212 15.875C20.6867 17.0917 19.97 18.1543 19.062 19.063C18.154 19.971 17.0957 20.6877 15.887 21.213C14.6783 21.7383 13.3827 22.0007 12 22ZM12 19.95C12.4333 19.35 12.8083 18.725 13.125 18.075C13.4417 17.425 13.7 16.7333 13.9 16H10.1C10.3 16.7333 10.5583 17.425 10.875 18.075C11.1917 18.725 11.5667 19.35 12 19.95ZM9.4 19.55C9.1 19 8.83734 18.429 8.612 17.837C8.38667 17.245 8.19934 16.6327 8.05 16H5.1C5.58333 16.8333 6.18767 17.5583 6.913 18.175C7.63833 18.7917 8.46733 19.25 9.4 19.55ZM14.6 19.55C15.5333 19.25 16.3627 18.7917 17.088 18.175C17.8133 17.5583 18.4173 16.8333 18.9 16H15.95C15.8 16.6333 15.6127 17.246 15.388 17.838C15.1633 18.43 14.9007 19.0007 14.6 19.55ZM4.25 14H7.65C7.6 13.6667 7.56234 13.3373 7.537 13.012C7.51167 12.6867 7.49933 12.3493 7.5 12C7.5 11.65 7.51267 11.3127 7.538 10.988C7.56333 10.6633 7.60067 10.334 7.65 10H4.25C4.16667 10.3333 4.104 10.6627 4.062 10.988C4.02 11.3133 3.99933 11.6507 4 12C4 12.35 4.021 12.6873 4.063 13.012C4.105 13.3367 4.16733 13.666 4.25 14ZM9.65 14H14.35C14.4 13.6667 14.4377 13.3373 14.463 13.012C14.4883 12.6867 14.5007 12.3493 14.5 12C14.5 11.65 14.4873 11.3127 14.462 10.988C14.4367 10.6633 14.3993 10.334 14.35 10H9.65C9.6 10.3333 9.56233 10.6627 9.537 10.988C9.51167 11.3133 9.49933 11.6507 9.5 12C9.5 12.35 9.51267 12.6873 9.538 13.012C9.56333 13.3367 9.60067 13.666 9.65 14ZM16.35 14H19.75C19.8333 13.6667 19.896 13.3373 19.938 13.012C19.98 12.6867 20.0007 12.3493 20 12C20 11.65 19.979 11.3127 19.937 10.988C19.895 10.6633 19.8327 10.334 19.75 10H16.35C16.4 10.3333 16.4377 10.6627 16.463 10.988C16.4883 11.3133 16.5007 11.6507 16.5 12C16.5 12.35 16.4873 12.6873 16.462 13.012C16.4367 13.3367 16.3993 13.666 16.35 14ZM15.95 8H18.9C18.4167 7.16667 17.8127 6.44167 17.088 5.825C16.3633 5.20833 15.534 4.75 14.6 4.45C14.9 5 15.1627 5.571 15.388 6.163C15.6133 6.755 15.8007 7.36733 15.95 8ZM10.1 8H13.9C13.7 7.26667 13.4417 6.575 13.125 5.925C12.8083 5.275 12.4333 4.65 12 4.05C11.5667 4.65 11.1917 5.275 10.875 5.925C10.5583 6.575 10.3 7.26667 10.1 8ZM5.1 8H8.05C8.2 7.36667 8.38767 6.754 8.613 6.162C8.83833 5.57 9.10067 4.99933 9.4 4.45C8.46667 4.75 7.63733 5.20833 6.912 5.825C6.18667 6.44167 5.58267 7.16667 5.1 8Z" fill="#D60000" />
              </svg>
            </div>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="uppercase font-[600] ml-2 text-[16px] [&.active]:text-cred hover:text-cred transition-all duration-150 lang{{ $properties['native'] }}">
                {{ $properties['native'] }}
              </a>
            @endforeach
          </div>

          <div id="link-wrapper" class="links w-full">
            <div class="home-link nav-link nav-link-responsive w-fit">
              <a href="{{ route('/') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">
                @lang('main.home')
              </a>
            </div>
            <div class="services-link nav-link nav-link-responsive width-full">
              <div id="services-dropdown" class="text-[16px] head font-[600] cursor-pointer flex justify-between hover:text-cred transition-all duration-300 items-center group ">
                @lang('main.services')

                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="group-hover:fill-cred transition-all duration-300">
                  <path
                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                </svg>
              </div>
              <div class="dropdown hidden">
                <a href="{{ route('treatment') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.treatment_in_germany')</a>
                <a href="{{ route('diagnostics') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.diseases_diagnostics')</a>
                <a href="{{ route('information') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.information_for_patients')</a>
                <a href="{{ route('doctor') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.trainings_for_medical_personnel')</a>
              </div>
            </div>
            <div class="cooperations-link nav-link nav-link-responsive width-full">
              <div id="cooperations-dropdown"
                class="text-[16px] head font-[600] cursor-pointer flex justify-between hover:text-cred transition-all duration-300 items-center group ">
                @lang('main.cooperations')

                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="group-hover:fill-cred transition-all duration-300">
                  <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                </svg>
              </div>
              <div class="dropdown hidden">
                <a href="{{ route('partners') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.our_partners')</a>
                <a href="{{ route('offer') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.offer_cooperation')</a>
              </div>
            </div>
            <div class="about-link nav-link nav-link-responsive width-full">
              <div id="about-dropdown" class="text-[16px] head font-[600] cursor-pointer flex justify-between hover:text-cred transition-all duration-300 items-center group ">@lang('main.about_us')
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                  class="group-hover:fill-cred transition-all duration-300 ">
                  <path
                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                </svg>
              </div>
              <div class="dropdown hidden">
                <a href="{{ route('about') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300">@lang('main.about')</a>
                <a href="{{ route('ourTeam') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.our_team_and_goals')</a>
                <a href="{{ route('documents',['id' => 1]) }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.documents')</a>
                <a href="{{ route('faq') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">@lang('main.faq')</a>
              </div>
            </div>
            <div class="contacts-link nav-link nav-link-responsive w-fit">
              <a href="{{ route('contacts') }}" class="text-[16px] font-[600] hover:text-cred transition-all duration-300 ">
                @lang('main.contacts')
              </a>
            </div>
          </div>

          <div class="sm-icons justify-between items-center hidden max-sm:flex w-fit mt-5">
            <a href="{{ $options->where('key', 'instagram')->first()->value }}" class="sm-icon w-[35px] h-[35px] rounded-full block overflow-hidden mr-5 ">
              <img src="{{ asset('front/src/public/icons/instagram-icon.png') }}" alt="">
            </a>
            <a href="{{ $options->where('key', 'facebook')->first()->value }}" class="sm-icon w-[35px] h-[35px] rounded-full block overflow-hidden">
              <img src="{{ asset('front/src/public/icons/facebook-icon.webp') }}" alt="">
            </a>
          </div>
        </div>
      </div>
      <!-- off-canvas end -->
    </div>
    <!-- heder end -->

    @yield('content')


     <!-- contacts start -->
     <div id="contacts" class="contact mt-auto [@media(max-width:800px)]:h-fit h-[450px] w-full flex flex-wrap justify-between items-start">
     <div class="map-block [@media(min-width:800px)]:w-1/2 [@media(max-width:800px)]:w-full [@media(max-width:800px)]:h-[350px] h-full [@media(max-width:800px)]:order-2">
      {!! $options->where('key', 'map')->first()->value !!}
     </div>
     <div
       class="text-block flex py-8 items-center bg-white px-10 [@media(min-width:800px)]:w-1/2 [@media(min-width:800px)]:h-full [@media(max-width:800px)]:w-full [@media(max-width:800px)]:h-fit [@media(max-width:800px)]:order-1">
       <div class="text-content max-w-[600px] overflow-hidden">
         <div class="title text-[40px]  font-[700] max-sm:text-[32px] ">
           @lang('main.our_contacts')
         </div>

         <div class="text-content my-3">
           <div class="key text-cred text-[14px] font-[400]">@lang('main.phone_number')</div>
           <a href="tel:{{ $options->where('key', 'phone')->first()->value }}" class="value text-[16px] font-[600]">{{ $options->where('key', 'phone')->first()->value }}</a><br>
           {{-- <a href="tel:{{ $options->where('key', 'phone1')->first()->value }}" class="value text-[16px] font-[600]">{{ $options->where('key', 'phone1')->first()->value }}</a><br>
           <a href="tel:{{ $options->where('key', 'phone2')->first()->value }}" class="value text-[16px] font-[600]">{{ $options->where('key', 'phone2')->first()->value }}</a> --}}
         </div>
         <div class="text-content my-3">
           <div class="key text-cred text-[14px] font-[400]">@lang('main.address')</div>
           <a class="value text-[16px] font-[600]">
              {{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}
           </a><br><a class="value text-[16px] font-[600]">
              {{ $options->where('key', 'address1_' . app()->getLocale())->first()->value }}
           </a><br><a class="value text-[16px] font-[600]">
              {{ $options->where('key', 'address2_' . app()->getLocale())->first()->value }}
           </a>
         </div>
         <div class="text-content my-3">
           <div class="key text-cred text-[14px] font-[400]">@lang('main.email')</div>
           <a href="mailto:{{ $options->where('key', 'email')->first()->value }}" class="value text-[16px] font-[600]">{{ $options->where('key', 'email')->first()->value }}</a><br>
           {{-- <a href="mailto:{{ $options->where('key', 'phone1')->first()->value }}" class="value text-[16px] font-[600]">{{ $options->where('key', 'phone1')->first()->value }}</a><br>
           <a href="mailto:{{ $options->where('key', 'phone2')->first()->value }}" class="value text-[16px] font-[600]">{{ $options->where('key', 'phone2')->first()->value }}</a> --}}
         </div>
       </div>
     </div>
   </div>
   <!-- contacts end -->

       <!-- footer start -->
       <div class="footer w-full mx-auto bg-[#000000] pt-5 ">
        <div class="top-footer px-4 max-w-screen-xl mx-auto max-sm:flex-wrap flex justify-between py-10">
          <a href="{{ route('/') }}" class="block logo-content w-[170px] mb-5 ">
            <img src="{{ asset('front/src/public/icons/white-logo.png') }}" alt="" class="w-full h-fit">
          </a>
          <div class="text-content sm:pl-16 w-full flex justify-between items-start">
            <div class="text-block opacity-[0.6] mr-5">
              @foreach (\App\Models\Department::orderBy('created_at', 'DESC')->get() as $department)
              <div class="text text-[16px] text-white mb-3">
                <a href="{{ route('department-informations', $department->id) }}">
                {{ $department->{'title_' . app()->getLocale()} }}
              </a>
            </div>
              @endforeach
            </div>
            <div class="text-block ">
              <a href="{{ $options->where('key', 'footer')->first()->value }}" class="text text-[16px] text-white mb-3 flex justify-start items-center">
                <div class="p-1.5 w-[30px] h-[30px] overflow-hidden rounded-full bg-cred mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 20 20" fill="none">
                    <path  d="M15.8337 3.3335H4.16699C3.50395 3.3335 2.86807 3.59689 2.39923 4.06573C1.93038 4.53457 1.66699 5.17045 1.66699 5.8335V14.1668C1.66699 14.8299 1.93038 15.4658 2.39923 15.9346C2.86807 16.4034 3.50395 16.6668 4.16699 16.6668H15.8337C16.4967 16.6668 17.1326 16.4034 17.6014 15.9346C18.0703 15.4658 18.3337 14.8299 18.3337 14.1668V5.8335C18.3337 5.17045 18.0703 4.53457 17.6014 4.06573C17.1326 3.59689 16.4967 3.3335 15.8337 3.3335ZM15.8337 5.00016L10.417 8.72516C10.2903 8.7983 10.1466 8.83681 10.0003 8.83681C9.85404 8.83681 9.71034 8.7983 9.58366 8.72516L4.16699 5.00016H15.8337Z" fill="white" />
                  </svg>
                </div>
                @lang('main.email')
              </a>
              <a href="{{ $options->where('key', 'whatsapp')->first()->value }}" class="text text-[16px] text-white mb-3 flex justify-start items-center">
                <div class="p-1.5 w-[30px] h-[30px] overflow-hidden rounded-full bg-[#25D366] mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 20 20" fill="none">
                    <path d="M15.8747 4.09155C15.1107 3.31982 14.2007 2.70794 13.1977 2.2916C12.1948 1.87525 11.1189 1.66277 10.033 1.66655C5.48301 1.66655 1.77467 5.37489 1.77467 9.92489C1.77467 11.3832 2.15801 12.7999 2.87467 14.0499L1.70801 18.3332L6.08301 17.1832C7.29134 17.8416 8.64967 18.1916 10.033 18.1916C14.583 18.1916 18.2913 14.4832 18.2913 9.93322C18.2913 7.72489 17.433 5.64989 15.8747 4.09155ZM10.033 16.7916C8.79967 16.7916 7.59134 16.4582 6.53301 15.8332L6.28301 15.6832L3.68301 16.3666L4.37467 13.8332L4.20801 13.5749C3.5228 12.4807 3.15896 11.2159 3.15801 9.92489C3.15801 6.14155 6.24134 3.05822 10.0247 3.05822C11.858 3.05822 13.583 3.77489 14.8747 5.07489C15.5142 5.71152 16.0211 6.46877 16.3658 7.30274C16.7106 8.13671 16.8864 9.03081 16.883 9.93322C16.8997 13.7166 13.8163 16.7916 10.033 16.7916ZM13.7997 11.6582C13.5913 11.5582 12.5747 11.0582 12.3913 10.9832C12.1997 10.9166 12.0663 10.8832 11.9247 11.0832C11.783 11.2916 11.3913 11.7582 11.2747 11.8916C11.158 12.0332 11.033 12.0499 10.8247 11.9416C10.6163 11.8416 9.94967 11.6166 9.16634 10.9166C8.54967 10.3666 8.14134 9.69155 8.01634 9.48322C7.89967 9.27489 7.99967 9.16655 8.10801 9.05822C8.19967 8.96655 8.31634 8.81655 8.41634 8.69989C8.51634 8.58322 8.55801 8.49155 8.62467 8.35822C8.69134 8.21655 8.65801 8.09989 8.60801 7.99989C8.55801 7.89989 8.14134 6.88322 7.97467 6.46655C7.80801 6.06655 7.63301 6.11655 7.50801 6.10822H7.10801C6.96634 6.10822 6.74967 6.15822 6.55801 6.36655C6.37467 6.57489 5.84134 7.07489 5.84134 8.09155C5.84134 9.10822 6.58301 10.0916 6.68301 10.2249C6.78301 10.3666 8.14134 12.4499 10.208 13.3416C10.6997 13.5582 11.083 13.6832 11.383 13.7749C11.8747 13.9332 12.3247 13.9082 12.683 13.8582C13.083 13.7999 13.908 13.3582 14.0747 12.8749C14.2497 12.3916 14.2497 11.9832 14.1913 11.8916C14.133 11.7999 14.008 11.7582 13.7997 11.6582Z" fill="white" />
                  </svg>
                  </svg>
                </div>
                Whatsapp
              </a>
              <a href="{{ $options->where('key', 'telegram')->first()->value }}" class="text text-[16px] text-white mb-3 flex justify-start items-center">
                <div class="p-1.5 w-[30px] h-[30px] overflow-hidden rounded-full bg-[#239FDB] mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_6003_116)">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4809 3.69164C16.6868 3.60496 16.9122 3.57507 17.1336 3.60507C17.355 3.63507 17.5643 3.72386 17.7398 3.86221C17.9152 4.00056 18.0504 4.1834 18.1312 4.39171C18.212 4.60001 18.2355 4.82617 18.1992 5.04664L16.3092 16.5108C16.1259 17.6166 14.9125 18.2508 13.8984 17.7C13.05 17.2391 11.79 16.5291 10.6567 15.7883C10.09 15.4175 8.3542 14.23 8.56754 13.385C8.75087 12.6625 11.6675 9.94747 13.3342 8.3333C13.9884 7.69914 13.69 7.3333 12.9175 7.91664C10.9984 9.36497 7.9192 11.5675 6.90087 12.1875C6.00254 12.7341 5.5342 12.8275 4.9742 12.7341C3.95254 12.5641 3.00504 12.3008 2.2317 11.98C1.1867 11.5466 1.23754 10.11 2.23087 9.69164L16.4809 3.69164Z" fill="white" />
                    </g>
                    <defs>
                      <clipPath id="clip0_6003_116">
                        <rect width="20" height="20" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                Telegram
              </a>
            </div>
          </div>
        </div>
        <div class="bottom-footer px-4 py-5 border-t border-[#616161] w-full mx-auto">
          <div class="text-content max-w-screen-xl mx-auto flex justify-between items-center flex-wrap">
            <a class="text-[#9E9E9E] text-[16px] sm:w-1/2 max-sm:w-full text-left max-sm:text-center my-1">
              @lang('main.all_rights_reserved')
            </a>
            <a href="sos.uz" class="text-[#9E9E9E] text-[16px] sm:w-1/2 max-sm:w-full text-right max-sm:text-center my-1">
              © Copyright {{ date('Y') }} - SOS Group
            </a>
          </div>
        </div>
      </div>
      <!-- footer end -->


  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('front/src/js/swiper.js') }}" type="module"></script>
    <script src="{{ asset('front/src/js/app.js') }}"></script>
  </body>
  
  </html>