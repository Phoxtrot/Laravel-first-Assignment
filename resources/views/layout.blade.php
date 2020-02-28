<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!--Font Awesome-->
    <script src="js/all.js"></script> 
    <title></title>
    <!--main css--> 
    <link rel="stylesheet" href="/css/main.css"  
  </head>
  <body>
    <!--Nav Bar-->
    <nav class="navbar fixed-top navbar-dark navbar-expand-md bg-dark" >
    <!--logo-->
    <a href="/" class="navbar-brand text-uppercase  bg-primary text-white">My Health</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-contents-left" id="navbarLinks">
      <ul class="navbar-nav text-color-uppercase ml-auto">
        <li class="nav-item"><a href="#" class="nav-link text-uppercase">About </a></li>
        <li class="nav-item"><a href="#" class="nav-link text-uppercase">Contact </a></li>
        <li class="nav-item"><a href="#" class="nav-link text-uppercase">Career </a></li>
        <li class="nav-item"><a href="/staff" class="nav-link text-uppercase">staff profile </a></li>        
        <li class="nav-item"><button class="btn btn-outline-light pt-0 ml-2" type="button">
          <a href="/register" class="nav-link text-uppercase">sign up </a>
        </button></li>
      </ul>
    </div>
    </nav> 
    <div>
      @yield("header" )
      @yield("content" )
    </div>
    
  
  <!--Footer-->
  <section class="footer-color pt-5 mb-0">
      <div class="container mb-0">
        <div class="row align-items-center">       
         <div class="col">
            <span class="text-light m-3 align=top">2019 FINDMYEVENT.COM</span> 
            <span class="text-light m-3 ">ABOUT</span> 
            <span class="text-light m-3 ">CONTACT</span> 
            <span class="text-light m-3 ">PRIVACY POLICY</span>
          </div>                
        </div>      
          
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>

