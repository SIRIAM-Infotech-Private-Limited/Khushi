<?php 
$servername = "localhost";
$username = "admin";
$password = "admin";
$database ="user_info";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['save']))
{
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$useremail=$_POST['user_email'];
$usernumber=$_POST['user_number'];
$userage=$_POST['user_age'];
$useraddress=$_POST['user_address']; 
$userstatus=$_POST['user_status'];
$query=mysqli_query($conn,"INSERT INTO `user_register`(`first_name`, `last_name`, `email`, `phone_number`, `age`, `address`, `marital_status`) VALUES ('$fname','$lname','$useremail','$usernumber','$userage','$useraddress','$userstatus')");
if($query)
{
    echo "<script>alert('User Added');</script>";
}
else{
    echo "<script>alert('Error');</script>";
}
}


die;




$insert="INSERT INTO `user_register`(`id`, `first_name`, `last_name`, `email`, `phone_number`, `age`, `address`, `marital_status`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')";
?>