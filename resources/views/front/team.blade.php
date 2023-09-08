@extends('layouts.front')

@section('content')

    <!-- back-img start -->
    <div class="back-img max-sm:mt-[50px] sm:mt-[80px] lg:mt-[120px] w-full px-3 mx-auto flex justify-start bg-no-repeat bg-center bg-cover items-center h-[220px]"
      style="background-image: url('{{ asset('front/src/public/images/bac-img.png') }}')">
      <div class="text-content max-w-screen-xl w-full mx-auto h-fit">
        <div class="title text-[#ffffff] text-[40px] font-[600] max-sm:text-[32px]">
          @lang('main.our_team_and_goals')
        </div>
        <div class="decription text-white">
          <a class="text-[20px]" href="{{ route('/') }}">@lang('main.home')</a>
          -
          <span class="text-[20px]">@lang('main.our_team_and_goals')</span>
        </div>
      </div>
    </div>
    <!-- back-img end -->

    <!-- main start -->
    <div class="main w-full mx-auto px-3 pb-4">
      <div class="main-content mx-auto max-w-screen-xl  py-7 sm:py-16">
        @foreach($goals as $goal)
        <div class="h-fit max-w-screen-xl px-4 mx-auto  ">
          <div class="flex justify-between items-center flex-wrap [@media(min-width:850px)]:h-[500px] [@media(max-width:850px)]:h-fit">
            <div class="col [@media(max-width:850px)]:mb-2 pb-3 [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full h-fit flex justify-start items-center">
              <div class="text-content">
                <div class=" mb-7 decription max-h-[500px] text-[16px] max-sm:text-[14px] overflow-hidden">
                 {!! $goal->{'sub_content_' . app()->getLocale()} !!}
                </div>
              </div>
            </div>

            <div class="col overflow-hidden [@media(min-width:850px)]:w-[48%] [@media(max-width:850px)]:w-full [@media(min-width:850px)]:h-full [@media(min-width:768px)]:h-[500px] [@media(min-width:576px)]:h-[400px] [@media(max-width:576px)]:h-[300px]">
              <img src="{{ asset($goal->image) }}" alt="" class="w-full h-full object-cover" />
            </div>

          </div>
        </div>
        <div class="text-content my-6">
          <div class=" mb-7 decription max-h-[500px] text-[16px] max-sm:text-[14px] overflow-hidden">
            {!! $goal->{'content_' . app()->getLocale()} !!}
          </div>
        </div>
        @endforeach

        <div class="card-wrapper my-7 w-full">
          @foreach($teams as $team)
          <div class="card w-full mb-7 shadow-[0_2px_14px_0_rgba(0,0,0,0.10)] rounded-md p-7 max-sm:px-4 h-fit">
            <div class="card-content flex max-sm:flex-wrap items-center w-full h-full">
              <div class="img-content mr-5 h-[150px] max-sm:mx-auto w-[150px] max-sm:h-[100px] max-sm:w-[100px]">
                <img src="{{ asset($team->image) }}" alt="" class="w-full h-full object-cover">
              </div>
              <div class="text-content md:w-[80%] sm:w-[68%] max-sm:w-full max-sm:mt-3 flex items-center">
                <div class="text-body max-sm:text-center  h-fit w-full">
                  <div class="title text-[20px] font-[600] w-full truncate">{{ $team->{'name_' . app()->getLocale()} }}</div>
                  <div class="description my-1 text-[16px] max-h-[75px] overflow-hidden">
                    {!! $team->{'content_' . app()->getLocale()} !!}
                  </div>
                  <div class="phone-number max-sm:mx-auto w-fit flex items-center">
                    <span class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path
                          d="M15.75 12.315V14.967C15.7501 15.1569 15.6781 15.3397 15.5487 15.4786C15.4192 15.6176 15.2419 15.7022 15.0525 15.7155C14.7247 15.738 14.457 15.75 14.25 15.75C7.62225 15.75 2.25 10.3778 2.25 3.75C2.25 3.543 2.26125 3.27525 2.2845 2.9475C2.29779 2.75808 2.38244 2.58076 2.52135 2.45131C2.66027 2.32186 2.84312 2.24991 3.033 2.25H5.685C5.77803 2.24991 5.86777 2.28439 5.9368 2.34677C6.00582 2.40914 6.0492 2.49494 6.0585 2.5875C6.07575 2.76 6.0915 2.89725 6.1065 3.0015C6.25555 4.04169 6.561 5.05337 7.0125 6.00225C7.08375 6.15225 7.03725 6.3315 6.90225 6.4275L5.28375 7.584C6.27334 9.88984 8.11091 11.7274 10.4167 12.717L11.5717 11.1015C11.619 11.0355 11.6878 10.9882 11.7664 10.9677C11.8449 10.9473 11.9281 10.9551 12.0015 10.9897C12.9503 11.4404 13.9617 11.7451 15.0015 11.8935C15.1058 11.9085 15.243 11.9242 15.414 11.9415C15.5064 11.951 15.592 11.9944 15.6543 12.0634C15.7165 12.1324 15.7501 12.2221 15.75 12.315Z"
                          fill="#D60000" />
                      </svg>
                    </span>
                    <a href="tel:{{ $team->phone }}" class="font-[600] text-[18px]">
                      {{ $team->phone }}
                    </a>
                  </div>
                  <div class="email flex max-sm:mx-auto w-fit items-center">
                    <span class="mr-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <g clip-path="url(#clip0_6016_887)">
                          <path
                            d="M16.5 5.65137V12.7501C16.5 13.324 16.2808 13.8763 15.887 14.2938C15.4933 14.7114 14.9549 14.9627 14.382 14.9964L14.25 15.0001H3.75C3.17609 15.0001 2.62386 14.7809 2.2063 14.3872C1.78874 13.9934 1.53742 13.455 1.50375 12.8821L1.5 12.7501V5.65137L8.58375 10.3741L8.67075 10.4236C8.77328 10.4737 8.88589 10.4998 9 10.4998C9.11411 10.4998 9.22672 10.4737 9.32925 10.4236L9.41625 10.3741L16.5 5.65137Z"
                            fill="#D60000" />
                          <path
                            d="M14.25 3C15.06 3 15.7702 3.4275 16.1662 4.07025L8.99999 8.84775L1.83374 4.07025C2.02179 3.76483 2.28015 3.5088 2.58727 3.32354C2.89439 3.13827 3.24136 3.02914 3.59924 3.00525L3.74999 3H14.25Z"
                            fill="#D60000" />
                        </g>
                        <defs>
                          <clipPath id="clip0_6016_887">
                            <rect width="18" height="18" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                    <a href="mailto:{{ $team->email }}" class="font-[600] text-[18px]">
                      {{ $team->email }}
                    </a>
                  </div>
                </div>
                </a>
              </div>
              <!-- foreach end -->

            </div>
          </div>
          @endforeach
        </div>
        <!-- main end -->
      </div>
    </div>

@endsection

