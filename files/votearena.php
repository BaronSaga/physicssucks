<?php
session_start();

if(!isset($_SESSION["validuser"]))
{
	echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=index.php\">";
	exit();
}

require("dbConnect.php");
require("functions.php");

if(isset($_POST["dropOne"]) && ($_POST["dropTwo"]) && ($_POST["dropThree"]) && ($_POST["dropFour"]) && ($_POST["dropFive"]) && ($_POST["dropSix"]) && ($_POST["dropSeven"]) && ($_POST["dropEight"]) && ($_POST["dropNine"]))
{
	$PALA = 0;
	$DRUI = 0;
	$MAGE = 0;
	$WARL = 0;
	$SHAM = 0;
	$WARR = 0;
	$PRIE = 0;
	$ROGU = 0;
	$HUNT = 0;
	

	$one = $_POST["dropOne"];
		if ($one == "pala")
		{$PALA = 1;}
		if ($one == "drui")
		{$DRUI = 1;}
		if ($one == "mage")
		{$MAGE = 1;}
		if ($one == "warl")
		{$WARL = 1;}
		if ($one == "sham")
		{$SHAM = 1;}
		if ($one == "warr")
		{$WARR = 1;}
		if ($one == "prie")
		{$PRIE = 1;}
		if ($one == "rogu")
		{$ROGU = 1;}
		if ($one == "hunt")
		{$HUNT = 1;}
		
		
	
	$two = $_POST["dropTwo"];
		if ($two == "pala")
		{$PALA = 2;}
		if ($two == "drui")
		{$DRUI = 2;}
		if ($two == "mage")
		{$MAGE = 2;}
		if ($two == "warl")
		{$WARL = 2;}
		if ($two == "sham")
		{$SHAM = 2;}
		if ($two == "warr")
		{$WARR = 2;}
		if ($two == "prie")
		{$PRIE = 2;}
		if ($two == "rogu")
		{$ROGU = 2;}
		if ($two == "hunt")
		{$HUNT = 2;}
		
		$three = $_POST["dropThree"];
		if ($three == "pala")
		{$PALA = 3;}
		if ($three =="drui")
		{$DRUI = 3;}
		if ($three == "mage")
		{$MAGE = 3;}
		if ($three == "warl")
		{$WARL = 3;}
		if ($three == "sham")
		{$SHAM = 3;}
		if ($three == "warr")
		{$WARR = 3;}
		if ($three == "prie")
		{$PRIE = 3;}
		if ($three == "rogu")
		{$ROGU = 3;}
		if ($three == "hunt")
		{$HUNT = 3;}
		
		$four = $_POST["dropFour"];
		if ($four == "pala")
		$PALA = 4;
		if ($four == "drui")
		$DRUI = 4;
		if ($four == "mage")
		$MAGE = 4;
		if ($four == "warl")
		$WARL = 4;
		if ($four == "sham")
		$SHAM = 4;
		if ($four == "warr")
		$WARR = 4;
		if ($four == "prie")
		$PRIE = 4;
		if ($four == "rogu")
		$ROGU = 4;
		if ($four == "hunt")
		$HUNT = 4;
	
		$five = $_POST["dropFive"];
		if ($five == "pala")
		$PALA = 5;
		if ($five == "drui")
		$DRUI = 5;
		if ($five == "mage")
		$MAGE = 5;
		if ($five == "warl")
		$WARL = 5;
		if ($five == "sham")
		$SHAM = 5;
		if ($five == "warr")
		$WARR = 5;
		if ($five == "prie")
		$PRIE = 5;
		if ($five == "rogu")
		$ROGU = 5;
		if ($five == "hunt")
		$HUNT = 5;
		
		$six = $_POST["dropSix"];
		if ($six == "pala")
		$PALA = 6;
		if ($six == "drui")
		$DRUI = 6;
		if ($six == "mage")
		$MAGE = 6;
		if ($six == "warl")
		$WARL = 6;
		if ($six == "sham")
		$SHAM = 6;
		if ($six == "warr")
		$WARR = 6;
		if ($six == "prie")
		$PRIE = 6;
		if ($six == "rogu")
		$ROGU = 6;
		if ($six == "hunt")
		$HUNT = 6;
		
		$seven = $_POST["dropSeven"];
		if ($seven == "pala")
		$PALA = 7;
		if ($seven == "drui")
		$DRUI = 7;
		if ($seven == "mage")
		$MAGE = 7;
		if ($seven == "warl")
		$WARL = 7;
		if ($seven == "sham")
		$SHAM = 7;
		if ($seven == "warr")
		$WARR = 7;
		if ($seven == "prie")
		$PRIE = 7;
		if ($seven == "rogu")
		$ROGU = 7;
		if ($seven == "hunt")
		$HUNT = 7;
		
		$eight = $_POST["dropEight"];
		if ($eight == "pala")
		$PALA = 8;
		if ($eight == "drui")
		$DRUI = 8;
		if ($eight == "mage")
		$MAGE = 8;
		if ($eight == "warl")
		$WARL = 8;
		if ($eight == "sham")
		$SHAM = 8;
		if ($eight == "warr")
		$WARR = 8;
		if ($eight == "prie")
		$PRIE = 8;
		if ($eight == "rogu")
		$ROGU = 8;
		if ($eight == "hunt")
		$HUNT = 8;
		
		$nine = $_POST["dropNine"];
		if ($nine == "pala")
		$PALA = 9;
		if ($nine == "drui")
		$DRUI = 9;
		if ($nine == "mage")
		$MAGE = 9;
		if ($nine == "warl")
		$WARL = 9;
		if ($nine == "sham")
		$SHAM = 9;
		if ($nine == "warr")
		$WARR = 9;
		if ($nine == "prie")
		$PRIE = 9;
		if ($nine == "rogu")
		$ROGU = 9;
		if ($nine == "hunt")
		$HUNT = 9;
		
if (!($PALA == "no") && !($DRUI == "no") && !($MAGE == "no") && !($WARL == "no") && !($SHAM == "no") && !($WARR == "no") && !($PRIE == "no") && !($ROGU == "no") && !($HUNT== "no"))
{ 
	if (!($PALA == $DRUI) && !($PALA == $MAGE) && !($PALA == $WARL) && !($PALA == $SHAM) && !($PALA == $WARR) && !($PALA == $PRIE) && !($PALA == $ROGU) && !($PALA == $HUNT) && !($DRUI == $MAGE) && !($DRUI == $WARL) && !($DRUI == $SHAM) && !($DRUI == $WARR) && !($DRUI == $PRIE) && !($DRUI == $ROGU) && !($DRUI == $HUNT) && !($MAGE == $WARL) && !($MAGE == $SHAM) && !($MAGE == $WARR) && !($MAGE == $PRIE) && !($MAGE == $ROGU) && !($MAGE == $HUNT) && !($WARL == $SHAM) && !($WARL == $WARR) && !($WARL == $PRIE) && !($WARL == $ROGU) && !($WARL == $HUNT) && !($SHAM == $WARR) && !($SHAM == $PRIE) && !($SHAM == $ROGU) && !($SHAM == $HUNT) && !($WARR == $PRIE) && !($WARR == $ROGU) && !($WARR == $HUNT) && !($PRIE == $ROGU) && !($PRIE == $HUNT) && !($ROGU == $HUNT))
	{
		$NAME = $_SESSION["validuser"];
		deleteVoteArena($NAME);
		addVoteArena($NAME, $PALA, $DRUI, $MAGE, $WARL, $SHAM, $WARR, $PRIE, $ROGU, $HUNT);
	}
	else
	{
		echo"<script>alert(\"One or More of These Classes are Used Twice. Fix This Problem and Try Again.\");</script>";
	}
}
else
	echo"<script>alert(\"One or More of The Classes Were Not Picked. Fix This Problem and Try Again.\");</script>";
}

?>

<style>
#header 
{
    background-color:blue;
    color:white;
    text-align:center;
    padding:5px;
}
#nav 
{
    line-height:30px;
    background-color:#fff200;
    height:1000px;
    width:250px;
    float:left;
    padding:5px;
	font-family:Arial, Helvetica, sans-serif	      
}
#section 
{
    float:left;
    padding:30px;	 	 
}
#comment 
{
	float:right;	
}
table, th, td 
{
    border: 1px solid black;
    border-collapse: collapse;
}
th, td 
{
    padding: 5px;
}
a:link 
{
	color: black;
}
a:visited 
{
	color: black;
}
</style>
</head>

<body>
<img src = "Banner2.jpg" height="200px" width="755px"/>

<div id="header">                                      
<h1><a href="heartharena.php">
<img src="green.png" alt="tiers" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;"/></a>
 <img src="yellowp.png" alt="voting" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;">
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
<a href = "voteLeague.php"> League Of Legends (Marksmen)</a></br>
<a href = "vote.php"> Hearthstone (Constructed)</a></br>
<a href = "votearena.php"> Hearthstone (Arena)</a></br>
</div>

<div id="section">
<h1>Hearthstone Arena Voting:</h1>
<form name="vote" form action="votearena.php" method="post">
<table style="width:100%">
  <tr>
    <th style = "background-color:#D4AF37">1</th>
    <th style = "background-color:#D4AF37">
  <select name="dropOne">
    <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select>
</th>
 </tr>
   <th style = "background-color:#D4AF37">2</th>
   <th style = "background-color:#D4AF37">
   <select name="dropTwo">
  <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
    <th style = "background-color:#D4AF37">3</th>
    <th style = "background-color:#D4AF37">
  <select name="dropThree">
    <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
    <th style = "background-color:#D4AF37">4</th>
    <th style = "background-color:#D4AF37">
    <select name="dropFour">
    <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
    <th style = "background-color:#D4AF37">5</th>
    <th style = "background-color:#D4AF37">
    <select name="dropFive">
    <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
    <th style = "background-color:#D4AF37">6</th>
    <th style = "background-color:#D4AF37">
    <select name="dropSix">
    <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
    <th style = "background-color:#D4AF37">7</th>
    <th style = "background-color:#D4AF37">
    <select name="dropSeven">
     <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
    <th style = "background-color:#D4AF37">8</th>
    <th style = "background-color:#D4AF37">
    <select name="dropEight">
  <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
    <th style = "background-color:#D4AF37">9</th>
    <th style = "background-color:#D4AF37">
    <select name="dropNine">
    <option value="no"></option>
    <option value="pala">Paladin</option>
    <option value="drui">Druid</option>
    <option value="mage">Mage</option>
    <option value="warl">Warlock</option>
    <option value="sham">Shaman</option>
    <option value="warr">Warrior</option>
    <option value="prie">Priest</option>
    <option value="rogu">Rogue</option>
    <option value="hunt">Hunter</option>
  </select></th>
  </tr>
</table>
<input type="submit" value="Vote">
</form>
</div>