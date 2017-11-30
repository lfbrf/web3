<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Realestate Bootstrap Theme </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="{{ URL::asset('/assets/bootstrap/css/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('/assets/style.css') }}"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css">


<!-- Owl stylesheet -->

<link rel="stylesheet" href="{{ URL::asset('/assets/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/assets/owl-carousel/owl.theme.css') }}">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/slitslider/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/slitslider/css/custom.css') }}" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<!-- Add jQuery library -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about') }}">Sobre</a></li>       
                <li><a href="">Contato</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->



 

<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="images/logo.png" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="{{ url('/') }}">Comprar</a></li>
                <li><a href="{{ url('/') }}">Alugar</a></li>         
              </ul>
</div>
<!-- #Header Starts -->
</div>

    @yield('content')

    @extends('footer')
</body>
</html> 