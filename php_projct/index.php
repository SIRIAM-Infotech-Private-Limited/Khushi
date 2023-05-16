<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database ="user_info";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM `notes`";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* .back {
  background: #e2e2e2;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
} */

.div-center {
  width: 400px;
  height: 400px;
  background-color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: auto;
  padding: 1em 2em;
  border-bottom: 2px solid #ccc;
  display: table;
}

div.content {
  display: table-cell;
  vertical-align: middle;
}
.styled-table {
    margin-left: 350px;
    border-collapse: collapse;
    /* margin: 25px 0; */
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 700px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-top: 544px
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
    </style>
  </head>
  <body>
  <div class="back">
  <div class="div-center">
    <div class="content">
      <h3>Add Task</h3>
      <hr />
      <form action = "insert_task.php" method = "POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Task Name</label>
          <input type="text" class="form-control" name= "name" placeholder="Task Name">
        </div>
        <div class="form-group">
        <label for="sel1">Priority</label>
        <select class="form-control" id="sel1" name = "priority">
            <option>Select Priority</option>
            <option>Normal</option>
            <option>Urgent</option>
        </select>
        </div>
        <div class="form-group">
        <label for="sel1">Status</label>
        <select class="form-control" id="sel1" name = "status">
            <option>Select Status</option>
            <option>Pending</option>
            <option>Completed</option>
        </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add</button>
        <hr />
      </form>
    </div>
    </span>
  </div>
    <?php
if ($result) {
    // Fetch the data as an associative array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Create the HTML table structure
    echo '<table class = "styled-table">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Task Name</th>';
    echo '<th>Priority</th>';
    echo '<th>Status</th>';
    echo '<th>Action</th>';
    echo '</tr>';

    // Loop through the rows and display data in table cells
    foreach ($rows as $row) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['task_name'] . '</td>';
        echo '<td>' . $row['priority'] . '</td>';
        echo '<td>' . $row['status'] . '</td>';
        echo '<td>
        <a href="edit.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>
        <button type="button" class="btn btn-danger" onclick="confirmDelete(' . $row['id'] .')">Delete</button>
</td>';
        echo '</tr>';
    }

    echo '</table>';

    // Free the result set
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this record?")) {
        window.location.href = "delete.php?id=" + id;
    }
}
</script>

  </body>
</html>