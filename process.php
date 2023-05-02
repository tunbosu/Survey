<?php
$servername = "localhost"; // replace with your server name
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "survey"; // replace with your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Handle form data
$faculty = $_POST['faculty'];
$department = $_POST['department'];
$name_of_facility = $_POST['section2'];
$facility_type = $_POST['section1'];
$total_sitting_capacity = $_POST['section2'];
$functional_sitting_capacity = $_POST['section3'];
$internet_connectivity = $_POST['section4'];
$mode_of_internet_connection = $_POST['checkbox1'];
$projector_working = $_POST['section6'];
$year_of_usage = $_POST['section7'];

// Insert data into database
$sql = "INSERT INTO your_table_name (faculty, department, name_of_facility, facility_type, total_sitting_capacity, functional_sitting_capacity, internet_connectivity, mode_of_internet_connection, projector_working, year_of_usage) VALUES ('$faculty', '$department', '$name_of_facility', '$facility_type', '$total_sitting_capacity', '$functional_sitting_capacity', '$internet_connectivity', '$mode_of_internet_connection', '$projector_working', '$year_of_usage')";

if (mysqli_query($conn, $sql)) {
  echo "Data added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
