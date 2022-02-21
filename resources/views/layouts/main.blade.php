
<!DOCTYPE html>
 
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive bootstrap admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - RentalStore - Description</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">


        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu d-md-none">

                    @include('partials.mainmenu')  
            
        </div>



        <!-- END: Mobile Menu -->
        <div class="d-flex">
            <!-- BEGIN: Side Menu -->

            <nav class="side-nav">
                 @include('partials.sidemenu')  
            </nav>

            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->

        
            <div class="content">
                <div class="top-bar">      
                    @include('partials.topbar')
                </div>

                @yield('content')
                  {{-- @include('partials.content')   --}}
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
        <script src="{{ asset('dist/js/ckeditor-classic.js') }}"></script>
    </body>
</html>