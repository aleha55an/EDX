<?php
session_start();
include_once 'connection.php';
$user_id=  $_SESSION['user_id'];
$Select = "SELECT * FROM signup WHERE  user_id = '$user_id'";
$Query = mysqli_query($conn, $Select);
$row = mysqli_fetch_array($Query);
$pick = "SELECT * FROM userdata WHERE  user_id = '$user_id'";
$query = mysqli_query($conn , $pick);
$urow = mysqli_fetch_array($query);
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
            <a class="navbar-brand user-heading" href="#">Profile</a>
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
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </button>
     </form>       
        </div>
    </nav>
<!-- ----profile-- ---->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1>Update Your Profile</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="contact-form bg-form rounded p-5">
                        <div id="success"></div>
                        <form action="function.php" name="sentMessage" id="contactForm" novalidate="novalidate" method="Post">
                        <h4 class="profile-head">Personal info</h4>
                        <div class="row"> 
                        <div class="col-md-6">
                        <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="id"  name="user-id" placeholder="Your ID" value ="<?php  echo $row['user_id'];?>" readonly required da="Please enter your Id" />
                                <p class="help-block text-danger"></p>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email"  name="useremail" placeholder="Your Email" value ="<?php  echo $row['user_email'];?>" readonly required data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                           </div>
                            <div class="col-md-6">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" required id="name"  name="username" placeholder="Your Name" value ="<?php  echo $row['user_name'];?>"  data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                           </div>
                           <div class="col-md-6">
                            <div class="control-group">
                                <input type="number" class="form-control border-0 p-4" required id="subject" name="phone-number" value ="<?php  if(mysqli_num_rows($query)>0){
                        echo $urow['phone_number'];
                    }else{
                        echo "";
                    } ?>"  placeholder="Your Contact Number" required data-validation-required-message="Please enter a contact number" />
                                <p class="help-block text-danger"></p>
                            </div>
                             </div>
                             <div class="col-md-6">
                            <div class="control-group">
                            <label class="form-check-label gender required " for="inlineCheckbox" >Gender: </label>  
                            <div class="form-check form-check-inline">   
                       <input class="form-check-input" type="radio" required id="inlineCheckbox1" name="user-gender" value="Male"   <?php 
                   if(empty($urow['user_gender'])){
                    echo "";
                   }else{
                    if($urow['user_gender']=="Male"){
                        echo "checked";
                    }else{
                        echo "";
                    }
                   }
                   ?> >
                       <label class="form-check-label gender" for="inlineCheckbox1"> Male</label>  
                   </div>
                 <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="user-gender" value="female" <?php 
                   if(empty($urow['user_gender'])){
                    echo "";
                   }else{
                    if($urow['user_gender']=="female"){
                        echo "checked";
                    }else{
                        echo "";
                    }
                   }
                   ?>>
              <label class="form-check-label gender" for="inlineCheckbox2">Female</label>
              
               </div>
                            </div>
                             </div>         
                         </div>
                         <h4 class="profile-head">Address</h4>
                         <div class="row">
                         <div class="col-md-6">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4"  id="subject" name="street-name"  value ="<?php  if(mysqli_num_rows($query)>0){
                        echo $urow['user_street'];
                    }else{
                        echo "";
                    } ?>"   placeholder="Your Street" required data-validation-required-message="Please enter your Street name" />
                                <p class="help-block text-danger"></p>
                            </div>
                             </div>
                      
                             <div class="col-md-6">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" required  id="subject" name="city-name"  value ="<?php  if(mysqli_num_rows($query)>0){
                        echo $urow['user_city'];
                    }else{
                        echo "";
                    } ?>"  placeholder="Your City" required data-validation-required-message="Please enter your City name" />
                                <p class="help-block text-danger"></p>
                            </div>
                             </div>
                             <div class="col-md-6">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4"  id="subject" name="country-name" value ="<?php  if(mysqli_num_rows($query)>0){
                        echo $urow['user_country'];
                    }else{
                        echo "";
                    } ?>"  placeholder="Your Country" required data-validation-required-message="Please enter your Country name" />
                                <p class="help-block text-danger"></p>
                            </div>
                             </div>
                             <div class="col-md-6">
                            <div class="control-group">
                                <input type="number" class="form-control border-0 p-4"  id="subject" name="zip-code" value ="<?php  if(mysqli_num_rows($query)>0){
                        echo $urow['user_zipcode'];
                    }else{
                        echo "";
                    } ?>" placeholder="Your Zip Code" required data-validation-required-message="Please enter your Zip Code" />
                                <p class="help-block text-danger"></p>
                            </div>
                             </div>
                      
                      </div>
                      
                            <div class="text-center">
                              
                              <input type="submit" name="update-profile" class="btn all-btn  py-3 px-5" value="Update">                            </div>
                            </div>
                        </form>
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