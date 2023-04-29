<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Collect data from form
$department_name = $_POST['department_name'];
$department_location = $_POST['department_location'];
$department_ict_equipment = implode(",",$_POST['department_ict_equipment']);

// Insert data into department table
$sql = "INSERT INTO department (name, location, ict_equipment) VALUES ('$department_name', '$department_location', '$department_ict_equipment')";

if (mysqli_query($conn, $sql)) {
  $department_id = mysqli_insert_id($conn);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Collect data from faculty fields
$faculty_name = $_POST['faculty_name'];
$faculty_designation = $_POST['faculty_designation'];
$faculty_contact = $_POST['faculty_contact'];
$faculty_research = $_POST['faculty_research'];

// Insert data into faculty table
$sql = "INSERT INTO faculty (department_id, name, designation, contact_information, research_interests) VALUES ('$department_id', '$faculty_name',
