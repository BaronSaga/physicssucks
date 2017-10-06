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
    height:1300px;
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
<h1><a href="hearthstone.php">
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
<a href = "league.php"> League Of Legends (Marksmen)</a></br>
<a href = "Hearthstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commentpal";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Paladin.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
   <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentpal($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="comment2.php" name="iframe_a"></iframe>
</body>
</div>
<div id="section">
<h1><img src = "images/palN.png" height ="100px" width = "377px"/></h1>
</br>
<h3>Hero</h3>
<img src = "images/Uther_Lightbringer.gif" height ="197.5px" width = "143px"/>
<img src = "images/Lady_Liadrin.gif" height ="197.5px" width = "143px"/>

</br>
<h3>Hero Power</h3>
<img src = "images/Reinforce.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Tirion_Fordring.gif" height = "184px" width= "133.3px"/>
<img src = "images/Bolvar_Fordragon.gif" height = "184px" width= "133.3px"/>
<img src = "images/Eadric_The_Pure.gif" height = "184px" width= "133.3px"/>
<img src = "images/Ragnaros, Lightlord.gif" height = "184px" width= "133.3px"/>
</br>
<h3>Notable Decks:</h3>
<a href = "https://tempostorm.com/hearthstone/decks/nzoth-paladin-standard-meta-snapshot-may-29-2016">N'Zoth</a>
</br>
<a href = "https://tempostorm.com/hearthstone/decks/aggro-paladin-standard-meta-snapshot-may-29-2016">Aggro</a>
</br>
<h3>Bio</h3>
Lord Uther the Lightbringer, or Sir Uther Lightbringer, was the first paladin of the Knights of the Silver Hand who led his Order in battle against the Horde during the Second war.

During the Third War, Uther was betrayed and murdered by his beloved pupil, Prince Arthas, while defending the urn carrying the ashes of Arthas' father, King Terenas.
<br/>
<br/>
Lady Liadrin is the leader of the Blood Knights and is currently located in Shattrath City. The Blood Knights are an order of former priests and warriors who use the Light magics from the enslaved naaru M'uru. Liadrin herself, a former elven priestess, became disillusioned with the Light following the Fall of Quel'Thalas. She had long forsaken her Light-given powers when M'uru was transported to Silvermoon following the capture of Tempest Keep. Magister Astalor Bloodsworn proposed using the naaru's powers to bestow certain blood elves with the powers of paladins. Liadrin was the first to volunteer to make use of these powers, and thus she became the first and leader of the Blood Knights.


</div>

</body>