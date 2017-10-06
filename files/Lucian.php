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
    
     <form name="addComment" action="Lucian.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentLucian($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentLucian.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/lucianN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Lucian.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/Lucian_Passive.png" height = "35px" width= "35px"/> - Passive - Lightslinger</h3>
Whenever Lucian uses an ability, his next attack becomes a double-shot. </br>

<h3><img src = "images/LucianQ.png" height = "35px" width= "35px"/> - Q -Piercing Light </br></h3>
Cost: 50/55/60/65/70 Mana  </br>
Range: 500 </br> </br>
Lucian shoots a bolt of piercing light through a target.</br> 

<h3><img src = "images/LucianW.png" height = "35px" width= "35px"/> - W - Ardent Blaze </br></h3>
Cost: 50 Mana </br>
Range: 1000 </br> </br>
Lucian shoots a missile that explodes in a star shape, marking enemies. Lucian gains Movement Speed for attacking marked enemies. </br>

<h3><img src = "images/LucianE.png" height = "35px" width= "35px"/> - E - Relentless Pursuit </br></h3>
Cost: 40/30/20/10/0 Mana  </br>
Range: 445 </br></br>
Lucian quickly dashes a short distance. Lightslinger attacks reduce Relentless Pursuit's cooldown.  </br>

<h3><img src = "images/LucianR.png" height = "35px" width= "35px"/> - R - The Culling </br></h3>
Cost: 100 Mana </br>
Range: 1400 </br></br>
Lucian unleashes a torrent of shots from his weapons. </br>

</br>
<h3>Lore</h3>
Lucian wields relic weapons imbued with ancient power and stands a stalwart guardian against the undead. His cold conviction never wavers, even in the face of the maddening horrors he destroys beneath his hail of purifying fire. Lucian walks alone on a grim mission: to purge the spirits of those ensnared in undeath, his eternal beloved among them.

Like the twin relic weapons they wielded, Lucian and his wife Senna were carved from the same stone. Together they battled evil in Runeterra for years, bringing light to darkness and purging those taken by corruption. They were beacons of righteousness: Senna's dedication to their cause never faltered, while Lucian's kindness and warmth touched the hearts of the many lives they saved. Two parts of one whole, they were devoted and inseparable.

Though Lucian and Senna witnessed terror that would break most warriors, nothing they had seen compared to the horrors wrought by the Shadow Isles. When the spectral denizens of that accursed place began to manifest across Runeterra, Lucian and Senna hunted them down wherever they appeared. It was grim work, but the fearless pair prevailed until one tragic encounter with the soul-collector Thresh. Lucian and Senna had faced such nightmarish undead before, but never one so deviously clever and cruel. As the terrible battle unfolded, Thresh sprung an unexpected ploy. To Lucian's horror, the creature tricked Senna and ensnared her soul, trapping her in a spectral prison. Nothing could bring her back. Senna was lost, and for the first time, Lucian faced his mission alone. 

Though the Warden had taken half of Lucian's heart, he had also created the Shadow Isles' most dangerous foe. Lucian became a man of dark determination, one who would stop at nothing to purge the undead from the face of Runeterra. In honor of Senna's memory, he took up her fallen weapon and vowed to see their mission through to the end. Now wielding both relic weapons, Lucian fights to slay the undead and cleanse the souls of the Shadow Isles. He knows that Senna's soul is lost, but never loses hope that one day he will bring her peace. 

''Be grateful. By slaying you now, I spare you an eternity of torment.'' 
 -- Lucian 
</br>
</div>
</body>