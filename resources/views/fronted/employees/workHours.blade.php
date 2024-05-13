@extends('fronted.employees.layouts.page')
@push('css')
    @include('fronted.employees.includes.page2Head')
@endpush
@section('content')
<!--txt- and photo-->

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    function startTimer() {
        axios.post('{{ route('start.timer') }}')
            .then(response => {
                console.log(response.data);
                // Handle response as needed
            })
            .catch(error => {
                console.error(error);
                // Handle error as needed
            });
    }

    function stopTimer() {
        axios.post('{{ route('stop.timer') }}')
            .then(response => {
                console.log(response.data);
                // Handle response as needed
            })
            .catch(error => {
                console.error(error);
                // Handle error as needed
            });
    }
</script>


<div class="text-And-Photo mt-5 mb-5 cairo-uniquifier" id="text-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-img">
                <img src="{{asset('fronted/employees/imgs/Man-WithLapTop-removebg-preview.png')}}" class="img-fluid mt-3 mb-3" alt="">
            </div>
        </div>
        <div class="col-lg-6" dir="rtl">
        <div class="desc">
            <h5 class="mt-3 mb-3 text-center"> مواعيد العمل يوميا من  <span>الاحد</span> الي <span>الخميس </span></h5>
            <p class="mt-3 mb-3 text-center"> <strong>عدد ساعات العمل 8 <span>ساعات</span></strong></p>
            <div class="desc-2" id="text-2" >
               <p class="mt-3 mb-0" ><strong> يمكنك العمل لمدة 8 ساعات مرة واحده ويكنك تقسيم ساعات العمل الوقت التي يناسبك </strong></p>
               <p class="mt-0 mb-3"><strong><span>الاهم هو اتمام عدد ساعات العمل الرسمية</span> </strong></p>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
<!--txt- and photo-->

<!--days-->

<div class="days mt-5 mb-5 cairo-uniquifier">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 " dir="">
              <div class="start-days mt-3 mb-3">
                <div class="the-days">
                <div class="sat">
                  <h6 class="mt-2 mb-2" >السبت</h6>
                  <div class="agaza" id="agaza-1">
                    <h2 class="mt-5 mb-5" >اجازة</h2>
                    </div>
                  </div>
                    <div class="tus">

                      <h6 class="mt-2 mb-2">الاحد</h6>
                      <div class="time ">
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break" >استراحة قصيرة <br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="long-break">استراحة طويلة<br> من 10ص الي 8م</p>
                        <p class="pb-5">وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break">استراحة قصيرة<br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                       </div>
                      </ul>
                    </div>
                  
                 
                    <div class="tus">
                      <h6 class="mt-2 mb-2">الاثنين</h6>
                      <div class="time  ">
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break" >استراحة قصيرة <br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="long-break">استراحة طويلة<br> من 10ص الي 8م</p>
                        <p class="pb-5">وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break">استراحة قصيرة<br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                       </div>
                      </ul>
                    </div>
                
                    <div class="tus">
                      <h6 class="mt-2 mb-2">الثلاثاء </h6>
                      <div class="time ">
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break" >استراحة قصيرة <br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="long-break">استراحة طويلة<br> من 10ص الي 8م</p>
                        <p class="pb-5">وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break">استراحة قصيرة<br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                       </div>
                      </ul>
                    
                    </div>
                   
                    <div class="tus">
                      <h6 class="mt-2 mb-2">الاربعاء</h6>
                      <div class="time ">
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break" >استراحة قصيرة <br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="long-break">استراحة طويلة<br> من 10ص الي 8م</p>
                        <p class="pb-5">وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break">استراحة قصيرة<br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                       </div>
                       
                      </ul>
                    </div>
                    
                  
                    <div class="tus">
                      <h6 class="mt-2 mb-2">الخميس</h6>
                      <div class="time  ">
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break" >استراحة قصيرة <br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                        <p class="long-break">استراحة طويلة<br> من 10ص الي 8م</p>
                        <p class="pb-5">وقت العمل <br> من 10ص الي 8م</p>
                        <p class="small-break">استراحة قصيرة<br> من 10ص الي 8م</p>
                        <p>وقت العمل <br> من 10ص الي 8م</p>
                       </div>
                      </ul>
                    </div>
                    
                    <div class="tus">
                      <h6 class="mt-2 mb-2">الجمعة</h6>
                      <div class="agaza" id="agaza-2" >
                        <h2 class="mt-5 mb-5" >اجازة<h2>
                        </div>
                      </div>
                    </div>
              <div class="online-now mt-0 mb-0 ">
                <span><i class="fa-solid fa-circle"></i></span> <a href="#">لمعرفة من يعمل الان</a>
              </div>
        </div>
          </div>
            <div class="col-lg-5 ">
              <div class="the-toggle">
              <div class="toggle">
          <button class="btn" id="btn" onclick="toggleBtn()"><span><i id="icon" class="fa-solid fa-angle-up"></i></span> استثناء</button>
              <div class="start-time text-capitalize">
                <div id="container">
               <div  id="display">
                <span>00:00:00:00</span>
               </div>
              </div>
            </div>
          <div class="time-stopwatch">  
            <button class="start-btn" id="startbtn" onclick="startBtn()">بدا العمل الان</button>
          </div> 
          </div>
          <div class="stop-and-restart" id="contorls">
            <button class="stop"   id="stopbtn" onclick="stopBtn()">إستراحة</button>
              <p class="mt-3"> يتم احتساب عدد ساعات عملك هنا</p>
            <button class="restart" id="resttbtn" onclick="resetBtn()">إعادة</button>
          </div>
        </div>
              <div class="breaks mt-3 m-3 text-center" id="breaks" dir="">
              <ul>
                <li><a href="#">استراحة قصيرة</a></li>
                <li><a href="#">استراحة طويلة </a></li>
                <li><a href="#" class="breaks-3">انتهاء عدد الساعات</a></li>
              </ul>
            </div>
            </div>
              </div>
            </div>
            </div>
        </div>
    </div>
  </div>

<!--days-->
@endsection