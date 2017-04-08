<?php
    session_start();
    if (!isset($_SESSION['user']))
        header("Location: ../../login.php");
?>
<!DOCTYPE html>
<?php
        include_once("../../db.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include_once("inc/header.php"); 
    ?>
<?php
            $db = new Db();
                if (!isset($db)) { 
                die('Could not connect: ' . mysql_error()); 
            }
        ?>

    <!-- page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Data</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nahar Drugs Add New Records
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#clients" data-toggle="tab">Clients</a>
                            </li>
                            <li><a href="#companies" data-toggle="tab">Companies</a>
                            </li>
                            <li><a href="#products" data-toggle="tab">Products</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="clients">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="login-panel panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Fill New Client Details</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" method="post" action="addClient.php">
                                                <fieldset>
                                                    <!--div class="form-group">
                                                        <input class="form-control" placeholder="Client ID" name="id" type="number" autofocus>
                                                    </div-->
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Name" name="name" type="text" value="">
                                                    </div> 
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Address" name="addr" type="text" value="">
                                                    </div>                                                   
                                                    <!-- Change this to a button or input when using this as a form -->               
                                                    <button type="submit" class="btn btn-block btn-primary" name="btn-addClient">Add</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="companies">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="login-panel panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Fill New Company Details</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" method="post" action="addCompany.php">
                                                <fieldset>
                                                    <!--div class="form-group">
                                                        <input class="form-control" placeholder="Comp ID" name="id" type="number" autofocus>
                                                    </div-->
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Name" name="name" type="text" value="">
                                                    </div> 
                           
                                                    <!-- Change this to a button or input when using this as a form -->
                                                    <button type="submit" class="btn btn-block btn-primary" name="btn-addCompany">Add</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="products">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="login-panel panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Fill New Product Details</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" method="post" action="addProduct.php">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <!--input class="form-control" placeholder="Company ID" name="id" type="number" autofocus-->

							<select name="id" type="number" autofocus class="form-control">
							<?php                                            
                                            			$sql = "SELECT * FROM manufacturers";
                                           			 $result = $db->query($sql);
                                           
                                          		if ($result->num_rows > 0) {
                                                		// output data of each row
                                                		while($row = $result->fetch_assoc()) {
                                                        	                                      
                                                             		echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                                                          	  }
                                            		} else {
                                                		echo "0 results";
                                            		}                                        
                                          	      ?>     


							</select>	
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Name" name="name" type="text" value="">
                                                    </div> 
                                              
                                                    <!-- Change this to a button or input when using this as a form -->
                                                    <button type="submit" class="btn btn-block btn-primary" name="btn-addProduct">Add</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div> <!-- /.row -->

    </div> <!-- page-wrapper -->     
        
    <?php
        include_once ("inc/footer.php");
    ?>

    