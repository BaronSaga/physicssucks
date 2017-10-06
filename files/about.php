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

<style>
#header {
    background-color:blue;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#f58220;
    height:1000px;
    width:250px;
    float:left;
    padding:5px;
	font-family:Arial, Helvetica, sans-serif	      
}
#section {
    float:left;
    padding:30px;	 	 
}
#comment {
	float:right;	
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
a:link {
	color: black;
}
a:visited {
	color: black;
}
</style>
</head>

<body>
<img src = "Banner2.jpg" height="200px" width="755px"/>

<div id="header">                                      
<h1><a href="hearthstone.php">
<img src="green.png" alt="tiers" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;"/></a>
<a href="vote.php">
 <img src="yellow.png" alt="voting" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
  <img src="orangep.png" alt="about" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
<a href="login.php">
  <img src="logout.png" alt="logout" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
</h1>
</div>

<div id="nav">
<b><i>Pages:</i></br>
<a href = "about.php"> Our Mission</a></br>
<a href = "about2.php"> The Creators</a></br>
</div>
<h1>Goal</h1>
To help the community help itself by providing an apparatus to tell which characters are currently the strongest in their respective games. </br>
</br>
<?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addComment($u, $p);
}
?>


