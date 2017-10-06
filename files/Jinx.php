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
    
     <form name="addComment" action="Jinx.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentJinx($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentJinx.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/jinxN.png" height ="68px" width = "207px"/></h1>
<img src = "images/Jinx.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/JinxP.jpg" height = "35px" width= "35px"/> - Passive -Get Excited!</h3>
(Innate) Whenever a champion, tower or inhibitor that Jinx has dealt damage to within the last 3 seconds is killed or destroyed, she gains 175% movement speed that decays over 6 seconds. Getting excited stacks, increasing Jinx's total attack speed by 15% per stack.
</br>

<h3><img src = "images/JinxQ1.jpg" height = "35px" width= "35px"/>
<img src = "images/JinxQ2.jpg" height = "35px" width= "35px"/> - Q - Switcheroo! - Pow-Pow, the minigun / Fishbones, the rocket launcher</br></h3>
Cooldown: 1 second </br>
Toggle Off) Jinx's basic attacks grant bonus attack speed for 2.5 seconds, stacking up to 3 times. The stacks decay one at a time when she stops attacking with her minigun.
Switching to her Rocket Launcher will not clear any active stacks, but they will not grant attack speed after her first attack.


</br> 

<h3><img src = "images/JinxW.jpg" height = "35px" width= "35px"/> - W - Zap!</br></h3>
Cooldown: 10 / 9 / 8 / 7 / 6 seconds </br>
Range: 1500</br> </br>
(Active) After a short delay, Jinx fires a shock blast that deals physical damage to the first enemy hit and slowing it for 2 seconds.
</br>

<h3><img src = "images/JinxE.jpg" height = "35px" width= "35px"/> - E - Flame Chompers! </br></h3>
Cost: 50 mana </br>
Range: 900 </br></br>
(Active) Jinx tosses out 3 chompers that, once armed, explode on contact with enemy champions dealing magic damage over 1.5 seconds to nearby enemies. The champion that sets off the chomper is also rooted the same duration. Chompers explode automatically after 5 seconds. A single champion can only set off a single chomper, but can be damaged by any number if they remain in range.
</br>

<h3><img src = "images/JinxR.jpg" height = "35px" width= "35px"/> - R -Super Mega Death Rocket! </br></h3>
Cost: 100 Mana </br>
Range: Global </br></br>
(Active) Active: Jinx fires a rocket that travels in a line, exploding on the first enemy champion hit. Enemies caught in the explosion take magic damage equal to a base amount (this amount increasing over the first second the rocket travels) plus a percentage of their missing health. The primary target of the explosion takes full damage, while nearby enemies take 80% damage.


 </br>

</br>
<h3>Lore</h3>
Jinx lives to wreak havoc without a thought for consequence, leaving a trail of mayhem and panic in her wake. A manic and impulsive criminal, she despises nothing more than boredom, and gleefully unleashes her own volatile brand of pandemonium to the one place she finds dullest: Piltover. With an arsenal of deadly toys, she unleashes the brightest explosions and loudest blasts - all the better to shock and surprise the hapless authorities. Always just out of the law's reach, Jinx's favorite game is to toy with Piltover's finest - especially Vi Vi.

Piltover had long been known as the City of Progress, a place where peace and order reigned. That serenity was challenged when a new kind of criminal arrived, the likes of whom had never been seen. This mysterious outlaw unleashed a series of warped and destructive capers that endangered the entire city, and left its people reeling from the worst crime spree in Piltover's history.

As the string of crimes without rhyme or reason hit the city, sightings of the lawbreaker emerged. Though the young woman's origins were a mystery, some saw traces of Piltover hextech in her firearms, while others described the street fashions of Zaun in her dress. Because her arrival always brought trouble with it, those who crossed her path soon gave her a name: Jinx.

Jinx's rampage escalated. Caitlyn Caitlyn - the sheriff of Piltover - responded by declaring a state of emergency and organizing a city-wide manhunt. In typical Jinx fashion, the criminal marked the Piltover treasury, the city's most secure building, with a direct challenge to its most abrasive officer. With a caricature of Vi's face splashed across the treasury's facade, and with a time and date of her supposed raid, Jinx was openly daring the enforcer to stop her from robbing it.

Determined to put the troublemaker behind bars, Vi watched and waited outside the treasury until Jinx's time had finally come. True to her scrawled promise, the smiling menace showed her face. Knowing this was her chance to capture the outlaw, Vi gave chase into the building's interior. She smashed through wall after wall to chase down Jinx, who giggled as she lit up the evacuated treasury with fiery explosions. Vi finally cornered the criminal inside the vault, but Jinx wasn't done just yet. With a maniacal laugh, she fired a barrage of rockets, bringing the entire building down upon them both.

Jinx graffity of Vi
When Vi finally crawled out of the ruins, the battered enforcer found no trace of Jinx. Adding insult to injury, not a single ounce of gold had been taken from the ruined vault. Instead, the criminal left a parting message to her favorite officer of the law - a challenge only now visible through the gaping opening in Piltover's skyline. The lights of the city spelled out a simple taunt: you'll never catch me. As Vi read the message, she heard the distant laughter of her new nemesis, and the city plunged into utter darkness for the very first time.








</div>
</body>