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
    
      <form name="addComment" action="Ezreal.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentEzreal($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentEzreal.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/ezrealN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Ezreal.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/EzrealP.jpg" height = "35px" width= "35px"/> - Passive - Rising Spell Force</h3>
(Innate) Hitting a target with any of Ezreal's abilities increases his attack speed by 10% for 6 seconds, this effect stacks up to 5 times. </br>

<h3><img src = "images/EzrealQ.jpg" height = "35px" width= "35px"/> - Q - Mystic Shot</br></h3>
Range:1100 </br>
(Active) Ezreal fires a bolt of energy in a line that will deal physical damage and apply on-hit effects to the first enemy it hits. If it strikes an enemy unit, all of Ezreal's cooldowns will be reduced by 1.5 second.
</br> 

<h3><img src = "images/EzrealW.jpg" height = "35px" width= "35px"/> - W - Essence Flux</br></h3>
Cooldown: 9 seconds </br>
Range: 900</br> </br>
((Active) Ezreal fires a wave of energy in a line. Any enemy champions it passes through are dealt magic damage, while any allied champions it travels through have their attack speed increased for 5 seconds.
</br>

<h3><img src = "images/EzrealE.jpg" height = "35px" width= "35px"/> - E - Arcane Shift </br></h3>
Cost: 90 mana </br>
Teleport Range: 475 </br></br>
(Active) Ezreal instantly teleports to a nearby target location and fires a homing arrow at the nearest enemy unit, dealing magic damage to it.</br>

<h3><img src = "images/EzrealR.jpg" height = "35px" width= "35px"/> - R -Trueshot Barrage </br></h3>
Cost: 100 Mana </br>
Cooldown: 80 seconds </br></br>
(Active) Ezreal charges for 1 second to fire a powerful broad energy missile that will travel in a line by the whole map and will deal magic damage to each enemy unit they pass through. It will deal 10% less damage for each subsequent target hit, down to a minimum of 30% damage dealt.

 </br>

</br>
<h3>Lore</h3>
Ezreal was born with the gift of magic flowing through his veins. Ezreal, however, was also born with a much stronger sense of wanderlust. Put into school to become a skilled techmaturgist, Ezreal quickly became bored with magical studies. By the time the boy genius was eight years old, he had fully mapped out the underground tunnels of Piltover. The quality of his work was so great that the government of Piltover purchased his maps and salaried his services as Piltover's Grandmaster Explorer. This sealed the deal on Ezreal's path in life - he would eschew the arcane arts in favor of archaeology. Since then, countless of Ezreal's adventures have been written about as romanticized stories.

One of Ezreal's latest adventures, however, has brought him face-to-face with his other legacy - his latent magical power. While exploring the pyramids of Shurima Desert, Ezreal uncovered an amulet of incredible power. Aside from the sheer size of the amulet (it was made for a being easily twice Ezreal's size), it allows the wielder to control and shape magical energy - provided a source of magic is in the vicinity. This allowed Ezreal to tap into his natural talent for magic without having to put any serious effort into it - a big win for the Prodigal Explorer. The drawback is that for some unknown reason, the amulet is attuned with summoning magic. Without warning, Ezreal may find himself acting as a champion for, as he puts it, a summoner hell-bent on resolving some irrelevant world-shattering League conflict. Still, Ezreal feels being summoned into a Field of Justice on occasion is a small price to pay.






</div>
</body>