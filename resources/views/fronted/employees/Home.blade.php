<!DOCTYPE html>
<html lang="en">
  <head>
  @include('fronted.employees.includes.head')
  </head>
  <body>

    <!--navbar-desktop-->    
    @include('fronted.employees.includes.navbarDesktop')   
    <!--navbar-desktop-->


    <!-- navbar-mopile-->   
    @include('fronted.employees.includes.navbarDesktop')
    <!-- navbar-mopile-->


    <!-- start sec1 -->
    @include('fronted.employees.includes.startSection')
    <!-- end sec1 -->

    <!-- start sec2 -->
    @include('fronted.employees.includes.ourServices')
    <!-- start sec2 -->

    <!-- start sec3 -->
    @include('fronted.employees.includes.ourProjects')
    <!-- start sec3 -->


    <!-- start sec4 -->
    @include('fronted.employees.includes.customerOpinions')
    <!-- end sec4 -->


    <!-- start sec5 -->
    @include('fronted.employees.includes.customerSuggetions')
    <!-- end sec5 -->

    <!--footer-->
    @include('fronted.employees.includes.footer')
    <!--footer-->


    <!--script file-->
    @include('fronted.employees.includes.script')
    <!--script file-->
  </body>
</html>
