<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
  <?php

  DBconnect = @mysqli_connect("localhost", "root","","mine")
  
  $id = $name = $qty = $price = $category = $cost = $desc = $normal_price = $desc = $stock_order = "";
  $idErr = $nameErr = $qtyErr = $priceErr = $categoryErr = $costErr = $descErr = $normal_priceErr = $stock_orderErr = "";


  if (isset($_POST['submit']))
  {
    if($DBconnect)
	{
		if(empty($_POST["prod_id"]))
		{
			$idErr = "Product Id is required";		
		}

		if(empty($_POST["prod_name"]))
		{
			$nameErr = "Product name is required";
		}
	
		if(empty($_POST["prod_qty"]))
		{
			$qtyErr = "Product Qty is required";
		}

		if(empty($_POST["prod_price"]))
		{
			$priceErr = "Product price is required";
		}
		if(empty($_POST["prod_category"]))
		{
			$categoryErr = "Product category is required";
		}

		if(empty($_POST["prod_cost"]))
		{
			$costErr = "Product cost is required";
		}
		if(empty($_POST["prod_desc"]))
		{
			$descErr = "Product description is required";
		}

		if(empty($_POST["prod_Normal_price"]))
		{
			$normal_priceErr = "Product normal price is required";
		}

		if(empty($_POST["prod_stock_order"]))
		{
			$stock_orderErr = "Product stock order is required";
		}
		
		else
		{
			$qtyErr = $priceErr = $costErr = $descErr = $normal_priceErr = $stock_orderErr = "";
			
			
		}
	
	}
	
	else 
  }
  ?>

  <div class="container">
    <header class="header">
      <a class="link-title" href="index.php">SalePoint</a>
    </header>
    <div class="main">
      <a href="sale.php" class="button">VIEW</a>
      <a href="manger.html" class="button">Report</a>
      <a href="add.php" class="button">ADD</a>
      <a href="edit.html" class="button">EDIT</a>
    </div>
    <form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <p><span class="error">* required field</span></p>
      <div>
      </div>
     <h3>Please fill in the fields below to add a product.</h3>
      <table id="table1"; cellspacing="5px" cellpadding="5%">
        <tr>
          <td>Product Id:</td>
          <td><input type="text" name="prod_id"><span class="error">* <?php echo $idErr;?></span></td>
        </tr>
        <tr>
          <td>Product Name:</td>
          <td><input type="text" name="prod_name"><span class="error">* <?php echo $nameErr;?></span></td>
        </tr>
        <tr>
          <td>Qty:</td>
          <td><input type="text" name="prod_qty"><span class="error">* <?php echo $qtyErr;?></span></td>
        </tr>
        <tr>
          <td>Price Per Item:</td>
          <td><input type="text" name="prod_price"><span class="error">* <?php echo $priceErr;?></span></td>
        </tr>
        <tr>
          <td>Product category:</td>
          <td><input type="text" name="prod_category"><span class="error">* <?php echo $categoryErr;?></span></td>
        </tr>
        <tr>
          <td>Product cost price:</td>
          <td><input type="text" name="prod_cost"><span class="error">* <?php echo $costErr;?></span></td>
        </tr>
        <tr>
          <td>Product Description:</td>
          <td><textarea rows="3" cols="15" name="prod_desc"></textarea><span class="error">* <?php echo $descErr;?></td><td><p>Brief Description should have at most 500 characters</p></td>
        </tr>
        <tr>
          <td>Product normal price:</td>
          <td><input type="text" name="prod_Normal_price"><span class="error">* <?php echo $normal_priceErr;?></span></td>
        </tr>
        <tr>
          <td>Product Stock Order:</td>
          <td><input type="text" name="prod_stock_order"><span class="error">* <?php echo $stock_orderErr;?></span></td>
        </tr>
        <tr>
          <td> <input type="submit" name = "submit" value="Submit" /></td>
          <td> <input type="reset" name = "reset" value="Clear" /></td>
        </tr>
      </table>
    </form>
    <footer>
      &copy; 2018 SalePoint &nbsp; <span class="separator">|</span> Design by GROUP 03
    </footer>
   </div>
</body>
</html>
