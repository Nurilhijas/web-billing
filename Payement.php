<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-repeat: no-repeat;
background-size:100%;
}
form {border: 3px solid #f1f1f1;
width: 30%;
height:30%;
    padding: 10px;
align:center;
margin:auto;
color:#DF1426;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #E23D15;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.dat
{
	 width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body background="image7.jpg">


<form method="POST" action="PayInsert.php">
            
  <div class="container">
<h2>Payment</h2> 

    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Name" name="bname" required>

    <label for="psw"><b>Recipt No</b></label>
    <input type="text" placeholder="Recipt No" name="ano" required>
        
    <label for="stk"><b>Date</b></label>
    <input type="Date" name="hon" class="dat" required>

	<label for="price"><b>Amount</b></label>
    <input type="text" placeholder="Amount" name="amt" required>
        
    <button type="submit">Submit</button>
<input type="button" onclick="myFunction()" value="Finish" class="num"></button>
  </div>
<script>
function myFunction()
{
	window.open('Mainpage .php');
	}
</script>
  <STYLE>
  .num {
    background-color: #13498A;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

  </STYLE>
  
</form>

</body>
</html>
