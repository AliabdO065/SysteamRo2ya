<?php

    use App\Models\Customers;
  
        $slide = Customers::find(1 );
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#x#', $contentasstring);
        $item = [];
        foreach ($content as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $item[$key] = $value;
        }
    $logo = $item['imgl'];
?>



{{-- for change language --}}
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<style>
  .navbar-collapse {
    flex-grow: unset !important;
}
</style>
<div class="s-navbar cairo-uniquifier" id="navbarscrol">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="{{asset($logo)}}"class="img-fluid" alt=""/></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon">
          <i class="fa-solid fa-bars"></i>
        </span>
      </button>

      <div class="dropdown" 
        style="{{ session()->get('locale') === 'ar' ? 'position: fixed; left: 30%;z-index:11;'  :  'position: fixed; right: 30%;z-index:11;' }}" >
        <a style="color: rgb(255, 255, 255)"  href="#" role="button" id="languageDropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-earth" style="font-size:35px" ></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="languageDropdown">
            <a class="dropdown-item" href="{{ route('lang', 'en') }}">English</a>
            <a class="dropdown-item" href="{{ route('lang', 'ar') }}">العربية</a>
        </div>
      </div>

    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('fronted.customers.index') ? 'active' : '' }}" href="{{ route('fronted.customers.index') }}">
                  {{ __('messages.main') }}
                </a>
            </li>
            {{-- @if(isset($specialNav) && $specialNav)
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('fronted.customers.about') ? 'active' : '' }}" id="articles" href="#">
                  {{ __('messages.about') }}
                </a>
            </li>
            @endif --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('fronted.customers.ourwork') ? 'active' : '' }}" id="" href="{{ route('fronted.customers.ourwork') }}">
                   {{ __('messages.works') }}
                  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('fronted.customers.articles') ? 'active' : '' }}" id="" href="{{ route('fronted.customers.articles') }}">
                   {{ __('messages.articles') }}
                  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('fronted.customers.engaz') ? 'active' : '' }}" id="" href="{{ route('fronted.customers.engaz') }}"> 
                    {{ __('messages.aboutus') }}
                  </a>
            </li>


        </ul>
    </div>
    
    

    </div>
  </nav>
</div>