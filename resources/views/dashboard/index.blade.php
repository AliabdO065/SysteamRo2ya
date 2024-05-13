@extends('dashboard.layouts.layout')

@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">
        <!-- .page-title-bar -->
        <header class="page-title-bar">
          <div class="d-flex flex-column flex-md-row">
            <p class="lead">
              <span class="font-weight-bold">Hi, {{Auth::user()->name}}</span> <span class="d-block text-muted">

                Here's what's up with your business today!" <br>
                Let's catch up on what's happening with your business!
              </span>
            </p>
            <div class="ml-auto">
            </div>
          </div>
          <style>

            
          </style>
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
       
      
      
      
      
      </div><!-- /.page-inner -->
    </div><!-- /.page -->
  </div>
@endsection