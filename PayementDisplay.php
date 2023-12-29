
<html>
<head>
<h1>PAYEMENTS DETAILS  </h1>
</head>
<body >
<style>
body{
	 font-family: "Times New Roman", Times, serif;
margin:60px;
	 }
</style>
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>NAME</th><th>RECIPT NUMBER</th><th>DATE</th><th>AMOUNT</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Name	, ReciptNo,Date,Amount FROM payement"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
<br>
<input type="button" onclick="myFunction()" value="Print"  ></button>

<script>
function myFunction() {
    window.print();
}
</script>

</body>

</html>