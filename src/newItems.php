<!DOCTYPE html>
<html lang="en">

	<?php
		include_once("inc/header.php"); 
	?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New Items
                    <small>List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">New Items</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<table class="table table-striped">
			<thead>
				<tr>
					<td><h3>Product Name</h3></td>
					<td><h3>Pack</h3></td>
					<td><h3>Scheme</h3></td>
					<td><h3>M.R.P.</h3></td>
				</tr>
			</thead>
	        <tbody>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mahaveer";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT item, pack, scheme, mrp FROM `new-items`";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) { // Fetch Associative Array
					//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
					echo  '<tr><td>' . $row["item"] . '</td><td>'. $row["pack"] .'</td><td>' . $row["scheme"] .'</td><td>' . $row["mrp"] . '</td></tr>' ;
				}
			} else {
				echo "0 results";
			}
		
						
			$conn->close();				
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
