@extends('fronted.customers.layouts.layout')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<link rel="stylesheet" href="{{asset('fronted/customers/css/bootstrap.css')}}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

<link rel="stylesheet" href="{{ asset('fronted/customers/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/normalize.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/articles.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/main.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('fronted/customers/css/style.css') }}" /> --}}


<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet"/>
<!-- font -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection

@section('content')
<section class="slider-2 mt-0 mb-5" >
  <div class="container-fluid">
    <div class="row ">
      <div class="col-lg-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            @if ( !empty($articles[0]))
              @foreach ($articles as $i => $slides)
      
                <?php
                      $string = $slides;
                      $pairs = explode('#x#', $string);
                      $slide = [];
                      foreach ($pairs as $pair) {
                          list($key, $value) = explode('=#=', $pair);
                          $slide[$key] = $value;
                      }
                ?>

              <div class="carousel-item @if($loop->index === 0 ) active @endif" @if($loop->index === 0 ) data-bs-interval="10000" @endif>
                <img src="{{asset($slide['img'])}}" class="d-block w-100" @if($loop->index === 0 )  class="d-block w-100"  @endif alt="...">
              </div>   
              @endforeach
            @endif

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next text-dark" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>


 </section>
</div>
  <section class="my-5">
    <div class="container">
      <div class="row justify-content-center">
        @if ( !empty($articles[0]))
        @foreach ($articles as $k => $slides)

          <?php
                $string = $slides;
                $about_words = '';
                $pairs = explode('#x#', $string);
                $slide = [];
                foreach ($pairs as $pair) {
                    list($key, $value) = explode('=#=', $pair);
                    $slide[$key] = $value;
                }
                
          ?>
        <div class="col-lg-4 col-md-6 col-sm-8">
          <div class="card">
            <img src="{{asset($slide['img'])}}" alt="اوراق اعمالنا" />
            <div class="card-body">
              <h2 class="h4">{{$slide['title']}}</h2>
              <p>
                @if (!empty($slide['details'][0]))
                @for($i=0;$i<50; $i++ )
                  @if (!empty($slide['details'][$i])) 
                      @php
                        $about_words .=$slide['details'][$i];
                      @endphp
                  @endif
                @endfor
                {{$about_words}}                    
                @endif
              </p>
            <a href="{{route('fronted.customers.articleDetail',$k)}}" class="btn btn-info text-light"> {{ __('messages.look') }}</a>
            </div>
          </div>
        </div>
        @endforeach
      @endif

      </div>
    </div>
  </section>

  <section class="end">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <h4 class="text-center mb-3">{{ __('messages.distinguished') }}</h4>
        <br />


      
        @if ( !empty($purvies[0]))
            @foreach ($purvies as $i => $slides)

          <?php
                $string = $slides;
                $pairs = explode('#x#', $string);
                $slide = [];
                foreach ($pairs as $pair) {
                    list($key, $value) = explode('=#=', $pair);
                    $slide[$key] = $value;
                }
          ?>

            <div class="col-lg-4  mb-3">
              <div class="text">
                <h4>{{$slide['title']}}</h4>
                <h6>
                  {{$slide['details']}}
                </h6>
                {{-- <h6>{{$slide['details']}}</h6> --}}
              </div>
            </div>
             

          <div class="col-lg-4 mb-3">
            <div class="img">
              <img src="{{asset($slide['img'])}}" alt="" />
            </div>
          </div>
           @endforeach
      @endif


      </div>
    </div>
  </section>











  
@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
<script
  type="text/javascript"
  src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>




<script src="{{asset('fronted/customers/js/popper.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/all.min.js')}}"></script>
{{-- <script src="{{asset('fronted/customers/js/bootstrap.js')}}"></script> --}}
<script src="{{asset('fronted/customers/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/mainTwo.js')}}"></script>

<script>
  new WOW().init();
</script>

@endsection
