<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
</head>
<body>

<?php
  $host = "localhost";
  $username = "root" ;
  $password = "usbw";
  $database_in_use = "smartparkdb";

  $mysqli = new mysqli("$host","$username","$password","$database_in_use");

// Check connection
  if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();

  echo $mysqli ->host_info . "\n";

// Retrieve's all rows from database
  $sql = "SELECT id, company, fname, lname, email, telephone, arrivaldate, arrivaltime, returndate, returntime, price, nodays, parkoption, entrytime  FROM online_bookings";;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {
  echo "id: " . $row["id"].   "<br>";
  }
  } else {
  echo "0 results";
  }

  $mysqli->close();
  }
?>


</body>
</html>
