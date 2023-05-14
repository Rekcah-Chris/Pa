<?php

// Establishing connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parking_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checking if connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if(isset($_POST['btn_next'])) {
 // Get form data and sanitize input
 $car_Id = mysqli_real_escape_string($conn, $_POST['Car_Id']);
 $car_Type = mysqli_real_escape_string($conn, $_POST['Car_Type']);
 $car_Owner = mysqli_real_escape_string($conn, $_POST['Car_Owner']);
 $car_Category = mysqli_real_escape_string($conn, $_POST['Car_Category']);

 // Check if the Car_ID exists in the parking_table
$sql = "SELECT * FROM vehicle_table WHERE Car_ID = '$car_Id'";
 $stmt = mysqli_prepare($conn, $sql);
 mysqli_stmt_bind_param($stmt, "i", $car_Id);
 mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);
 $row_count = mysqli_num_rows($result);

 // If the Car_ID does not exist in the parking_table, insert data into vehicle_table
if ($row_count == 0) {
  // Insert form data into database using prepared statement
  $sql = "INSERT INTO vehicle_table (Car_Id, Car_Type, Car_Owner, Car_Category) VALUES (?, ?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "isss", $car_Id, $car_Type, $car_Owner, $car_Category);
  
  if (mysqli_stmt_execute($stmt)) {
      echo "Data inserted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
} else {
  echo "Error: The value of Car_ID already exists in the parking_table table";
}
}
?>

