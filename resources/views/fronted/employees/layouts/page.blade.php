<!DOCTYPE html>
<html lang="en">
<head>
@stack('css')
</head>
<body>

   <!--navbar-desktop-->    
   @include('fronted.employees.includes.pagesNavbarDesk')   
   <!--navbar-desktop-->


   <!-- navbar-mopile-->   
   @include('fronted.employees.includes.pagesNavbarMobile')
   <!-- navbar-mopile-->

   @yield('content')
  

  <!--footer-->
  @include('fronted.employees.includes.footer')
  <!--footer-->


  <!--script file-->
  @include('fronted.employees.includes.script')
  <!--script file-->

</body>
</html>