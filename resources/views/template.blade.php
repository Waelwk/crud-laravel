<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- /Users/waelkamel/tp2/public/vendor CSS Files -->
  <link href="{{asset('/Users/waelkamel/tp2/public/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/Users/waelkamel/tp2/public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/Users/waelkamel/tp2/public/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/Users/waelkamel/tp2/public/vendor/boxicons/css/boxicons.min.css')}}"rel="stylesheet">
  <link href="{{asset('/Users/waelkamel/tp2/public/vendor/glightbox/css/glightbox.min.css')}}"rel="stylesheet">
  <link href="{{asset('/Users/waelkamel/tp2/public/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- =======================================================
  * Template Name: Delicious - v4.9.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
  

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    
    <ul class="nav navbar-nav">
      
      <li><a href="MatiereN">matiere</a></li>
      <li><a href="epreuve">epreuve</a></li>
    </ul>
  
     <ul class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3">
     @if (Route::has('login'))
               
                    @auth
                    <li  >   <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> </li>
                    @else
                    <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
              
            @endif
            </ul>


   
  </div>
  </nav>
  <div>@yield ('content')</div>

  
  

         
  <!-- /Users/waelkamel/tp2/public/vendor JS Files -->
  <script src="{{asset('/Users/waelkamel/tp2/public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/Users/waelkamel/tp2/public/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('/Users/waelkamel/tp2/public/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/Users/waelkamel/tp2/public/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/Users/waelkamel/tp2/public/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>