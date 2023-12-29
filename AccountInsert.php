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
$sql = "INSERT INTO accounts (CustomerName,IdNo,GroupName,openingBalance)
VALUES ('$_POST[cname]','$_POST[idno]','$_POST[grp]','$_POST[opb]')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('New record has been created');</script>";   
   echo "<script>window.open('AddAccounts.php','_self')</script>";
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
        ?>