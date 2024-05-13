@extends('fronted.customers.layouts.layout')

@section('css')

<link rel="stylesheet" href="{{ asset('fronted/customers/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('fronted/customers/css/engaz.css') }}" />

<link rel="icon" type="image/jpeg" href="{{ asset('fronted/customers/assets/logo/logo.jpeg') }}" />   <!--google-font-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
     
@endsection


@section('content')
    
  <!--start-section-one-->
  <div class="start-section-one">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-5" dir="rtl">
    
            <div class="title-section-one">
                <h2 class="mt-3 mb-5"  style="color: black;">  {{$aboutus['header']}}  </h2>
                <p class="mt-3 mb-3">
                    {{$aboutus['wordheader']}} 
                </p>
    
            </div>
        </div>
        <div class="col-lg-7 ">
            <div class="img-section-1">
            <img src="{{asset($aboutus['img'])}}" class="img-fluid mt-3 mb-3" alt="">
            
        </div>
    </div>
    </div>
    </div>
  </div>



<!--section two web-->

    @if ( !empty($services[0]))
        @foreach ($services as $i => $slides)

        <?php
                $string = $slides;
                $pairs = explode('#x#', $string);
                $slide = [];
                foreach ($pairs as $pair) {
                    list($key, $value) = explode('=#=', $pair);
                    $slide[$key] = $value;
                }
        ?>
            @if ($loop->even) 
            
                    <div class="section-mopile">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="img-web">
                                    <img src="{{asset($slide['img'])}}" class="img-fluid mt-3 mb-3" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4" dir="rtl">
                                <div class="title-web">
                                    <h2 class="mt-3 mb-3 text-center" >{{$slide['title']}}</h2>
                                    <p class="mt-3 mb-3" > 
                                        {{$slide['details']}}      
                                    </p>
                                    <img src="{{asset($slide['img2'])}}" class="img-fluid mt-3 mb-3" alt="">
                                </div>
                            </div>
                        </div>      
                        </div>
                    </div>

            
            @endif 
            
            
            @if ($loop->odd) 
            
                <div class="section-web" id="page3" >
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4" dir="rtl">
                                <div class="title-web">
                                    <h2 class="mt-3 mb-3 text-center" >{{$slide['title']}}</h2>
                                    <p class="mt-3 mb-3" >
                                        {{$slide['details']}}
                                    </p>
                                    <img src="{{asset($slide['img2'])}}" class="img-fluid mt-3 mb-3 pb-3" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 text-lg-end">
                                <div class="img-web">
                                <img src="{{asset($slide['img'])}}" class="img-fluid mt-3 mb-3 " alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

            @endif


        @endforeach
    @endif

<!--section two web-->

<!--section two mopile-->


<!--section two mopile-->

<!--section3-->

<div class="section-four">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-6">
                <div class="row align-items-center">
                 <div class="col-6">
                    <img src="{{asset($whyus['img1'])}}" class="img-fluid mt-3 mb-3" alt="">
                 </div>
                 <div class="col-6">
                    <img src="{{asset($whyus['img2'])}}"class="img-fluid mt-3 mb-3" alt="">
                 </div>
                 <div class="col-6">
                    <img src="{{asset($whyus['img3'])}}" class="img-fluid mt-3 mb-3" alt="">
                 </div>
                 <div class="col-6">
                    <img src="{{asset($whyus['img4'])}}" class="img-fluid mt-3 mb-3" alt="">
                 </div>
                </div>
            </div>
            <div class="col-6" dir="rtl">
                <h2 class="text-center mt-3 mb-3">    {{$whyus['header']}} </h2>
                <p class="mt-3 mb-3 ">  
                    {{$whyus['wordheader']}}
                </p>
            </div>
        </div>
    </div>
</div>


@endsection


@section('js')

<script src="{{asset('fronted/customers/js/all.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('fronted/customers/js/wow.min.js')}}"></script>
<script src="{{asset('fronted/customers/js/engaz.js')}}"></script>
<script>new WOW().init();</script>

@endsection
