<?php
session_start();

if(!isset($_SESSION["validuser"]))
{
	echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=index.php\">";
	exit();
}

require("dbConnect.php");
require("functions.php");
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
    background-color:#00FF01;
    height:3000px;
    width:250px;
    float:left;
    padding:5px;
	font-family:Arial, Helvetica, sans-serif	      
}
#section {
    float:right
	padding:50px;
	width:1000px	 	 
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
<img src = "banner.jpg" height="200px" width="755px"/>

<div id="header">                                      
<h1><a href="League.php">
<img src="green.png" alt="tiers" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;"/></a>

<a href="vote.php">
 <img src="yellow.png" alt="voting" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
<a href="about.php">
  <img src="orange.png" alt="about" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
<a href="login.php">
  <img src="logout.png" alt="logout" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>

</h1></div>

<div id="nav">
<b><i>Games:</i></br>
<a href = "League.php"> League Of Legends (Marksmen)</a></br>
<a href = "Hearthstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commenthun";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
       <form name="addComment" action="Sivir.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentSivir($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentSivir.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/sivirN.png" height ="68px" width = "207px"/></h1>
<img src = "images//Sivir.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/Sivir_Passive.png" height = "35px" width= "35px"/> - Passive - Fleet of Foot</h3>
Sivir gains a short burst of Movement Speed when she attacks an enemy champion. </br>

<h3><img src = "images/SivirQ.png" height = "35px" width= "35px"/> - Q - Boomerang Blade </br></h3>
Cost: Cost: 70/80/90/100/110 Mana  </br>
Range: 1200  </br> </br>
Sivir hurls her crossblade like a boomerang, dealing damage each way. 
</br> 

<h3><img src = "images/SivirW.png" height = "35px" width= "35px"/> - W - Ricochet </br></h3>
Cost: 60 Mana  </br>
Range: 20  </br> </br>

Sivir's next few basic attacks will bounce to nearby targets, dealing reduced damage to secondary targets. 
 
 </br>

<h3><img src = "images/SivirE.png" height = "35px" width= "35px"/> - E -Spell Shield </br></h3>
Cost: Cost: No Cost   </br>
Range: Range: 20  </br></br>
Creates a magical barrier that blocks a single enemy ability cast on Sivir. She receives Mana back if a spell is blocked. 
 </br>

<h3><img src = "images//SivirR.png" height = "35px" width= "35px"/> - R - On The Hunt </br></h3>
Cost: 100 Mana </br>
Range: 1000  </br></br>
Sivir leads her allies in battle, granting them a surge Movement Speed for a period of time. Additionally passively grants Sivir bonus Attack Speed while Ricochet is active. 

 </br>

</br>
<h3>Lore</h3>
Known as the Battle Mistress, Sivir is a mercenary with a ruthless reputation. Combining unflinching bravery with endless ambition, she has garnered great fame and fortune. Faced with the revelation of her mysterious heritage, Sivir must weigh her desire to continue on her own path, or accept the burden of a greater legacy. 

</br>
</div>
</body>