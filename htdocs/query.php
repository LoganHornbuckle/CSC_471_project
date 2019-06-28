<html>
<head>
  <title>CSC 471 Project</title>
  <style>
    body{background-color: black; color: white;}
  </style>
</head>
<body>
<h1 style="font-family:verdana;"align="center">CSC 471 Project</h1>
<h2 style="font-family:verdana;"align="center">Query Results</h2>

<?php
// create short variable names
$searchtype=$_POST['searchtype'];
$searchterm=trim($_POST['searchterm']);

if (!$searchtype || !$searchterm) {
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

$sql = "SELECT * from $searchtype";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "$row[fName] "."$row[lName]"."<br>";
        echo "$searchterm"." -- "."$row[$searchterm]". "<br>"."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
