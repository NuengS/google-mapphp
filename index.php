<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

<title>MAP</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" crossorigin="anonymous">

<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp_FN3Dh8jNvkI0FNZQf6RALmqNhTHfQs&callback=initMap"
type="text/javascript"></script>

<script language="JavaScript">
var map,infowindow;
function initMap() { 
	var myOptions = {
	  zoom: 9,
	  center: new google.maps.LatLng(7.187270,100.594966),
	};

	 map = new google.maps.Map(document.getElementById('map_canvas'),
		myOptions);


	 infowindow = new google.maps.InfoWindow({
		map:map,
	});
	sarchLocation();

}





function sarchLocation(){
	$.ajax({
		type:"POST",
		url: "jsonsearch.php",
	}).done(function(text){
		var json = $.parseJSON(text);
		if(json.length > 0){
			removeMarker();
			var t="";
		for(var i = 0 ;i<json.length;i++){
			var lat = json[i].lat;
			var lng = json[i].lng;
			var location_name =  json[i].location_name;
			var latlng = new google.maps.LatLng(lat,lng);
			var location_detail = json[i].location_detail;
			var image_name = json[i].image_name;

			var html = '<div style="text-align:center"><h5>'+ location_name +'</h5></div>';
				html += '<div style="text-align:center"><img height="150px"  src="images/'+ image_name +'" /><div>';
				html += '<p style="text-align:center"></br>'+json[i].location_detail+'</p>';
			var makeroption = {
				map:map,
				html:html,
				position:latlng,
				};
			var marker = new google.maps.Marker(makeroption);
			markers.push(marker);	
			google.maps.event.addListener(marker,'click',function(e){
				infowindow.setContent(this.html);
				infowindow.open(map,this);
			});

		}
			$("#divContent").css("display","");
		}else{
			$("#divDetail").html('ไม่พบข้อมูล');
		}


	});
}

var markers = [];
function removeMarker(){
for(var i =0;i<markers.length;i++){
markers[i].setMap(null);
}
markers = [];
}


</script>
</head>

<body>


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pageforinsert.php">Insert</a>
  </li>
  
</ul>


	<div class="row">

		<div class="col-12">
		<div id="map_canvas" style="width:100%;height:90vh"></div>
		</div>

		

	</div>

	</body>
	</html>
