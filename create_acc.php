<?php
require('./connection.php');
extract($_POST);
if(strlen($regno)==0 || strlen($Name)==0 || strlen($email)==0 || strlen($password)==0 || strlen($confirm_password)==0){
    $_SESSION["error"] = "No such user";
    header("location: ./create_acc.html");
    exit;
}
$sql = "INSERT INTO `users`(`regno`, `name`, `email`, `password`, `confirm_password`) VALUES ('$regno','$Name','$email','$password','$confirm_password')";
if($password!=$confirm_password){
     echo "Error: Incorrect Password" ;
}
if (mysqli_query($conn, $sql)) {
 header("Location: ./home.php");
 die();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
