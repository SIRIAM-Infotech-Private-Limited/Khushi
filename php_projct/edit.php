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

    // Fetch the data for the specified id from the database
    $sql = "SELECT * FROM notes WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // Check if a row with the specified id exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Display the form for editing the data
        ?>
        <h1>Edit Task</h1>
        <form method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="task_name">Task Name:</label>
            <input type="text" name="task_name" value="<?php echo $row['task_name']; ?>" disabled><br>
            <label for="priority">Priority:</label>
            <input type="text" name="priority" value="<?php echo $row['priority']; ?>" disabled><br>
            <label for="status">Status:</label>
            <input type="text" name="status" value="<?php echo $row['status']; ?>"><br>
            <button type="submit">Update</button>
        </form>
        <?php
    } else {
        echo "No record found with the specified id.";
        
    }

    // Free the result set
    mysqli_free_result($result);

    // Close the connection
    mysqli_close($conn);
} else {
    echo "No id parameter provided.";
}
?>
