<?php

$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect, "Animals");

$petType = $_POST['petType'];
$breed = $_POST['breed'];
$Fname = $_POST['Fname'];
$email = $_POST['email'];
$phno = $_POST['phno'];

if (isset($_POST['submit'])) {

    $sql = "INSERT into GiveAway(petType,Breed,FullName,Email,PhoneNo) Values ('$petType','$breed','$Fname','$email',$phno)";

    if($connect->query($sql)== TRUE){
        $message = "Added Succesfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<meta http-equiv='refresh' content ='0; url=animal.php'>";
    }
    else {
        echo "Error updating record: " . $connect->error;
      }
}

?>
