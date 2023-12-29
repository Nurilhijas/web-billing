<html>

<body background="image10.jpg">
<h1 align="center">Check Item Register</h1>
<br><br><br>

<form  method="POST" action="" align="center">
<input type="text" name="search"  style="font-size:20px; height:40px; width:450px" placeholder="Search.....">
<input type="submit" name="submit" value="Search" style="font-size:20px; height:40px; width:150px">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";
error_reporting(0); 
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from item where ItemName like '%$_POST[search]%'";

        $res=$con->query($sql);
echo "<table border='10' height='100' width='1500' align='center'>

<tr>

<th>ITEM NAME</th>

<th>UNIT</th>

<th>STOCK QTY</th>

<th>PRICE</th>

<th>TAX</th>
</tr>";
        while($row=$res->fetch_assoc()){
  echo "<tr>";

  echo "<td>" . $row['ItemName'] . "</td>";

  echo "<td>" . $row['Unit'] . "</td>";

  echo "<td>" . $row['StockQty'] . "</td>";

  echo "<td>" . $row['Price'] . "</td>";

  echo "<td>" . $row['Tax'] . "</td>";
  echo "</tr>";


            
			} 
echo "</table>";			

        }
?>
<br><br><br>
<form action="DisplayItem.php" align="center">
    <input type="submit" value="Print All Data" style="font-size:20px; height:40px; width:150px" />
</form>
</body>
</html>
