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
                <h1 class="page-header">Companies
                    <small>List</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Companies</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<table class="table table-striped">
			<thead><tr>
				<td align="center"><h4>Company ID</h4></td>
				<td align="center"><h4>Company Name</h4></td>
			</tr></thead>
	        <tbody>
				<?php

                                
					$db = new Db();
                                        if (!$db) { 
                                        die('Could not connect: ' . mysql_error()); 
                                        }

 

$sql = "SELECT * FROM manufacturers";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<tr><td align="center">' . $row["id"] . '</td><td align="center"><a href="products.php?mfac_code=' . $row["id"] . '">' . $row["name"] . '</a></td></tr>' ;						
    }
} else {
    echo "0 results";
}
$conn->close();
				
				?>		
	            
	        </tbody>
    	</table>  


    </div> <!-- Container -->     
        
		<?php
		include_once ("inc/footer.php");
		?>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>