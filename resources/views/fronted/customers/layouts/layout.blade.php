<?php

  $direction = app()->getLocale() == 'ar' ? 'ltr' : 'rtl';
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  style="direction: <?php echo $direction; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنجاز للبرمجيات</title>


@yield('css')
    
</head>
<body>

<!--navbar DeskTop-->
@include('fronted.customers.layouts.nav', ['specialNav' => true])

@yield('content')

 <!--footer -->
 @include('fronted.customers.layouts.footer')

@yield('js')

    <!--script files-->
</body>
</html>
