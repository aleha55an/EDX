<?php
include_once 'header.php';
include_once 'connection.php';
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
     

  


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1>CREATE AN ACCOUNT</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form action="function.php" name="sentMessage" id="contactForm" method="Post">
                        <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="id"  name="user-id" placeholder="Your ID" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name"  name="username" placeholder="Your Name" required  />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email"  name="useremail" placeholder="Your Email" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4"  id="subject" name="userpassword" placeholder="Password" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class=" control-group form-check d-flex  mb-5">
                            <input class="form-check-input me-2" type="checkbox" name="terms" value="" id="form2Example3cg" required/>
                            <label class="form-check-label" for="form2Example3g">
                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                           </label>
                      </div>
                            <div class="text-center">
                              
                              <input type="submit" name="signup" class="btn all-btn  py-3 px-5" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  <!-- Back to Top -->
  <a href="#" class="btn btn-lg  btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- --custom javascript-- -->
  <script src="js/main.js"></script>
</body>

</html>
<?php
include_once 'footer.php';
?>