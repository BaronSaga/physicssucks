<?php
session_start(); //starts session
unset($_SESSION["validuser"]); //make sure if on login, anything still there is destroyed (just a safeguard not required)
session_destroy();
session_start();

require("dbConnect.php");
require("functions.php");

//Check to if username and passowrd fields are completed.
if(isset($_POST["name"]) && isset($_POST["password"]))
{
	$n = strtolower($_POST["name"]);
	$p = sha1($_POST["password"]);
	
	//Check for valid login
	if(login($n, $p))
		$_SESSION["validuser"] = $n;
}

if(isset($_SESSION["validuser"]))
	echo"<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=hearthstone.php\">";
?>

<body>
	<img src = "Banner2.jpg" height="200px" width="755px"/>
    <br/>
    <br/>
    <h1>Login</h1>
    <form name="login" action="login.php" method="post">
    Username: <input type="text" name="name"><br/><br/>
    Password: <input type="password" name="password"><br/><br/>
    <input type="submit" value="Login">
    </form>
    
    Don't have an account? Sign up <a href = "add.php"> here</a>!
</body>