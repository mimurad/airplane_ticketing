<?php
require 'core.inc.php';
require 'connect.inc.php';
?>
<html>
<table border="1" style="width:50%">
  <tr>
    <td>Airlines</td>
    <td>Departure Time</td> 
  </tr>
   
<?php
if(isset($_POST['source']) && isset($_POST['destination']) && isset($_POST['tnumber']) && isset($_POST['date'])){
        
        $source= $_POST['source'];
        $destination= $_POST['destination'];
       $tnumber= $_POST['tnumber'];
        $date= $_POST['date'];
    $day =date('l', strtotime( $date));
    
    if(!empty($source)&&!empty($destination)) {
        
    $query_S="SELECT Flight_name,Departure_time FROM flyhigh_database.route INNER JOIN flyhigh_database.flights ON route.route_id=flights.Route_id 
AND route.source='$source' AND route.destination='$destination' AND flights.Departure_day='$day'";
        $query_run=mysql_query($query_S);
        while($row = mysql_fetch_array($query_run, MYSQL_NUM)){   //Creates a loop to loop through results
     echo "<tr>";
    echo "<td>".$row[0] ."</td>";
    echo "<td>" .$row[1] ."</td>" ;
 echo "</tr>";
    }
  }
}
            ?>
   
    </table>
</html>

        
     
        