<?php
    session_start();
    if (!isset($_SESSION['user']))
        header("Location: ../../login.php");
?>
<!DOCTYPE html>
<?php 
    include_once("../../db.php"); 
    $db = new Db();
        if (!isset($db)) { 
        die('Could not connect: ' . mysql_error()); 
    }

    $result = $db->query("SELECT COUNT(*) as clientCount FROM clients");
    if($result === false) {
        $error = $db->error();
        echo $error;
    } else {
        $data = $result->fetch_assoc();
        $clientCount = $data['clientCount'];
    }  

    $result = $db->query("SELECT COUNT(*) as compCount FROM manufacturers");
    if($result === false) {
        $error = $db->error();
        echo $error;
    } else {
        $data = $result->fetch_assoc();
        $compCount = $data['compCount'];
    } 

    $result = $db->query("SELECT COUNT(*) as prodCount FROM products");
    if($result === false) {
        $error = $db->error();
        echo $error;
    } else {
        $data = $result->fetch_assoc();
        $prodCount = $data['prodCount'];
    }                                           
?>  




<html lang="en">

<?php 
    include_once("inc/header.php"); 
?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <div class="huge"><?php echo $clientCount ?></div>
                                <div>Clients</div>
                            </div>
                        </div>
                    </div>
                    <a href="view.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bank fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $compCount ?></div>
                                <div>Companies</div>
                            </div>
                        </div>
                    </div>
                    <a href="view.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-cubes fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $prodCount ?></div>
                                <div>Products</div>
                            </div>
                        </div>
                    </div>
                    <a href="view.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
        <!-- /.row -->            
    </div>
    <!-- /#page-wrapper -->

<?php 
    include_once("inc/footer.php"); 
?>


    
