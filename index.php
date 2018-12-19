<?php
require 'core.inc.php';
require 'connect.inc.php';


if(loggedin()){
   header('Location: home.php');
}
else{
    include 'loginform.inc.php'; 
}
 


?> 