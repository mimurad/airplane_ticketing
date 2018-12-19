<html>
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
				<a href="index.php">Back</a>
				<br>
				</div>

				<div id="section">
					<h2>Registration</h2>
					<p>

						<?php
if(!loggedin())
{
 if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['dob']))
    {
        $username= $_POST['username'];
        $password= $_POST['password'];
        $password_again= $_POST['password_again'];
        $password_hash=md5($password);
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email= $_POST['email'];
        $address= $_POST['address'];
        $dob= $_POST['dob'];
        
        if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($lastname)&&!empty($email)&&!empty($address)&&!empty($dob))
        {
            if($password!=$password_again){
                echo 'Passwords do not match.';
            }
            else
                $query = "SELECT `name` FROM `user` WHERE `name`='$username'";
            $query_run=mysql_query($query);
            
            if(mysql_num_rows($query_run)==1){
            echo 'The username '.$username.' already exists.';    
            }
            else{
                $query = "INSERT INTO `user` VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($address)."','".mysql_real_escape_string($dob)."')";
                
                if($query_run=mysql_query($query)){
                    header('Location: register_success.php');
                
                }
                else
                    echo 'Sorry, we couldn\'t regiser you at this moment';
            
            }
        }
        else{
            echo 'All fields are required.<br>';
        }
        
 }
}

?>
						<form action="register.php"  method="POST">
        Username:<br>
								<input type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>"><br>
											<br>
        Password:<br>
													<input type="password" name="password">
														<br>
															<br>
        Repeat Password:<br>
																	<input type="password" name="password_again">
																		<br>
																			<br>
        Firstname:<br>
																					<input type="te xt" name="firstname" value="<?php if(!empty($username)){ echo $firstname;} ?>"><br>
																								<br>
        Lastname:<br>
																										<input type="text" name="lastname" value="<?php if(!empty($username)){ echo $lastname;} ?>"><br>
																													<br>
        Email Address:<br>
																															<input type="email" name="email" value="<?php if(!empty($username)){ echo $email;} ?>"><br>
																																		<br>
        Address:<br>
																																				<input type="text" name="address" value="<?php if(!empty($username)){ echo $address;} ?>"><br>
																																							<br>
        Date of Birth:<br>
																																									<input type="date" name="dob"value="<?php if(!empty($username)){ echo $dob;} ?>"><br>
																																												<br>
																																													<input type="submit" value="Register">
																																													</from>


																																												</p>
																																											</div>

																																											<div id="footer">
Copyright © Flyhigh.com
																																											</div>

																																										</body>
																																									</html>