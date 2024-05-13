@extends('fronted.customers.layouts.layout')

@section('css')
    
  <link rel="stylesheet" href="{{asset('fronted/customers/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('fronted/customers/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('fronted/customers/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fronted/customers/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('fronted/customers/css/style.css')}}">
  <link rel="icon" type="jpeg" href="{{asset('fronted/customers/assets/logo/logo.jpeg"')}}">

  <!--google-font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
@endsection


@section('content')
    
<!--bg-->
  <div class="start-bg-move mb-5 ">
    <div class="start-bg">
      <div class="container">
        <div class="row align-items-center ">
          <div class="col-lg-6 wow fadeInRight " data-wow-delay="0.2s" dir="rtl">
            <h5 class="mt-2 mb-2" >{{$intro['name']}} </h5>
            <h1 class="mt-2 mb-2" >
                {{-- <strong>شركة <span>إنجاز</span> <br> لتطوير البرمجيات</strong> --}}
                @php
                    $text = $intro['header'];
                    $words = explode(' ', $text);
                @endphp
                <div>
                    <span style="color: white;">{{ $words[0] }}</span>
                    <span style="color: black;">{{ $words[1] }}</span>
                    <br>
                    <span style="color: white;">{{ implode(' ', array_slice($words, 2)) }}</span>
                </div>
              </h1>
            <p class="mt-2 mb-2">
              {{$intro['wordheader']}}
              </p>
        
          </div>
          <div class="col-lg-6">
            <img src="{{asset($intro['img'])}}"  class="img-fluid mt-2 mb-2 wow fadeInLeft" data-wow-delay="0.2s"  alt="">
          </div>
        </div>
      </div>
    </div>
    </div>

    <!--bg-->


  <!--start-about sections-->
  
  <div class="about-title mt-5 mb-5 text-end">
    <h2 class="mt-5 mb-5  container">{{ __('messages.services') }}</h2>
  </div>

  <div class="start-about" dir="ltr">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="img-about">
        <img  src="{{asset($about['img1'])}}" class="img-fluid mt-2 mb-2  wow fadeInDown" alt=""  data-wow-delay="0.1s">
      </div>
   
      <div class="row align-items-center ">
        <div class="col-6">
          <div class="four-img">
          <img src="{{asset($about['img2'])}}" class="img-fluid mt-2 mb-2 wow fadeInDown " data-wow-delay="0.2s" alt="">
        </div>
      </div>

      <div class="col-6">
        <div class="four-img">
        <img  src="{{asset($about['img3'])}}" class="img-fluid  wow fadeInDown mt-2 mb-2"  data-wow-delay="0.3s" alt="">
      </div>
    </div>

    <div class="col-6">
      <div class="four-img">
      <img  src="{{asset($about['img4'])}}" class="img-fluid  wow fadeInDown mt-2 mb-2 "   data-wow-delay="0.4s" alt="">
    </div>
  </div>
  <div class="col-6">
    <div class="four-img">
    <img src="{{asset($about['img5'])}}" class="img-fluid mt-2 mb-2 wow fadeInDown "  data-wow-delay="0.5s" alt="">
  </div>
</div>
</div>

    </div>
      <div class="col-lg-6 wow fadeIn"  >
        <div class="desc" dir="rtl">
          <h2  class="mt-3 mb-3 text-center">{{$about['header1']}}  <span><i class="fa-sharp fa-solid fa-circle-info"></i></span></h2>
          <p class="mt-3 mb-5 container " >
            {{$about['wordheader1']}}
          </p>
          <h2 class="mt-3 mb-3 text-center">{{$about['header2']}} <span><i class="fa-solid fa-building"></i></span></h2>
          <p class="mt-3 mb-5  container" >
            {{$about['wordheader2']}}
          </p>
          <h2 class="mt-2 mb-2 text-center" > {{$about['header3']}} <span><i class="fa-solid fa-person"></i></span></h2>
          <p class="mt-2 mb-2 container">
            {{$about['wordheader3']}}
          </p>
        </div>
  
      </div>
  </div>
  </div>
</div>
  <!--start-services sections-->

<!--app & web site-->

<div class="app-and-web mt-5 mb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="webimg">
          <img src="{{asset($service['img1'])}}"  class="img-fluid mt-3 mb-3 wow fadeInRight" data-wow-delay="0.2s" alt="">
        </div>
      </div>
      <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.4s" dir="rtl">
        <h2 class="mt-3 mb-3 text-center">
        @php
          $text = $service['header'];
          $segments = explode(',', $text);
          foreach ($segments as $segment) {
              $segment = trim($segment);
              echo $segment . "<br>";
          }
        @endphp
        </h2>
        <p class="mt-3 mb-3 text-light" >{{ $service['wordheader']}}
      </p>
      </div>
    </div>
  </div>
</div>

<!--app & web site-->



<!--slider-->

<div class="slider mt-0 mb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset($service['img2'])}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset($service['img3'])}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset($service['img4'])}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset($service['img5'])}}" class="d-block w-100" alt="...">
            </div>
          </div>
         
        </div>


      </div>
    </div>
  </div>
</div>

<!--slider-->




<!--two text-photo-->

<div class="two-photo-text mt-5 mb-5">
  <div class="container-fluid ">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="img-1">
        <img src="{{asset($excellence['img1'])}}" class="img-fluid mt-3 mb-3 " alt="">
      </div>
     <div class="titlte-img-1" dir="rtl">
      <h2 class="mt-3 mb-3 text-center" >{{ $excellence['header1']}} <span><i class="fa-solid fa-pen"></i></span></h2>
      <p class="mt-3 mb-3 container  " >{{ $excellence['wordheader1']}}
      </p>
     </div>
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="img-2">
      <img src="{{asset($excellence['img2'])}}" class="img-fluid mt-3 mb-3 " alt="">
    </div>
    <div class="title-img-2 " dir="rtl">
     <h2 class="mt-3 mb-3 text-center" >{{ $excellence['header2']}}  <span><i class="fa-regular fa-lightbulb"></i></span></h2>
     <p class="mt-3 mb-3 container" >{{ $excellence['wordheader2']}}
    </p> 
    </div>
  </div>
    </div>
  </div>

</div>
<!--two text-photo-->

<!--social media-->

<div class="social-media fixed-bottom " id="scroll">
  <div class="container" >
    <div class="social-arrow" >
      <button id="mybtn" onclick="toggleBtn()"><i class="fa-solid fa-angle-up"></i></button>
    </div>

      <div class=""  id="contacts">
          <div class="whats" id="whatsapp">
          <a href="#" class=""><i class="fa-brands fa-whatsapp"></i></a>
          </div>
          <div class="facebook">
            <a href="#" class=""><i class="fa-brands fa-facebook"></i></a>
          </div>
          <div class="instagram">
            <a href="#" class=""><i class="fa-brands fa-instagram"></i></a>
          </div>
          <div class="phone">
            <a href="#" class="" ><i class="fa-solid fa-phone" ></i></a>
          </div>
      </div>
</div>
</div>

<!--social media-->

@endsection

@section('js')
<script src="{{asset('fronted/customers/js/all.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('fronted/customers/js/wow.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/main.js')}}"></script>

<script>new WOW().init();</script>
@endsection



