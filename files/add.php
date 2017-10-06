<?php
session_start();

require("dbConnect.php");
require("functions.php");

if(isset($_POST["name"]) && isset($_POST["password"]))
{
	$n = strtolower($_POST["name"]);
	$p = $_POST["password"];
	$pe = sha1($_POST["password"]);
		//Add user
	if(nameExists($n))
		echo"<script>alert(\"You already have an account.\");</script>";
	elseif(strlen($p) < 7)
		echo"<script>alert(\"Password must be at least 7 characters long.\");</script>";
	else
		add($n, $pe);
}
?>

<body>
	<img src = "Banner2.jpg" height="200px" width="755px"/>
	<h1>Add Account </h1>
    
    <form name="add" action="add.php" method="post">
    Username: <input type="text" name="name"><br/><br/>
    Password: <input type="password" name="password"><br/><br/>
    <input type="submit" value="Add">
    </form>
</body>

<a href = "login.php"> Back to login</a>
</body>

<?php
if(isset($_POST["name"]))
{
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=login.php\">";
}
?>