@extends('fronted.employees.layouts.page')
@push('css')
    @include('fronted.employees.includes.teamHead')
@endpush
@section('content')
<section class="team my-5 cairo-uniquifier " id="team">
        <div class="container">
            <div class="row work_now justify-content-center">
                <h2 class="text-center">من يعمل الان</h2>
                <br>
                <div class="col-lg-4">
                    <div class="now text-center border-1 border-end border-dark pe-3">
                        <h4>انهي العمل</h4>
                        <ul>
                            <li class="text-end"> Eng <span>1</span> </li>
                            <li class="text-end"> Eng <span>2</span> </li>
                            <li class="text-end"> Eng <span>3</span> </li>
                            <li class="text-end"> Eng <span>4</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="now text-center  border-1 border-end border-dark pe-3">
                        <h4>استراحة الان</h4>
                        <ul>
                            <li class="text-end"> Eng <span>1</span> </li>
                            <li class="text-end"> Eng <span>2</span> </li>
                            <li class="text-end"> Eng <span>3</span> </li>
                            <li class="text-end"> Eng <span>4</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="now text-center">
                        <h4>يعمل الان</h4>
                        <ul>
                            <li class="text-end"> Eng <span>1</span> </li>
                            <li class="text-end"> Eng <span>2</span> </li>
                            <li class="text-end"> Eng <span>3</span> </li>
                            <li class="text-end"> Eng <span>4</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection