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
    height:1000px;
    width:250px;
    float:left;
    padding:5px;
	font-family:Arial, Helvetica, sans-serif	      
}
#section {
    float:left;
    padding:30px;	 	 
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
<img src = "Banner2.jpg" height="200px" width="755px"/>

<div id="header">                                      
<h1>
<img src="greenp.png" alt="tiers" style="padding-left:25px;padding-right:25px;width:20%;height:10%;border:0;"/></a>
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
<a href = "League.php"> League Of Legends (Marksmen)</a></br>
<a href = "Hearthstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<?php
$pala = 0;
$npala = 0;
$query = "SELECT PALA FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$pala += $row["PALA"];
	$npala++;
}

$drui = 0;
$ndrui = 0;
$query = "SELECT DRUI FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$drui += $row["DRUI"];
	$ndrui++;
}

$mage = 0;
$nmage = 0;
$query = "SELECT MAGE FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$mage += $row["MAGE"];
	$nmage++;
}

$warl = 0;
$nwarl = 0;
$query = "SELECT WARL FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$warl += $row["WARL"];
	$nwarl++;
}

$sham = 0;
$nsham = 0;
$query = "SELECT SHAM FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$sham += $row["SHAM"];
	$nsham++;
}

$warr = 0;
$nwarr = 0;
$query = "SELECT WARR FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$warr += $row["WARR"];
	$nwarr++;
}

$prie = 0;
$nprie = 0;
$query = "SELECT PRIE FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$prie += $row["PRIE"];
	$nprie++;
}

$rogu = 0;
$nrogu = 0;
$query = "SELECT ROGU FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$rogu += $row["ROGU"];
	$nrogu++;
}

$hunt = 0;
$nhunt = 0;
$query = "SELECT HUNT FROM votehearthstone";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$hunt += $row["HUNT"];
	$nhunt++;
}

$apala = $pala/$npala;
$adrui =$drui/$npala;
$amage = $mage/$npala;
$awarl = $warl/$npala;
$asham = $sham/$npala;
$awarr = $warr/$npala;
$aprie = $prie/$npala;
$arogu = $rogu/$npala;
$ahunt = $hunt/$npala;

//replace if statement in voting with array

$a[0] = $apala;
$a[1] = $adrui;
$a[2] = $amage;
$a[3] = $awarl;
$a[4] = $asham;
$a[5] = $awarr;
$a[6] = $aprie;
$a[7] = $arogu;
$a[8] = $ahunt;
$arrlength = count($a);


$ppala = 9;
$pdrui = 9;
$pmage = 9;
$pwarl = 9;
$psham = 9;
$pwarr = 9;
$pprie = 9;
$progu = 9;
$phunt = 9;

$pl[0] = $ppala;
$pl[1] = $pdrui;
$pl[2] = $pmage;
$pl[3] = $pwarl;
$pl[4] = $psham;
$pl[5] = $pwarr;
$pl[6] = $pprie;
$pl[7] = $progu;
$pl[8] = $phunt;
$arrlength = count($pl);


	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($apala == $a[$x])
	{$ppala += 0;}
	if ($apala < $a[$x])
	{$ppala -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($adrui == $a[$x])
	{$pdrui += 0;}
	if ($adrui < $a[$x])
	{$pdrui -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($amage== $a[$x])
	{$pmage += 0;}
	if ($amage < $a[$x])
	{$pmage -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($awarl == $a[$x])
	{$pwarl += 0;}
	if ($awarl < $a[$x])
	{$pwarl -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($asham == $a[$x])
	{$psham += 0;}
	if ($asham < $a[$x])
	{$psham -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($awarr == $a[$x])
	{$pwarr += 0;}
	if ($awarr < $a[$x])
	{$pwarr -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($aprie == $a[$x])
	{$pprie += 0;}
	if ($aprie < $a[$x])
	{$pprie -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($arogu == $a[$x])
	{$progu += 0;}
	if ($arogu < $a[$x])
	{$progu -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($ahunt == $a[$x])
	{$phunt += 0;}
	if ($ahunt < $a[$x])
	{$phunt -= 1;}
	}
	
$pl[0] = $ppala;
$pl[1] = $pdrui;
$pl[2] = $pmage;
$pl[3] = $pwarl;
$pl[4] = $psham;
$pl[5] = $pwarr;
$pl[6] = $pprie;
$pl[7] = $progu;
$pl[8] = $phunt;

sort($a);
sort($pl);

$palaused = 3;
$druiused = 3;
$mageused = 3;
$warlused = 3;
$shamused = 3;
$warrused = 3;
$prieused = 3;
$roguused = 3;
$huntused = 3;

?>
<div id="section">
 <img src = "Hearthstone.png" height = "100px" width= "500px"/>
<table style="width:100%">
  <tr>
    <th style = "background-color:#D4AF37">1</th>
    <th style = "background-color:
    <?php
		if ($pl[1] == $pl[0])
			echo "#D4AF37";
		else
			echo "#c0c0c0";
	?>
    ">
    <?php
		if ($pl[1] == $pl[0])
			echo "1";
		else
			echo "2";
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[2] == $pl[0])
			echo "#D4AF37";
		else if ($pl[2] == $pl[1])
			echo "#c0c0c0";
		else
			echo "#cd7f32";
	?>
    ">
     <?php
		if ($pl[2] == $pl[0])
			echo "1";
		else if ($pl[2] == $pl[1])
			echo "2";
		else
			echo "3";
	?>
    </th>
  </tr>
  <tr>
    <th style = "background-color:#D4AF37">
    <?php
		if (($pl[0] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[0] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[0] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[0] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[0] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[0] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[0] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[0] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[0] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th>
    <th style = "background-color:
     <?php
		if ($pl[1] == $pl[0])
			echo "#D4AF37";
		else
			echo "#c0c0c0";
	?>
    ">
    <?php
		if (($pl[1] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[1] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[1] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[1] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[1] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[1] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[1] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[1] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[1] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
     <?php
		if ($pl[2] == $pl[0])
			echo "#D4AF37";
		else if ($pl[2] == $pl[1])
			echo "#c0c0c0";
		else
			echo "#cd7f32";
	?>
    ">
    <?php
		if (($pl[2] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[2] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[2] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[2] == $pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[2] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[2] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[2] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[2] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[2] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th>
  </tr>
   <th style = "background-color:#D4AF37"><a href = 
   	<?php
		if (($pl[0] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[0] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[0] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[0] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[0] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[0] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[0] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[0] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[0] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[0] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[0] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[0] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[0] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warlused = 0;
		}
		else if (($pl[0] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[0] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[0] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[0] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[0] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "128px" width= "128px"/></th>
    <th style = "background-color:
     <?php
		if ($pl[1] == $pl[0])
			echo "#D4AF37";
		else
			echo "#c0c0c0";
	?>
    "><a href = 
    	<?php
		if (($pl[1] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[1] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[1] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[1] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[1] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[1] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[1] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[1] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[1] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[1] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[1] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[1] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[1] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warlused = 0;
		}
		else if (($pl[1] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[1] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[1] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[1] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[1] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "128px" width= "128px"/></th> 
    <th style = "background-color:
     <?php
		if ($pl[2] == $pl[0])
			echo "#D4AF37";
		else if ($pl[2] == $pl[1])
			echo "#c0c0c0";
		else
			echo "#cd7f32";
	?>
    "><a href = 
   	<?php
		if (($pl[2] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[2] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[2] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[2] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[2] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[2] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[2] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[2] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[2] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[2] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[2] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[2] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[2] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$palaused = 0;
		}
		else if (($pl[2] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[2] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[2] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[2] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[2] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "128px" width= "128px"/></th>
  </tr>
</table>
</br>
</br>
<table style="width:100%">
  <tr>
    <th style = "background-color:
     <?php
		if ($pl[3] == $pl[0])
			echo "#D4AF37";
		else if ($pl[3] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[3] == $pl[2])
			echo "#cd7f32";
		else
			echo "#00FF01";
	?>
    ">
    <?php
		if ($pl[3] == $pl[0])
			echo "1";
		else if ($pl[3] == $pl[1])
			echo "2";
		else if ($pl[3] == $pl[2])
			echo "3";
		else
			echo "4";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[3] == $pl[0])
			echo "#D4AF37";
		else if ($pl[3] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[3] == $pl[2])
			echo "#cd7f32";
		else
			echo "#00FF01";
	?>
    ">
    <?php
		if (($pl[3] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[3] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[3] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[3] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[3] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[3] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[3] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[3] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[3] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[3] == $pl[0])
			echo "#D4AF37";
		else if ($pl[3] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[3] == $pl[2])
			echo "#cd7f32";
		else
			echo "#00FF01";
	?>
    "><a href =
   	<?php
		if (($pl[3] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[3] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[3] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[3] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[3] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[3] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[3] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[3] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[3] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[3] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[3] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[3] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[3] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warlused = 0;
		}
		else if (($pl[3] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[3] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[3] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[3] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[3] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
    
  </tr>
  <tr>
    <th style = "background-color:
    <?php
		if ($pl[4] == $pl[0])
			echo "#D4AF37";
		else if ($pl[4] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[4] == $pl[2])
			echo "#cd7f32";
		else if ($pl[4] == $pl[3])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
    <?php
		if ($pl[4] == $pl[0])
			echo "1";
		else if ($pl[4] == $pl[1])
			echo "2";
		else if ($pl[4] == $pl[2])
			echo "3";
		else if ($pl[4] == $pl[3])
			echo "4";
		else
			echo "5";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[4] == $pl[0])
			echo "#D4AF37";
		else if ($pl[4] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[4] == $pl[2])
			echo "#cd7f32";
		else if ($pl[4] == $pl[3])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
	<?php
		if (($pl[4] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[4] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[4] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[4] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[4] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[4] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[4] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[4] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[4] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[4] == $pl[0])
			echo "#D4AF37";
		else if ($pl[4] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[4] == $pl[2])
			echo "#cd7f32";
		else if ($pl[4] == $pl[3])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    "><a href = 
   	<?php
		if (($pl[4] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[4] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[4] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[4] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[4] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[4] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[4] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[4] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[4] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[4] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[4] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[4] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[4] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warlused = 0;
		}
		else if (($pl[4] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[4] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[4] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[4] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[4] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <th style = "background-color:
   <?php
		if ($pl[5] == $pl[0])
			echo "#D4AF37";
		else if ($pl[5] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[5] == $pl[2])
			echo "#cd7f32";
		else if ($pl[5] == $pl[3])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
   ">
   <?php
		if ($pl[5] == $pl[0])
			echo "1";
		else if ($pl[5] == $pl[1])
			echo "2";
		else if ($pl[5] == $pl[2])
			echo "3";
		else if ($pl[5] == $pl[3])
			echo "4";
		else if ($pl[5] == $pl[4])
			echo "5";
		else
			echo "6";
	?>
   </th>
    <th style = "background-color:
    <?php
		if ($pl[5] == $pl[0])
			echo "#D4AF37";
		else if ($pl[5] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[5] == $pl[2])
			echo "#cd7f32";
		else if ($pl[5] == $pl[3])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
   <?php
		if (($pl[5] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[5] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[5] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[5] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[5] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[5] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[5] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[5] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[5] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[5] == $pl[0])
			echo "#D4AF37";
		else if ($pl[5] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[5] == $pl[2])
			echo "#cd7f32";
		else if ($pl[5] == $pl[3])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    "><a href = 
   	<?php
		if (($pl[5] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[5] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[5] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[5] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[5] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[5] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[5] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[5] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[5] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[5] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[5] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[5] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[5] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warlused = 0;
		}
		else if (($pl[5] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[5] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[5] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[5] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[5] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <th style = "background-color:
   <?php
		if ($pl[6] == $pl[0])
			echo "#D4AF37";
		else if ($pl[6] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[6] == $pl[2])
			echo "#cd7f32";
		else if ($pl[6] == $pl[3])
			echo "#00FF01";
		else if ($pl[6] == $pl[4])
			echo "#FFF100";
		else if ($pl[6] == $pl[5])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
   ">
   <?php
		if ($pl[6] == $pl[0])
			echo "1";
		else if ($pl[6] == $pl[1])
			echo "2";
		else if ($pl[6] == $pl[2])
			echo "3";
		else if ($pl[6] == $pl[3])
			echo "4";
		else if ($pl[6] == $pl[4])
			echo "5";
		else if ($pl[6] == $pl[5])
			echo "6";
		else
			echo "7"
	?>
   </th>
    <th style = "background-color:
   <?php
		if ($pl[6] == $pl[0])
			echo "#D4AF37";
		else if ($pl[6] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[6] == $pl[2])
			echo "#cd7f32";
		else if ($pl[6] == $pl[3])
			echo "#00FF01";
		else if ($pl[6] == $pl[4])
			echo "#FFF100";
		else if ($pl[6] == $pl[5])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
    <?php
		if (($pl[6] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[6] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[6] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[6] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[6] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[6] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[6] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[6] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[6] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[6] == $pl[0])
			echo "#D4AF37";
		else if ($pl[6] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[6] == $pl[2])
			echo "#cd7f32";
		else if ($pl[6] == $pl[3])
			echo "#00FF01";
		else if ($pl[6] == $pl[4])
			echo "#FFF100";
		else if ($pl[6] == $pl[5])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    "><a href = 
   	<?php
		if (($pl[6] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[6] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[6] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[6] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[6] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[6] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[6] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[6] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[6] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[6] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[6] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[6] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[6] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warlused = 0;
		}
		else if (($pl[6] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[6] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[6] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[6] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[6] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <th style = "background-color:
   <?php
		if ($pl[7] == $pl[0])
			echo "#D4AF37";
		else if ($pl[7] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[7] == $pl[2])
			echo "#cd7f32";
		else if ($pl[7] == $pl[3])
			echo "#00FF01";
		else if ($pl[7] == $pl[4])
			echo "#FFF100";
		else if ($pl[7] == $pl[5])
			echo "#FFF100";
		else 
			echo "#F58220";
	?>
   ">
  <?php
		if ($pl[7] == $pl[0])
			echo "1";
		else if ($pl[7] == $pl[1])
			echo "2";
		else if ($pl[7] == $pl[2])
			echo "3";
		else if ($pl[7] == $pl[3])
			echo "4";
		else if ($pl[7] == $pl[4])
			echo "5";
		else if ($pl[7] == $pl[5])
			echo "6";
		else if ($pl[7] == $pl[6])
			echo "7";
		else
			echo "8";
	?>
   </th>
    <th style = "background-color:
    <?php
		if ($pl[7] == $pl[0])
			echo "#D4AF37";
		else if ($pl[7] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[7] == $pl[2])
			echo "#cd7f32";
		else if ($pl[7] == $pl[3])
			echo "#00FF01";
		else if ($pl[7] == $pl[4])
			echo "#FFF100";
		else if ($pl[7] == $pl[5])
			echo "#FFF100";
		else 
			echo "#F58220";
	?>
    ">
     <?php
		if (($pl[7] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[7] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[7] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[7] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[7] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[7] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[7] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[7] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[7] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[7] == $pl[0])
			echo "#D4AF37";
		else if ($pl[7] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[7] == $pl[2])
			echo "#cd7f32";
		else if ($pl[7] == $pl[3])
			echo "#00FF01";
		else if ($pl[7] == $pl[4])
			echo "#FFF100";
		else if ($pl[7] == $pl[5])
			echo "#FFF100";
		else 
			echo "#F58220";
	?>
    "><a href = 
   	<?php
		if (($pl[7] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[7] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[7] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[7] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[7] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[7] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[7] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[7] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[7] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[7] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[7] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[7] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[7] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warlused = 0;
		}
		else if (($pl[7] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[7] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[7] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[7] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[7] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <th style = "background-color:
   <?php
		if ($pl[8] == $pl[0])
			echo "#D4AF37";
		else if ($pl[8] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[8] == $pl[2])
			echo "#cd7f32";
		else if ($pl[8] == $pl[3])
			echo "#00FF01";
		else if ($pl[8] == $pl[4])
			echo "#FFF100";
		else if ($pl[8] == $pl[5])
			echo "#FFF100";
		else if ($pl[8] == $pl[6])
			echo "#F58220";
		else if ($pl[8] == $pl[7])
			echo "#F58220";
		else 
			echo "#ED1C24";
	?>
   ">
   <?php
		if ($pl[8] == $pl[0])
			echo "1";
		else if ($pl[8] == $pl[1])
			echo "2";
		else if ($pl[8] == $pl[2])
			echo "3";
		else if ($pl[8] == $pl[3])
			echo "4";
		else if ($pl[8] == $pl[4])
			echo "5";
		else if ($pl[8] == $pl[5])
			echo "6";
		else if ($pl[8] == $pl[6])
			echo "7";
		else if ($pl[8] == $pl[7])
			echo "8";
		else 
			echo "9";
	?>
   </th>
    <th style = "background-color:
     <?php
		if ($pl[8] == $pl[0])
			echo "#D4AF37";
		else if ($pl[8] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[8] == $pl[2])
			echo "#cd7f32";
		else if ($pl[8] == $pl[3])
			echo "#00FF01";
		else if ($pl[8] == $pl[4])
			echo "#FFF100";
		else if ($pl[8] == $pl[5])
			echo "#FFF100";
		else if ($pl[8] == $pl[6])
			echo "#F58220";
		else if ($pl[8] == $pl[7])
			echo "#F58220";
		else 
			echo "#ED1C24";
	?>
    ">
    <?php
		if (($pl[8] == $ppala) && ($palaused == 3))
		{
			echo "Paladin";
			$palaused = 2;
		}
		else if (($pl[8] == $pdrui) && ($druiused == 3))
		{
			echo "Druid";
			$druiused = 2;
		}
		else if (($pl[8] == $pmage) && ($mageused == 3))
		{
			echo "Mage";
			$mageused = 2;
		}
		else if (($pl[8] ==$pwarl) && ($warlused == 3))
		{
			echo "Warlock";
			$warlused = 2;
		}
		else if (($pl[8] == $psham) && ($shamused == 3))
		{
			echo "Shaman";
			$shamused = 2;
		}
		else if (($pl[8] == $pwarr) && ($warrused == 3))
		{
			echo "Warrior";
			$warrused = 2;
		}
		else if (($pl[8] == $pprie) && ($prieused == 3))
		{
			echo "Priest";
			$prieused = 2;
		}
		else if (($pl[8] == $progu) && ($roguused == 3))
		{
			echo "Rogue";
			$roguused = 2;
		}
		else if (($pl[8] == $phunt) && ($huntused == 3))
		{
			echo "Hunter";
			$huntused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
     <?php
		if ($pl[8] == $pl[0])
			echo "#D4AF37";
		else if ($pl[8] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[8] == $pl[2])
			echo "#cd7f32";
		else if ($pl[8] == $pl[3])
			echo "#00FF01";
		else if ($pl[8] == $pl[4])
			echo "#FFF100";
		else if ($pl[8] == $pl[5])
			echo "#FFF100";
		else if ($pl[8] == $pl[6])
			echo "#F58220";
		else if ($pl[8] == $pl[7])
			echo "#F58220";
		else 
			echo "#ED1C24";
	?>
    "><a href = "Hunter.php"><a href = 
   	<?php
		if (($pl[8] == $ppala) && ($palaused == 2))
		{
			echo "Paladin.php";
			$palaused = 1;
		}
		else if (($pl[8] == $pdrui) && ($druiused == 2))
		{
			echo "Druid.php";
			$druiused = 1;
		}
		else if (($pl[8] == $pmage) && ($mageused == 2))
		{
			echo "Mage.php";
			$mageused = 1;
		}
		else if (($pl[8] == $pwarl) && ($warlused == 2))
		{
			echo "Warlock.php";
			$warlused = 1;
		}
		else if (($pl[8] == $psham) && ($shamused == 2))
		{
			echo "Shaman.php";
			$shamused = 1;
		}
		else if (($pl[8] == $pwarr) && ($warrused == 2))
		{
			echo "Warrior.php";
			$warrused = 1;
		}
		else if (($pl[8] == $pprie) && ($prieused == 2))
		{
			echo "Priest.php";
			$prieused = 1;
		}
		else if (($pl[8] == $progu) && ($roguused == 2))
		{
			echo "Rogue.php";
			$roguused = 1;
		}
		else if (($pl[8] == $phunt) && ($huntused == 2))
		{
			echo "Hunter.php";
			$huntused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[8] == $ppala) && ($palaused == 1))
		{
			echo "images/Paladin.png";
			$palaused = 0;
		}
		else if (($pl[8] == $pdrui) && ($druiused == 1))
		{
			echo "images/Druid.png";
			$druiused = 0;
		}
		else if (($pl[8] == $pmage) && ($mageused == 1))
		{
			echo "images/Mage.png";
			$mageused = 0;
		}
		else if (($pl[8] == $pwarl) && ($warlused == 1))
		{
			echo "images/Warlock.png";
			$warrused = 0;
		}
		else if (($pl[8] == $psham) && ($shamused == 1))
		{
			echo "images/Shaman.png";
			$shamused = 0;
		}
		else if (($pl[8] == $pwarr) && ($warrused == 1))
		{
			echo "images/Warrior.png";
			$warrused = 0;
		}
		else if (($pl[8] == $pprie) && ($prieused == 1))
		{
			echo "images/Priest.png";
			$prieused = 0;
		}
		else if (($pl[8] == $progu) && ($roguused == 1))
		{
			echo "images/Rogue.png";
			$roguused = 0;
		}
		else if (($pl[8] == $phunt) && ($huntused == 1))
		{
			echo "images/Hunter.png";
			$huntused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
</table>
</div>

<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM comment1";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="hearthstone.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addComment($u, $p);
	
}
?>
<iframe width="100%" height="300px" src="comment1.php" name="iframe_a"></iframe>
</body>
</div>
<aside
</aside>
</body>
</html>