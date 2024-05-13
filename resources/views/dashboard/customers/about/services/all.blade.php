@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <!-- .page-inner -->
        <div class="page-inner">
            <a href="{{route('dashboard.customers.services.add')}}" type="button" class="btn btn-success">Add services</a> 
                <hr>
            <div style="display: flex;flex-wrap: wrap;justify-content: space-between;">
                @if (!empty($content[0]))
                <?php// print_r($content);  die; ?>
                        @foreach ($content as $i => $slides)
                        <?php 
                                $string = $slides;
                                $pairs = explode('#x#', $string);
                                $slide = [];
                                foreach ($pairs as $pair) {
                                    list($key, $value) = explode('=#=', $pair);
                                    $slide[$key] = $value;
                                }
                        ?>
                        <div class="card" style="width: calc(50% - 50px);display: flex;">
                            <img src="{{asset($slide['img'])}}" class="card-img-top" style="height: 190px;width:350px;padding:10px" alt="...">
                            <img src="{{asset($slide['img2'])}}" class="card-img-top" style="height: 190px;width:350px;padding:10px" alt="...">                            <div class="card-body">
                                <h5 class="card-title">{{$slide['title']}}</h5>
                                <p class="card-text">{{$slide['details']}}</p>
                                <a href="{{route('dashboard.customers.services.edit',  $i )}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('dashboard.customers.services.delete',  $i )}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    @endforeach                        
                @endif
        </div>
    </div>
    </div>
@endsection