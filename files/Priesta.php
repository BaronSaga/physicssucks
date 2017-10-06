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

</h1></div>

<div id="nav">
<b><i>Games:</i></br>
<a href = "League.php"> League Of Legends (Marksmen)</a></br>
<a href = "Hearthstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commentpri";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Priest.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <iframe width="100%" height="300px" src="comment8.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><h1><img src = "images/priN.png" height="100px" width="377px"/></h1>
</br>
<h3>Hero</h3>
<img src = "images/Anduin_Wrynn.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/LesserHeal.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Confessor_Paletress.gif" height = "184px" width= "133.3px"/>
<img src = "images/Prophet_Velen.gif" height = "184px" width= "133.3px"/>
<img src = "images/Vol'jin.gif" height = "184px" width= "133.3px"/>
<img src = "images/Hallazeal.gif" height = "184px" width= "133.3px"/>
</br>

<h3>Bio</h3>
The son of King Varian Wrynn, ten-year-old Anduin was given the crown in order to maintain order when Varian disappeared en route to a diplomatic conference at Theramore Isle; however, real power resided in the hands of Highlord Bolvar Fordragon, the Regent of Stormwind, and Lady Katrana Prestor, the Royal Advisor. King Varian's disappearance was a closely-kept secret, and his sudden "return" (later proven to be an impostor) was treated with skepticism by both Anduin himself and other leaders, such as King Magni of Ironforge. He was also captured by Onyxia because he was seen as a threat to her plan to overthrow Varian. He was freed by Valeera Sanguinar and Broll Bearmantle with an army of Stormwind Knights including his father, Varian Wrynn. They slew Onyxia, and Anduin's father regained his former self. Valeera Sanguinar is also known to have taught Anduin his excellent dagger skills. She is also known as a bodyguard to him.
</div>
</body>