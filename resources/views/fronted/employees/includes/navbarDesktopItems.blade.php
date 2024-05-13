        <li class="nav-item dropdown text-white-50 ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-white-50"><i class="fa-solid fa-bars-staggered"></i></span>
            </a>
            
            <ul class="dropdown-menu  text-uppercase mt-3 mb-3" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('employeesHome')}}">الصفحة الرئسية</a></li>
                        <li><a class="dropdown-item" href="{{ route('employeesHome') }}#customersOpinions" id="ratecoustmer">اراء العملاء</a></li>
                        <li><a class="dropdown-item" href="{{route('employeesHome')}}#customerSuggetions" id="problem" >المقترحات والشكاوي</a></li>
                        <li><a class="dropdown-item" href="{{ route('report') }}">رفع التقرير اليومية</a></li>
                        <li><a class="dropdown-item" href="{{ route('workHours') }}"> وقت العمل</a></li>
                        <li><a class="dropdown-item" href="{{ route('whoWork') }}">من يعمل الان</a></li>
                        <li><a class="dropdown-item" href="{{ route('team') }}">فريق العمل</a></li>
            </ul>
        </li>