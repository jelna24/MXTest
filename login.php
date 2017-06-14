<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
 <section> 
    <h1 id="headlineLogin">Login Form</h1>
    <form method="post" name="login" class="loginform">
      <div class="logocontainer">
        <img src="img/loginLogo.png" alt="LoginLogo" class="loginlogo">
      </div>

      <div class="logincontainer">
            <label>Username:</label>
            <input id="username" name="username" type="text" placeholder="Enter username here..">
            
            <label>Password:</label>
            <input id="password" name="password" type="password" placeholder="Enter password here..">
            

            <input name="loginsubmit" type="submit" value="Login" id="loginsubmitbtn"> 
      </div>

      <div class="resetcontainer">
            <input name="reset" type="reset" value="Reset" id="resetbtn">
            <span class="forgotpsw"> <a href="#">Forgot password?</a></span>
      </div>
    </form>
   </section>    
	<?php
    if (isset($_POST['loginsubmit']))
        {     
    include("connectdb.php");
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username; 
    $query = mysql_query("SELECT * FROM login WHERE username='$username' and password='$password'");
     if (mysql_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='notes.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
</body>
</html>