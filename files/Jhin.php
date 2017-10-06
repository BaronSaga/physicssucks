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
    
      <form name="addComment" action="Jhin.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentJhin($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentJhin.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/jhinN.png"height ="68px" width = "207px"/></h1>
<img src = "images/Jhin.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/JhinP.png" height = "35px" width= "35px"/> - Passive -Whisper</h3>
DEATH IN 4 ACTS: Jhin's basic attacks utilize ammunition and his attack speed cannot be improved except through growth. Jhin can attack 4 times before having to reload for 2.5 seconds, and automatically does so after 10 seconds. The reload timer is reset back to 10 seconds upon attacking or using an ability.
The final shot is a guaranteed critical strike that also deals (15 / 20 / 25% of of target's missing Health) bonus physical damage.
EVERY MOMENT MATTERS: Jhin's critical strikes deal 25% reduced damage, but grant 10%(+ 4% per 10% bonus attack speed) movement speed for 2 seconds.
Additionally, his attack damage is increased by 2% - 40% (based on level) (+ 4% per 10% critical chance) (+ 2.5% per 10% bonus attack speed).
</br>

<h3><img src = "images/JhinQ.png" height = "35px" width= "35px"/> - Q - Dancing Grenade</br></h3>
Range:550 </br>
(Active) Jhin launches a canister at the targeted enemy unit, dealing physical damage. Dancing Grenade can bounce up to three additional units.
Each unit killed causes the subsequent bounce to deal 35% increased damage.

</br> 

<h3><img src = "images/JhinW.png" height = "35px" width= "35px"/> - W - Deadly Flourish</br></h3>
Cooldown: 14 seconds </br>
Range: 2500</br> </br>
(Passive) - Enemy champions that have been struck by Jhin's basic attacks or any allied damage, or are inside a Lotus Trap, are spotted for 4 seconds.
(Active) - After a delay, Jhin fires a laser in the target direction, dealing physical damage to the first champion that it hits, and 65% damage to non-champions along the way.

</br>

<h3><img src = "images/JhinE.png" height = "35px" width= "35px"/> - E - Captive Audience </br></h3>
Cooldown: 2 seconds </br>
Range: 750 </br></br>
(Passive) - BEAUTY IN DEATH: Whenever Jhin scores a takedown on an enemy champion, he summons a blooming Lotus Trap around their corpse.
(Active) - Jhin places a Lotus Trap on the target location that arms and stealths after a brief delay, and lasts for 2 minutes. The Lotus Trap reveals all units in an area for 4 seconds and blooms if an enemy unit walks over it.
Captive Audience uses stock and Jhin can store up to 2 charges at once. Beauty in Death does not consume charges.
Blooming Lotus Traps slow all enemy units inside for 2 seconds by 35%, after which they explode, dealing damage to nearby enemy units. Non-champions and champions recently damaged by one take only 65% damage.
</br>

<h3><img src = "images/JhinR.png" height = "35px" width= "35px"/> - R -Curtain Call </br></h3>
Cost: 100 Mana </br>
Range: 3000 </br></br>
First Cast: Jhin channels for 10 seconds and fully assembles his weapon before taking aim in the target direction, revealing all Spotted units in a huge area and gaining the ability to reactivate Curtain Call up to four times. If cancelled early, Curtain Call's cooldown is reduced by 10% per unused shot.
Second Cast: Jhin fires a round in the target direction that stops on the first enemy champion hit, dealing physical damage to all units hit and slowing them by 80% for 0.75 seconds.
Curtain Call's damage is increased by 2% for every 1% of the target's missing health, and the final shot critically strikes(without   Every Moment Matters' crit. penalty).


 </br>

</br>
<h3>Lore</h3>
Jhin is a meticulous criminal psychopath who believes murder is art. Once an Ionian prisoner, but freed by shadowy elements within Ionia's ruling council, the serial killer now works as their cabal's assassin. Using his gun as his paintbrush, Jhin creates works of artistic brutality, horrifying victims and onlookers. He gains a cruel pleasure from putting on his gruesome theater, making him the ideal choice to send the most powerful of messages: terror.

For years, Ionia's southern mountains were plagued by the infamous "Golden Demon". Throughout the province of Zhyun, a monster slaughtered scores of travelers and sometimes whole farmsteads, leaving behind twisted displays of corpses. Armed militias searched the forests, towns hired demon hunters, Wuju masters patrolled the roads - but nothing slowed the beast's grisly work.

In desperation, the Council of Zhyun sent an envoy to beg Great Master Kusho for help. Upon hearing of the region's plight, Kusho feigned an excuse for why he couldn't help. But a week later the master, his son Shen Shen, and star apprentice Zed Zed disguised themselves as merchants and moved to the province. In secret, they visited the countless families emotionally shattered by the killings, dissected the horrific crime scenes, and looked for possible connections or patterns to the murders.

Their investigation took four long years, and left the three men changed. The famous red mane of Kusho turned white; Shen, known for his wit and humor, became somber; and Zed, the brightest star of Kusho's temple, began to struggle with his studies. Upon finally finding a pattern to the killings, the Great Master is quoted as saying: "Good and evil are not truths. They are born from men and each sees the shades differently."

Depicted in a variety of plays and epic poems, the capture of the "Golden Demon" would be the seventh and final great feat in the illustrious career of Lord Kusho. On the eve of the Blossom Festival in Jyom Pass, Kusho disguised himself as a renowned calligrapher to blend in with the other guest artists. Then he waited. Everyone had assumed only an evil spirit could commit these horrifying crimes, but Kusho had realized the killer was an ordinary man. The famed "Golden Demon" was actually a mere stagehand in Zhyun's traveling theaters and opera houses working under the name Jhin Khada Jhin.







</div>
</body>