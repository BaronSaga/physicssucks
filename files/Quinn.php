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
    
     
     <form name="addComment" action="Quinn.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentQuinn($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentQuinn.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/quinnN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Quinn.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/Quinn_Passive.png" height = "35px" width= "35px"/> - Passive - Harrier</h3>
Valor periodically marks enemies as Vulnerable. Quinn's first basic attack against Vulnerable targets will deal bonus physical damage.
 </br>

<h3><img src = "images/QuinnQ.png" height = "35px" width= "35px"/> - Q - Blinding Assault </br></h3>
Cost: 50/55/60/65/70 Mana </br>
Range: 1025 </br> </br>
Quinn calls Valor to mark an enemy and hinder its vision before damaging all enemies in the immediate area. 
 
</br> 

<h3><img src = "images/QuinnW.png" height = "35px" width= "35px"/> - W - Heightened Senses </br></h3>
Cost: No Cost </br>
Range: 2100 </br> </br>
Passively grants Quinn Attack Speed and Movement Speed after she attacks a Vulnerable target. Activate to have Valor reveal a large area nearby. 
 
 </br>

<h3><img src = "images/QuinnE.png" height = "35px" width= "35px"/> - E - Vault </br></h3>
Cost: 50 Mana  </br>
Range: 675 </br></br>
Quinn dashes to an enemy, dealing physical damage and slowing the target's Movement Speed. Upon reaching the target, she leaps off the target, briefly interrupting it, and lands near her maximum Attack Range away from the target. 

 </br>

<h3><img src = "images/QuinnR.png" height = "35px" width= "35px"/> - R - Behind Enemy Lines </br></h3>
Cost: 100/50/0 Mana </br>
Range: 700 </br></br>
Quinn and Valor team up to fly around at great speed. 

 </br>

</br>
<h3>Lore</h3>
Quinn and Valor are an elite ranger team. With crossbow and claw, they undertake their nation's most dangerous missions deep within enemy territory, from swift reconnaissance to lethal strikes. The pair's unbreakable bond is deadly on the battlefield, leaving opponents ravaged and riddled with arrows long before they realize who they're fighting: not one, but two Demacian legends.

As a young girl, Quinn shared a hunger for adventure with her twin brother. They dreamed of becoming knights, but lived a quiet, humble life in the rural borderlands of Demacia. Together they imagined triumphant battles in faraway lands, seizing glory for their king and slaying foes in the name of Demacian justice. When daydreams alone could no longer satisfy their warriors souls, they embarked on daring wilderness adventures in search of true danger. One such quest turned to tragedy when a terrible accident claimed her brother's life. Overcome with grief, Quinn abandoned her dreams of knighthood. 

On the anniversary of her loss, Quinn gathered the courage to return to the scene of the tragedy. To her surprise, she found a wounded Demacian eagle at the site of her brother's death - a rare and beautiful bird long believed extinct. Quinn nursed the fledgling back to health, and as they grew up together, a deep bond formed between the two. She saw the same quality in her newfound friend that had lived within her brother, and so she gave him the name ''Valor.'' The pair found strength in each other, and together they pursued the dream she had once abandoned. 

The Demacian army had never seen heroes like Quinn and Valor. Their deadly skills quickly set them apart from their rank-and-file peers, but many still had their doubts. How could a common-born girl, even with such a powerful creature at her side, forego years of military training? Quinn and Valor proved themselves on one critical mission, tracking down a Noxian assassin who had evaded an entire Demacian battalion. When they brought him to justice, they finally earned the admiration and respect of their nation. The two now serve as living, fighting icons of Demacian strength and perseverance. Together, Quinn and Valor will stand against any threat to their beloved home.

''Most soldiers only rely on their weapons. Few truly rely on each other.''
 -- Quinn 
</br>
</div>
</body>