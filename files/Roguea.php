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
$query = "SELECT NAME, COMMENT FROM commentrog";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="Rogue.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <iframe width="100%" height="300px" src="comment9.php" name="iframe_a"></iframe>
</body>
</div>
<div id="section">
<h1><h1><img src = "images/rogN.png" height="100px" width="377px"/></h1>
</br>
<h3>Hero</h3>
<img src = "images/Valeera_Sanguinar.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/DaggerMastery.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Edwin_VanCleef.gif" height = "184px" width= "133.3px"/>
<img src = "images/Trade_Prince_Gallywix.gif" height = "184px" width= "133.3px"/>
<img src = "images/Anub'arak.gif" height = "184px" width= "133.3px"/>
<img src = "images/Xaril, Poisoned Mind.gif" height = "184px" width= "133.3px"/>
</br>

<h3>Bio</h3>
When Valeera was young, her family was killed by bandits. She survived both the bandits and the Scourge, seeking out a living by stealing what she needed; however, when trying to steal a shaman's talisman, she was caught and jailed. Showing her fighting prowess by injuring several of the guards in the process, it's possible that is how she attracted the attention of the Arena promoter. The day before she was to implement her escape plan, Valeera was sold to Rehgar Earthfury so she could join Bloodeye Redfist and Broll Bearmantle in team combat in the Crimson Ring. Soon after, Bloodeye was killed and Broll told Valeera the stories of both Rehgar and Bloodeye.

After Bloodeye's funeral pyre, Valeera and Broll were being transported in a caged wagon to Orgrimmar to be trained as gladiators. On their way, they were joined by a human called Varian who had washed up on the seashore with no memory. When they reached Orgrimmar, they were caged once again; with the human who did nothing but brood while the two elves argued.

That evening in the cages, Broll offered the human a meditation remedy, and the man had a brief flash of memory. The meditation was interrupted by Valeera, which nearly sparked her and Broll coming to blows. Eventually the three traveled to Dire Maul in Feralas where the gladiatorial contests took place. After many bloody battles, they emerged the victors of the Crimson Ring tournament. Impressed by Varian's skill at arms, the crowd gave him the orcish moniker Lo'Gosh; which means "Ghost Wolf".

After winning the Dire Maul gladiatorial contests, Rehgar sold Valeera to Helka Grimtotem, a gladiator mistress, for 2000 gold. Helka wanted Valeera to lead an all-female gladiator team consisting of an orc and a troll. However soon after they set out for an exhibition game on the Merchant Coast, Valeera escaped with the wyvern Bristlefur. Valeera then went searching for Broll Bearmantle and Lo'Gosh who have escaped from Rehgar Earthfury. As she followed them she discovered that an assassin was also trailing them. She eventually caught up with the assassin and, after catching it off guard, managed to defeat the assassin (with the help of some local beasts). Worn out from the fight, she was rescued by Aegwynn who saw great things in her.

Aegwynn reunited her with Broll and Lo'Gosh who is revealed to be the lost king of Stormwind, Varian Wrynn. All three set out to leave for Stormwind City to return Varian to his rightful throne. During the trip across the Great Sea, Valeera helped Varian and Broll defend the ship against attacking naga, but during the fight she absorbed the arcane energies of a Naga sea witch's trident. It was this act which ignited her addiction to magic.

WoW Volume 2 Paperback Sample
Valeera afflicted by the Mark of Kathra'Natir.
After she arrived at Menethil Harbor, she along with Varian, Broll, and a dwarf called Thargas Anvilmar, started their journey towards Ironforge. On their way they were stopped by Vendellin Soulfire, a blood elf warlock sent to assassinate Varian. He placed the mark of Kathra'Natir upon Valeera and by doing so caused the demon Kathra'Natir to possess her.

Because she was inflicted with the fel energies of a demon, her addiction was exacerbated. During Valeera's lapses of self-control, the demon would occasionally gain influence and take control of her body. She was left behind in Ironforge to adjust from her withdrawal from magic while the rest of her companions embarked on a mission to rescue Marshal Windsor. Secluded in her room, the demon tried to take control of her body by feeding her feelings of abandonment using visions of her deceased parents to verbally abuse her. But she regained control of her senses when a vision of Aegwynn told her she was not alone and that she had people like Broll and Varian who loved her. She later rendezvoused with Varian and Broll after their mission, informing them that she's better and in control of herself again.

When the group got to Stormwind City, she helped reveal Onyxia's treachery and traveled with King Varian back across the sea to finally kill Onyxia. After the death of Onyxia, Varian offered both Broll and Valeera a permanent place in Stormwind, in which they could act as Varian's bodyguards and advisers. Valeera and Anduin convinced Varian that he should create peace between the Horde and the Alliance, but when the peace summit was about to happen, Theramore was attacked by the Twilight's Hammer clan. Although the Twilight Hammer's attack was repelled; the peace summit was ruined and both the Horde and Alliance were left in distrust of one another.

When the Scourge attacked Stormwind, Valeera remained in Theramore and made a deal with Garona to rescue her son Med'an in exchange for her cooperation in revealing the identities of her masters. She later partnered with Meryl Winterstorm and traveled with him to Ahn'Qiraj to save Med'an. They found Med'an, hanging on the dead body of the old god C'thun and rescued him. But before they could get away from the ruins of Ahn'Qiraj, they were intercepted by Cho'gall who felled Meryl with one strike. Valeera absorbed some magic from Meryl and Med'an in order to grow strong enough to fend off Cho'gall, giving Med'an who just regained consciousness enough time to heal Meryl. Cho'gall was still too powerful to defeat and becoming desperate to stay alive, Valeera offered herself willingly to the demon inside her in order to use the demon's power to fend off Cho'gall. When Meryl regained consciousness, he teleported them all away from Cho'gall. When they reached a secure location, Valeera, who was possessed by Kathra'Natir, lusted over Med'an's power and tried to possess him, but Med'an was able to reject Kathra'Natir's advances. Meryl, along with the Council of Tirisfal, had banished the demon Kathra'Natir thousands of years ago. In order to lure the demon away from Valeera's body, Meryl challenged the demon to possess his powerful magical body instead since he was unable to possess Med'an. As the demon tried to possess him, Meryl proved himself the stronger of the two wills and repressed the demon within his body. Meryl then asked Med'an and Valeera to never tell anyone about what happened between him and the demon.
</div>
</body>