<?php
	session_start();
?>
<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

		<title>
			Account Login
		</title>
		<style>
           body {
  background-image: url("https://res.cloudinary.com/drqrzc7gs/image/upload/v1618813408/pics/size_m_1554479538_kbsgaj.jpg"), url("https://res.cloudinary.com/drqrzc7gs/image/upload/v1618813408/pics/size_m_1554479538_kbsgaj.jpg");
  background-color: #cccccc;
}

.con{
  
  background: rgb(182,203,188);
  background: linear-gradient(34deg, rgba(182,203,188,1) 0%, rgba(255,245,174,1) 43%, rgba(164,124,130,1) 100%);
	  margin: auto;
	 width: 80%;
	  text-align:center;
	  padding: auto;
	  border-style: solid;
	border-width: 1px;
	box-shadow: 10px 10px 8px #888888;
  }
  
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
				margin: auto;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: auto;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			UDDAN AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
		
		<br><form class="float_form" style="padding-left: 40%" action="login_handler.php" method="POST">
			<fieldset>
				<legend>Login Details</legend>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong>User Type:</strong><br>
				<input type='radio' name='user_type' value='Customer' checked/>Customer 
				<br><input type='radio' name='user_type' value='Administrator'/>Administrator
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<input type="submit" class="btn btn-dark" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> New here? Create an account here!!!</a>
		</form>
	
		
		
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>