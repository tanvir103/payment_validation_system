<?php
require_once('database.php');
function userinfo($username,$password){
    $conn=dbConnection();
    $sql="SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
?>