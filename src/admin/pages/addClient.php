<?php
    ob_start();
    include_once("../../db.php"); 
    $db = new Db();
        if (!isset($db)) { 
        die('Could not connect: ' . mysql_error()); 
    }

    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $addr = trim($_POST['addr']);
  
    $result = $db->query("INSERT INTO `clients` (`name`, `addr`) VALUES ('$name', '$addr')");

    if($result === false) {
        echo '<script> alert("Cannot add Product. Please try again later..! Insert failed...");</script>';
        $error = $db->error();
        echo $error;
	

    } else {
        header ('Location: edit.php');
    }    
    ob_end_flush();                                        
?>    
                                    