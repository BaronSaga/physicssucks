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
    
     <form name="addComment" action="Tristana.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentTristana($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentTristana.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/tristanaN.png" height ="68px" width = "207px"/></h1>
<img src = "images//Tristana.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/Tristana_Passive.png" height = "35px" width= "35px"/> - Passive - Draw a Bead</h3>
Increases Tristana's Attack Range as she levels. </br>

<h3><img src = "images/TristanaQ.png" height = "35px" width= "35px"/> - Q - Rapid Fire </br></h3>
Cost: No Cost   </br>
Range: 20   </br> </br>
Tristana fires her weapon rapidly, increasing her Attack Speed for a short time.
</br> 

<h3><img src = "images/TristanaW.png" height = "35px" width= "35px"/> - W - Rocket Jump </br></h3>
Cost: 60 Mana  </br>
Range: 900   </br> </br>

Tristana fires at the ground to propel her to a distant location, dealing damage and slowing surrounding units for a brief period where she lands. 
 
 </br>

<h3><img src = "images/TristanaE.png" height = "35px" width= "35px"/> - E - Explosive Charge </br></h3>
Cost: 70/75/80/85/90 Mana    </br>
Range: 550   </br></br>
When Tristana kills a unit, her cannonballs burst into shrapnel, dealing damage to surrounding enemies. Can be activated to place a bomb on a target enemy that explodes after a short duration dealing damage to surrounding units.
 </br>

<h3><img src = "images//TristanaR.png" height = "35px" width= "35px"/> - R - Busteroi Shot </br></h3>
Cost: 100 Mana </br>
Range: 550   </br></br>
Tristana loads a massive cannonball into her weapon and fires it at an enemy unit. This deals Magic Damage and knocks the target back. If the target is carrying the Explosive Charge bomb, the bomb detonation radius is doubled. 

</br>

</br>
<h3>Lore</h3>
Greatness comes in all shapes and sizes, as proven by this diminutive, cannon-wielding yordle. In a world fraught with turmoil, Tristana refuses to back down from any challenge. She represents the pinnacle of martial proficiency, unwavering courage, and boundless optimism. For Trist and her gun, Boomer, every mission is a chance to prove that heroes do exist. 

</br>
</div>
</body>