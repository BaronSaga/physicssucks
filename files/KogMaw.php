0<?php
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
$query = "SELECT NAME, COMMENT FROM commentkogmaw";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
       <form name="addComment" action="KogMaw.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentKogmaw($u, $p);
	
}
?>

     <iframe width="100%" height="300px" src="commentKogmaw.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/kogmawN.png" height ="68px" width = "207px"/></h1>
<img src = "images/KogMaw.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/KogMaw_IcathianSurprise.png" height = "35px" width= "35px"/> - Passive - Icathian Surprise</h3>
Upon dying, Kog'Maw starts a chain reaction in his body which causes him to move faster and detonate after 4 seconds; dealing 100 + (25 x lvl) true damage to surrounding enemies. </br>

<h3><img src = "images/KogMawQ.png" height = "35px" width= "35px"/> - Q - Caustic Spittle </br></h3>
Cost: 40 Mana </br>
Range: 1175 </br> </br>
Kog'Maw launches a corrosive projectile which deals magic damage and corrodes the target's armor and magic resist for a short time.</br> 

<h3><img src = "images/KogMawBioArcaneBarrage.png" height = "35px" width= "35px"/> - W - Bio-Arcane Barrage </br></h3>
Cost: 40 Mana </br>
Range: 530 </br> </br>
Kog'Maw's attacks gain range and speed, and they deal a percent of the target's maximum health as magic damage. </br>

<h3><img src = "images/KogMawVoidOoze.png" height = "35px" width= "35px"/> - E - Void Ooze </br></h3>
Cost: 80/90/100/110/120 Mana  </br>
Range: 1200 </br></br>
Kog'Maw launches a peculiar ooze which damages all enemies it passes through and leaves a trail which slows enemies who stand on it. </br>

<h3><img src = "images/KogMawLivingArtillery.png" height = "35px" width= "35px"/> - R - Living Artillery </br></h3>
Cost: 50 Mana </br>
Range: 1200/1500/1800 </br></br>
Kog'Maw fires an artillery shell at a great distance dealing magic damage (increased significantly on low health enemies) and revealing non-stealthed targets. Additionally, multiple Living Artilleries in a short period of time cause them to cost additional Mana. </br>

</br>
<h3>Lore</h3>
"If that's just hungry, I don't want to see angry."
</br>
</br>
When the prophet Malzahar was reborn in Icathia, he was led there by an ominous voice which thereafter anchored itself to his psyche. From within, this voice bestowed upon him terrible purpose, and though Malzahar was no longer tormented by its call, the voice did not cease its unrelenting summons. This baleful beacon's gentle flicker - now fastened to Runeterra - drew forth a putrid beast that ambled across a threshold it did not understand, widening a fissure between the spaces which were never meant to meet. There amongst the haunting ruins of Icathia, Kog'Maw manifested in Valoran with unsettling curiosity. The spark which led him to Runeterra teased him still, urging him gently towards Malzahar. It also encouraged him to familiarize himself with his new environment, to the stark horror of everything he encountered on his journey.
</br>
</br>
The enchanting colors and aromas of Runeterra intoxicated Kog'Maw, and he explored the fruits of the strange world the only way he knew how: by devouring them. At first he sampled only the wild flora and fauna he happened across. As he traversed the parched Tempest Flats, however, he came upon a tribe of nomads. Seemingly unhampered by conventional rules of physics, Kog'Maw consumed every nomad and any obstacles they put in his way, amounting to many times his own mass and volume. The most composed of his victims may have had time to wonder if this was due to the caustic enzymes which stung the ground as they dripped from his gaping mouth, although such musings were abruptly concluded. Even this feeding frenzy did nothing to satiate Kog'Maw's appetite. His swathe of destruction continues still as he is inexorably drawn towards Malzahar. What happens when he finds him is anyone's guess.

</div>
</body>