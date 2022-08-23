<?php
include_once 'connection.php';
$del_id = $_GET['del_id'];
$DELETE = "DELETE FROM signup WHERE user_id = '$del_id'";
$query = mysqli_query($conn, $DELETE);
if ($query) {
    echo "<script>
    window.location.href='dashboard.php';
    alert('Record Deleted');
  </script>";
} else {
    echo "Not Del";
}
?>