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
        <form action="{{route('dashboard.customers.rates.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" name="old" value="{{$old}}">
            <input type="hidden" name="img"  value="{{$slide['img']}}">
            <div class="mb-3">
              <label >name</label>
              <input type="text" class="form-control" value="{{$slide['name']}}" name="name" >
            </div>
            <div class="mb-3">
                <label >postion</label>
                <input type="text" class="form-control" value="{{$slide['postion']}}" name="postion" >
            </div>
            <div class="mb-3">
              <label >comment</label>
              <input type="text" class="form-control" value="{{$slide['comment']}}" name="comment" >
            </div>
            <div class="mb-3">
                <label for="rate">Rate</label>
                <input type="number" class="form-control" value="{{$slide['rate']}}" name="rate" id="rate" min="0" max="5">
            </div>
            
            <div class="mb-3">
                <label  >The Image</label>
                <img src="{{asset($slide['img'])}}" class="card-img-top" style ="width:100px;"  alt="...">
                <input  class="form-control" type="file"  accept="image/*,.gif" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
    </div> 
@endsection

