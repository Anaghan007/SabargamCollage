<?php
	session_start();

	include("db.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$gmail = $_POST['mail'];
		$password = $_POST['pass'];

		if (!empty($gmail) && !empty($password) && !is_numeric($gmail))
		{
			$query = "select * from form where email = '$gmail' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['pass'] == $password)
					{
						header("location: index.php");
						die;

					}
				}
			}
			echo "<script type='text/javascript'> alert('wrong username or password')</script>";
		}
		else{
			echo "<script type='text/javascript'> alert('wrong username or password')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="POST">
	<center>
	<label>	
		<h1>
		📍 Ambaba Commerce College, Surat. 
		</h1>Sabargam, Post. Niyol, Taluka. Choryasi, Dist-Surat-394325, Gujarat<br><br>
		<h2>
		  👨‍🎓 Student's Login From
		</h2>
	</label>
		<table>
      <tr>
			<td>
			✉️	Email :- 
			</td>
			<td>
			   <input type="email" placeholder="XYZ@gmail.com" name="mail" required=""><br><br>
	   		</td>
	   	</tr>
	   	<tr>
			<td>
			🔑	Password :- 
			</td>
			<td>
			  <input type="Password" placeholder="Password" name="pass" required=""><br><br> 
	   		</td>
	   	</tr> 
	   </table><br>
 		<button type="submit" class="btn btn-success btn-lg">Submit</button>
 		<br><br><a href="singup.php">Register Here</a>
	   	<h4>📜 Note:- New User Pls Register Here.</h4>
	</center>
</body>
</html>