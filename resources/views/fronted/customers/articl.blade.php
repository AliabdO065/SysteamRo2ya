@extends('fronted.customers.layouts.layout')

@section('css')
    

    {{-- <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    rel="stylesheet"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
    /> --}}
    <link rel="stylesheet" href="{{ asset('fronted/customers/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('fronted/customers/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fronted/customers/css/articles.css') }}" />
    <link rel="stylesheet" href="{{ asset('fronted/customers/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fronted/customers/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('fronted/customers/css/style.css') }}" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Kufi+Arabic:wght@100..900&display=swap"
    rel="stylesheet"
    />
    <!-- font -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
    ></script>
@endsection


@section('content')


    <!-- start macal -->
    <div class="macal container mt-5 mb-5 " >
      <div class="row justify-content-center bg-fov">
        <div class="col">
          <div class="card text-end">
            <div class="card-body">
              @php
              $text = $item['title2'];
              $words = explode(',', $text);
          @endphp
              <h5 class="card-title">
                @isset($words[0] )
                {{ $words[0] }}
                @endisset
              </h5>
              <span>
                @isset($words[1] )
                {{ $words[1] }}
                @endisset
              </span>
              <h6 class="card-subtitle mb-2 text-muted">
                @isset($words[2] )
                {{ $words[0] }}
                @endisset              </h6>
              <p class="card-text text-white">
               {{$item['details']}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end macal -->
    
    <!-- dcdd -->
    {{-- <div class="container mb-5">
      <div class="row">
        <div class="col">
          <h1 class="text-end">اضافه مقال</h1>
          <form class="d-flex flex-column text-end">
            <label for="">عنون المقال</label>
            <input
              type="text"
              name="name"
              class="question text-end p-3"
              id="nme"
              style="
                outline: none;
                border: 2px solid rgb(161, 24, 173);
                border-radius: 6px;
              "
              required
              autocomplete="off"
            />
            <label for="">محتوي المقال</label>
            <input
              type="text"
              name="name"
              class="question text-end p-3"
              id="nme"
              style="
                outline: none;
                border: 2px solid rgb(161, 24, 173);
                border-radius: 6px;
              "
              required
              autocomplete="off"
            />

            <div class="container btn-macal p-5">
              <div class="hjk text-center p-3">
                <button
                  class="btn-macal glow-on-hover fs-3"
                  style="cursor: pointer"
                  type="button"
                >
                  اضافه مقال
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> --}}

    <!-- ddcdd -->
    {{-- <div class="macal container mt-5 mb-5" style="display: none">
      <div class="row justify-content-center bg-fov">
        <div class="col">
          <div class="card text-end">
            <div class="card-body">
              <h5 class="card-title anwan"></h5>

              <p class="card-text text-white mahtaw"></p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}


@endsection

@section('js')
    <!--footeer-->
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
    <script src="{{asset('fronted/customers/js/bootstrap.js')}}"></script>
    <script src="{{asset('fronted/customers/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fronted/customers/js/mainTwo.js')}}"></script>
  
    <script>
      new WOW().init();
    </script>


@endsection

 

