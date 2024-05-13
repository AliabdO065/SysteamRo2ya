

@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
        <!-- .page-inner -->
        <form action="{{route('dashboard.customers.rates.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label >Name</label>  @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
              <input type="text" class="form-control" name="name" class="@error('name') is-invalid @enderror">
            </div>
            <div class="mb-3">
              <label >Postion</label>  @error('postion')<div class="alert alert-danger">{{ $message }}</div>@enderror
              <input type="text" class="form-control" name="postion" class="@error('postion') is-invalid @enderror">
            </div>
            <div class="mb-3"> 
                <label >Comment</label> @error('comment')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" class="form-control" name="comment" class="@error('comment') is-invalid @enderror"> 
            </div>
            <div class="mb-3"> 
                <label >Rate</label> @error('rate')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="number" class="form-control" name="rate" id="rate" min="0" max="5" class="@error('rate') is-invalid @enderror"> 
            </div>
            <div class="mb-3"> @error('img')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <label  >The Image</label>
                <input  class="form-control" type="file"  accept="image/*,.gif" name="img" class="@error('img') is-invalid @enderror">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    </div>
@endsection

