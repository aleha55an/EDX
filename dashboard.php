<?php
session_start();
include_once 'connection.php';
$user_id=  $_SESSION['user_id'];
$Select = "SELECT * FROM signup WHERE  user_id = '$user_id'";
$Query = mysqli_query($conn, $Select);
$row = mysqli_fetch_array($Query);
$select = "SELECT * FROM signup";
$query = mysqli_query($conn, $select);
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
    <!-- ----navbar-- -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand user-heading" href="#">Dashboard</a>
            <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn all-btn my-2 my-sm-0" type="submit">Search</button>
     </form>
           
            </div>
        <form class="d-flex dropdown-form">
        <button class="nav-item dropdown   btn-style" >
        <a class="nav-link dropdown-toggle nav-icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        </a>
         <div class="dropdown-menu dropdown-div" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php"><?php echo $row['user_name']; ?></a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </button>
     </form>       
    </div>
    </nav>  




   <!-- ---navbar-end-----  -->
   
   <div class="container">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h1>Admin Panel</h1>
            </center>
      </div>
</div>
    <div class="row">
        <div class="col-md-12 ">
            <table class="table bg-form text-light table-striped mt-2 " >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Email</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($urow = mysqli_fetch_array($query)) {
                       

                    ?>
                        <tr>
                            <td><?php echo $urow['user_id']?></td>
                            <td><?php echo $urow['user_name']?></td>
                            <td><?php echo $urow['user_email']?></td>
                            <td><a href="edit.php?edit_id=<?php echo $urow['user_id']?>"><button class="btn all-btn1">Edit</button></a></td>
                          <td>  <a href="delete.php?del_id=<?php echo $urow['user_id']?>"><button class="btn del-btn">Delete</button></a>
                        </td>
                        </tr>
                    <?php
                    }
                    ?>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>


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