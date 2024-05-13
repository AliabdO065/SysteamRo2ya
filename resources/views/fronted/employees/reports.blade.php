@extends('fronted.employees.layouts.page')
@push('css')
    @include('fronted.employees.includes.pagesHead')
@endpush
@section('content')
    <!--txt-->
   
    <div class="txt cairo-uniquifier mt-5 " id="text-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-txt">
              <img src="{{asset('fronted/employees/imgs/img-1-.png')}}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" dir="rtl">
          <div class="txt-txt text-light">
            <h2 class="mt-3 mb-3 text-light">العمل علي التقرير</h2>
            <p class=" mt-3 mb-3">نضمن تحقيق اهدافنا وتطور منظومتنا بشكل مستمر</p>
            <div class="ta3lemat">
            <h2 class="mt-3 mb-3 p-2 ">تعليمات:</h2>
            <p class="mt-3 mb-3 p-1">  يجب إرسال التقرير بشكل مسمتر <br>   لمعرفة أعمالك السابقة والتي تعمل عليها الأن حفظا لتقدير شغلك </p>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>

<!--txt-->

<!--three-text_and_titles-->

<div class="three-text_and_titles cairo-uniquifier " id="text-2">
  <div class="container">
    <div class="row align-items-center ">
    <div class="col-lg-3">
      <div class="maham ">
        <h6 class="mt-5  text-center p-2 "> المهام المسبقة</h6>
        <hr class="bg-dark ">
        <span class=""></span>
        <div class="container">
        <hr class="bg-dark container">
      </div>
      <div class="container">
        <span></span>
        <hr class="bg-dark container">
      </div>
      <div class="container">
        <span></span>
        <hr class="bg-dark container">
      </div>
  
      </div>
    </div>
    <div class="col-lg-4">
      <div class="btn-1 mt-4 mb-4 text-center">
      <a href="#">طلب التقرير</a>
    </div>
    <form action="{{route('storeReport')}}" method=POST>
      @CSRF
      <div class="detils mt-3" dir="rtl">
        <div class="name" >
          <h5>الاسم</h5>
          <input type="text" name="name" required>
        </div>   
        <hr class="bg-dark container">
        <div class="job" >
          <h5>ما وظقتك</h5>
          <input type="text" name="job_title" required>
        </div>
        <hr class="bg-dark container">
        <div class="team-leader-name">
          <h5>اسم قائد التيم</h5>
          <input type="text" name="team_leader_name" required>
        </div>
        <hr class="bg-dark container">
        <div class="btn-2 mt-2 mb-2 text-center">
          <span><i class="fa-solid fa-plus" ></i></span><button value="submit">اضافة تقرير اليوم</button>
        </div>
    </form>
    </div>
  </div>
  <div class="col-lg-5" dir="rtl">
    <div class="team text-center">
    <div class="inputs-taqrer mt-3 ">
      <form >
        <button value="submit"><span><i class="fa-solid fa-plus" ></i></span>التقارير مع فريق العمل</button>
        <input type="text" required>
 
        <input type="text" required>
 
        <input type="text" required>
   
          <input type="text" required>
   
        <input type="text" required>

      </form>
    </div>
  </div>
  </div>
  </div>
    </div>
  </div>
  </div>
</div>

@endsection