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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];

$query=mysqli_query($conn,"INSERT INTO `notes`(`task_name`, `priority`, `status`) VALUES ('$name','$priority','$status')");

if($query)
{
    echo "<script>alert('Task Added');</script>";
    header("Location: index.php");
}
else{
    echo "<script>alert('Error');</script>";
    header("Location: index.php");
}
}

?>