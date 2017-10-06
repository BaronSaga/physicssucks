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
    height:1200px;
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
$query = "SELECT NAME, COMMENT FROM commentsha";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Shaman.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <iframe width="100%" height="300px" src="comment6.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><h1><img src = "images/shaN.png" height="100px" width="377px"/></h1>
</br>
<h3>Hero</h3>
<img src = "images/Thrall.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/TotemicCall.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Neptulon.gif" height = "184px" width= "133.3px"/>
<img src = "images/Al'Akir_the_Windlord.gif" height = "184px" width= "133.3px"/>
<img src = "images/The_Mistcaller.gif" height = "184px" width= "133.3px"/>
<img src = "images/Herald Volazj.gif" height = "184px" width= "133.3px"/>
</br>

<h3>Bio</h3>
Thrall (birthname Go'el), son of Durotan (born 2 years ADP), was the Warchief of the restored orcish Horde and ruler of the red land of Durotar in Kalimdor. Before the Cataclysm, he was Warchief of all the Horde, but temporarily gave leadership to Garrosh Hellscream in order to lead the Earthen Ring's effort with Farseer Nobundo against the Twilight's Hammer cult and elemental imbalance afflicting Azeroth.</div>

</body>