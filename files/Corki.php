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
    
     <form name="addComment" action="Corki.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentCorki($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentCorki.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/corkiN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Corki.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/CorkiP.jpg" height = "35px" width= "35px"/> - Passive - Hextech Munitions</h3>
Innate) Corki's auto-attacks deal 110% damage, split between 55% magic damage and 55% physical damage before armor adjustment. After 8 minutes, Corki can return to base to pick up The Package, gaining extreme out-of-combat Movement Speed (150% while in base, 40% outside) and can cast Special Delivery for 60 seconds. </br>

<h3><img src = "images/CorkiQ.jpg" height = "35px" width= "35px"/> - Q - Phosphorus Bomb </br></h3>
Cooldown: 8 seconds </br>
Range to Center of AoE: 825 </br> </br>
(Active) Corki launches a bomb, revealing the destination area for 6 seconds and dealing magic damage to all enemies hit. Any champions hit will also be revealed for 6 seconds. The bomb also grants vision while the in the air.</br> 

<h3><img src = "images/CorkiW.jpg" height = "35px" width= "35px"/> - W - Valkyrie</br></h3>
Cost: 100 Mana </br>
Range: 600 </br> </br>
(The Package) Travels further and drops bombs along the path that knock aside enemies and leave a burning trail in the area for 5 seconds, Enemies in the trail are slowed by 90% and burn for magic damage equal to 30-100 at levels 1-18 (1.5 bonus Attack Damage) (.2 Ability Power)</br>

<h3><img src = "images/CorkiE.jpg" height = "35px" width= "35px"/> - E - Gatling Gun </br></h3>
Cooldown: 16 seconds </br>
Range: 600 </br></br>
(Active) Corki's gatling gun begins firing at enemies in front of him automatically every half second for 4 seconds, dealing half physical and half magic damage shredding the armor and magic resist of enemies who are under continuous fire. Armor reduction stacks and lasts 2 seconds. Corki can keep attacking and using other abilities while Gatling Gun is in effect.</br>

<h3><img src = "images/CorkiR.jpg" height = "35px" width= "35px"/> - R -Missile Barrage </br></h3>
Cost: 20 Mana </br>
Range: 1,225 </br></br>
(Active) Corki fires a missile in a line that will explode and deal magic damage in an area upon colliding with the first enemy it hits.
Corki can only fire a missile if he has missiles stored, and can store up to 7 missiles. The time to respawn a missile is affected by cooldown reduction and does not progress while having maximum missiles. Every third missile fired will be marked as a Big One, dealing 50% more damage than normal missiles and the explosion has a broader radius. After dying, Corki will respawn with 4 missiles.
 </br>

</br>
<h3>Lore</h3>
When Heimerdinger Heimerdinger and his yordle colleagues migrated to Piltover, they embraced science as a way of life, and they immediately made several groundbreaking contributions to the techmaturgical community. What yordles lack in stature, they make up for with industriousness. Corki, the Daring Bombardier, gained his title by test-piloting one of these contributions - the original design for the Reconnaissance Operations Front-Line Copter, an aerial assault vehicle which has become the backbone of the Bandle City Expeditionary Force (BCEF). Together with his squadron - the Screaming Yipsnakes - Corki soars over Valoran, surveying the landscape and conducting aerial acrobatics for the benefit of onlookers below.

Corki is the most renowned of the Screaming Yipsnakes for remaining cool under fire and exhibiting bravery to the point of madness. Before the League, he served several tours of duty, often volunteering for missions which would take him behind enemy lines, either gathering intelligence or delivering messages through hot zones. He thrived on danger, and enjoyed nothing more than a good dogfight in the morning. More than just an ace pilot, Corki also made several modifications to his copter, outfitting it with an arsenal of weapons which some speculate were more for show than functionality. When open hostilities ceased as part of the agreement surrounding the formation of the League, Corki was forced into a retirement which he felt "cut the engines and clipped the wings". He tried to make do with stunt flying and canyon running, but it was never the same without the refreshing smell of gunpowder streaking through the air around him. When Heimerdinger joined the League of Legends, it was no surprise to see Corki follow soon after, eager to test his mettle against the best the world has to offer.




</div>
</body>