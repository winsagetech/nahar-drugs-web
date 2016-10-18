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
	        <tbody>
		<?php

			$soapUrl = "http://www.stockandsales.com/service.asmx?op=get_Masters";

			$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
									<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
									  <soap12:Body>
										<get_Masters xmlns="http://tempuri.org/">
										  <ac_code>001008</ac_code>
										  <FromMfacCode>0000</FromMfacCode>
										  <ToMfacCode>zzzz</ToMfacCode>
										  <index>100</index>
										  <userid>mahaveer</userid>
										  <pwd>mahaveer@123</pwd>
										</get_Masters>
									  </soap12:Body>
									</soap12:Envelope>';

			$headers = array(
				"POST /service.asmx HTTP/1.1",
				"Host: www.stockandsales.com",
				"Content-Type: application/soap+xml; charset=utf-8",
				"Content-Length: ".strlen($xml_post_string)
			); 

			$url = $soapUrl;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			$response = curl_exec($ch); 
			curl_close($ch);

			$response = html_entity_decode($response);		
			
			$objDOM = new DOMDocument();
			$objDOM->loadXML($response);
			$node = $objDOM->getElementsByTagName("Masters"); 
			$colCount = 0;
			foreach( $node as $key => $value ){
				if ($colCount == 0){
					echo '<tr>';
				}
				$node1 = $objDOM->getElementsByTagName("Master"); 
				foreach( $node1 as $key1 => $value1 ){
					$company_node = $value1->getElementsByTagName("company");
					$company  = $company_node->item(0)->nodeValue;
					$c_mfac_node = $value1->getElementsByTagName("c_mfac_code");
					$c_mfac_code = $c_mfac_node->item(0)->nodeValue;
					echo  '<td><a href="products.php?mfac_code=' . $c_mfac_code . '">' . $company . '</a></td>' ;
					$colCount++;
					if($colCount == 3){
						echo '</tr>';
						$colCount = 0;
					}
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
