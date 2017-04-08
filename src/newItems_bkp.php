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
                    <li><a href="index.html">Home</a>
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
			
			//$mfac_code = $_GET["mfac_code"];
			$soapUrl = "http://www.stockandsales.com/service.asmx?op=get_Masters";

			$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
									<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
									  <soap12:Body>
										<get_Masters xmlns="http://tempuri.org/">
										  <ac_code>001008</ac_code>
										  <FromMfacCode>0000</FromMfacCode>
										  <ToMfacCode>zzzz</ToMfacCode>
										  <index>101</index>
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
			curl_setopt($ch, CURLOPT_TIMEOUT, 180);
			set_time_limit(0);

			$response = curl_exec($ch); 
			curl_close($ch);

			$response = html_entity_decode($response);		
			
			$objDOM = new DOMDocument();
			$objDOM->loadXML($response);
			$node = $objDOM->getElementsByTagName("Masters"); 
			$done = false;
			foreach( $node as $key => $value ){
				$node1 = $objDOM->getElementsByTagName("Master"); 
				
				foreach( $node1 as $key1 => $value1 ){
					$isNewItem = $value1->getElementsByTagName("n_newflag")->item(0)->nodeValue;
					if ($isNewItem == "1"){
						$item_node = $value1->getElementsByTagName("c_name1");
						$item = $item_node->item(0)->nodeValue;
						$pack_node = $value1->getElementsByTagName("c_pack");
						$pack = $pack_node->item(0)->nodeValue;
						$scheme_node = $value1->getElementsByTagName("c_scheme");
						$scheme = $scheme_node->item(0)->nodeValue;
						$mrp_node = $value1->getElementsByTagName("n_mrp");
						$mrp = $mrp_node->item(0)->nodeValue;
						
						echo  '<tr><td>' . $item . '</td><td>'. $pack .'</td><td>' . $scheme .'</td><td>' . $mrp . '</td></tr>' ;
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
