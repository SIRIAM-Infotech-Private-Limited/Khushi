<?php
// Check if the id parameter is present in the URL
if (isset($_GET['id'])) {
    // Get the id value from the URL
    $id = $_GET['id'];

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

    // Delete the record from the database
    $sql = "DELETE FROM notes WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record deleted successfully.";
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        header("Location: index.php");
    }

    // Close the connection
    mysqli_close($conn);
} else {
    echo "No id parameter provided.";
}
?>
