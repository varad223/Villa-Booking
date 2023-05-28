


<!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <?php
include 'db.php';// Assuming you have already established a connection to the database

// Define your SQL query to fetch records from the table
$query = "SELECT * FROM regis";

// Execute the query
$result = mysqli_query($con, $query);

// Check if the query executed successfully
if ($result) {
    // Check if there are any records returned
    if (mysqli_num_rows($result) > 0) {
          echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>First Name</th>';
        echo '<th>Last Name</th>';
        echo '<th>Email</th>';
        echo '<th>Number</th>';
        echo '<th>Password</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        // Loop through the records and display them
        while ($row = mysqli_fetch_assoc($result)) {
            echo'<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['number'] . '</td>';
            echo '<td>' . $row['password'] . '</td>';
            // Add more table cells for additional fields
            echo '</tr>';
       

            
        }
             echo '</tbody>';
        echo '</table>';
    } else {
        echo "No records found.";
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    echo "Error executing the query: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($con);
?>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>