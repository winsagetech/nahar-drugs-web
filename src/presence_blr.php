<!DOCTYPE html>
<html lang="en">

	<?php
		include_once("inc/header.php"); 
	?>
	
	
    <!-- Page Content -->
    <div class="container">

        <!-- /.row -->
		<br/>
		<div class="row">
			<div class="col-lg-6" id="image">
				<img style="border:0;" id="shape1" src="images/bangaloreBefore.png" alt="shape1" usemap="#image_map">
			</div>
			<div class="col-lg-6">
				<div class="panel panel-primary text-center" id="map-caption">
                    <div class="panel-heading">
                        <h3 class="panel-title" id="map-caption-header">Bangalore Presence</h3>
                    </div>
                    <div class="panel-body" id="map-caption-text">Currently we are present in 1000+ locations in Bangalore.
                    </div> 	
                    <ul class="list-group" id="location-list">
                    	
                    </ul>			            	              
                </div>
			</div>
		</div>
		<!-- /.row -->
		<map name="image_map" id="image_map">
			<area shape="rect" data-name="east,all" coords=" 221,219, 265,264" href="#" alt="green hotspot"/>
			<area shape="rect" data-name="west,all" coords=" 109,219, 144,260" href="#" alt="purple hotspot"/>
			<area shape="rect" data-name="south,all" coords=" 186,300, 228,351" href="#" alt="yellow hotspot"/>
			<area shape="rect" data-name="bomanahalli,all" coords=" 169,384, 217,441" href="#" alt="olive hotspot"/>
			<area shape="rect" data-name="mahadevpura,all" coords=" 379,232, 433,291" href="#" alt="teal hotspot"/>
			<area shape="rect" data-name="yelhanka,all" coords=" 181,42, 229,100" href="#" alt="brown hotspot"/>
			<area shape="rect" data-name="dasarahalli,all" coords=" 59,133, 94,178" href="#" alt="blue hotspot"/>
			<area shape="rect" data-name="rrnagar,all" coords=" 37,312, 85,363" href="#" alt="magenta hotspot"/>
			<area shape="rect" data-name="neelmangla,all" coords=" 1,115, 37,158" href="#" alt="gold hotspot"/>
			<area shape="rect" data-name="dodballapur,all" coords=" 94,1, 149,48" href="#" alt="violet hotspot"/>
			<area shape="rect" data-name="devanahalli,all" coords=" 272,1, 321,53" href="#" alt="gray hotspot"/>
			<area shape="rect" data-name="hoskote,all" coords=" 421,140, 472,199" href="#" alt="lime hotspot"/>
			<area shape="default" nohref>
		</map>
		<script>
		var inArea,
            map = $('#shape1'),
            locations = {
				east: ["Nagavara", "Banasawadi", "Kammanahalli", "Benniganahalli", "C.V. Raman Nagar", "Thippasandra", "Jaymahal", 
						"Hoysala Nagar", "Jeevan Bhima Nagar", "Halsoor", "Bharti Nagar", "Shivaji Nagar", "Sampangi Ram Nagar",
						"Domlur", "Agaram", "Nilasandra", "Shanti Nagar", "Ejipura"],
				west: ["Jalahalli", "Sanjay Nagar", "Ganga Nagar", "Hebbal", "Gangenahalli", "Mattikere", "Yeshwantpura", "Nandini Lyt",
						"Malleswaram", "Vasanth Nagar", "Gandhi Nagar", "Subhash Nagar", "Okalipuram", "Rajaji Nagar", "Basaveshwara Nagar",
						"Govindraj Nagar", "Chickpet", "Cottonpet", "Binnipet", "Vijay Nagar", "K R Market"],
				south: ["Hosahalli", "Marenhalli", "Bapuji Nagar", "Chamrajpet", "Siddapura","Lakksandra", "Adugodi", "Koramangla", "Jaynagar",
						"Basavanagudi", "Hanumanth Nagar", "Srinagar", "Giri Nagar", "Madivala", "J.P. Nagar", "B.T.M. Lyt", "Sarakki", 
						"Banashankari", "Kumaraswamy Lyt", "Padmanabh Nagar", "Chikkalsandra"],
				bomanahalli: ["Belanduru", "Jakksandra", "H.S.R. Lyt", "Bommanahalli", "Puttenhalli", "Billekahalli", "Hongasandra",
						"Singsandra", "Begur", "Arrekere", "Gottigere", "Konankunte", "Anjanapura", "Vasanthpura"],
				mahadevpura: ["Rammurthy Nagar", "Vijnanpura", "K.R. Puram", "Hudi", "Devasandra","Kadugodi", "Marathhalli", "HAL", "Varthuru"],
				yelhanka: ["Chowdeshwari", "Atturu", "Yelhanka", "Jakkuru", "Kodigehalli", "Vidhyaranyapura", "Bommasandra", "Kuvempu Nagar",
						"H.B.R. Lyt", "Horamavu"],
				dasarahalli: ["Shettihalli", "Mallasandra", "Bagalakunte", "T Dasarahalli", "Bidarakallu", "Peenya", "Hegganhalli", "Herohalli"],
				rrnagar: ["Nagara Bhavi", "Jnana Bharti", "Ullalu", "Nayandahalli", "Kangeri", "Rajarajeshwari Nagar", "Uttarahalli"],
				neelmangla: ["Neelmangla"],
				dodballapur: ["Doddaballapur"],
				devanahalli: ["Devanahalli"],
				hoskote: ["Hoskote"]
			},
			index = 0,
            captions = {
                east: ["Bangalore East",
                    "Bangalore East"],
                west: ["Bangalore West",
                  "3 clients"],
                south: ["Bangalore South",
                  "2 Clients"],
                bomanahalli: ["Bommanahalli",
                 "5 clients, including 2 at Chikkaballapur"],
				mahadevpura: ["Mahadevpura",
                 "2 Clients"],
				yelhanka: ["Yelhanka",
                 "2 Clients"],
                dasarahalli: ["Dasarahalli",
                    "Click on the Bangalore Map for detailed Map"],
                rrnagar: ["Rajarajeshwari Nagar",
                  "3 clients"],
                neelmangla: ["Bangalore Rural",
                  ""],
                dodballapur: ["Bangalore Rural",
                 ""],
				devanahalli: ["Bangalore Rural",
                 ""],
				hoskote: ["Bangalore Rural",
                 ""]
            },
            single_opts = {
            	fill: true,
                fillColor: '000000',
                fillOpacity: 0,
                stroke: true,
                strokeColor: 'ff0000',
                strokeWidth: 2
            },
            all_opts = {
                fillColor: 'ffffff',
                fillOpacity: 0.6,
                stroke: true,
                strokeWidth: 5,
                strokeColor: 'ffffff'
            },
            initial_opts = {
                mapKey: 'data-name',
                isSelectable: false,
                clickNavigate : true,
                onMouseover: function (data) {
                    inArea = true;
                    $('#map-caption-header').text(captions[data.key][0]);
                    $('#map-caption-text').hide();
                    var cur_locs = locations[data.key];
                    $('#location-list').empty();
                    for	(index = 0; index < cur_locs.length; index++) {                    
						$('#location-list').append('<li class="list-group-item"><strong>' + cur_locs[index] + '</strong></li>');
					} 
                    $('#map-caption').show();
                },
                onMouseout: function (data) {
                    inArea = false;
                    
                }
            };
        opts = $.extend({}, all_opts, initial_opts, single_opts);


        // Bind to the image 'mouseover' and 'mouseout' events to activate or deactivate ALL the areas, like the
        // original demo. Check whether an area has been activated with "inArea" - IE<9 fires "onmouseover" 
        // again for the image when entering an area, so all areas would stay highlighted when entering
        // a specific area in those browsers otherwise. It makes no difference for other browsers.

        map.mapster('unbind')
            .mapster(opts)
            .bind('mouseover', function () {
                if (!inArea) {
                    map.mapster('set_options', all_opts)
                       .mapster('set', true, 'all')
                       .mapster('set_options', single_opts);
                }
            }).bind('mouseout', function () {
                if (!inArea) {
                    map.mapster('set', false, 'all');
                }
            });
			
	</script>
	</div>
	<!-- /.container -->				
        

        

		<?php
		include_once ("inc/footer.php");
		?>

    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
    
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    
    
    
	
</body>

</html>
