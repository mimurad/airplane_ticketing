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


<p>
  <?php 
            if(isset($_POST['payment']))
            {
                $payment=$_POST['payment'];
            }

            $f_id=$_SESSION['f_id'];
            $user_id=getuserfield('id');
            $class=$_SESSION['class']; 
            $date=$_SESSION['date'];
            $quantity=$_SESSION['quantity'];
            $total=$_SESSION['total'];
            $today=$_SESSION['today'];


          $query = "INSERT INTO `ticket` VALUES ('','".mysql_real_escape_string($f_id)."','".mysql_real_escape_string($user_id)."','".mysql_real_escape_string($date)."','".mysql_real_escape_string($quantity)."','".mysql_real_escape_string($total)."','".mysql_real_escape_string($today)."','".mysql_real_escape_string($class)."','".mysql_real_escape_string($payment)."')";

             if($query_run=mysql_query($query)){
                 ?>
                 <h2>Congratulation you have successfully booked your ticket</h2>
                A Confirmation Email has been sent to your email address.<br><br>
                Thanks for choosing FLYHIGH AIR
                
                <?php
            }
                else
                    echo 'Sorry,something went wrong. Please try again';

    ?>
</p>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>
