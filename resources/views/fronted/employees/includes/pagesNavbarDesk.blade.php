     <!--navbar-desktop-->

     <div class="get-nabvbar cairo-uniquifier fixed-top" id="navbars">
      <nav class="navbar navbar-expand-lg">
          <div class="container">
        <ul class="mb-2"> 
        @include('fronted.employees.includes.navbarDesktopItems')
      
    </li>
  </ul>
            <!-- <a class="navbar-brand text-white-50" href="#"><span><i class="fa-solid fa-bars-staggered"></i></span><img src="imgs/Logo-.png" class="img-fluid alt=" ></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon text-white-50">
                <i class="fa-solid fa-bars-staggered"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto mb-2 mb-lg-0 ">
                <div class="icons-navbar">
                  <a href="#" class="text-white-50"><i class="fa-solid fa-user"></i></a>
                  <a href="#" class="text-white-50"><i class="fa-solid fa-globe"></i></a>
                  <a href="#" class="text-white-50" id="btndarkmode" onclick="darkModePage2()" ><i class="fa-solid fa-moon"></i></a>
                  <a href="#" class="text-white-50"><i class="fa-solid fa-message"></i></a>
                </div>
                <div class="search text-center" dir="rtl">
                  <input type="search" placeholder="بحث"  >
                </div>
              </ul>
              <div class="logo-nav-desktop">
                <img src="{{asset('fronted/employees/imgs/Logo-.png')}}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </nav>

  </div>
  </div>

    <!--navbar-desktop-->

