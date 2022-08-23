<?php
session_start();
include_once 'connection.php';
$user_id=  $_SESSION['user_id'];
$Select = "SELECT * FROM signup WHERE  user_id = '$user_id'";
$Query = mysqli_query($conn, $Select);
$row = mysqli_fetch_array($Query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EDX</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

     

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
  
       <!-- Font Awesome -->
       <script src="https://kit.fontawesome.com/4fcdc7c83f.js" crossorigin="anonymous"></script>
     <!-- bootstrap link -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- Customized  Stylesheet -->
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Topbar Start -->
     <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0"><span class="sp-col">E</span>DX</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt  sp-col mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>123 Fsd, Punjab, Pakistan</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope  sp-col mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <small>Ali@example.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone  sp-col mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+92 3018839540</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand user-heading" href="#">Course Detail</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn all-btn my-2 my-sm-0" type="submit">Search</button>
     </form>
           
            </div>
        <form class="d-flex dropdown-form">
        <button class="nav-item dropdown  btn-style " >
        <a class="nav-link dropdown-toggle nav-icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        </a>
         <div class="dropdown-menu dropdown-div" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php"><?php echo $row['user_name']; ?></a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
    </button>
     </form>       
        </div>
    </nav>

   
    
   
   

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h6 class="text-primary mb-3 sp-col">Jan 01, 2050</h6>
                        <h1 class="mb-5 cat-col">Vero ipsum sea justo dolore eirmod amet dolor tempor lorem</h1>
                        <img class="img-fluid rounded w-100 mb-4" src="img/carousel-1.jpg" alt="Image">
                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem.
                            Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                            consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit
                            gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea
                            sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.</p>
                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet
                            consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
                            sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et.
                            Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor
                            elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.</p>
                       
                        
                    </div>

                   

                   
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4 Author-bg">
                        <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="sp-col mb-3">John Doe</h3>
                        <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est  ipsum erat kasd amet elitr</p>
                    </div>
    
                    <!-- Search Form -->
                    <div class="mb-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search icon-color"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>
    
                    <!-- Category List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4 cat-col" style="letter-spacing: 5px;">Categories</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0 cat-col">Web Design</a>
                                <span class="badge badge-color  badge-pill">150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0 cat-col">Web Development</a>
                                <span class="badge badge-color badge-pill">131</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0 cat-col">Online Marketing</a>
                                <span class="badge badge-color badge-pill">78</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0 cat-col">Keyword Research</a>
                                <span class="badge badge-color badge-pill">56</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0 cat-col">Email Marketing</a>
                                <span class="badge badge-color badge-pill">98</span>
                            </li>
                        </ul>
                    </div>
    
                  
    
                </div>
            </div>
        </div>
    </div>

    <!-- Detail End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg  btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
      <!-- --bootstrap js link-- -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

    <!-- custom Javascript -->
    <script src="js/main.js"></script>


</body>

</html>
<?php
include_once 'footer.php';
?>