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
<a href="book%20ticket.php">Back</a><br><br><br><br><br><br><br><br><br>
<?php
$firstname=getuserfield('firstname');
    echo 'Hi, '.$firstname.' '
?>
<br><a href="logout.php">Log Out </a>
</div>

<div id="section">   
<h2>Available Flights</h2>
<html>

   
<?php
if(isset($_POST['source']) && isset($_POST['destination']) && isset($_POST['tnumber']) && isset($_POST['date'])&& isset($_POST['class'])){
        
                        $source= $_POST['source'];
                        $destination= $_POST['destination'];
                        $class= $_POST['class'];
                        $tnumber= $_POST['tnumber'];
                        $date= $_POST['date'];
                        $day =date('l', strtotime( $date));
            
            $query1="SELECT Flight_name,Departure_time,Departure_day,Business_class_fare 
                    FROM flyhigh_database.route 
                    INNER JOIN flyhigh_database.flights ON route.route_id=flights.Route_id 
                    AND route.source='$source' 
                    AND route.destination='$destination' 
                    AND flights.Departure_day='$day' 
                    INNER JOIN flyhigh_database.business_class 
                    ON business_class.Bclass_id=flights.Bclass_id 
                    AND business_class.Available_seat>='$tnumber'";

            $query2="SELECT Flight_name,Departure_time,Departure_day,Echonomy_class_fare 
                    FROM flyhigh_database.route 
                    INNER JOIN flyhigh_database.flights 
                    ON route.route_id=flights.Route_id 
                    AND route.source='$source' 
                    AND route.destination='$destination' 
                    AND flights.Departure_day='$day' 
                    INNER JOIN flyhigh_database.echonomy_class 
                    ON echonomy_class.Eclass_id=flights.Eclass_id 
                    AND echonomy_class.Available_seat>='$tnumber'";
    
    if(!empty($source)&&!empty($destination)&&!empty($date)&&!empty($tnumber)) {
                            if($class=="business")
                            {
                            $query_run=mysql_query($query1);
                            }
                            else
                            {
                            $query_run=mysql_query($query2);
                            }
                            $query_num_rows=mysql_num_rows($query_run);
                            if($query_num_rows==0){
                            echo 'Sorry no available flight on your desired date<br><br>';
                            ?>
                            <form method="post" action="book ticket.php"> 
                            <input type="submit" value="Try Again">
                            </form>
                            <?php
                }
        else{
            echo "Please choose your favourable flight and click \"Next\" button <br><br>";
        
   $i = 0;
   $checkboxes = "<input type='checkbox' name='selected[]' value='$i++'/><br />";
   //Presenting the values in a table
   echo "<table align='center' border='1' width='100%'>";
   echo "<tr><th> </th><th>Airlines</th><th>Source</th><th>Destination</th><th>Departure Time</th><th>Journey Date</th><th>Ticket Unit Price(USD)</th></tr>";

 while($row = mysql_fetch_array($query_run, MYSQL_NUM)){   //Creates a loop to loop through results
        echo "<tr><td>$checkboxes</td>";
        echo "<td>".$row[0] ."</td>";
        echo "<td>".$source ."</td>";
        echo "<td>".$destination ."</td>";
        echo "<td>" .$row[1] ."</td>" ;
        echo "<td>" .$date."</td>" ;
        echo "<td>" .$row[3] ."</td>" ;
        echo "</tr>";
        }
    }
  }
   else
   {
        echo "All fields are required<br><br>";
        ?>
        <form method="post" action="book ticket.php"> 
        <input type="submit" value="Try Again">
        </form>
        <?php
            }
}
            ?>
   
</table>
</html>
</p>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html> 
