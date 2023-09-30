<?php

// Edit the database connection details
$servername = "sql12.freesqldatabase.com";
$username = "sql12650031";
$password = "q24rESRvGt";
$dbname = "sql12650031";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the book name from the form data
$book_name = $_POST['book_name'];

// Get the student for the given book name
$sql = "SELECT student FROM books WHERE book_name = '$book_name'";
$result = $conn->query($sql);

// Get the student name from the result set
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $student = $row['student'];
  }
} else {
  $student = "No student found for the given book name.";
}

// Close the connection
$conn->close();

// Display the student name
echo "<div id='student'>$student</div>";

?>

