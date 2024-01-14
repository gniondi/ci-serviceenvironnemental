<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $id= $_GET["id"]; 

    
$sql = "DELETE FROM serviceenvironnemental where id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    // echo 'delete successfully';
    header('Location: listemission.php');
}else{
  die("Connection failed: " . mysqli_connect_error());
         
}

}
?>