	<?php
session_start();

if(!isset($_SESSION['username'])){
	$_SESSION['msg']="You must log in first";
	header('location:login.php');
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">

	<style>
 a {
	padding: 12px 30px;
	border-radius: 4px;
	outline:none;
	text-transform: uppercase;	
	font-size: 13px;
	font-weight: 500;
	text-decoration:none; /* it removes the underline which is present from th text or clickable*/ 
	letter-spacing: 1px; 
	transition:all .5s ease;
}

a.bt1{
	background-color: white; 
  color: black; 
  border: 2px solid #00b894;
}

.bt1:hover{
	  background-color: #00b894;
  color: white;
}

</style>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])) :?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
					

				</h3>
				
			</div>
	<?php endif ?>
	<?php if(isset($_SESSION['username'])):?>
		<p>Welcome  <strong><?php echo $_SESSION['username'];?></strong></p>
		<?php endif ?><br>
	    <a href="index1.php?logout='1'" class="bt1">logout</a>
	    <a href="mainbot.php"class="bt1">Chatbot</a>
	    <a href="file-upload-form.php"class="bt1">Upload File</a>
	    
	</div>

</body>
</html>