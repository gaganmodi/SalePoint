<?php
	if (isset($_POST['key'])) {

		$conn = @mysqli_connect("feenix-mariadb.swin.edu.au", "s100590129","301196", "s100590129_db")
			Or die ("<p>Unable to connect to the database server.</p>". "<p>Error code ". mysqli_connect_errno().": ". mysqli_connect_error()). "</p>";

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT id, ProductID, SaleDate, NumberOfSale FROM PHPSales LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<td>'.$data["id"].'</td>
							<td>'.$data["ProductID"].'</td>
                            <td>'.$data["SaleDate"].'</td>
                            <td>'.$data["NumberOfSale"].'</td>
							<td>
								<input type="button" value="Edit" class="btn btn-primary">
								<input type="button" value="Delete" class="btn btn-danger">
							</td>
						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$ProductID = $conn->real_escape_string($_POST['ProductID']);
		$SaleDate = $conn->real_escape_string($_POST['SaleDate']);
		$NumberOfSale = $conn->real_escape_string($_POST['NumberOfSale']);

		if ($_POST['key'] == 'addNew') {

				$conn->query("INSERT INTO PHPSales (ProductID, SaleDate, NumberOfSale) 
							VALUES ('$ProductID', '$SaleDate', '$NumberOfSale')");
				exit('New Sale Has Been Inserted!');
		
		}
	}
?>
