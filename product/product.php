<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  </head>
  <body>
    <?php include '../header.php'; ?>
    <div class="container" style="margin-top: 30px;">
      <div id="tableManager" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">Add New Product</h2>
            </div>
            <div class="modal-body">
              Name:
              <input type="text" class="form-control" placeholder="Name..." id="itemName" /><br />
              Name:
              <input type="text" class="form-control" placeholder="Category..." id="itemCategory" /><br />
              Price:
              <input type="number" class="form-control" placeholder="Price..." id="price" /><br />
              Minimum Required:
              <input type="number" class="form-control" placeholder="Minimum Required..." id="minRequired" /><br />
              Maximum Capacity:
              <input type="number" class="form-control" placeholder="Maximum Capacity..." id="maxCapacity" /><br />
              Starting Inventory:
              <input type="number" class="form-control" placeholder="Starting Inventory..." id="startingInventory" /><br />
            </div>
            <div class="modal-footer">
              <input type="button" onclick="manageData('addNew')" value="Save" class="btn btn-success" />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Products</h2>
          <input style="float: right" type="button" class="btn btn-success" id="addNew" value="Add New" />
          <table class="table table-hover table-bordered">
            <thead>
              <tr class="bg-dark text-white text-center">
                <td> Product ID </td>
                <td> Product Name </td>
                <td> Price </td>
                <td> Starting Inventory</td>
                <td> Inventory Purchase</td>
                <td> Inventory Sold </td>
                <td> Inventory On Hand</td>
                <td> Minimum Required </td>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
      <?php include '../footer.php'; ?>
    </div>
    <script src="js/product.js" type="text/javascript"></script>
  </body>
</html>