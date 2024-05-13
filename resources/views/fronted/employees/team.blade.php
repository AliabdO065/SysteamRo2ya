@extends('fronted.employees.layouts.page')
@push('css')
    @include('fronted.employees.includes.teamHead')
@endpush
@section('content')
<section id="team"  class="team cairo-uniquifier">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title">
                        <h2>لمعرفه فريقك في العمل</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="col-md-12">
                        <div class="title-file">
                            <p>تيم ليدر</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="add" onclick="openForm(this)">اضافة <i class="fa-solid fa-user-plus"></i></button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-md-12">
                        <div class="title-file">
                            <p>تيم ليدر</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="add" onclick="openForm(this)">اضافة <i class="fa-solid fa-user-plus"></i></button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-md-12">
                        <div class="title-file">
                            <p>تيم ليدر</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="add" onclick="openForm(this)">اضافة <i class="fa-solid fa-user-plus"></i></button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-md-12">
                        <div class="title-file">
                            <p>تيم ليدر</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="file">
                            <p>تيم</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="add" onclick="openForm(this)">اضافة <i class="fa-solid fa-user-plus"></i></button>
                    </div>
                </div>

                <div id="lightBox">
                    <div id="containerForm" class="p-5">
                        <h2 class="m-3 ms-0">فورم تسجيل</h2>
                        <form action="">
                            <label for="name" class="form-label">اسم البشمهندس</label>
                            <input type="text" name="name" 
                            class="form-control" id="name">
    
                            <label for="work" class="form-label mt-3">تخصص البشمهندس</label>
                            <input type="text" name="work" 
                            class="form-control mb-3" id="work">
    
                            <label for="number" class="form-label">رقم البشمهندس</label>
                            <input type="tel" name="number" 
                            class="form-control" id="number">
    
                            <button class="btn btn-info m-4 ms-0">send</button>
                            <input type="reset" class="btn btn-danger">
                            <span><i class="fa-solid fa-xmark" id="close"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
