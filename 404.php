<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDX</title>
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">

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

   <!-- Header Start -->
   <div class="container-fluid page-header" style="margin-bottom: 90px;">
       <div class="container">
           <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
               <h3 class="display-4 text-white text-uppercase">404</h3>
               <div class="d-inline-flex text-white">
                   <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                   <i class="fa fa-angle-double-right pt-1 px-3"></i>
                   <p class="m-0 text-uppercase ">404</p>
               </div>
           </div>
       </div>
   </div>
   <!-- Header End -->

    <!-- 404 Start -->
    <div class="container-xxl py-6" >
      <div class="container text-center">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                  <h1 class="display-1 sp-col">404</h1>
                  <h1 class="mb-4 cat-col">Page Not Found</h1>
                  <p class="mb-4 ">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                  <a class="btn all-btn py-3 px-5" href="index.php">Go Back To Home</a>
              </div>
          </div>
      </div>
  </div>
  <!-- 404 End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- ---csutom javascript--- -->
  <script src="js/main.js"></script>
</body>
</html>
<?php
include_once 'footer.php';
?>
