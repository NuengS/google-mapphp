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

function initMap() { 
	var myOptions = {
	  zoom: 9,
	  center: new google.maps.LatLng(7.187270,100.594966),
	};

	var map = new google.maps.Map(document.getElementById('map_canvas'),
		myOptions);


	var marker = new  google.maps.Marker({
		map:map,
		position: new google.maps.LatLng(7.187270,100.594966),
		draggalbe:true

	});

	var infowindow = new google.maps.InfoWindow({
	
		position: new google.maps.LatLng(7.187270,100.594966)

	});

	google.maps.event.addListener(map,'click',function(event){
		infowindow.open(map,marker);
		infowindow.setContent("LatLng = " + event.latLng);
		infowindow.setPosition(event.latLng);
		marker.setPosition(event.latLng);

		$("#lat").val(event.latLng.lat());
		$("#lng").val(event.latLng.lng());

		
	});	

}



function saveLocation(){

var location_name  = $("#location_name").val();
var lat  = $("#lat").val();
var lng  = $("#lng").val();
var location_detail = $("textarea#location_detail").val();
var imgname = $('input[type=file]').val();
var size = $('#image_file')[0].files[0].size;
var ext = imgname.substr((imgname.lastIndexOf('.')+1));
	ext = ext.toLowerCase();
if(ext == 'jpg'||ext == 'png'){
	if(size <= 1000000){
			
		
		$.ajax({
			method:"POST",
			url:"insert.php",
			data: new FormData($('form')[0]),
			enctype: 'multipart/form-data',
			cache:false,
			contentType:false,
			processData:false
		}).done(function(){
			alert("OK");
		});
		
	}else{
		alert('ขนาดไฟล์ใหญ่เกินกว่าที่กำหนด');
	}
}else{
	alert('ไฟล์ที่เลือกต้องเป็นชนิดรูปภาพเท่านั้น');
}


}



</script>
</head>
<body>


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="insert.php">Insert</a>
  </li>
  
</ul>

	<div class="row">

		<div class="col-8">
		<div id="map_canvas" style="width:100%;height:90vh"></div>
		</div>

		<div class="col-4">
		<div style="margin-top:70px">
		
				<form enctype="multipart/form-data">
						<div class="form-group">
						  <label for="location_name">Location Name</label>
						  <input type="text" class="form-control" id="location_name" name="location_name" placeholder="location name">
						</div>
						
						<div class="form-group">
								<label for="lat">Lat</label>
								<input type="text" class="form-control" id="lat" name="lat" placeholder="Lat">
						</div>

						<div class="form-group">
							<label for="Lng">Lng</label>
							<input type="text" class="form-control" id="lng" name="lng" placeholder="Lng">
						</div>
						<div class="form-group">
							<label for="Lng">Location detail</label>
							<textarea id="location_detail" name="location_detail" class="form-control" rows="3"></textarea>
						</div>



						<div class="form-group">
							<label for="image_file">Image File</label>
							<input type="file" id="image_file" name="image_file">
						
						</div>

						<button type="button" onclick="saveLocation()" class="btn btn-primary">Save</button>
					  </form>
	

		</div>
		</div>

	</div>

	</body>
	</html>