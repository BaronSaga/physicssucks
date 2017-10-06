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
    height:1290px;
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
$query = "SELECT NAME, COMMENT FROM commentwar";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Warlock.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <iframe width="100%" height="300px" src="comment5.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><h1><img src = "images/warN.png" height="100px" width="377px"/></h1>
</br>
<h3>Hero</h3>
<img src = "images/Gul'dan.gif" height ="197.5px" width = "143px"/>
<img src = "images/Lord_Jaraxxus.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/LifeTap.png" height = "232.5px" width= "153.5px"/>
<img src = "images/Inferno.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Lord_Jaraxxus2.gif" height = "184px" width= "133.3px"/>
<img src = "images/Mal'Ganis.gif" height = "184px" width= "133.3px"/>
<img src = "images/Wilfred_Fizzlebang.gif" height = "184px" width= "133.3px"/>
<img src = "images/Cho'Gall.gif" height = "184px" width= "133.3px"/>
</br>

<h3>Bio</h3>
Gul'dan of the Stormreaver Clan was a former orcish shaman of the Shadowmoon Clan from Draenor, who became the first orcish warlock as well as the founder of the Orcish Horde.

Abandoning the ways of shamanism and betraying both his people and his mentor to the demon-lord Kil'jaeden for personal gain and power, Gul'dan was directly responsible for the orcs' fall to demonic enslavement as well as for the Horde's invasion of Azeroth.

Tutored by the lord of the Burning Legion, he became the founder and master of the Shadow Council as well as the creator of the necromantic terrors known as Death-Knights. Gul'dan is considered by many to have been the most cunning and powerful mortal Warlock to ever have existed. He often referred to himself as "Darkness Incarnate" and "The Destroyer of Dreams".

He disbanded the clan of Raiders in the First War. Thrall, son of Durotan, trained grunts to ride to battle on wolves, however, and a few more Raiders came into the Horde. He is the secondary antagonist of Warlords of Draenor and the leader of the Iron Horde, having managed to usurp the position from Grom.
</div>

</body>