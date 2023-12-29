<?php
        // put your code here
        
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO bank (BankName,AccountNo,Name,Amount)
VALUES ('$_POST[bname]','$_POST[ano]','$_POST[hon]','$_POST[amt]')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Bank Data stored');</script>";   
   echo "<script>window.open('AddBank.php','_self')</script>";
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
        ?>