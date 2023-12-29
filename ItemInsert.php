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
$sql = "INSERT INTO item (ItemName,Unit,StockQty,Price, Tax)
VALUES ('$_POST[iname]','$_POST[uiname]','$_POST[stock]','$_POST[price]','$_POST[Tax]')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('New record has been created');</script>";   
   echo "<script>window.open('AddItem.php','_self')</script>";
	} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
        ?>