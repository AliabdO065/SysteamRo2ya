@extends('dashboard.layouts.layout')
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
        <form action="{{route('dashboard.customers.updateaboutus')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label >Header</label>
                <input type="text" class="form-control" value="{{$slide['header']}}" name="header" >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" value="{{$slide['wordheader']}}" name="wordheader" >
            </div>

            <div class="mb-3 form-inline">
                <label  >Image</label>
                <input type="hidden" name="image"  value="{{$slide['img']}}">
                <input style="width:30%" class="form-control" type="file" name="img">
                <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;margin-left: 20PX;"  alt="...">
            </div>


            <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" 
            class="btn btn-primary">Edit</button>

        </form>
        </div>
    </div>
    </div> 
@endsection

