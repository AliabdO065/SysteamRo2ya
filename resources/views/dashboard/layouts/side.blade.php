      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
              <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span>
            <span class="account-summary"><span class="account-name">{{Auth::user()->name}}</span> 
          </button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->

              <div class="pb-3">
                <form  method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="dropdown-item" type="submit"> <span class="dropdown-icon oi oi-account-logout"></span> Logout</button>
              </form>              </div>
              <!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->

          <li class="menu-item has-active">
          <a href="{{route('dashboard.index')}}" class="menu-link"><span class="menu-icon fa fa-adjust"></span> 
                  <span class="menu-text">Dashboard</span></a>
          </li><!-- /.menu-item -->


                <li class="menu-item has-child">
                  <a href="{{route('dashboard.customers')}}" class="menu-link"><span class="menu-icon fa fa-home"></span>
                                      <span class="menu-text"> Customers </span> </a> <!-- child menu -->
                  <ul class="menu">


                    <li class="menu-item has-child">
                      <a href="{{route('dashboard.customers.aboutus')}}" class="menu-link"><span class="menu-icon fa fa-home"></span>
                                          <span class="menu-text">Main </span> </a> <!-- child menu -->
                      <ul class="menu">
                        
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers')}}" class="menu-link">Intro</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.about')}}" class="menu-link">about</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.service')}}" class="menu-link">our service</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.excellence')}}" class="menu-link">Excellence</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.contact')}}" class="menu-link">Contact</a>
                        </li>
                      </ul>
                    </li>




                    <li class="menu-item has-child">
                      <a href="{{route('dashboard.customers.images.work')}}" class="menu-link"><span class="menu-icon fa fa-home"></span>
                                          <span class="menu-text"> Our work </span> </a> <!-- child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.images.work')}}" class="menu-link">Images</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.fields')}}" class="menu-link">Fielde</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.rates')}}" class="menu-link">Comments</a>
                        </li>
                      </ul>
                    </li>



                    <li class="menu-item has-child">
                      <a href="{{route('dashboard.customers.articles')}}" class="menu-link"><span class="menu-icon fa fa-home"></span>
                                          <span class="menu-text"> Articles</span> </a> <!-- child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.articles')}}" class="menu-link">Articles</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.purvies')}}" class="menu-link">Purvies</a>
                        </li>
                      </ul>
                    </li>



                    <li class="menu-item has-child">
                      <a href="{{route('dashboard.customers.aboutus')}}" class="menu-link"><span class="menu-icon fa fa-home"></span>
                                          <span class="menu-text"> About us </span> </a> <!-- child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.aboutus')}}" class="menu-link"> About us</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.services')}}" class="menu-link">services</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{route('dashboard.customers.whyus')}}" class="menu-link">why us</a>
                        </li>
                      </ul>
                    </li>





                    

                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->










                {{--      <li class="menu-item has-child">
                  <a href="{{route('dashboard.slides')}}" class="menu-link"><span class="menu-icon fa fa-home"></span> <span class="menu-text"> Home</span> </a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="{{route('dashboard.slides')}}" class="menu-link">Slider</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.services.home')}}" class="menu-link">Our Services</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.about')}}" class="menu-link">About</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.category')}}" class="menu-link">Categories</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.images.home')}}" class="menu-link">Images</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.control')}}" class="menu-link">Project & News</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.master')}}" class="menu-link">Masters</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.contact')}}" class="menu-link">Contact</a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('dashboard.footer')}}" class="menu-link">Footer</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item --> --}}

                <!-- .menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
      