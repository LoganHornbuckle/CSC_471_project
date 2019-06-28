<html>
<head>
  <title>CSC 471 Project</title>
  <style>
    body{background-color: black; color: white;}
  </style>
</head>
<body>
<h1 style="font-family:verdana;"align="center">CSC 471 Project</h1>
<h2 style="font-family:verdana;"align="center">Delete Employee Results</h2>

<?php
$ssn = $_POST['ssn'];

if (!$ssn) {
   echo 'You have not entered search details. Please go back and try again.';
   exit;
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "471";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM Employee where ssn = $ssn";

if (mysqli_query($conn, $sql)) {
    echo "Record Successfully Deleted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>
