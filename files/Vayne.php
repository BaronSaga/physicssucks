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
    height:2100px;
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
    
     <form name="addComment" action="Vayne.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentVayne($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentVayne.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/vayneN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Vayne.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/Vayne_NightHunter.png" height = "35px" width= "35px"/> - Passive - Night Hunter</h3>

Vayne ruthlessly hunts evil-doers. She gains 30 Movement Speed when moving toward nearby enemy champions. 
 </br>

<h3><img src = "images/VayneTumble.png" height = "35px" width= "35px"/> - Q -Tumble </br></h3>
Cost: 30 Mana   </br>
Range: 300  </br> </br>
Vayne tumbles, maneuvering to carefully place her next shot. Her next attack deals bonus damage. </br> 

<h3><img src = "images/VayneSilveredBolts.png" height = "35px" width= "35px"/> - W - Silver Bolts </br></h3>
Cost: Passive </br>
Range: 750  </br> </br>
Vayne tips her bolts with a rare metal, toxic to evil things. The third consecutive attack or ability against the same target deals a percentage of the target's maximum Health as bonus true damage. </br>

<h3><img src = "images/VayneCondemn.png" height = "35px" width= "35px"/> - E - Condemn </br></h3>
Cost: 90 Mana </br>
Range: 710  </br></br>
Vayne draws a heavy crossbow from her back, and fires a huge bolt at her target, knocking them back and dealing damage. If they collide with terrain, they are impaled, dealing bonus damage and stunning them.  </br>

<h3><img src = "images/VayneInquisition.png" height = "35px" width= "35px"/> - R - Final Hour </br></h3>
Cost: 80 Mana  </br>
Range: 1 </br></br>
Readying herself for an epic confrontation, Vayne gains increased Attack Damage, invisibility during Tumble, and triple the bonus Movement Speed from Night Hunter. </br>

</br>
<h3>Lore</h3>
The world is not always as civilized as people might think. There are still those who would follow the blackest paths of magic and become corrupted by the darker powers that flow through Runeterra. Shauna Vayne knows this fact well.

As a young privileged girl in the heart of Demacia's elite, her father tried to convince her of the constabulary's ever-vigilant eye. Young and naive, she truly believed that her world was one of perfect safety, until one night, when a twisted witch took interest in her father. The malevolent woman overcame her father's conciliar guard, then tortured her family before murdering them. The young Shauna escaped only by hiding herself and then fleeing once the hag had departed, plagued by the screams of her loved ones as she ran. A burning hatred was born in her that day, one that could never be denied.

Vayne was able to take care of herself using her father's money, and she began to train as soon as an instructor would have her as a student. By the time she was a fully grown woman, she had become a grim warrior. However, the fields of battle were not to be her home.

Demacia needed a protector, one who hunted those lost to the darkness. Shauna used her family's contacts to become the first Night Hunter, and now her prowess is legendary. It is said that those who practice the black arts quake when they hear that the Night Hunter is on the prowl. 


Not all shadows are to be feared. At least, if Vayne has her way.

</br>
</div>
</body>