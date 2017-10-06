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
    
    <form name="addComment" action="Kalista.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentKalista($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentKalista.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/kalistaN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Kalista.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/KalistaP.png" height = "35px" width= "35px"/> - Passive -Martial Poise</h3>
(Innate) Kalista is unable to cancel her basic attacks and misses in case she lose sight of her target. The speed of   Martial Poises jump now only scales with attack speed (can be negatively affected by attack speed slows).</br>

<h3><img src = "images/KalistaQ.png" height = "35px" width= "35px"/> - Q - Pierce</br></h3>
Cooldown: 8 seconds </br>
(Active) Kalista hurls a fast and narrow spear that deals physical damage to the first enemy struck.

</br> 

<h3><img src = "images/KalistaW.png" height = "35px" width= "35px"/> - W - Sentinel</br></h3>
Cooldown: 30 seconds </br>
Range: 5500</br> </br>
(Soul-Marked - Passive) If the same target is being attacked by Kalista and her oathsworn ally within 1.5 seconds, additional damage is taken by the target, equivalent to the percentage of their max health. However, the same effect cannot occur on the same targeted enemy for 10 seconds.
(Active) Kalista commands a soul sentinel towards the target location within her range. Once the target location is reached, it will return to a point of approximately 1400 units from the cast location. If an enemy champion is spotted by the   Sentinel, it will scream then follow and reveal the target for 4 seconds.

</br>

<h3><img src = "images/KalistaE.png" height = "35px" width= "35px"/> - E - Rend </br></h3>
Cost: 30 mana </br>
Cooldown: 14 / 12.5 / 11 / 9.5 / 8 seconds </br></br>
(Passive) Kalista's   Pierce and basic attack leaves a spear lodged in the targeted enemy for 4 seconds. 
(Active) All spears are ripped nearby enemies slowing them down for 2 seconds and dealing physical damage at the same time. The damage caused by   Rend is increased by a percentage for each spear after the first one Kalista ripped off.

</br>

<h3><img src = "images/KalistaR.png" height = "35px" width= "35px"/> - R -Fate's Call </br></h3>
Cost: 100 Mana </br>
Cooldown: 120 / 90 / 60 </br></br>
(Active) Kalista's oathsworn ally is drawn next to her, making them untargetable but disabling their spells for a duration of 4 seconds. To cast   Fate's Call, the oathsworn ally must be within the range of 1400 units.


 </br>

</br>
<h3>Lore</h3>
A specter of wrath and retribution, Kalista is the undying spirit of vengeance, an armored nightmare summoned from the Shadow Isles to hunt deceivers and traitors. The betrayed may cry out in blood to be avenged, but Kalista only answers those whose cause she deems worthy of her skills. Woe betide those who become the focus of Kalista's wrath, for any pact sealed with this grim hunter can only end on the cold fire of her soul-spears.








</div>
</body>