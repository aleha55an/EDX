<?php
session_start();
include_once 'connection.php';
if (isset($_POST['signup'])) {
    $id =  $_POST['user-id'];
    $name =  $_POST['username'];
    $email =   $_POST['useremail'];
    $pass =  $_POST['userpassword'];
    // $pass = password_hash($password, PASSWORD_DEFAULT);
    $SelectST = "SELECT * FROM signup WHERE user_email ='$email'";
    $QueryST = mysqli_query($conn, $SelectST);
    if (mysqli_num_rows($QueryST) == 1) {
        // echo '<script>alert("Data already Exsist")</script>';
        echo "<script>
       window.location.href='signup.php';
       alert('Data already Exsist');
     </script>";
    } 
    else {
        $INSERT = "INSERT INTO signup (user_id,user_name,user_email,user_password) VALUES ('$id','$name','$email','$pass')";
        $query = mysqli_query($conn, $INSERT);
        if ($query) {
            header('location:signup.php');
        } else {
            echo mysqli_error($conn);
        }
    }
}

  //--login--//

if (isset($_POST['loginform'])) {
     $email = $_POST['useremail'];
     $pass = $_POST['userpassword']; 
    // $pass=password_verify($password, PASSWORD_DEFAULT);
    $select = "SELECT * FROM `signup` WHERE user_email = '$email' AND user_password = '$pass'";
    $query = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($query);
   if($row['status']=="admin"){
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['user_id'] = $row['user_id'];
    header('location: dashboard.php');
    }
   }else if($row['status']=="user"){
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['user_id'] = $row['user_id'];
        header('location:course-detail.php');
    }
   }
   else {
        $_SESSION['message'] = "<span style='color:white';>Email And Password Are Not Match</span> <a href='signup.php' style='color:#FF6600';tex'  > Please Reg Your Account</a>";
        header('location:index.php');
        
    }
}


// ---update-profile---
if(isset($_POST['update-profile'])){
    $id = $_POST['user-id'];
    $name = $_POST['username'];
    $phone_number = $_POST['phone-number'];
    $gender = $_POST['user-gender'];
    $street = $_POST['street-name'];
    $city = $_POST['city-name'];
    $country = $_POST['country-name'];
    $zipcode = $_POST['zip-code'];
    $user_id=  $_SESSION['user_id'];
    $catch = "SELECT * FROM userdata WHERE  user_id = '$user_id'";
    $query = mysqli_query($conn , $catch);
    if(mysqli_num_rows($query)>0){
       $UPDATE =  "UPDATE `userdata` SET `phone_number`=$phone_number,`user_city`= '{$city}',
       `user_country`='{$country}',`user_gender`='{$gender}',`user_street`='{$street}' WHERE user_id = $user_id";
       $query =mysqli_query($conn, $UPDATE);
      if($query){
        echo "<script>
       window.location.href='profile.php';
       alert('Profile Updated');
     </script>";
      } else{
        echo mysqli_error($conn);
      }
    }else{
         $INSERT  = "INSERT INTO userdata (user_id,phone_number,user_gender,user_street,user_city,user_country,user_zipcode) VALUES ('$id','$phone_number','$gender','$street','$city','$country','$zipcode')";
    $Query = mysqli_query($conn , $INSERT);
    if($Query){
        echo "<script>
       window.location.href='profile.php';
       alert('Profile Updated');
     </script>";
    }else
    echo mysqli_error($conn);
    }
}


// --edit---
if (isset($_REQUEST['update-status'])) {
  $name =  $_POST['username'];
  $email =   $_POST['useremail'];
  $status = $_POST['user-status'];
  $user_id = $_REQUEST['user_id'];
 
  $update = "UPDATE `signup` SET `status`='$status'  WHERE user_id= '$user_id'";
  $query = mysqli_query($conn, $update);
  if ($query) {
    echo "<script>
    window.location.href='dashboard.php';
    alert('Status Updated');
  </script>";
  } else {
      echo "Not Update";
  }
}
?>


