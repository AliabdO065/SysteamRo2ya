@extends('fronted.customers.layouts.layout')

@section('css')
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('fronted/customers/css/all.css') }}" />
  <link rel="stylesheet" href="{{ asset('fronted/customers/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('fronted/customers/css/normalize.css') }}" />
  <link rel="stylesheet" href="{{ asset('fronted/customers/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('fronted/customers/css/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('fronted/customers/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('fronted/customers/css/fontawesome.min.css') }}" />
  <link rel="icon" type="image/jpeg" href="{{ asset('fronted/customers/assets/logo/logo.jpeg') }}" />

    <!-- css -->
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Kufi+Arabic:wght@100..900&display=swap"
      rel="stylesheet"
    />
@endsection


@section('content')

<div class="container-fluid" style="padding-left: 0 !important; padding-right: 0 !important">


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  
        @if ( !empty($images[0]))
            @foreach ($images as $i => $slides)
              <?php
                      $counter = $loop->index + 1
              ?>

          <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="{{$loop->index}}"
          @if($loop->index == 1 )
              class="active"
              aria-current="true"
          @endif
          aria-label="Slide {{$counter}}"
          ></button>

          @endforeach
      @endif
  </div>

  <div class="carousel-inner">


    @if ( !empty($images[0]))
        @foreach ($images as $i => $slides)

        <?php
                $string = $slides;
                $pairs = explode('#x#', $string);
                $slide = [];
                foreach ($pairs as $pair) {
                    list($key, $value) = explode('=#=', $pair);
                    $slide[$key] = $value;
                }
        ?>


    <div class="carousel-item @if($loop->index == 0 ) active   @endif">
      <img height="700px"
        src="{{asset($slide['img'])}}"
        class="d-block w-100"
        alt="..."
      />
    </div>

        @endforeach
    @endif
  </div>



  <div class="bdt-navigation-arrows bdt-position-center-left reveal-muted"> 
    <a style="    position: absolute;  left: 12px;" class="carousel-control-prev" href="#" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
      
      <a class="carousel-control-next" href="#"  data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span></a>
</div>

</div>
</div>
<!-- End carousel -->
<!-- start Our business -->

<div class="header">
<!--Content before waves-->

<div class="container mb-5 pt-5">
  <div class="row row-cols-1 row-cols-md-2 g-4">

    @if ( !empty($fields[0]))
        @foreach ($fields as $i => $slides)

        <?php
                $string = $slides;
                $pairs = explode('#x#', $string);
                $slide = [];
                foreach ($pairs as $pair) {
                    list($key, $value) = explode('=#=', $pair);
                    $slide[$key] = $value;
                }
        ?>

                
        <div class="col">
          <div class="card" style="background-color: #a168b8; color: white">
            <img
              src="{{asset($slide['img'])}}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h3 class="card-title">  {{$slide['title']}} </h3>
              <p class="card-text text-black fs-6">
                {{$slide['details']}}
              </p>
            </div>
          </div>
        </div>

        @endforeach
    @endif


  </div>
</div>

<!--Waves Container-->
<div>
  <svg
    class="waves"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28"
    preserveAspectRatio="none"
    shape-rendering="auto"
  >
    <defs>
      <path
        id="gentle-wave"
        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
      />
    </defs>
    <g class="parallax">
      <use
        xlink:href="#gentle-wave"
        x="48"
        y="0"
        fill="rgba(255,255,255,0.7"
      />
      <use
        xlink:href="#gentle-wave"
        x="48"
        y="3"
        fill="rgba(255,255,255,0.5)"
      />
      <use
        xlink:href="#gentle-wave"
        x="48"
        y="5"
        fill="rgba(255,255,255,0.3)"
      />
      <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
  </svg>
</div>
<!--Waves end-->
</div>
<!--Header ends-->

<!--Content starts-->

<!--Content ends-->
<!-- End Our business -->
<!-- hhh -->
<div class="container p-5">
<div class="hjk text-center p-3">
  <button class="glow-on-hover fs-3" style="cursor: auto" type="button">
    اراء العملاء
  </button>
</div>
</div>
<!-- hhh -->
<!-- jjj -->
<div class="wrapper pb-5">
  @if ( !empty($comments[0]))
  @foreach ($comments as $i => $slides)

  <?php
          $string = $slides;
          $pairs = explode('#x#', $string);
          $slide = [];
          foreach ($pairs as $pair) {
              list($key, $value) = explode('=#=', $pair);
              $slide[$key] = $value;
          }
  ?>

        <div class="box text-end mt-2">
          <i style="color: #7a00ff" class="fas fa-quote-right quote"></i>
          <p>
            {{$slide['comment']}} 
          </p>
          <div class="content d-flex flex-column">
            <div class="image">
              <img src="{{asset($slide['img'])}}" alt="" />
            </div>
            <div class="info">
              <div class="name"> {{$slide['name']}} </div>
              <div class="job">{{$slide['postion']}} </div>
              <div class="stars">
                @for($i=0;$i<$slide['rate']; $i++ )
                  <i style="color: #7a00ff" class="fas fa-star"></i>
                @endfor
                {{-- <i style="color: #7a00ff" class="fas fa-star"></i>
                <i style="color: #7a00ff" class="fas fa-star"></i>
                <i style="color: #7a00ff" class="fas fa-star"></i>
                <i style="color: #7a00ff" class="far fa-star"></i>
                <i style="color: #7a00ff" class="far fa-star"></i> --}}
              </div>
            </div>
          </div>
</div>



  @endforeach
@endif



</div>
<!-- jjj -->

@endsection


@section('js')
<script src="{{asset('fronted/customers/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/all.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/mainTwo.js')}}"></script>
@endsection
