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
                <h1 class="page-header">Products List</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nahar Drugs Products Details
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-products">
                            <thead>
                                <tr>
                                    <th>Company ID</th>
                                    <th>Product Name</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                    $db = new Db();
                                    if (!isset($db)) { 
                                        die('Could not connect: ' . mysql_error()); 
                                    } 
                                    if (isset($_GET["mfac_code"])) {
                                        $mfac_code = $_GET["mfac_code"];
                                        $query = "SELECT * FROM `products` WHERE `compID` = $mfac_code";                
                                    } else {
                                        $query = "SELECT * FROM `products`";
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
                                                echo '<td>' . $row["compID"] . '</td>';
                                                echo '<td>' . $row["name"] . '</td>';
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
        </div>


    </div> <!-- page-wrapper -->     
        
    <?php
        include_once ("inc/footer.php");
    ?>

    