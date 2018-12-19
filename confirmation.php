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
<h2>Confirm Your Ticket</h2>
<p>
 
     
<?php

if(isset($_POST['selected'])){

    $selected= $_POST['selected'];
        
    if(!empty($selected)){
        $n=count($selected);
        
        if($n>1){
        echo "You have to select one flight at a time";
 }
        else{
        
            $l1=strpos($selected[0],'+');
            $l2=strpos($selected[0],'-');
            $l3=strpos($selected[0],'*');
            $l4=strpos($selected[0],'/');
            $l5=strpos($selected[0],'=');
            $l6=strpos($selected[0],'|');
            $l7=strpos($selected[0],'?');
			$l8=strpos($selected[0],'^');
            $length=$l7-$l1;
            
            $airlines=substr($selected[0],0,$l1);
            $source=substr($selected[0],$l1+1,$l2-$l1-1);
            $destination=substr($selected[0],$l2+1,$l3-$l2-1);
            $dep_time=substr($selected[0],$l3+1,$l4-$l3-1);
            $date=substr($selected[0],$l4+1,$l5-$l4-1);
			$r_date=substr($selected[0],$l8+1,$length);
            $price=substr($selected[0],$l5+1,$l6-$l5-1);
            $quantity=substr($selected[0],$l6+1,$l7-$l6-1);
            $f_id=substr($selected[0],$l7+1,$l8-$l7-1);
            $total=$price*$quantity;
			$t=$total*2;
            $class=$_SESSION['class'];
            
			
            echo "Please check the information bellow and click \"Next\" to continue booking process <br><br>";
           
            echo "Airlines : ".$airlines.'<br><br>';
            echo "Journey Source : ".$source.'<br><br>';
            echo "Destination : ".$destination.'<br><br>';
            echo "Departure Time : ".$dep_time.'<br><br>';
            echo "Journey Date : ".$date.'<br><br>';
			if(!$r_date== null){
			echo "Return Date : ".$r_date.'<br><br>';
			}
			
            echo "Class : ".$class.'<br><br>';
            echo "Ticket Unit Price  : ".$price." USD<br><br>";
            echo "No of Tickets  : ".$quantity.'<br><br>';
			if(!$r_date== null){
			echo "Total Payable Ammount : ".$t." USD<br><br>";
			}
			else{
            echo "Total Payable Ammount : ".$total." USD<br><br>";
            }
            
            
            $_SESSION['airlines']=$airlines;
            $_SESSION['source']=$source;
            $_SESSION['destination']=$destination;
            $_SESSION['$dep_time']=$dep_time;
            $_SESSION['date']=$date;
            $_SESSION['price']=$price;
            $_SESSION['quantity']=$quantity;
            $_SESSION['total']=$total;
            $_SESSION['f_id']=$f_id;
            
             ?>
            <form method="post" action="booked.php"> 
			<input type="hidden" name="text" value="<?php echo $r_date; ?>">
            <input type="submit" value="Next">
           </form>
            
            <form method="post" action="book ticket.php"> 
            <input type="submit" value="Try Another ">
           </form>
            <?php
        }
    }
    
    
}
    else 
         header('Location: book.php');


?>
</p>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>
