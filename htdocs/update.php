<html>
<head>
  <title>CSC 471 Project</title>
  <style>
    body{background-color: black; color: white;}
  </style>
</head>
<body>
<h1 style="font-family:verdana;"align="center">CSC 471 Project</h1>
<h2 style="font-family:verdana;"align="center">Update Employee Record</h2>

<?php
$ssn = $_POST['ssn'];
$dob = $_POST['dob'];
$fName = $_POST['fName'];
$mInt = $_POST['mInt'];
$lName = $_POST['lName'];

if (!$ssn || !$dob || !$fName || !$mInt || !$lName) {
   echo 'You have not entered search details.  Please go back and try again.';
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

$sql = "UPDATE Employee SET dob = '$dob', fName = '$fName', mInt = '$mInt', lName = '$lName' WHERE ssn = $ssn";

if (mysqli_query($conn, $sql)) {
    echo "Record Updated Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>
