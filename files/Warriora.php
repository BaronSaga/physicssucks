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
    height:1350px;
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
<h1><a href="heartharena.php">
<img src="green.png" alt="tiers" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;"/></a>

<a href="votearena.php">
 <img src="yellow.png" alt="voting" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
<a href="about.php">
  <img src="orange.png" alt="about" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
<a href="login.php">
  <img src="logout.png" alt="logout" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
</a>
</h1>
</div>

<div id="nav">
<b><i>Games:</i></br>
<a href = "League.php"> League Of Legends (Marksmen)</a></br>
<a href = "Hearthstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commentwarr";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Warrior.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <iframe width="100%" height="300px" src="comment7.php" name="iframe_a"></iframe>
</body>


</div>
<div id="section">
<h1><h1><img src = "images/warrN.png" height="100px" width="377px"/></h1>
</br>
<h3>Hero</h3>
<img src = "images/Garrosh_Hellscream.gif" height ="197.5px" width = "143px"/>
<img src = "images/Magni_Bronzebeard.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/ArmorUp.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Iron_Juggernaut.gif" height = "184px" width= "133.3px"/>
<img src = "images/Varian_Wrynn.gif" height = "184px" width= "133.3px"/>
<img src = "images/Grommash_Hellscream.gif" height = "184px" width= "133.3px"/>
<img src = "images/Malkorok.gif" height = "184px" width= "133.3px"/>

</br>

<h3>Bio</h3>
Garrosh Hellscream was the son of Grom Hellscream and former chieftain of the Warsong clan. With the reopening of the Dark Portal, Garrosh was invited into the Horde by Thrall himself, quickly advancing to the position of personal adviser of the Warchief. Garrosh led the Horde troops into Northrend and was given the position of acting Warchief in Thrall's absence.

Garrosh was well known for his fierce hatred of the Alliance and frequently expressed his desire for the Horde to go to war with its rival faction.

Garrosh is the main antagonist of Mists of Pandaria and the secondary antagonist of Warlords of Draenor.
<br/>
<br/>
The eldest of the three Bronzebeard brothers, Magni was destined to be the king under the mountain. Strong of arm and keen of mind, Magni loved his two brothers above all else in the world. From the time of his youth, Magni the prince was keenly aware of what would be expected of him in the future. This apparently intimidated him and he questioned if he could be the kind of leader Ironforge needed. He even privately wished that his father and brothers would outlive him, and thus their people would have a good king.[1] To look upon the tower of strength and effective leader that King Magni is today, one can scarcely imagine that he was ever a prince full of doubt.

He was one of the heroes during the Second War, often directly leading his people into battle.[2] Upon the liberation of Ironforge by the forces of the Alliance of Lordaeron he pledged his kingdom's support, his two brothers accompanying the Alliance host.
</div>
</body>