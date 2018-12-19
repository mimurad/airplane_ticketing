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
<h2>Cancel ticket</h2>
<p>
  <?php
            
			$query="SELECT user.FirstName,user.LastName,user.email
                    FROM user
                    WHERE
                    user.id='".$_SESSION['user_id']."'";

            $query_run=mysql_query($query);
            
            $query_num_rows=mysql_num_rows($query_run);
			$row=mysql_fetch_array($query_run);
			
			$fname=$row[0];
            $lname=$row[1];
            $email=$row[2];
                      
			echo "First Name : $fname </br>";
			echo "Last Name  : $lname </br>";
			echo "Email      : $email </br>";
        ?>
    
    
</p>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>
