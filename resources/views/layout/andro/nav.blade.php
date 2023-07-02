
<!-- Navbar -->
<div class="navbar-area sticky-top">
  <!-- Menu For Mobile Device -->
  <div class="mobile-nav">
      <a href="index.html" class="logo">
          <img src="assets/img/logo-four.png" alt="Logo">
      </a>
  </div>

  <!-- Menu For Desktop Device -->
  <div class="main-nav three">
      <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{url('storage/uploads')}}/Amret-Final-Logo-Aug-21_PNG.png" alt="Logo">
              </a>
              <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a href="{{url('/login')}}">Login</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle active">@lang('home.home_menu')<i class='bx bx-chevron-down'></i></a>
                        </li>
                      <li class="nav-item">
                          <a href="{{url('/en')}}/about-us" class="nav-link dropdown-toggle">@lang('home.about_menu')</a>                          
                      </li>
                      <li class="nav-item">
                          <a href="about.html" class="nav-link">@lang('home.we_offer')</a>
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link dropdown-toggle">@lang('home.media') <i class='bx bx-chevron-down'></i></a>
                      </li>
                      <li class="nav-item">
                          <a href="contact.html" class="nav-link dropdown-toggle">@lang('home.more')</a>
                      </li>
                    
                    @php
                        $lang = Helper::langList();                        
                    @endphp

                    @foreach ($lang as $lg)
							<li class="nav-item">
                                {{-- <a href="{{ route( \Illuminate\Support\Facades\Route::currentRouteName(), array_merge(\Illuminate\Support\Facades\Route::current()->parameters(), ['locale' => $lg->lang_code]))}}" class="nav-link">{{ $lg->lang_name }}</a> --}}
                                <a href="{{URL('').'/'.$lg->lang_code.'/'.Request::segment(2)}}/" class="nav-link">{{ $lg->lang_name }}</a>
							</li>
                    @endforeach
                        
                  </ul>

                  <div class="side-nav">
                      <div class="nav-search">
                          <i id="search-btn" class="bx bx-search-alt"></i>
                          <div id="search-overlay" class="block">
                              <div class="centered">
                                  <div id="search-box">
                                      <i id="close-btn" class="bx bx-x"></i>
                                      <form>
                                          <input type="text" class="form-control" placeholder="Search..."/>
                                          <button type="submit" class="btn">Search</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </nav>
      </div>
  </div>
</div>
<!-- End Navbar -->