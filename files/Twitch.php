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
    height:3000px;
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
    
     <form name="addComment" action="Twitch.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
     <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentTwitch($u, $p);
	
}
?>
    <iframe width="100%" height="300px" src="commentTwitch.php" name="iframe_a"></iframe>
</body>

</div>
<div id="section">
<h1><img src = "images/twitchN.png" height ="68px" width = "207px"/> </h1>
<img src = "images/Twitch.jpg" height ="358.5px" width = "607.5px"/>
<h2>Skills</h2>
<h3><img src = "images/Twitch_Passive.png" height = "35px" width= "35px"/> - Passive - Deadly Venom</h3>
Twitch's basic attacks infect the target, dealing true damage each second.
 </br>

<h3><img src = "images/TwitchHideInShadows.png" height = "35px" width= "35px"/> - Q - Ambush </br></h3>
Cost: 40 Mana  </br>
Range: 20  </br> </br>
Twitch becomes invisible for a short duration and, while invisible, he gains Movement Speed. When leaving invisibility, Twitch gains Attack Speed for a short duration.
</br> 

<h3><img src = "images/TwitchVenomCask.png" height = "35px" width= "35px"/> - W - Venom Cask</br></h3>
Cost: 50 Mana  </br>
Range: 950 
 </br> </br>
Twitch hurls a cask of venom that explodes in an area, slowing targets and applying deadly venom to the target. 
 
 
 </br>

<h3><img src = "images/MissFortuneScattershot.png" height = "35px" width= "35px"/> - E -Make It Rain </br></h3>
Cost: 80 Mana  </br>
Range: 1000 </br></br>
Miss Fortune reveals an area with a flurry of bullets, dealing waves of damage to opponents and slowing them. 
 </br>

<h3><img src = "images/MissFortuneBulletTime.png" height = "35px" width= "35px"/> - R - Bullet Time </br></h3>
Cost: 100 Mana </br>
Range: 400 </br></br>
Miss Fortune channels a flurry of bullets into a cone in front of her, dealing large amounts of damage to enemies. Bullet Time can critically strike. 

 </br>

</br>
<h3>Lore</h3>
Miss Fortune, the Bounty Hunter
“The bigger the risk, the bigger the bounty.”

Beauty and danger: There are few who can match Miss Fortune in either. One of Bilgewater's most infamous bounty hunters, she built her legend upon a swathe of bullet-riddled corpses and captured ne’er-do-wells. The booming echoes of her twin pistols in the port city’s reeking wharfs and scavenger shanties are sure signs of another warrant from the Bounty Board being settled.

Like most who rise to notoriety in the twisting, salt-encrusted labyrinth of Bilgewater, Miss Fortune has no shortage of blood on her hands. Yet, it was not always this way, for she was once known as Sarah, the beloved daughter of a renowned gun-dame who lived peacefully at her isolated island workshop. Young Sarah helped her mother in the forge, filing wheel locks, calibrating trigger pulls, or casting custom pistol shot. Her mother’s skill in crafting firearms was legendary, and her bespoke handguns were to be found in the collections of many a wealthy noble. But ofttimes, they were desired by those with more meager means and darker hearts.

One who desired such a weapon was an up-and-coming reaver of Bilgewater called Gangplank. Cocksure and certain of his power, he demanded Sarah’s mother fashion a pair of pistols the likes of which no other man possessed. A reluctant deal was struck, and a year later to the day, Gangplank returned for his weapons. He had donned a red scarf face-mask and had no intention of paying for the guns – he was there to take them by force. 

The pistols Sarah’s mother had crafted were masterpieces, twin hand cannons of pinpoint lethality and exquisite beauty. Too fine for the likes of him, declared Sarah’s mother, seeing the brutish pirate that Gangplank had become. Enraged, Gangplank seized the pistols and gunned her down with her own creations before turning them on her husband and Sarah herself. Then, for spite’s sake, he set the workshop ablaze and smashed both pistols on the ground, declaring that if they were too good for the likes of him, then no one would have them.

Sarah awoke to agony, straw-colored hair stained red with her mother’s blood and bullets lodged on either side of her heart. She crawled from the burning ruins of her home with the broken remains of the two pistols clutched to her bleeding chest. Her body healed, but a part of her mind remained trapped in her mother’s burning workshop, and no amount of soap could wash the vivid red from Sarah’s hair – or at least, so the story is told. Waking nightmares and night terrors would forever torment her, but Sarah endured them with an all-consuming obsession with vengeance. She rebuilt her mother’s pistols and learned all she could of the red-masked reaver during his rise to power, preparing for the day when she would be ready to slay him.

Taking ship to Bilgewater, Sarah killed her first man within minutes of setting foot on the crooked timbers of the quayside, a drunken pirate with a gallon of Myron’s Dark in his gut and a bounty on his head. Sarah shot him in his stupor and dragged his corpse to the Bounty Board, before tearing off a dozen more warrants. 

Within a week, every one of them was settled, and those criminals who’d had the misfortune to be hunted by Sarah were either dead or in chains. She quickly earned a fearsome reputation in the taverns and gambling dens of Bilgewater, becoming Miss Fortune to inspire fear in those she hunted and to mask her true intent with flamboyant exploits. Gangplank would never see her coming; she would be just another bounty hunter among many in the crowded streets of Bilgewater. 

In the years that followed, tales of Miss Fortune spread far and wide, each more fanciful than the last. She captured the Syren from a captain who learned the hard way what it meant to slip a hand where it wasn’t wanted, drowned the master of the Silk-Knife Corsairs in a barrel of her own rum, and dragged the insane Doxy-Ripper from his lair in the belly of a half-dismembered leviathan in the slaughter docks.

Gangplank was still too powerful to confront openly, so Miss Fortune spent the years wisely, surrounding herself with a small but loyal cadre of allies and lovers she would eventually use to lay her demons to rest. But just killing Gangplank would never be enough for Miss Fortune. Only his abject humiliation and the burning to ash of all he cared for would satisfy the bloody-haired bounty hunter.

And that day has come at last.

Miss Fortune has risked everything to make her opening move against Gangplank. Plots within plots have seen the Dead Pool blown to flaming wreckage at the quayside and the self-professed King of Bilgewater overthrown. Best of all, everyone in Bilgewater saw him fall. 

Now, with Gangplank deposed, every reaver captain and ganglord in the port city is vying to take his position.

The battle for Bilgewater has begun.

Bilgewater’s White Wharf had earned its name thanks to the layer of bird waste covering it from end to end, which was only to be expected at a resting place for the dead. Folk here didn’t bury corpses; they returned them to the sea. A grave of the sunken dead hung suspended in the cold depths, marked by hundreds of bobbing grave-buoys. Some were merely name posts, while others were elaborate tomb markers carved to resemble rearing krakens or buxom sea wenches.

Miss Fortune sat on an empty crate of Rapture Rum at the end of the wharf, legs crossed and a noxious cheroot dangling from her bottom lip. In one hand, she held a length of breathing tube connected to a half-submerged coffin floating low in the water. In the other, she grasped a length of frayed rope running through a rusted pulley block and tied to the coffin lid. Both her pistols were holstered within easy reach.

Moonlight cast a weak glow through the mist rolling in from the sea, staining the water’s scummed surface tobacco yellow. Cawing carrion gulls lined every swaybacked roof on the quayside, which was always a good omen. They knew better than any the signs of fresh pickings.

“About time,” she whispered, as a shaven-headed man in a drake-scale frock coat emerged from the narrow, debris-choked alley. A pack of needle-toothed wharf-rats stalked him, hoping he was drunk and might pass out to become easy meat. The man’s name was Jakmunt Zyglos, one of the Painted Brothers. Any corsair worth his salt had tattoos, but every inch of Zyglos was inked with clawed serpents, lovers’ names, and a record of every boat he’d sunk, every man he’d murdered. His skin was as good a confession as any she’d known.

He marched purposefully along the wharf, but his eyes darting warily from side to side gave the lie to his confidence. His hand gripped a long cutlass with a shark-toothed edge that hung low on his hip. He too boasted a firearm, a stubby carbine with glassy pipes running the length of its barrel.

“Where is he?” demanded Zyglos. “You said you’d bring him.”

“That a Piltover hex-carbine?” she asked, ignoring his question.

“Answer me, damn you!”

“You first,” said Miss Fortune, letting some rope out through the pulley and allowing the coffin to sink a little more. “After all, I’m not sure how long this breathing tube is, and you wouldn’t want your brother to go without air, would you?”

Zyglos took a breath, and she saw the tension go out of him.

“Yes, damn you, it’s from Piltover,” he said, drawing the weapon and holding it out by the trigger guard.

“Pricy,” said Miss Fortune.

“I guess you’d know,” he sneered.

She let out even more rope. Bubbles of air escaped the now fully submerged coffin. Zyglos held up his hands, instantly contrite.

“Alright! Alright!” he pleaded. “It’s yours. Pull him up. Please.”

“You’ll come quietly?”

Zyglos gave a bark of fatalistic laughter.

“What choice do I have?” he asked. “You sank my ships and killed all my men. You’ve sent my kin to the poorhouse or the gaol, and for what? A stolen hex-gun? A bounty?”

“A little of both and then some?”

“So how much am I worth to you, bitch?”

“Coin? Five hundred silver serpents.”

“All this mayhem for a lousy five hundred serpents?”

“It’s not the money that’s got you killed. It’s the fact that you’re one of Gangplank’s sworn men,” said Miss Fortune. “That’s why I want you dead.”

“Dead? Wait, the warrant says alive!”

“True, but I’ve never been very good at following instructions,” said Miss Fortune, releasing the rope and the breathing tube. The coffin plunged into the darkness of the sunken dead, trailing a froth of frantic bubbles. Zyglos screamed his brother’s name and ran at her, drawing his serrated sword. She let him get within spitting distance before drawing her pistols and blasting him with both barrels, one through the eye, one in the heart.

Miss Fortune spat her cheroot into the sea and blew the smoke from each muzzle.

“Self defense,” she said with a smile, rehearsing her lie for the bounty pursers. “Crazy fool came at me with that fang-sword of his. I didn’t have a choice.”

Miss Fortune bent to retrieve the fallen hex-carbine. She turned the weapon over in her hands. Too light for her tastes, but artfully made and absurdly lethal. The ghost of a smile twitched the corner of her mouth as she thought back to the warmth of the old workshop, the smell of gun oil, and the touch of her mother’s hand on her shoulder. Miss Fortune sighed and shook off the memory before it turned sour. She threw the pistol out over the water, sending it down to the dead. The sea demanded its due, after all, and she’d not lied; the weapon was worth a small fortune.

She stood and strolled back into Bilgewater. She knew she ought to throw Zyglos’s corpse into the water too, but the wharf-rats and the carrion gulls had to eat, didn’t they?

And fresh meat was a rare delicacy on the White Wharf.

</br>
</div>
</body>