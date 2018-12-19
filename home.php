<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="header">
<h1>Fly High Air</h1>
</div>

<div id="nav">
<a href="home.php">Home</a><br>
<a href="book%20ticket.php">Book ticket</a><br>
<a href="online.php">Third party booking</a><br>
<a href="cancel.php">Cancel Ticket</a><br><br><br><br><br><br><br><br><br>
    <?php
    $firstname=getuserfield('firstname');
        echo 'Hi, '.$firstname.' '
    ?>
<br><a href="logout.php">Log Out </a>
</div>

<div id="section">   
<h2>Welcome To Fly High Air</h2>
<p>
Book your air ticket from anywhere in the world with some very simple steps
</p>


<div id="googleMap" style="width:500px;height:300px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(24.918013,91.830936),
    zoom:16,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt858XIwl6HDaYXdMUBUMJojLAQfyumC0&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>
