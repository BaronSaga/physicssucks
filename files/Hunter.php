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
$query = "SELECT NAME, COMMENT FROM commenthun";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Hunter.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommenthun($u, $p);
	
}
?>

    <iframe width="100%" height="300px" src="comment10.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/hunN.png" height ="100px" width = "377px"/></h1>
</br>
<h3>Heroes</h3>
<img src = "images/Rexxar.gif" height ="197.5px" width = "143px"/>
<img src = "images/Alleria_Windrunner.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/SteadyShot.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Dreadscale.gif" height = "184px" width= "133.3px"/>
<img src = "images/Acidmaw.gif" height = "184px" width= "133.3px"/>
<img src = "images/King_Krush.gif" height = "184px" width= "133.3px"/>
<img src = "images/gahz'rilla.gif" height = "184px" width= "133.3px"/>
<img src = "images/Princess Huhuran.gif" height = "184px" width= "133.3px"/>
</br>
<h3>Notable Decks:</h3>
<a href="https://tempostorm.com/hearthstone/decks/midrange-hunter-standard-meta-snapshot-may-29-2016">Midrange</a>
</br>
<h3>Bio</h3>
Rexxar, Champion of the Horde, is a half-ogre, half-orc beastmaster of the Mok'Nathal clan, and may be one of the last born half-ogres of the clan. He saved the city of Orgrimmar from the hatred of an enemy of the Horde. He was instrumental in assisting the Horde after the fall of the Burning Legion. Due to his mixed lineage, he is a towering and massively muscled warrior, and he wields his two huge axes with tremendous skill and ferocity. Rexxar is always seen with his loyal bear companion Misha.

Prior to World of Warcraft: The Burning Crusade, the warrior wandered a path from the Charred Vale in Stonetalon Mountains along the main road through Desolace and continued to the Twin Colossals in northern Feralas. Currently, he can be found in Thunderlord Stronghold in the Blade's Edge Mountains of Outland, protecting the settlement against ogres and gronn while trying to find more of his people.
<br/>
<br/>
Alleria Windrunner is the eldest of the Windrunner sisters, all of whom have served Quel'Thalas and the Alliance with distinction. She also had a younger brother. Alleria always wore a necklace given to her by her parents, an exquisite piece containing an emerald, a ruby, and a sapphire.

When the Horde invaded Lordaeron, King Terenas Menethil II called upon the ancient debt the Sunstriders owed to Anduin Lothar. The ruling council of Quel'Thalas, did not see the Horde as a true threat to their civilization so they decided to not send troops to the Alliance of Lordaeron. Alleria was one of the few in Quel'Thalas who believed that the Horde might pose a threat to the elves, and consequently chose to lead her rangers to Southshore to join the Alliance of Lordaeron, despite not being ordered to do so.

Alleria worked closely with Turalyon and Khadgar in the campaign to expel the orcs from Lordaeron. Upon learning that the Horde was marching towards Quel'thalas, Alleria led the Alliance army to the defense of Silvermoon, briefly reuniting her with her sister Sylvanas and comrade Lor'Themar Theron. Though they were successful in repelling the Horde invasion, it came at a terrible cost: eighteen of her kin, including her younger brother, Lirath, were killed. Devastated, Alleria sought comfort in the arms of Turalyon, but ultimately, she chose to dedicate herself to revenge.

To the horror of her friends, Alleria came to see the orcs as little more than vermin to be exterminated. Alleria hunted down the Bleeding Hollow Clan whom had so far escaped capture. When the orcs rallied behind Ner'zhul and the death knights, Alleria agreed to lead her rangers beyond the Dark Portal into Draenor to exact vengeance for Quel'Thalas and stop the Horde once and for all. Before she left, she had her necklace melted down into three pieces. She kept the emerald for herself and sent the ruby to Vereesa and the sapphire to Sylvanas, using Verana, her lieutenant, as the emissary. On Draenor, Alleria realized that there was more to the Alliance Expedition's struggle than her quest for vengeance. The final event that caused her to let go her hate and mourn for her loved ones was when Turaylon ordered her to stay back. Alleria found that she could not let go of the young human to his death and rekindled her relationship with Turalyon, much to the relief of their friends.

Following the fall of Hellfire Citadel, Alleria sent most of her forces with Danath Trollbane, Thalressar and Kurdran Wildhammer to pursue Ner'zhul, but herself accompanied Khadgar and Turalyon to retrieve the Skull of Gul'dan from Deathwing. She later aided in defending Khadgar when he finally closed the last Dark Portal to Azeroth, after which Draenor itself was sundered in a fiery cataclysm, sacrificing her way home. Alleria, along with her surviving allies, leapt into the Twisting Nether to avoid dying with Draenor.

After the damage that changed Draenor into Outland had been done, Alleria, Turalyon, Khadgar and the rest all returned to the orcs' homeworld. They set out to return to Honor Hold, which was still standing even after the chaos that had occurred on Draenor. However, although Khadgar, Danath Trollbane, and a few other heroes from this time are present in Outland, and players may interact with them, neither Alleria nor Turaylon are anywhere to be found, leaving their current whereabouts a mystery.
</div>
</body>