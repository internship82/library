<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$book_name = $_POST['book_name'];
$student = $_POST['student'];

// Insert the data into the database
$sql = "INSERT INTO books (book_name, student) VALUES ('$book_name', '$student')";

if ($conn->query($sql) === TRUE) {
  echo "Book and student data saved successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>
