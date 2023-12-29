 <!DOCTYPE html>  
    <html>  
  
    <head>  
        <title>Invoice</title>  
    </head>  

    <scriptsrc="//code.jquery.com/jquery-1.12.0.min.js">  
        </script>  
        <scriptsrc="//code.jquery.com/jquery-migrate-1.2.1.min.js">  
            </script>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  
            <body>  
                <form  method="POST" action="SalesInsert.php">  
                    <div class="box box-primary">  
                      
  <div class="box-header">  
                            <h3 class="box-title">Invoice </h3>  
                        </div>  
                        <div class="box-body">  
                            <div class="form-group">  
                                ReceiptName  
                                <input type="text" name="name" class="form-control">  
                            </div>  
                            <div class="form-group">  
                                Location  
                                <input type="text" name="location" class="form-control">  
                            </div>  
                        </div>  
                                  </div><br/>  
                    <table class="table table-bordered table-hover">  
                        <thead>  
                            <th>No</th>  
                            <th>Product Name</th>  
                            <th>Quantity</th>  
                            <th>Price</th>  
                            <th>Discount</th>  
                            <th>Amount</th>  
                            <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
                        </thead>  
                        <tbody class="detail">  
                            <tr>  
                                <td class="no">1</td>  
                                <td><input type="text" class="form-control productname" name="productname[]"></td>  
                                <td><input type="text" class="form-control quantity" name="quantity[]"></td>  
                                <td><input type="text" class="form-control price" name="price[]"></td>  
                                <td><input type="text" class="form-control discount" name="discount[]"></td>  
                                <td><input type="text" class="form-control amount" name="amount[]"></td>  
                                <td><a href="#" class="remove">Delete</td>  
</tr>  
<tbody class="detail">  
                            <tr>  
                                <td class="no">2</td>  
                                <td><input type="text" class="form-control productname" name="productname[]"></td>  
                                <td><input type="text" class="form-control quantity" name="quantity[]"></td>  
                                <td><input type="text" class="form-control price" name="price[]"></td>  
                                <td><input type="text" class="form-control discount" name="discount[]"></td>  
                                <td><input type="text" class="form-control amount" name="amount[]"></td>  
                                <td><a href="#" class="remove">Delete</td>  
</tr>  
<tbody class="detail">  
                            <tr>  
                                <td class="no">3</td>  
                                <td><input type="text" class="form-control productname" name="productname[]"></td>  
                                <td><input type="text" class="form-control quantity" name="quantity[]"></td>  
                                <td><input type="text" class="form-control price" name="price[]"></td>  
                                <td><input type="text" class="form-control discount" name="discount[]"></td>  
                                <td><input type="text" class="form-control amount" name="amount[]"></td>  
                                <td><a href="#" class="remove">Delete</td>  
</tr>  
</tbody>  
<tfoot>  
<tbody class="detail">  
                            <tr>  
                                <td class="no">4</td>  
                                <td></td>  
                                <td></td>  
                                <td></td>  
                                <td align="right">Total</td>  
                                <td><input type="text" class="form-control amount" name="amount[]"></td>  
                                  
</tr>  

</tfoot>  
  </table>  
</form>  

<input type="submit" class="btnbtn-primary" name="save" value="Save"> 
<input type="button" onclick="myFunction()" value="Print"></button>
<script>
function myFunction() {
    window.print();
}
</script>
<input type="button" onclick="myFunction1()" value="Finish" class="num"></button>

<script>
function myFunction1()
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

</body>
</html>  
