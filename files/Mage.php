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
    height:1610px;
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
</h1>
</div>

<div id="nav">
<b><i>Games:</i></br>
<a href = "league.php"> League Of Legends (Marksmen)</a></br>
<a href = "Hearthstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commentmag";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Mage.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentmag($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="comment4.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/magN.png" height ="100px" width = "377px"/></h1>
</br>
<h3>Heroes</h3>
<img src = "images/Jaina_Proudmoore.gif" height ="197.5px" width = "143px"/>
<img src = "images/Medivh.gif" height ="197.5px" width = "143px"/>
<img src = "images/Khadgar.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/Fireblast.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Archmage_Antonidas.gif" height = "184px" width= "133.3px"/>
<img src = "images/Flame_Leviathan.gif" height = "184px" width= "133.3px"/>
<img src = "images/Rhonin.gif" height = "184px" width= "133.3px"/>
<img src = "images/Anomalus.gif" height = "184px" width= "133.3px"/>
</br>
<h3>Notable Decks:</h3>
<a href="https://tempostorm.com/hearthstone/decks/tempo-mage-standard-meta-snapshot-may-29-2016">Tempo</a>
</br>
<a href="https://tempostorm.com/hearthstone/decks/freeze-mage-standard-meta-snapshot-may-29-2016">Freeze</a>
</br>
<h3>Bio</h3>
Jaina Proudmoore is the founder and former Lady of Theramore Isle (as well as its only leader during its brief existence), the Alliance's major port in southern Kalimdor. After the destruction of Theramore, she took leadership of the Kirin Tor. She is the daughter of Grand Admiral Daelin Proudmoore, sister of Tandred Proudmoore and Derek Proudmoore, and the alleged half-sister of Finnall Goldensword. She is also the most powerful human sorceress on Azeroth.

Jaina was one of the most talented and trusted sorceresses of the Kirin Tor. She was dispatched by Antonidas to discover what was happening in the northlands of Lordaeron. She was escorted by her childhood friend and one-time romantic interest, Prince Arthas Menethil, to uncover if the plague had magical origins. Jaina saw the fall of Lordaeron firsthand and - guided by a mysterious prophet - rallied what survivors she could and fled across the sea to Kalimdor.

Jaina swore to defeat the Burning Legion and its sinister agents any way she could. Joining forces with the night elves and even the orcish Horde, Jaina helped defeat the demon Archimonde and banish the Legion. She then gathered the human survivors in Kalimdor and founded the port city of Theramore. She rules here over the tattered remnants of the Alliance of Lordaeron and hopes to reunite the distant human kingdoms once more. In the aftermath of Theramore's utter destruction, Jaina soon becomes Grand Magus of the Kirin Tor and now rules Dalaran.
</br>
</br>
Magus or Magna Medivh was the last Guardian of Tirisfal, an ancient line of protectors bestowed with great powers to do battle with the agents of the Burning Legion. However, he was corrupted even before birth and possessed by the spirit of the demonlord Sargeras who used Medivh in his plan to conquer Azeroth. Medivh contacted the orcish warlock, Gul'dan, and together they opened the Dark Portal, which allowed the Burning Legion to begin its destruction of Azeroth. He was slain shortly after by a party led by one of his friends, Lothar.

Shortly before the beginning of the Third War, Medivh returned as a mysterious prophet, manipulating events in order to arrange the formation of a last-ditch alliance between the mortal races on Kalimdor, guiding them to victory at the Battle of Mount Hyjal. The prophet's name means "keeper of secrets" in Thalassian. He possessed Atiesh, Greatstaff of the Guardian.
</br>
</br>
Khadgar is one of the most powerful wizards to have ever lived. He was the apprentice for the Last Guardian, Medivh, and went on to become one of the greatest heroes of the Alliance during the Second War and as a commander of the Alliance Expedition to Draenor.

His name means "trust" in Dwarven. This gave him an odd dichotomy with Medivh, whose name means "keeper of secrets" in Thalassian.
</div>

</body>