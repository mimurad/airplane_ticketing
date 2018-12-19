<?php
require 'core.inc.php';
require 'connect.inc.php';
$query1="SELECT DISTINCT `source` FROM `route`";
$query2="SELECT DISTINCT `destination` FROM `route`";

$query_run1=mysql_query($query1);
$query_run2=mysql_query($query2);
?>
Select Your Journey Source:  
        <form action= "pp.php" method="POST">
            <select name="source"> <?php while($row=mysql_fetch_array($query_run1)): ?>
                <option> <?php echo ($row[0]); ?></option>
            <?php endwhile; ?>
            </select><br>
    
        <p>
            Select Your Destination:
            <select  name="destination"> <?php while($row=mysql_fetch_array($query_run2)):?>
             
            <option><?php echo ($row[0]); ?> </option> 
            <?php endwhile; ?>
            </select><br>
        </p>
    
        <p>
            No. of Tickets: <input type="number" name="quantity" min="1" max="5">
        </p>
    
        <p>
        Journey Date: <input type="date" name="journey_date"value=" "<br><br>
        </p>
    
        <p>
            <input type="submit">
        </p>
    
    
        </form>


<html>
<body>
    
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>