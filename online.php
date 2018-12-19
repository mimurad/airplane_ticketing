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
<a href="cancel.php">Cancel Ticket</a><br><br><br><br><br><br><br><br><br>
    <?php
    $firstname=getuserfield('firstname');
        echo 'Hi, '.$firstname.' '
    ?>
<br><a href="logout.php">Log Out </a>
</div>

<div id="section">   
<h2>Welcome To Fly High Air Third Party Booking System</h2>
<iframe height="100%" width="1100px" src="http://www.flightlookup.com" name="iframe_a frameBorder="0" style="border:none"></iframe>

</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>
