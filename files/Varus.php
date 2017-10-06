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
    
      <form name="addComment" action="Varus.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentVarus($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentVarus.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/varusN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Varus.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/VarusPassive.png" height = "35px" width= "35px"/> - Passive - Living Vengeance</h3>
On kill or assist, Varus temporarily gains Attack Speed. This bonus is larger if the enemy is a champion.  </br>

<h3><img src = "images/VarusQ.png" height = "35px" width= "35px"/> - Q - Piercing Arrow </br></h3>
Cost: 70/75/80/85/90 Mana   </br>
Range: 925  </br> </br>
Varus readies and then fires a powerful shot that gains extra range and damage the longer he spends preparing to fire. </br> 

<h3><img src = "images/VarusW.png" height = "35px" width= "35px"/> - W - Blighted Quiver
 </br></h3>
Cost: </br>
Range: 750 </br> </br>
Varus' basic attacks deal bonus magic damage and apply Blight. Varus' other abilities detonate Blight, dealing magic damage based on the target's maximum Health. </br>

<h3><img src = "images/VarusE.png" height = "35px" width= "35px"/> - E - Hail of Arrows
 </br></h3>
Cost: 80 Mana   </br>
Range: 925 </br></br>
Varus fires a hail of arrows that deal physical damage and desecrate the ground. Desecrated ground slows enemies' Movement Speed and reduces their self healing and regeneration. 
  </br>

<h3><img src = "images/VarusR.png" height = "35px" width= "35px"/> - R - Chain of Corruption </br></h3>
Cost: 100 Mana </br>
Range: 1200  </br></br>
Varus flings out a damaging tendril of corruption that immobilizes the first enemy champion hit and then spreads towards nearby uninfected champions, immobilizing them too on contact.  </br>

</br>
<h3>Lore</h3>
''The life of an arrow is fleeting, built of nothing but direction and intent.''

For his incomparable skill with the bow and his unquestioned sense of honor, Varus was chosen to be the warden of a sacred Ionian temple. The temple was built to contain an ancient pit of corruption so vile that Ionian Elders feared it could envelop the island in darkness. Varus prided himself on his position, as only the most exceptional Ionian warriors were selected for the role. He lived with his family in a nearby village and led a quiet life of disciplined routine until the day the forces of Noxus invaded Ionia. Their shock troops left nothing but death and desolation in their wake, and the temple lay in their path. Varus was forced to make a decision. He was bound by honor to stay and defend the temple, but without him the village's few inhabitants could offer little resistance against the oncoming war machine. Gravely, he chose to fulfill his duty as a warden. The corruption could not be allowed to escape.


His arrows sundered the troops who tried to wrest the temple from him that day. However, when he returned to the village, he found that it had been reduced to a smoldering graveyard. Remorse at the sight of his slain family gave way to overwhelming regret, and then to seething hatred. He swore to slaughter every Noxian invader, but first he needed to become stronger. He turned to that which he had sacrificed everything to protect. The pit of corruption would consume him wholly, as a flame devours a wick, but its abominable power would burn within him until he was lost. This was a path from which there could be no return. With grim resolve, he condemned himself to the black flames, feeling malevolent energy bond to his skin...and with it, the promise of ruin. He left, seeking the blood of all Noxians involved with the invasion, a grisly task that eventually led him to the invasion's most infamous perpetrators.
</br>
</div>
</body>