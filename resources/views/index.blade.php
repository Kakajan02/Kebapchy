@extends('layout')

@section('title') @lang('main.dashboard') @endsection

@section('content')
  <div class="nk-block-head nk-block-head-lg">
    <div class="nk-block-between-md g-4">
      <div class="nk-block-head-content">
        <h2 class="nk-block-title fw-normal">@lang('main.welcome'), {{ auth()->user()->name }}</h2>
        <div class="nk-block-des">
          <p>@lang('main.manage_dashboard')</p>
        </div>
      </div>
    </div>
  </div><!-- .nk-block-head -->
  <div class="nk-block">
    <div class="row g-gs">
      <div class="col-md-6">
        <div class="card card-bordered card-full">
          <div class="nk-wg1">
            <div class="nk-wg1-block">
              <div class="nk-wg1-img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                  <rect x="5" y="7" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"/>
                  <rect x="25" y="27" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"/>
                  <rect x="15" y="17" width="60" height="56" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"/>
                  <line x1="15" y1="29" x2="75" y2="29" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"/>
                  <circle cx="53" cy="23" r="2" fill="#c4cefe"/>
                  <circle cx="60" cy="23" r="2" fill="#c4cefe"/>
                  <circle cx="67" cy="23" r="2" fill="#c4cefe"/>
                  <rect x="22" y="39" width="20" height="20" rx="2" ry="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"/>
                  <circle cx="32" cy="45.81" r="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M29,54.31a3,3,0,0,1,6,0" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="49" y1="40" x2="69" y2="40" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="49" y1="51" x2="69" y2="51" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="49" y1="57" x2="59" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="64" y1="57" x2="66" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="49" y1="46" x2="59" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="64" y1="46" x2="66" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
              </div>
              <div class="nk-wg1-text">
                <h5 class="title">@lang('main.categories')</h5>
                <p>@lang('main.dashboard_categories_text')</p>
              </div>
            </div>
            <div class="nk-wg1-action">
              <a href="{{ route('categories.index') }}" class="link"><span>@lang('main.see_all') ({{ $quantities['category'] }})</span> <em
                        class="icon ni ni-chevron-right"></em></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-bordered card-full">
          <div class="nk-wg1">
            <div class="nk-wg1-block">
              <div class="nk-wg1-img">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                  <path d="M26,70.78V24.5a7,7,0,0,1,7-7H69a9,9,0,0,1,9,9v49a7,7,0,0,1-7,7H16.55S25.72,78.89,26,70.78Z" fill="#fff" stroke="#6576ff"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M7,30.5H26a0,0,0,0,1,0,0V73.9a8.6,8.6,0,0,1-8.6,8.6H13.6A8.6,8.6,0,0,1,5,73.9V32.5a2,2,0,0,1,2-2Z" fill="#e3e7fe" stroke="#6576ff"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <circle cx="71.5" cy="21" r="13.5" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <rect x="34" y="33.5" width="16" height="8" rx="1" ry="1" fill="#c4cefe"/>
                  <line x1="35" y1="46.5" x2="67" y2="46.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="35" y1="53.5" x2="67" y2="53.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="35" y1="59.5" x2="67" y2="59.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="35" y1="64.5" x2="67" y2="64.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <line x1="35" y1="71.5" x2="51" y2="71.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <path d="M75.24,23.79a5.2,5.2,0,0,1-6.42,2.57,5.78,5.78,0,0,1-3.26-7.25,5.25,5.25,0,0,1,6.8-3.47,5.35,5.35,0,0,1,2,1.34l2.75,2.75" fill="none"
                        stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  <polyline points="77.75 16.61 77.75 20.61 73.75 20.61" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"/>
                </svg>
              </div>
              <div class="nk-wg1-text">
                <h5 class="title">@lang('main.foods')</h5>
                <p>@lang('main.food_categories_text')</p>
              </div>
            </div>
            <div class="nk-wg1-action">
              <a href="{{ route('foods.index') }}" class="link"><span>@lang('main.see_all') ({{ $quantities['food'] }})</span> <em class="icon ni ni-chevron-right"></em></a>
            </div>
          </div>
        </div>
      </div><!-- .col -->
    </div><!-- .row -->
  </div><!-- .nk-block -->

@endsection