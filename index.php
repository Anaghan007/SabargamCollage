<?php
	include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sabargam Collage</title>
</head>

<style>
	body
	{
		height: 85vh;
		display: grid;
		place-items: center;
	}
	.h1
	{
		margin-left: 550px;
		margin-bottom: 100px;
	}
	.form h3{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #000;
    font-size: 30px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
	}
	.btnn{
    width: 130px;
    height: 40px;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #000;
    transition: 0.4s ease;
	}
	.btnn:hover{
    background: #fff;
	}
</style>

<body>
	<center>
		<form action="login.php">
				<img src="collage logo.jpg">
				<h1>
					🙏 Welcome To Sabargam collage 🙏<br><br>
				</h1>
				<div class="form">
					<h3>Login Here</h3>
				</div>
				<button class="btnn">Login</button>
			</form>
	</center>
</body>
</html>