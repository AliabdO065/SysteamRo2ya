@extends('dashboard.layouts.layout')f
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <?php 
                $string = $content;
                $pairs = explode('#x#', $string);
                $slide = [];
                foreach ($pairs as $pair) {
                    list($key, $value) = explode('=#=', $pair);
                    $slide[$key] = $value;
                }
                // print_r($slide);die;
            ?>
        <!-- .page-inner -->
        <form action="{{route('dashboard.customers.aboutupdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')


            <div class="mb-3">
                <div class="mt-1">
                    <label >من نحن</label>
                    <input type="text" class="form-control" value="{{$slide['header1']}}" name="header1" >
                    <input type="text" class="form-control" value="{{$slide['wordheader1']}}" name="wordheader1" >
                </div>
                <div class="mt-2">
                    <label >Who are we</label>
                    <input type="text" class="form-control" value="{{$slide['header1_en']}}" name="header1_en" >
                    <input type="text" class="form-control" value="{{$slide['wordheader1_en']}}" name="wordheader1_en" >
                </div> 
                
            </div>

            <div class="mb-3">
                <div class="mt-1">
                    <label >نهجنا</label>
                <input type="text" class="form-control" value="{{$slide['header2']}}" name="header2" >
                <input type="text" class="form-control" value="{{$slide['wordheader2']}}" name="wordheader2" >
                </div>
                <div class="mt-2">
                    <label >our approach</label>
                <input type="text" class="form-control" value="{{$slide['header2_en']}}" name="header2_en" >
                <input type="text" class="form-control" value="{{$slide['wordheader2_en']}}" name="wordheader2_en" >
                </div>
            </div>

            <div class="mb-3">
                <div class="mt-1">
                    <label >جودتنا و إبداعنا</label>
                    <input type="text" class="form-control" value="{{$slide['header3']}}" name="header3" >
                    <input type="text" class="form-control" value="{{$slide['wordheader3']}}" name="wordheader3" >
                </div>
                <div class="mt-2">
                    <label >Our Quality & Creativity</label>
                    <input type="text" class="form-control" value="{{$slide['header3_en']}}" name="header3_en" >
                    <input type="text" class="form-control" value="{{$slide['wordheader3_en']}}" name="wordheader3_en" >
                </div>
                
              
              
            </div>
            
            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image1"  value="{{$slide['img1']}}">
                <input style="width:30%" class="form-control" type="file" name="img1">
                <img src="{{asset($slide['img1'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>
            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image2"  value="{{$slide['img2']}}">
                <input style="width:30%" class="form-control" type="file" name="img2">
                <img src="{{asset($slide['img2'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>
            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image3"  value="{{$slide['img3']}}">
                <input style="width:30%" class="form-control" type="file" name="img3">
                <img src="{{asset($slide['img3'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>
            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image4"  value="{{$slide['img4']}}">
                <input style="width:30%" class="form-control" type="file" name="img4">
                <img src="{{asset($slide['img4'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>
            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image5"  value="{{$slide['img5']}}">
                <input style="width:30%" class="form-control" type="file" name="img5">
                <img src="{{asset($slide['img5'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>


            <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" 
            class="btn btn-primary">Edit</button>

        </form>
        </div>
    </div>
    </div> 
@endsection


