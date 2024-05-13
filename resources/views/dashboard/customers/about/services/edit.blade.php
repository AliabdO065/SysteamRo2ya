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
        <!-- .page-inner -->
        <form action="{{route('dashboard.customers.services.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">
            <input type="hidden" name="img"  value="{{$slide['img']}}">
            <input type="hidden" name="img2"  value="{{$slide['img2']}}">

            <div class="mb-3">
              <label >Title</label>
              <input type="text" class="form-control" value="{{$slide['title']}}" name="title" >
            </div>
            <div class="mb-3">
                <label >Details</label>
                <input type="text" class="form-control" value="{{$slide['details']}}" name="details" >
            </div>
            <div class="mb-3">
                <label  >Image1</label>
                <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;"  alt="...">
                <input  class="form-control" type="file"  accept="image/*,.gif" name="img">
            </div>

            <label  >Image2</label>
                <img src="{{asset($slide['img2'])}}" class="card-img-top" style ="width:100px;"  alt="...">
                <input  class="form-control" type="file"  accept="image/*,.gif" name="img2">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

