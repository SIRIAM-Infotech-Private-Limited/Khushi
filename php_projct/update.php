<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
    $task_name = $_POST['task_name'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];

    // Perform any necessary validation and security checks here

    // Database connection details
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $database ="user_info";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check the connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Update the record in the database
    $sql = "UPDATE notes SET task_name = '$task_name', priority = '$priority', status = '$status' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record updated successfully.";
        header("Location: index.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
        header("Location: index.php");
    }

    // Close the connection
    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
