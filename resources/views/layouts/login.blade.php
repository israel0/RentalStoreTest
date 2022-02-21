
<!DOCTYPE html>
 
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <meta name="author" content="israelAkinsola">
        <title> Dashboard - RentalStore</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">

          @yield('content')
        <!-- BEGIN: Dark Mode Switcher-->
  
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>