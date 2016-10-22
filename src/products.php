<!DOCTYPE html>

<?php
		include_once("db.php"); 
?>

<html lang="en">

	<?php
		include_once("inc/header.php"); 
	?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products
                    <small>List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Products</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<table class="table table-striped">
			<thead><tr>
				<td align="center"><h4>Company ID</h4></td>
				<td align="center"><h4>Product Name</h4></td>
			</tr></thead>
	        <tbody>
		<?php
			$db = new Db();
			if (isset($_GET["mfac_code"])) {
				$mfac_code = $_GET["mfac_code"];
				$query = "SELECT * FROM `products` WHERE `compID` = $mfac_code";				
			} else {
				$query = "SELECT * FROM `products`";
			}

			$result = $db -> select($query);
			if ($result->num_rows < 0) {
				echo '<tr><td  align="center"><h1> No records found... </h1> </td></tr>';
			} else {

				while ($row = $result -> fetch_assoc()) {
					echo '<tr><td align="center">' . $row["compID"] . '</td><td align="center">' . $row["name"] . '</td></tr>' ;					
				}
			}

			
			
		?>		
	            
	        </tbody>
    	</table>       
        
		<?php
		include_once ("inc/footer.php");
		?>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
