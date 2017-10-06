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
    height:2000px;
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
    
       <form name="addComment" action="Draven.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentDraven($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentDraven.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/dravenN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Draven.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/DravenP.png" height = "35px" width= "35px"/> - Passive - League of Draven</h3>
(Innate) When Draven catches a   Spinning Axe, or kills a minion or monster, he gains one stack of Adoration. When Draven kills an enemy champion, he consumes all of his Adoration stacks and gains 2 gold per stack consumed plus 50 base gold. Draven loses half of his Adoration stacks upon death. Draven gets 2 bonus stacks of Adoration if he kills 6 minions in a row without dropping a spinning axe. Upon reaching 150 stacks, League of Draven notifies Draven's team every 100 stacks (150, 250, 350, etc) and every time he cashes in on a kill of at least 150 stacks. </br>

<h3><img src = "images/DravenQ.png" height = "35px" width= "35px"/> - Q - Spinning Axe </br></h3>
Cost: 45 mana </br>
Range to Center of AoE: 825 </br> </br>
(Active) Draven's next attack will deal bonus physical damage. The bonus is equal to a percentage of his total attack damage.
This axe will ricochet off the target high up into the air. So long as Draven catches it,   Spinning Axe will keep applying to his next attack.
Cooldown permitting, Draven can have up to two   Spinning Axes readied at once.
</br> 

<h3><img src = "images/DravenW.png" height = "35px" width= "35px"/> - W - Blood Rush</br></h3>
Cost: 45 Mana </br>
Cooldown: 12 seconds</br> </br>
(Active) Draven gains increased movement speed for 1.5 seconds and increased attack speed for 3 seconds. The movement speed bonus decreases rapidly over its duration.
Catching a   Spinning Axe will refresh   Blood Rush's cooldown.
</br>

<h3><img src = "images/DravenE.png" height = "35px" width= "35px"/> - E - Stand Aside </br></h3>
Cost: 70 mana </br>
Range: 1,050 </br></br>
(Active) Draven throws his axes, dealing physical damage to targets hit and knocking them aside. Targets hit are slowed for 2 seconds.</br>

<h3><img src = "images/DravenR.png" height = "35px" width= "35px"/> - R -Whirling Death </br></h3>
Cost: 120 Mana </br>
Range: 20,000 </br></br>
(Active): Draven hurls two massive axes in a given direction, dealing physical damage to every unit struck.
Upon reaching the edge of the map, striking an enemy champion or upon the reactivation of Whirling Death, the axes will slowly come to a stop before changing direction and returning to Draven: dealing the same damage to every unit struck on the way back.
  Whirling Death deals 8% less damage for each unit hit, down to a minimum of 40%. The damage reduction resets when the axes reverse direction.

 </br>

</br>
<h3>Lore</h3>
Unlike his brother Darius Darius, victory in battle was never enough for Draven. He craved recognition, acclaim, and glory. He first sought greatness in the Noxian military, but his flair for the dramatic went severely underappreciated. Thirsting for a method to share "Draven" with the world, he turned his attention to the prison system. There he carved out the celebrity he desired by turning the tedious affair of executions into a premiere spectacle.

At Draven's first execution, he shocked onlookers when he ordered the doomed prisoner to run for dear life. Just before the man managed to flee from sight, Draven brought him down with a flawless throw of his axe. Soon, all Draven's executions became a gauntlet through which Noxian prisoners raced for a final chance at life. He used this trial as his own personal stage, and turned executions into a leading form of entertainment. He rallied onlookers into a frenzy, while desperate prisoners scrambled to evade him. They never succeeded. Rejecting the solemn, black uniforms of Noxian executioners Draven donned bright outfits and developed flashy signature moves to distinguish himself. Crowds flocked to see Draven in action, and tales of his performances spread quickly. As his popularity grew, so did his already-inflated ego. He belonged at the center of attention. Before long, the scope of his ambitions outgrew the population of Noxus. He decided that the glorious exploits of Draven should be put on display for the entire world.





</div>
</body>