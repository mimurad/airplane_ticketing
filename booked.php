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

<br><br><br><br><br><br><br><br>
    <?php
    $firstname=getuserfield('firstname');
        echo 'Hi, '.$firstname.' '
    ?>
<br><a href="logout.php">Log Out </a>
</div>

<div id="section">   
<h2>Book Your Ticket</h2>
<p>
      
    
    
    <?php
            $query="SELECT user.FirstName,user.LastName,user.email
                    FROM user
                    WHERE
                    user.id='".$_SESSION['user_id']."'";

            $query_run=mysql_query($query);
            
            $query_num_rows=mysql_num_rows($query_run);
            
            if($query_num_rows==1){
                while($row=mysql_fetch_array($query_run)){
                   $fname=$row[0];
                    $lname=$row[1];
                    $email=$row[2];
                }
        }
            $r_date=$_POST['text'];
            $airlines=$_SESSION['airlines'];
            $source=$_SESSION['source'];
            $destination=$_SESSION['destination'];
            $dep_time=$_SESSION['$dep_time'];
            $date=$_SESSION['date'];
            $price=$_SESSION['price'];
            $quantity=$_SESSION['quantity'];
            $total=$_SESSION['total'];
            $class=$_SESSION['class'];
			$t=$total*2;

        ?>
    
      <head>
        <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 5px;
        text-align: left;
        }
        </style>
        </head>
        <body>

        <h2>Ticket Info:</h2>

        <table style="width:60%">
        <tr>
        <th>Passenger Name:</th>
       <?php echo "<td>$fname $lname</td>"; ?>
        </tr>
        <tr>
        <th>Email:</th>
       <?php echo "<td>$email</td>"; ?>
        </tr>
        <tr>
        <th>Airlines:</th>
       <?php echo "<td>$airlines</td>"; ?>
        </tr>
        <tr>
        <th>Source:</th>
        <?php echo '<td>'.$source.'</td>';?>
        </tr>
        <tr>
		<th>Destination:</th>
        <?php echo '<td>'.$destination.'</td>'; ?>
        </tr>
		<th>Type:</th>
        <?php if(!$r_date==null){echo "<td>Round Trip</td>"; }
		else{echo "<td>One Way</td>";}?>
		
        </tr>
        <tr>
        <tr>
        <th>Flight Departure Time</th>
        <?php echo "<td>$dep_time</td>"; ?>
        </tr>
        <tr>
        <th>Journey Date:</th>
        <?php echo "<td>$date</td>"; ?>
        </tr>
        <tr>
		
		<th>Return Date:</th>
        <?php if(!$r_date==null){echo '<td>'.$r_date.'</td>';}
			else{echo "<td>One Way Selected</td>";}?>
			
        
        </tr>
        <tr>
        <th>Class:</th>
       <?php echo "<td>$class</td>"; ?>
        </tr>
        <th>Fare:</th>
       <?php echo "<td>$price</td>"; ?>
        </tr>
        <tr>
        <th>Total No. of Ticket:</th>
        <?php echo "<td>$quantity (Adult)</td>"; ?>
        </tr>
        <tr>
        <th>Total Payable Ammount:</th>
        <?php if(!$r_date==null){echo "<td>$price x $quantity x Round Trip = $t USD</td>";} 
		else{echo "<td>$price x $quantity = $total USD</td>";}?>
        </tr>
        </table>
        </body><br>
            
        <form method="post" action="ticket.php"> 
            Select Payment Option: 
            <select name="payment">
            <option value="Master card">Master Card</option>
            <option value="Visa">Visa</option>
            <option value="American express">American Express</option>
            </select>
            <p></p>
            <?php  
                    $today = date("F j, Y, g:i a");
                    $_SESSION['today']=$today;
            ?>
            <input type="submit" value="Book Ticket">
           </form>
           
    
    
</p>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>

