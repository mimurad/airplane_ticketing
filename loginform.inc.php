<html>
<head>

 <link rel="stylesheet" href="style.css">
</head>
<div id="header">
<h1>Fly High Air</h1>
</div>

<div id="nav">
</div>

<div id="section">
<h2>Welcome To Fly High Air</h2>
    <p>Please Login to Continue</p>
<p>
    <?php

if(isset($_POST['username'])&&($_POST['password']))
{

            $username=$_POST['username'];
            $password=$_POST['password'];

            $password_hash=md5($password);

            if(!empty($username)&&!empty($password))
            {

                        $query="SELECT `id` FROM `user` WHERE `name`='".$username."' AND `password`='".$password_hash."'";
                        if($query_run=mysql_query($query))
                        {
                                $query_num_rows=mysql_num_rows($query_run);

                                if($query_num_rows==0)
                                { 
                                        echo 'Invalid username/password combination ';
                                }
                                else if($query_num_rows==1)
                                {
                                    $user_id=mysql_result($query_run, 0, 'id');
                                    $_SESSION['user_id']=$user_id;
                                    header('Location: index.php');
                                }


                        }
            }
            else
                echo 'Please type a username and password.';
}

?>
<form action="<?php echo $current_file;?>"  method="POST">
    Username:<br> <input type="text" name="username"><br><br>
    Password:<br><input type="password" name="password"><br><br>
    <input type="submit" value="Log In">
</form> 
</p>
<p>
Not registered yet!!<br>
    <form action="register.php"  method="POST">
    <input type="submit" value="Register Now">
    </p>
</div>

<div id="footer">
Copyright © Flyhigh.com
</div>

</body>
</html>