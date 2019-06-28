<html>
<head>
  <title>CSC 471 Project</title>
  <style>
    body{background-color: black; color: white;}
  </style>
</head>
<body>
<h1 style="font-family:verdana;"align="center">CSC 471 Project</h1>
<h2 style="font-family:verdana;"align="center">Insert Results</h2>

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

$sql = "INSERT INTO Employee (ssn, dob, fName, mInt, lName)
VALUES ($ssn, $dob, '$fName', '$mInt', '$lName')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>
