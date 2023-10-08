<?php
	session_start();

	include("db.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$Gender = $_POST['gender'];
		$num = $_POST['number'];
		$address = $_POST['add'];
		$gmail = $_POST['mail'];
		$password = $_POST['pass'];

		if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) 
		{
			$query = "insert into form (fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$gender', '$num', '$address', '$gmail', '$password')";

			mysqli_query($con, $query);

			echo "<script type='text/javascript'> alert('Successfully Register')</script>";
		}
		else
		{
			echo "<script type='text/javascript'> alert('Plse Enter A Valid Information')</script>";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form method="POST">
	<center>
	<label>	
		<h1>
		📍 Ambaba Commerce College, Surat. 
		</h1>Sabargam, Post. Niyol, Taluka. Choryasi, Dist-Surat-394325, Gujarat<br><br>
		<h2>
		  👨‍🎓 Student's Registration From
		</h2>
	</label>
		<table>
	   	<tr>
			<td>
			🧑‍🎓	First Name :- 
			</td>
			<td>
			   <input type="text" placeholder="First Name" name="fname" required=""><br><br>
	   		</td>
	   	</tr>
	   	<tr>
			<td>
			🧑‍🎓	Last Name :- 
			</td>
			<td>
			   <input type="text" placeholder="Last Name" name="lname" required=""><br><br>
	   		</td>
	   	</tr>
	   	<tr>
	   	<td>
	   	👩🏽‍🤝‍👨🏻	Gender:- 
			</td>
			<td>
			   <input type="text" name="gender" placeholder="gender" required=""><br><br>
			</td>
	   	</tr>
	   	<tr>
			<td>
			📞	Mobile No. :- 
			</td>
			<td>
			  <input type="tel" placeholder="Mobile No." name="number" required=""><br><br> 
	   		</td>
	   	</tr>
	   	<tr>
          <td>
	    <label>📭	Address :- </label>
          </td>
          <td>
       <textarea type="Address" placeholder="Address" rows="5" cols="20" name="add" required="">
       </textarea><br><br>
          </td>
       </tr>
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
 		<br><br>Alrady A Student, Pls Login Here...👉<a href="login.php">Login Here</a>
	   	<h4>📜 Note:- After submited form can't be edited.</h4>
	</center>
</body>
</html>