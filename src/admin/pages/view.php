<?php
    session_start();
    if (!isset($_SESSION['user']))
        header("Location: ../../login.php");
?>
<!DOCTYPE html>
<?php
        include_once("../../db.php"); 
?>
<html lang="en">
    <?php
        include_once("inc/header.php"); 
    ?>
    <!-- page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View Data</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
            $db = new Db();
                if (!isset($db)) { 
                die('Could not connect: ' . mysql_error()); 
            }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nahar Drugs Exsting Records
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
                                <br/>
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-clients">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM clients";
                                            $result = $db->query($sql);
                                            $count = 0;
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    if ($count == 0) {
                                                        echo '<tr class="even">';
                                                        $count = 1;
                                                    } else {
                                                        echo '<tr class="odd">';
                                                        $count = 0;
                                                    }
                                                    
                                                        echo '<td>' . $row["id"] . '</td>';
                                                        echo '<td>' . $row["name"] . '</td>';
                                                        echo '<td>' . $row["addr"] . '</td>';
                                                    echo '</tr>';
                                                                        
                                                }
                                            } else {
                                                echo "0 results";
                                            }                                        
                                        ?>    
                                     </tbody>
                                </table> 
                            </div>
                            <div class="tab-pane fade" id="companies">
                                <br/>
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-companies">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                            
                                            $sql = "SELECT * FROM manufacturers";
                                            $result = $db->query($sql);
                                            $count = 0;
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    if ($count == 0) {
                                                        echo '<tr class="even">';
                                                        $count = 1;
                                                    } else {
                                                        echo '<tr class="odd">';
                                                        $count = 0;
                                                    }                                            
                                                        echo '<td>' . $row["id"] . '</td>';
                                                        echo '<td align="center"><a href="viewProducts.php?mfac_code=' . $row["id"] . '">' . $row["name"] . '</a></td>';
                                                    echo '</tr>';
                                                                        
                                                }
                                            } else {
                                                echo "0 results";
                                            }                                        
                                        ?>     
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="products">
                                <br/>
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-products">
                                    <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Product Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if (isset($_GET["mfac_code"])) {
                                                $mfac_code = $_GET["mfac_code"];
                                                $query = "SELECT * FROM `products` WHERE `compID` = $mfac_code";                
                                            } else {
                                                $query = "SELECT  `products`.`name` as pname,  `manufacturers`.`name` as mname FROM products, manufacturers where `products`.`compID`=`manufacturers`.`id`";
                                            }                                            
                                            $result = $db->query($query);
                                            $count = 0;
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    if ($count == 0) {
                                                        echo '<tr class="even">';
                                                        $count = 1;
                                                    } else {
                                                        echo '<tr class="odd">';
                                                        $count = 0;
                                                    }                                            
                                                        echo '<td>' . $row["mname"] . '</td>';
                                                        echo '<td>' . $row["pname"] . '</td>';
                                                    echo '</tr>';                                                                        
                                                }
                                            } else {
                                                echo "0 results";
                                            }                                        
                                        ?>     
                                    </tbody>
                                </table>
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

    