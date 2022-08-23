<?php
session_start();
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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


    

 <!-- Navbar Start -->
 <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary   text-decoration-none right-sub-nav" onclick="rightnavbtn()"  >
                    <h5 class=" sp-col m-0"><i class="fa fa-book-open mr-2" ></i>Subjects</h5>
                    <i class="fa fa-angle-down  sp-col"></i>
                </a>
                <nav class="collapse  navbar navbar-vertical navbar-light align-items-start  bg-light" id="navbar-vertical" >
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" onclick="subbtn()">Web Design <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0  w-100 m-0" id="sub-dropdown">
                                <a href="404.php" class="dropdown-item">HTML</a>
                                <a href="404.php" class="dropdown-item">CSS</a>
                                <a href="404.php" class="dropdown-item">jQuery</a>
                            </div>
                        </div>
                        <a href="404.php" class="nav-item nav-link">Apps Design</a>
                        <a href="404.php" class="nav-item nav-link">Marketing</a>
                        <a href="404.php" class="nav-item nav-link">Research</a>
                        <a href="404.php" class="nav-item nav-link">SEO</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class=" sp-col">E</span>COURSES</h1>
                    </a>
                    <button type="button" class="navbar-toggler"  id="nav-btn" onclick="navbtn()">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0 " id="nav-contnt">
                            <a href="index.php" class="nav-item nav-link  nav-item-s nav-active-col">Home</a>
                            <a href="about.php" class="nav-item nav-link nav-item-s">About</a>
                            <a href="course.php" class="nav-item nav-link nav-item-s">Courses</a>
                            <a href="teacher.php" class="nav-item nav-link nav-item-s">Teachers</a>
                            <div class="nav-item dropdown">
                            
                                <a href="#" class="nav-link dropdown-toggle nav-item-s " onclick="blogbtn()">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0" id="blog-dropdown">
                                    <a href="blog.php" class="dropdown-item nav-item-s">Blog List</a>
                                    <a href="single.php" class="dropdown-item nav-item-s">Blog Detail</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link nav-item-s">Contact</a>
                        </div>
                        
                        <a class="btn  py-2 px-4 ml-auto d-none d-lg-block all-btn   " href="javascript:void(0);" onclick="openForm()">Login Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Navbar End -->
      <!-- ///pop up/// -->
      <div class="form-cont " id="myForm">
        
        <label  class="close-btn" title="close" onclick="closeForm()">×</label>
        <h1>Welcome</h1>
        <center>
                <div class="alert  ">
                    <?php
                    if (empty($_SESSION['message'])) {
                        // echo "No Message";
                    } else {

                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
                </div>
            </center>
        <form action="function.php" method="post">
            <label>Email </label>
            <input type="text" name="useremail" required>
            <label>Password</label>
            <input type="password" name="userpassword" required>
            <a href="#">Forgot Password?</a>
            <button class="join" name="loginform">Join Now</button>
            <div class="link">Not a member? <a href="signup.php">Sigup here</a></div>
        
            
        </form>
    </div>
      <!-- ---csutom main javascript---- -->
      <script src="js/main.js"></script>

<!-- --bootstrap js link-- -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
