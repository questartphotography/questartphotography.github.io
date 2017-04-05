<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="lib/w3.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#ecf0f1">
           
    <div id="main-wrapper">
	<center>
		<h2>Home Page</h2>
		<h3>Welcome 
		<?php echo $_SESSION['username'] ?>
		</h3>
		
		<img src="imgs/avatars.png" class="avatar"/> 
	</center>
	
		<form class="myform"action="homepage.php" method="post">
			
			<input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>

		</form>
		
		<form class="myform"action="home.html" >
			
			  <a href="home.html" class="w3-btn w3-margin w3-hover-aqua">PROCEED TO QUEST ART >></a><br>

		</form>
  
		
		<?php
		    if(isset($_POST['logout']))
			{
				session_destroy(); 
				header('location:index.php');
			}

		?>
	</div> 	
</body>
</html>