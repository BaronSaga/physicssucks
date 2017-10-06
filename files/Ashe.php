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
<a href = "Hearhstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commentashe";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Ashe.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentAshe($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentAshe.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/asheN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Ashe.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/AsheP.png" height = "35px" width= "35px"/> - Passive - Frost Shots</h3>
(Innate) Spells and basic attacks slow targets for 2 seconds.Frost Shot's bonus damage does not counts as a Critical Strike. Ashe's Critical Strikes deal 1.0 of her total attack damage (instead of 2.0 total attack damage), but double the effectiveness of Frost Shot. </br>

<h3><img src = "images/AsheQ.png" height = "35px" width= "35px"/> - Q - Ranger's Focus </br></h3>
Cost: 50 Mana </br>
Cooldown: 0 seconds </br> </br>
Applying Frost Shot grants Focus for 4 seconds, stacking up to 5 times. Activating Ranger's Focus consumes all Focus stacks(cannot be cast under max stacks), granting bonus Attack Speed. Ashe cannot build passive Focus stacks while Ranger's Focus is active. Volley and Enchanted Arrow do not add focus stacks.</br> 

<h3><img src = "images/AsheW.png" height = "35px" width= "35px"/> - W - Volley </br></h3>
Cost: 50 Mana </br>
Range: 1200 </br> </br>
(Active) Ashe fires 9 arrows in a cone, dealing physical damage to each target hit. Each arrow will only hit one enemy, and each enemy will only be hit by one arrow. It also applies a slow equal to the one in the current rank of Frost Shot even if it is not toggled on. Critically strikes against champions for the purposes of Frost Shot's slow. </br>

<h3><img src = "images/AsheE.png" height = "35px" width= "35px"/> - E - Hawkshot </br></h3>
Cost: 1 charge </br>
Vision radius: 1000 </br></br>
(Active) Ashe sends her Hawk Spirit on a scouting mission to a target area on the map, revealing terrain for 2 seconds as it travels in a straight line and granting vision of the target area for 5 seconds. The Hawk Spirit will reveal units in the brushes, but will not reveal stealthed units or objects. Stores up to two charges upon reaching rank 2. </br>

<h3><img src = "images/AsheR.png" height = "35px" width= "35px"/> - R - Enchanted Crystal Arrow </br></h3>
Cost: 100 Mana </br>
Explosion Radius: 250 </br></br>
(Active): Ashe fires a missile of ice in a straight line that will pass over all other units and terrain, until it collides with an enemy Champion, or until it leaves the map. If the arrow collides with an enemy Champion, it will deal magic damage and stun the target. Additionally, it will deal half damage, and slow all other units in a small radius of the target, including the target itself by Frost Shot's current value for 3 seconds. The duration of the stun increases the farther the arrow travels before impact and caps at 3.5 seconds. </br>

</br>
<h3>Lore</h3>
With each arrow she fires from her ancient ice-enchanted bow, Ashe proves she is a master archer. She chooses each target carefully, waits for the right moment, and then strikes with power and precision. It is with this same vision and focus that she pursues her goal of uniting the tribes of the Freljord and forging them into a mighty nation.

As a child, Ashe was always a dreamer. She marveled at the colossal, abandoned fortresses of her ancestors, and spent hours by the fire listening to tales of the Freljord's fabled champions. Most of all she loved the legend of Avarosa, the renowned Queen of the once magnificent and united Freljord. Though her mother chided her foolishness, Ashe swore one day she would join the scattered and warlike tribes of the tundra. She knew in her heart that if her people would stand together once more, they would reach greatness again.

When Ashe was only fifteen, her mother was killed while commanding the tribe on a brash raid. Suddenly thrust into the role of leader, Ashe made the difficult decision to follow her childhood vision instead of seeking the revenge she craved. She spoke passionately against her tribe's demand for retribution, declaring the time had come to put blood feuds aside and broker a lasting peace. Some of her warriors questioned her fitness to rule and soon hatched a treasonous plot to kill the young leader.

The assassins struck while Ashe was on a routine hunt, but their plan was interrupted by the warning cry of a great hawk. Ashe looked back to see her tribesmen approaching with swords drawn. Outnumbered and overwhelmed, Ashe ran for hours. She found herself deep in uncharted territory, her weapon lost in the chase. When she heard another cry from the hawk, Ashe put her faith in the strange creature and followed it to a clearing. There she found the bird perched on a pile of stones - an ancient Freljord burial cairn. With a last glance at her, the hawk screeched and flew away. Approaching the mound, Ashe felt her breath turn to frost and an unnatural cold chill her to the bone. The stone at the top of the cairn was marked with a single rune: Avarosa.

The assassins burst into the clearing. Ashe lifted the runestone from the cairn to defend herself, revealing something hidden underneath: an ornate bow carved from ice. She grasped it, crying out in pain as frost formed on her fingers, and tore the bow from its resting place. Cold flowed from the enchanted weapon into Ashe, awakening a tremendous power that had always lived within her.

Ashe turned to face the assassins. She drew the bow, and by sheer instinct, willed arrows of pure ice to form from the cold, crisp air. With a single frozen volley, she ended the insurrection. Carefully replacing the cairn stone, she gave thanks to Avarosa for her gift, and returned home. Ashe's tribe immediately recognized the legendary weapon in the archer's hand as a blessing from the ancient Freljord queen herself.

With Avarosa's bow and her vision of peaceful unification, Ashe's tribe soon swelled, becoming the largest in the Freljord. Now known as the Avarosan, they stand together with the belief that a united Freljord will once again become a great nation.


</div>
</body>