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
    <a href="book%20ticket.php">Back</a><br><br><br><br><br><br><br><br><br><br>
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
    if(isset($_POST['source'])&&
       isset($_POST['destination'])&&
       isset($_POST['tnumber'])&&
       isset($_POST['date'])&&
       isset($_POST['class'])&&
	   isset($_POST['date2']) &&
	   isset($_POST['way'])){
        
        $source= $_POST['source'];
        $destination= $_POST['destination'];
        $class= $_POST['class'];
        $_SESSION['class']=$class;
        $tnumber= $_POST['tnumber'];
		$way=$_POST['way'];
        $date= $_POST['date'];
		$date2= $_POST['date2'];
        $day =date('l', strtotime( $date));
		$day2 =date('l', strtotime( $date2));
            
        $query1="SELECT Flight_name,Departure_time,Departure_day,Business_class_fare,Flight_id 
                FROM flyhigh_database.route 
                INNER JOIN flyhigh_database.flights 
                ON route.route_id=flights.Route_id 
                AND route.source='$source' 
                AND route.destination='$destination' 
                AND flights.Departure_day='$day' 
                INNER JOIN flyhigh_database.business_class 
                ON business_class.Bclass_id=flights.Bclass_id 
                AND business_class.Available_seat>='$tnumber'";

        $query2="SELECT Flight_name,Departure_time,Departure_day,Echonomy_class_fare,Flight_id 
                FROM flyhigh_database.route 
                INNER JOIN flyhigh_database.flights 
                ON route.route_id=flights.Route_id 
                AND route.source='$source' 
                AND route.destination='$destination' 
                AND flights.Departure_day='$day' 
                INNER JOIN flyhigh_database.echonomy_class ON echonomy_class.Eclass_id=flights.Eclass_id 
                AND echonomy_class.Available_seat>='$tnumber'";
    
    if(!empty($source)&&!empty($destination)&&!empty($date)&&!empty($tnumber)) {
            
           if($class=="Business Class")
            {
                $query_run=mysql_query($query1);
            }
        else
            {
                $query_run=mysql_query($query2);
            }
        
                $query_num_rows=mysql_num_rows($query_run);
        
            if($query_num_rows==0)
            {
                echo 'Sorry no available flight on your desired date<br><br>';
            ?>
                <form method="post" action="book ticket.php"> 
                <input type="submit" value="Check Again">
                </form>
            <?php
                die();
            }
        
        else{
            ?>
                
                <p>Please choose your favaourable flight and click <strong>"Next"</strong> button <br><br></p>        
          
                
				
				<form method="post" action="confirmation.php"> 
                <table border="1" style="width:125%">

                <tr>
                <td><h1 </h1></td>
                <td><h1 style="font-size:120%">Airlines</h1></td>
                <td><h1 style="font-size:120%">Source</h1></td>
                <td><h1 style="font-size:120%">Destination</h1></td>
                <td><h1 style="font-size:120%">Departure Time</h1></td> 
                <td><h1 style="font-size:120%">Journey Date</h1></td>
				<td><h1 style="font-size:120%">Return Date</h1></td>
                <td><h1 style="font-size:120%">Ticket Unit Price(USD)</h1></td> 
                <td><h1 style="font-size:120%">No. of Ticket</h1></td>
				<td><h1 style="font-size:120%">Total Price</h1></td> 
                </tr>
			
            <?php
			
			
            
            while($row = mysql_fetch_array($query_run, MYSQL_NUM))
            {   //Creates a loop to loop through results
			
				$a= $row[3]*$tnumber;
				if($way=='Round'){
					$a= $row[3]*2*$tnumber;
				}
                echo '<td><input type="radio" name="selected[]" value="'.$row[0].'+'.$source.'- '.$destination.'*'.$row[1].'/'.$date.'='.$row[3].'|'.$tnumber.'?'.$row[4].'^'.$date2.'"></td>';
                echo "<td>".$row[0]."</td>";
                echo "<td>".$source ."</td>";
                echo "<td>".$destination ."</td>";
                echo "<td>" .$row[1] ."</td>" ;
                echo "<td>" .$date."</td>" ;
				echo "<td>".$date2."</td>";
                echo "<td>" .$row[3] ."</td>" ;
                echo "<td>" .$tnumber."</td>" ;  
				echo "<td>".$a."</td>";
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
                 die();
                }
}
            ?>
                </table><br><br>
                <input type="submit" value="Next">
                    
</form>  
</html>
</p>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html> 
