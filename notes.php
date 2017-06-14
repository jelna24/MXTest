<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
	<h1 class="headlineNotes">Welcome! You are logged in as, 
 	<?php 
	session_start();
	$login_session=$_SESSION['login_user'];
	echo $login_session;?></h1>

	<a href="logout.php"><button type="button" class="logout"> Logout </button></a>
</header>

<section>
	<form method="post" name="notes" class="notesform">
	<h1 class="noteformLabel">Notes Form</h1>
	<div class="note-container">	
		<label>Your Note:</label>
		<input type="number" class="mynotes" name= "note" value="" placeholder="Type a number here..">
		<input type="submit" class="notesubmitbtn"name="notesubmit" value="Submit">
	</div>

	<div class="noteResult">
	<?php
	if(isset($_POST['notesubmit']))
	{
		include("connectdb.php");
		$note=$_POST['note'];
		$sql= "Insert into notes (note)
		VALUES ('$_POST[note]')";
		if (!mysql_query($sql))
		{
			die('Error: ' . mysql_error());
		}
			echo "You just added a $note note! ";
		
	}?>
	</div>
	</form>
</section>
</body>
</html>
