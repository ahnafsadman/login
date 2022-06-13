
<?php
if(isset($_POST["btnLogin"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="webtech_c";
	$uname=$_POST["name"];
	$userpass=$_POST["pass"];
	$con=new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error)
		die("Connection failed:".$con->connect_error);
	else
	{
 
		$q="select * from Reg_user where Name='".$uname."' and Password='".$userpass."'";
		$res=$con->query($q);
		if($res->num_rows>0)
			echo "Successfully logged in";
		else
			echo "Invalid username or password";
	}
}
?>
<html>
<body>
	<h1>Login</h1>
	<form action="#" method="post">
	Name:<input type="text" id="name" name="name"><br><br>
	Password:<input type="password" id="pass" name="pass"><br><br>
	<input type="submit" value="Login" name="btnLogin">
	</form>
</body>
</html>















