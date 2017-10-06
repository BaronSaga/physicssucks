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
    height:2150px;
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
<a href="">
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
    
      <form name="addComment" action="Caityln.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentCaityln($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentCaityln.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/caitlynN.png" height ="136px" width = "414px"/></h1>
<img src = "images/Caitlyn.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/CaitlynP.jpg" height = "35px" width= "35px"/> - Passive - Headshot</h3>
((Innate) Every 8th / 7th / 6th auto-attack is enhanced to be a headshot, dealing 150% damage to a champion or 250% damage to a minion or monster. Attacks from brush increase the attack counter by two instead of one. Headshot's damage is increased by 50% of her crit chance. Caitlyn can fire a long-range headshot on enemies that step on a Yordle Snap Trap or get caught in 90-Caliber Net. </br>

<h3><img src = "images/CaitlynQ.jpg" height = "35px" width= "35px"/> - Q - Piltover Peacemaker </br></h3>
Range: 1250 </br>
Missile Width 60 </br> </br>
(Active) Caitlyn revs up her rifle for 1 second to unleash a penetrating shot in a line which will deal physical damage to all targets hits. It will deal 40% less damage for each subsequent target hit, down to a minimum of 50% damage dealt. After striking one target, Piltover Peacemaker gains 30 width. Piltover Peacemaker always deals 100% damage to units revealed by Yordle Snap Trap.</br> 

<h3><img src = "images/CaitlynW.jpg" height = "35px" width= "35px"/> - W - Yordle Snap Trap </br></h3>
Cost: 20 Mana </br>
Placement Range: 800 </br> </br>
(Active) Caitlyn sets a trap at the target nearby location. The trap triggers when a champion walks over it. This trap is visible to both allies and enemies. When sprung, the trap immobilizes the champion for 1.5 seconds revealing the target for 9 seconds. Caitlyn can set up to maximum 5 traps and they last 4 minutes. When she sets a trap once the cap has been reached, the oldest trap will deactivate itself. Caitlyn can Headshot trapped targets once at 1300 range. Caitlyn can no longer re-trap a trapped target.</br>

<h3><img src = "images/CaitlynE.jpg" height = "35px" width= "35px"/> - E - 90 Caliber Net </br></h3>
Cost: 75 mana </br>
Range: 950 </br></br>
(Active) Caitlyn fires a heavy net in front of her, knocking herself back in the opposite direction. The net will slow down the first target hit by 50% and will deal magic damage to it. Caitlyn can Headshot netted targets once at 1300 range.</br>

<h3><img src = "images/CaitlynR.jpg" height = "35px" width= "35px"/> - R -Ace in the Hole </br></h3>
Cost: 100 Mana </br>
Projectile Speed: 3200 </br></br>
(Active) Caitlyn marks an enemy champion at a huge range and channels for 2 seconds to line up the perfect shot, providing vision of the target for the duration. She then fires the projectile to deal massive physical damage. Enemy champions can intercept the bullet for their ally. </br>

</br>
<h3>Lore</h3>
One of the reasons Piltover is known as the City of Progress is because it has an extraordinarily low crime rate. This hasn't always been the case; brigands and thieves of all sorts used to find the city-state an ideal mark for plunder, primarily due to the valuable resources it imports to fuel its techmaturgical research. Some even theorize that it would have fallen long ago to the chaos of organized crime if not for Caitlyn, the Sheriff of Piltover.

Born the daughter of a wealthy statesman and a pioneering hextech researcher, Caitlyn discovered her natural gift for investigation when, at age 14, her father was assaulted and robbed on his way home. She snuck out of her house that night with her father's rifle and tracked down the muggers from the crime scene. At first, her parents did their best to discourage her from such risky hobbies, but she was incorrigible. Wishing to protect her daughter in the only way she knew how, Caitlyn's mother began outfitting her with techmaturgical devices tailored to her sleuthing needs.

Caitlyn quickly gained notoriety, as she was single-handedly defeating crime in Piltover and had developed into a ravishing beauty as well. She never backed down from a case or a challenge, and she was one of the sharpest shots in the city-state. Her services were soon requested by Demacia to help track down a mysterious outlaw who had begun committing high-profile heists.

The bandit, who always left a card with an ornate 'C' at the scene of the crime, became Caitlyn's arch-nemesis. To this day, Caitlyn still searches for this cat burglar, and the chase has led her all across Valoran. As she travels, she seeks to hone her skills and gain the influence necessary to track down the only quarry that has managed to evade her.



</div>
</body>