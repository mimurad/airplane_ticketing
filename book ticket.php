<?php
require 'core.inc.php';
require 'connect.inc.php';
$query1="SELECT DISTINCT `source` FROM `route`";
$query2="SELECT DISTINCT `destination` FROM `route` ORDER BY 'destination'";

$query_run1=mysql_query($query1);
$query_run2=mysql_query($query2);
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
<h2>Book Ticket</h2>
<p>
In this section you can book your ticket
</p>
    <form method="post" action="book.php">
        Select Your Journey Source:  <br>
            <select name="source"> <?php while($row=mysql_fetch_array($query_run1)): ?>
                <option> <?php echo ($row[0]); ?></option>
            <?php endwhile; ?>
            </select><br>
    
        <p>
            Select Your Destination:<br>
            <select  name="destination"> <?php while($row=mysql_fetch_array($query_run2)):?>
             <option><?php echo ($row[0]); ?> </option> 
            <?php endwhile; ?>
            </select><br>
        </p>
		
		<p>
		<input type="radio" name="way" value="One" checked> One Way<br>
		<input type="radio" name="way" value="Round"> Round Trip<br>
		</p> 
    
        <p>
        Journey Date:<br> <input type="date" name="date" value=" "><br>
        </p>
        
		
        <p>
        Return Date:<br> <input type="date" name="date2" value=" "><br>
        </p>
        <p>
            Select Class:<br> 
            <select name="class">
  <option value="Business Class">Business Class</option>
  <option value="Echonomy Class">Economy Class</option>
</select>
        
        </p>
        <p>
            No. of Tickets:<br> <input type="number" name="tnumber" max="5" min="1" value=1>
        </p>
    
        <p>
            <input type="submit" value="Check Flight">
        </p>
    
    
        </form>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>
