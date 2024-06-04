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
            ?>
        <!-- .page-inner -->
        <form action="{{route('dashboard.customers.updatecontact')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="mb-3">
                <label >Address OF Company</label>
                <input type="text" class="form-control" value="{{$slide['address']}}" name="address" >
            </div>
            <div class="mb-3">
                <label >Phone</label>
                <input type="text" class="form-control" value="{{$slide['phone']}}" name="phone" >
            </div>
            <div class="mb-3">
                <label >facebook</label>
                <input type="text" class="form-control" value="{{$slide['face']}}" name="face" >
            </div>
            <div class="mb-3">
                <label >instagram</label>
                <input type="text" class="form-control" value="{{$slide['insta']}}" name="insta" >
            </div>

            <button type="submit" style="width: 184px;font-size: 27px;height: 49px;margin-left: 50%;transform: translateX(-50%);" 
            class="btn btn-primary">Edit</button>

        </form>
        </div>
    </div>
    </div> 
@endsection

