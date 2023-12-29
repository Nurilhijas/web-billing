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
color:#0BC8C0;
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
    background-color: #13498A;
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
<body background="image1.jpg">


<form method="POST" action="ItemInsert.php">
            
  <div class="container">
<h2>Add Item</h2> 

    <label for="uname"><b>Item Name</b></label>
    <input type="text" placeholder="Item Name" name="iname" required>

    <label for="psw"><b>Unit</b></label>
    <input type="text" placeholder="Unit" name="uiname" required>
        
    <label for="stk"><b>StockQty</b></label>
    <input type="text" placeholder="Stock Qty" name="stock" required>

	<label for="price"><b>Price</b></label>
    <input type="text" placeholder="price" name="price" required>
        <label for="Tax"><b>Tax</b></label>
    <input type="text" placeholder="Tax" name="Tax" required>
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
