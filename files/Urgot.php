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
    height:1700px;
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
    
     <form name="addComment" action="Urgot.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentUrgot($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentUrgot.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/urgotN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Urgot.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/Urgot_Passive.png" height = "35px" width= "35px"/> - Passive -
Zaun-Touched Bolt Augmenter</h3>
Urgot's basic attacks and Acid Hunters reduce his targets' damage by 15% for 2.5 seconds. </br>

<h3><img src = "images/UrgotHeatseekingMissile.png" height = "35px" width= "35px"/> - Q - Acid Hunter</br></h3>
Cost: 40 Mana  </br>
Urgot fires an Acid Hunter missile that collides with the first enemy it hits, slowing the target if he has his Terror Capacitor up. Acid Hunter missile-locks on enemies affected by Noxian Corrosive Charge. 


</br> 

<h3><img src = "images/UrgotTerrorCapacitorActive2.png" height = "35px" width= "35px"/> - W - Terror Capacitor</br></h3>
Cooldown: 30 seconds </br>
Range: 5500</br> </br>
Urgot charges up his capacitor to gain a shield. While the shield is active, Urgot gains slowing attacks. 

</br>

<h3><img src = "images/UrgotPlasmaGrenade.png" height = "35px" width= "35px"/> - E - Noxian Corrosive Charge </br></h3>
Cost: 50/55/60/65/70 mana </br>
Range: 900  </br></br>
(Urgot launches a corrosive charge that damages enemies in an area and reduces their Armor.

</br>

<h3><img src = "images/UrgotSwap2.png" height = "35px" width= "35px"/> - Hyper-Kinetic Position Reverser </br></h3>
Cost: 100 Mana </br>
Range: 550/700/850  </br></br>
Urgot charges up his Hyper-Kinetic Position Reverser, swapping positions with the target and terrifying nearby enemies for 1.5 seconds. His target is suppressed for the duration of the channel. He gains Damage Reduction during and after the swap. 


 </br>

</br>
<h3>Lore</h3>
There are warriors who become great for their strength, cunning, or skill with arms. Others simply refuse to die. Urgot, once a great soldier of Noxus, may constitute a case in support of the latter. Prone to diving headlong into enemy battle lines, Urgot sowed chaos throughout the enemy ranks, often sustaining grievous injuries in the process. 

When his body was unable to weather further abuse, the crippled Urgot was delegated to the position of High Executioner of Noxus. By this time, his hands had been ruined and he could barely walk. Scythe-like grafts affixed to his maimed limbs served to carry out his bloody work.

Urgot finally met his end at what should have been his finest hour. Because of his military background, he often accompanied detachments into foreign territory to carry out judgment. After ambushing an enemy force, Jarvan IV, Crown Prince of Demacia, fell into the clutches of Urgot's division. Too far from Noxus to risk transporting their prize for ransom, Urgot prepared to dispose of their captive. At the final moment, however, Garen led the Dauntless Vanguard to intervene, and Urgot was cut in two by the zealous warrior as he scrambled to free his Prince.

In recognition of his service, the executioner's remains were remanded to the Bleak Academy for reanimation. However, a lifetime of abuse had left his body in a catastrophic state, proving problematic to the necromancers' craft. Professor Stanwick Pididly, the prevailing scholar of Zaun, offered a solution. Within Pididly's laboratories, a nightmarish new body was forged for Urgot. 


Now, as much machine as man, with necromantic energies coursing through his metal veins, Urgot searches for the man who ended his life.








</div>
</body>