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
    height:1500px;
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
<a href="voteLeague.php">
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
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br>
</div>
<?php
$ash = 0;
$nash = 0;
$query = "SELECT ASH FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$ash += $row["ASH"];
	$nash++;
}

$cai = 0;
$ncai = 0;
$query = "SELECT cai FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$cai += $row["cai"];
	$ncai++;
}

$cor = 0;
$ncor = 0;
$query = "SELECT COR FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$cor += $row["COR"];
	$ncor++;
}

$dra = 0;
$ndra = 0;
$query = "SELECT DRA FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$dra += $row["DRA"];
	$ndra++;
}

$ezr = 0;
$nezr = 0;
$query = "SELECT EZR FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$ezr += $row["EZR"];
	$nezr++;
}

$twi = 0;
$ntwi = 0;
$query = "SELECT TWI FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$twi += $row["TWI"];
	$ntwi++;
}

$jhi = 0;
$njhi = 0;
$query = "SELECT JHI FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$jhi += $row["JHI"];
	$njhi++;
}

$jin = 0;
$njin = 0;
$query = "SELECT JIN FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$jin += $row["JIN"];
	$njin++;
}

$kal = 0;
$nkal = 0;
$query = "SELECT KAL FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$kal += $row["KAL"];
	$nkal++;
}

$kog = 0;
$nkog = 0;
$query = "SELECT KOG FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$kog += $row["KOG"];
	$nkog++;
}

$luc = 0;
$nluc = 0;
$query = "SELECT LUC FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$luc += $row["LUC"];
	$nluc++;
}

$mis = 0;
$nmis = 0;
$query = "SELECT MIS FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$mis += $row["MIS"];
	$nmis++;
}

$qui = 0;
$nqui = 0;
$query = "SELECT QUI FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$qui += $row["QUI"];
	$nqui++;
}

$siv = 0;
$nsiv = 0;
$query = "SELECT SIV FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$siv += $row["SIV"];
	$nsiv++;
}

$tri = 0;
$ntri = 0;
$query = "SELECT TRI FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$tri += $row["TRI"];
	$ntri++;
}

$urg = 0;
$nurg = 0;
$query = "SELECT URG FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$urg += $row["URG"];
	$nurg++;
}

$var = 0;
$nvar = 0;
$query = "SELECT VAR FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$var += $row["VAR"];
	$nvar++;
}

$vay = 0;
$nvay = 0;
$query = "SELECT VAY FROM voteleague";
$result = mysqli_query($GLOBALS['con'], $query);

while($row = mysqli_fetch_assoc($result))
{
	$vay += $row["VAY"];
	$nvay++;
}

$aash = $ash/$nash;
$acai =$cai/$nash;
$acor = $cor/$nash;
$adra = $dra/$nash;
$aezr = $ezr/$nash;
$atwi = $twi/$nash;
$ajhi = $jhi/$nash;
$ajin = $jin/$nash;
$akal = $kal/$nash;
$akog = $kog/$nash;
$aluc = $luc/$nash;
$amis = $mis/$nash;
$aqui = $qui/$nash;
$asiv = $siv/$nash;
$atri = $tri/$nash;
$aurg = $urg/$nash;
$avar = $var/$nash;
$avay = $vay/$nash;

//replace if statement in voting with array

$a[0] = $aash;
$a[1] = $acai;
$a[2] = $acor;
$a[3] = $adra;
$a[4] = $aezr;
$a[5] = $atwi;
$a[6] = $ajhi;
$a[7] = $ajin;
$a[8] = $akal;
$a[9] = $akog;
$a[10] = $aluc;
$a[11] = $amis;
$a[12] = $aqui;
$a[13] = $asiv;
$a[14] = $atri;
$a[15] = $aurg;
$a[16] = $avar;
$a[17] = $avay;
$arrlength = count($a);


$pash = 18;
$pcai = 18;
$pcor = 18;
$pdra = 18;
$pezr = 18;
$ptwi = 18;
$pjhi = 18;
$pjin = 18;
$pkal = 18;
$pkog = 18;
$pluc = 18;
$pmis = 18;
$pqui = 18;
$psiv = 18;
$ptri = 18;
$purg = 18;
$pvar = 18;
$pvay = 18;

$pl[0] = $pash;
$pl[1] = $pcai;
$pl[2] = $pcor;
$pl[3] = $pdra;
$pl[4] = $pezr;
$pl[5] = $ptwi;
$pl[6] = $pjhi;
$pl[7] = $pjin;
$pl[8] = $pkal;
$pl[9] = $pkog;
$pl[10] = $pluc;
$pl[11] = $pmis;
$pl[12] = $pqui;
$pl[13] = $psiv;
$pl[14] = $ptri;
$pl[15] = $purg;
$pl[16] = $pvar;
$pl[17] = $pvay;
$arrlength = count($pl);


	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($aash == $a[$x])
	{$pash += 0;}
	if ($aash < $a[$x])
	{$pash -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($acai == $a[$x])
	{$pcai += 0;}
	if ($acai < $a[$x])
	{$pcai -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($acor== $a[$x])
	{$pcor += 0;}
	if ($acor < $a[$x])
	{$pcor -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($adra == $a[$x])
	{$pdra += 0;}
	if ($adra < $a[$x])
	{$pdra -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($aezr == $a[$x])
	{$pezr += 0;}
	if ($aezr < $a[$x])
	{$pezr -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($atwi == $a[$x])
	{$ptwi += 0;}
	if ($atwi < $a[$x])
	{$ptwi -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($ajhi == $a[$x])
	{$pjhi += 0;}
	if ($ajhi < $a[$x])
	{$pjhi -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($ajin == $a[$x])
	{$pjin += 0;}
	if ($ajin < $a[$x])
	{$pjin -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($akal == $a[$x])
	{$pkal += 0;}
	if ($akal < $a[$x])
	{$pkal -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($akog == $a[$x])
	{$pkog += 0;}
	if ($akog < $a[$x])
	{$pkog -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($aluc == $a[$x])
	{$pluc += 0;}
	if ($aluc < $a[$x])
	{$pluc -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($amis == $a[$x])
	{$pmis += 0;}
	if ($amis < $a[$x])
	{$pmis -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($aqui == $a[$x])
	{$pqui += 0;}
	if ($aqui < $a[$x])
	{$pqui -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($asiv == $a[$x])
	{$psiv += 0;}
	if ($asiv < $a[$x])
	{$psiv -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($atri == $a[$x])
	{$ptri += 0;}
	if ($atri < $a[$x])
	{$ptri -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($aurg == $a[$x])
	{$purg += 0;}
	if ($aurg < $a[$x])
	{$purg -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($avar == $a[$x])
	{$pvar += 0;}
	if ($avar < $a[$x])
	{$pvar -= 1;}
	}
	
	for($x = 0; $x < $arrlength; $x++) 
	{
	if ($avay == $a[$x])
	{$pvay += 0;}
	if ($avay < $a[$x])
	{$pvay -= 1;}
	}
	
$pl[0] = $pash;
$pl[1] = $pcai;
$pl[2] = $pcor;
$pl[3] = $pdra;
$pl[4] = $pezr;
$pl[5] = $ptwi;
$pl[6] = $pjhi;
$pl[7] = $pjin;
$pl[8] = $pkal;
$pl[9] = $pkog;
$pl[10] = $pluc; 
$pl[11] = $pmis;
$pl[12] = $pqui;
$pl[13] = $psiv;
$pl[14] = $ptri;
$pl[15] = $purg;
$pl[16] = $pvar;
$pl[17] = $pvay;

sort($a);
sort($pl);

$ashused = 3;
$caiused = 3;
$corused = 3;
$draused = 3;
$ezrused = 3;
$twiused = 3;
$jhiused = 3;
$jinused = 3;
$kalused = 3;
$kogused = 3;
$lucused = 3;
$misused = 3;
$quiused = 3;
$sivused = 3;
$triused = 3;
$urgused = 3;
$varused = 3;
$vayused = 3;

?>
</body>

<div id="section">
 <img src = "LOL.PNG" height = "100px" width= "500px"/>
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
		if (($pl[0] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[0] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[0] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[0] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[0] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[0] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[0] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[0] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[0] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[0] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[0] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[0] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[0] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[0] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[0] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[0] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[0] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[0] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
		if (($pl[1] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[1] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[1] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[1] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[1] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[1] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[1] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[1] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[1] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[1] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[1] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[1] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[1] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[1] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[1] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[1] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[1] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[1] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
		if (($pl[2] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[2] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[2] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[2] == $pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[2] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[2] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[2] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[2] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[2] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[2] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[2] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[2] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[2] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[2] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[2] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[2] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[2] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[2] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th>
  </tr>
   <th style = "background-color:#D4AF37"><a href = 
   	<?php
		if (($pl[0] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[0] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[0] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[0] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[0] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[0] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[0] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[0] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[0] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[0] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[0] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[0] == $pmis) && ($misused == 2))
		{
			echo "Miss Fortune.php";
			$misused = 1;
		}
		else if (($pl[0] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[0] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[0] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[0] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[0] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[0] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[0] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[0] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[0] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[0] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[0] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[0] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[0] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[0] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[0] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[0] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[0] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[0] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[0] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[0] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[0] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[0] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[0] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[0] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
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
		if (($pl[1] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[1] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[1] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[1] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[1] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[1] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[1] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[1] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[1] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[1] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[1] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[1] == $pmis) && ($misused == 2))
		{
			echo "Miss Fortune.php";
			$misused = 1;
		}
		else if (($pl[1] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[1] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[1] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[1] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[1] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[1] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[1] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[1] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[1] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[1] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[1] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[1] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[1] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[1] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[1] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[1] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[1] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[1] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[1] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[1] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[1] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[1] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[1] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[1] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
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
		if (($pl[2] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[2] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[2] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[2] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[2] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[2] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[2] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[2] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[2] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[2] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[2] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[2] == $pmis) && ($misused == 2))
		{
			echo "Miss Fortune.php";
			$misused = 1;
		}
		else if (($pl[2] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[2] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[2] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[2] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[2] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[2] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[2] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[2] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[2] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[2] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$ashused = 0;
		}
		else if (($pl[2] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[2] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[2] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[2] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[2] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[2] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[2] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[2] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[2] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[2] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[2] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[2] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[2] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[2 ] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
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
		if (($pl[3] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[3] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[3] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[3] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[3] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[3] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[3] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[3] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[3] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[3] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[3] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[3] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[3] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[3] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[3] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[3] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[3] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[3] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
		if (($pl[3] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[3] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[3] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[3] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[3] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[3] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[3] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[3] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[3] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[3] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[3] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[3] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[3] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[3] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[3] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[3] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[3] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[3] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[3] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[3] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[3] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[3] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[3] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[3] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[3] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[3] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[3] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[3] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[3] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[3] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[3] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[3] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[3] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[3] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[3] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[3] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
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
		else
			echo "#00FF01";
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
		else
			echo "#00FF01";
	?>
    ">
	<?php
		if (($pl[4] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[4] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[4] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[4] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[4] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[4] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[4] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[4] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[4] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[4] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[4] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[4] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[4] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[4] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[4] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[4] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[4] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[4] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
		else
			echo "#00FF01";
	?>
    "><a href = 
   	<?php
		if (($pl[4] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[4] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[4] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[4] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[4] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[4] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[4] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[4] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[4] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[4] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[4] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[4] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[4] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[4] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[4] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[4] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[4] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[4] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[4] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[4] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[4] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[4] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[4] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[4] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[4] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[4] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[4] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[4] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[4] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[4] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[4] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[4] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[4] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[4] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[4] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[4] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <tr>
    <th style = "background-color:
    <?php
		if ($pl[5] == $pl[0])
			echo "#D4AF37";
		else if ($pl[5] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[5] == $pl[2])
			echo "#cd7f32";
		else
			echo "#00FF01";
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
		else
			echo "#00FF01";
	?>
    ">
	<?php
		if (($pl[5] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[5] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[5] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[5] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[5] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[5] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[5] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[5] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[5] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[5] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[5] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[5] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[5] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[5] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[5] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[5] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[5] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[5] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
		else
			echo "#00FF01";
	?>
    "><a href = 
   	<?php
		if (($pl[5] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[5] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[5] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[5] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[5] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[5] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[5] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[5] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[5] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[5] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[5] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[5] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[5] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[5] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[5] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[5] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[5] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[5] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[5] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[5] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[5] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[5] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[5] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[5] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[5] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[5] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[5] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[5] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[5] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[5] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[5] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[5] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[5] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[5] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[5] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[5] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <tr>
    <th style = "background-color:
    <?php
		if ($pl[6] == $pl[0])
			echo "#D4AF37";
		else if ($pl[6] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[6] == $pl[2])
			echo "#cd7f32";
		else
			echo "#00FF01";
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
			echo "7";
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
		else
			echo "#00FF01";
	?>
    ">
	<?php
		if (($pl[6] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[6] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[6] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[6] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[6] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[6] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[6] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[6] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[6] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[6] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[6] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[6] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[6] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[6] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[6] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[6] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[6] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[6] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
		else
			echo "#00FF01";
	?>
    "><a href = 
   	<?php
		if (($pl[6] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[6] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[6] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[6] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[6] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[6] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[6] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[6] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[6] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[6] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[6] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[6] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[6] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[6] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[6] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[6] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[6] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[6] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[6] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[6] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[6] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[6] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[6] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[6] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[6] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[6] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[6] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[6] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[6] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[6] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[6] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[6] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[6] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[6] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[6] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[6] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
    <tr>
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
			echo "#00FF01";
		else if ($pl[7] == $pl[5])
			echo "#00FF01";
		else if ($pl[7] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
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
			echo "#00FF01";
		else if ($pl[7] == $pl[5])
			echo "#00FF01";
		else if ($pl[7] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
	<?php
		if (($pl[7] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[7] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[7] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[7] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[7] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[7] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[7] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[7] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[7] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[7] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[7] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[7] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[7] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[7] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[7] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[7] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[7] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[7] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
			echo "#00FF01";
		else if ($pl[7] == $pl[5])
			echo "#00FF01";
		else if ($pl[7] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    "><a href = 
   	<?php
		if (($pl[7] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[7] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[7] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[7] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[7] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[7] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[7] == $pjhi) && ($jhiused == 2))
		{
			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[7] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[7] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[7] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[7] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[7] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[7] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[7] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[7] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[7] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[7] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[7] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[7] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[7] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[4] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[7] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[7] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[7] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[7] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[7] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[7] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[7] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[7] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[7] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[7] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[7] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[7] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[7] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[7] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[7] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
    <tr>
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
			echo "#00FF01";
		else if ($pl[8] == $pl[5])
			echo "#00FF01";
		else if ($pl[8] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
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
			echo "#00FF01";
		else if ($pl[8] == $pl[5])
			echo "#00FF01";
		else if ($pl[8] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
	<?php
		if (($pl[8] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[8] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[8] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[8] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[8] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[8] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[8] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[8] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[8] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[8] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[8] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[8] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[8] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[8] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[8] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[8] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[8] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[8] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
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
			echo "#00FF01";
		else if ($pl[8] == $pl[5])
			echo "#00FF01";
		else if ($pl[8] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    "><a href = 
   	<?php
		if (($pl[8] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[8] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[8] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[8] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[8] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[8] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[8] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[8] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[8] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[8] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[8] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[8] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[8] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[8] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[8] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[8] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[8] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[8] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[8] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[8] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[8] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[8] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[8] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[8] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[8] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[8] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[8] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[8] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[8] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[8] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[8] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[8] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[8] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[8] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[8] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[8] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
  <tr>
    <th style = "background-color:
    <?php
		if ($pl[9] == $pl[0])
			echo "#D4AF37";
		else if ($pl[9] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[9] == $pl[2])
			echo "#cd7f32";
		else if ($pl[9] == $pl[3])
			echo "#00FF01";
		else if ($pl[9] == $pl[4])
			echo "#00FF01";
		else if ($pl[9] == $pl[5])
			echo "#00FF01";
		else if ($pl[9] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
    <?php
		if ($pl[9] == $pl[0])
			echo "1";
		else if ($pl[9] == $pl[1])
			echo "2";
		else if ($pl[9] == $pl[2])
			echo "3";
		else if ($pl[9] == $pl[3])
			echo "4";
		else if ($pl[9] == $pl[4])
			echo "5";
		else if ($pl[9] == $pl[5])
			echo "6";
		else if ($pl[9] == $pl[6])
			echo "7";
		else if ($pl[9] == $pl[7])
			echo "8";
		else if ($pl[9] == $pl[8])
			echo "9";
		else
			echo "10";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[9] == $pl[0])
			echo "#D4AF37";
		else if ($pl[9] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[9] == $pl[2])
			echo "#cd7f32";
		else if ($pl[9] == $pl[3])
			echo "#00FF01";
		else if ($pl[9] == $pl[4])
			echo "#00FF01";
		else if ($pl[9] == $pl[5])
			echo "#00FF01";
		else if ($pl[9] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
	<?php
		if (($pl[9] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[9] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[9] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[9] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[9] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[9] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[9] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[9] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[9] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[9] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[9] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[9] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[9] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[9] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[9] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[9] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[9] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[9] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[9] == $pl[0])
			echo "#D4AF37";
		else if ($pl[9] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[9] == $pl[2])
			echo "#cd7f32";
		else if ($pl[9] == $pl[3])
			echo "#00FF01";
		else if ($pl[9] == $pl[4])
			echo "#00FF01";
		else if ($pl[9] == $pl[5])
			echo "#00FF01";
		else if ($pl[9] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    "><a href = 
   	<?php
		if (($pl[9] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[9] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[9] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[9] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[9] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[9] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[9] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[9] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[9] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[9] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[9] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[9] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[9] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[9] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[9] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[9] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[9] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[9] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[9] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[9] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[9] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[9] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[9] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[9] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[9] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[9] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[9] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[9] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[9] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[9] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[9] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[9] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[9] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[9] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[9] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[9] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
  <tr>
    <th style = "background-color:
    <?php
		if ($pl[10] == $pl[0])
			echo "#D4AF37";
		else if ($pl[10] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[10] == $pl[2])
			echo "#cd7f32";
		else if ($pl[10] == $pl[3])
			echo "#00FF01";
		else if ($pl[10] == $pl[4])
			echo "#00FF01";
		else if ($pl[10] == $pl[5])
			echo "#00FF01";
		else if ($pl[10] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
    <?php
		if ($pl[10] == $pl[0])
			echo "1";
		else if ($pl[10] == $pl[1])
			echo "2";
		else if ($pl[10] == $pl[2])
			echo "3";
		else if ($pl[10] == $pl[3])
			echo "4";
		else if ($pl[10] == $pl[4])
			echo "5";
		else if ($pl[10] == $pl[5])
			echo "6";
		else if ($pl[10] == $pl[6])
			echo "7";
		else if ($pl[10] == $pl[7])
			echo "8";
		else if ($pl[10] == $pl[8])
			echo "9";
		else if ($pl[10] == $pl[9])
			echo "10";
		else
			echo "11";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[10] == $pl[0])
			echo "#D4AF37";
		else if ($pl[10] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[10] == $pl[2])
			echo "#cd7f32";
		else if ($pl[10] == $pl[3])
			echo "#00FF01";
		else if ($pl[10] == $pl[4])
			echo "#00FF01";
		else if ($pl[10] == $pl[5])
			echo "#00FF01";
		else if ($pl[10] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    ">
	<?php
		if (($pl[10] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[10] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[10] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[10] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[10] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[10] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[10] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[10] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[10] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[10] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[10] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[10] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[10] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[10] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[10] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[10] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[10] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[10] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[10] == $pl[0])
			echo "#D4AF37";
		else if ($pl[10] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[10] == $pl[2])
			echo "#cd7f32";
		else if ($pl[10] == $pl[3])
			echo "#00FF01";
		else if ($pl[10] == $pl[4])
			echo "#00FF01";
		else if ($pl[10] == $pl[5])
			echo "#00FF01";
		else if ($pl[10] == $pl[6])
			echo "#00FF01";
		else
			echo "#FFF100";
	?>
    "><a href = 
   	<?php
		if (($pl[10] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[10] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[10] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[10] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[10] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[10] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[10] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[10] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[10] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[10] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[10] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[10] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[10] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[10] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[10] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[10] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[10] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[10] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[10] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[10] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[10] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[10] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[10] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[10] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[10] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[10] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[10] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[10] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[10] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[10] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[10] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[10] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[10] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[10] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[10] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[10] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
  <tr>
    <th style = "background-color:
    <?php
		if ($pl[11] == $pl[0])
			echo "#D4AF37";
		else if ($pl[11] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[11] == $pl[2])
			echo "#cd7f32";
		else if ($pl[11] == $pl[3])
			echo "#00FF01";
		else if ($pl[11] == $pl[4])
			echo "#00FF01";
		else if ($pl[11] == $pl[5])
			echo "#00FF01";
		else if ($pl[11] == $pl[6])
			echo "#00FF01";
		else if ($pl[11] == $pl[7])
			echo "#FFF100";
		else if ($pl[11] == $pl[8])
			echo "#FFF100";
		else if ($pl[11] == $pl[9])
			echo "#FFF100";
		else if ($pl[11] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
    <?php
		if ($pl[11] == $pl[0])
			echo "1";
		else if ($pl[11] == $pl[1])
			echo "2";
		else if ($pl[11] == $pl[2])
			echo "3";
		else if ($pl[11] == $pl[3])
			echo "4";
		else if ($pl[11] == $pl[4])
			echo "5";
		else if ($pl[11] == $pl[5])
			echo "6";
		else if ($pl[11] == $pl[6])
			echo "7";
		else if ($pl[11] == $pl[7])
			echo "8";
		else if ($pl[11] == $pl[8])
			echo "9";
		else if ($pl[11] == $pl[9])
			echo "10";
		else if ($pl[11] == $pl[10])
			echo "11";
		else 
			echo "12";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[11] == $pl[0])
			echo "#D4AF37";
		else if ($pl[11] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[11] == $pl[2])
			echo "#cd7f32";
		else if ($pl[11] == $pl[3])
			echo "#00FF01";
		else if ($pl[11] == $pl[4])
			echo "#00FF01";
		else if ($pl[11] == $pl[5])
			echo "#00FF01";
		else if ($pl[11] == $pl[6])
			echo "#00FF01";
		else if ($pl[11] == $pl[7])
			echo "#FFF100";
		else if ($pl[11] == $pl[8])
			echo "#FFF100";
		else if ($pl[11] == $pl[9])
			echo "#FFF100";
		else if ($pl[11] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
	<?php
		if (($pl[11] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[11] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[11] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[11] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[11] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[11] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[11] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[11] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[11] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[11] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[11] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[11] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[11] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[11] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[11] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[11] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[11] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[11] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[11] == $pl[0])
			echo "#D4AF37";
		else if ($pl[11] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[11] == $pl[2])
			echo "#cd7f32";
		else if ($pl[11] == $pl[3])
			echo "#00FF01";
		else if ($pl[11] == $pl[4])
			echo "#00FF01";
		else if ($pl[11] == $pl[5])
			echo "#00FF01";
		else if ($pl[11] == $pl[6])
			echo "#00FF01";
		else if ($pl[11] == $pl[7])
			echo "#FFF100";
		else if ($pl[11] == $pl[8])
			echo "#FFF100";
		else if ($pl[11] == $pl[9])
			echo "#FFF100";
		else if ($pl[11] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    "><a href = 
   	<?php
		if (($pl[11] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[11] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[11] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[11] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[11] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[11] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[11] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[11] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[11] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[11] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[11] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[11] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[11] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[11] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[11] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[11] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[11] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[11] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[11] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[11] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[11] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[11] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[11] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[11] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[11] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[11] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[11] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[11] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[11] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[11] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[11] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[11] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[11] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[11] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[11] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[11] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <tr>
    <th style = "background-color:
    <?php
		if ($pl[12] == $pl[0])
			echo "#D4AF37";
		else if ($pl[12] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[12] == $pl[2])
			echo "#cd7f32";
		else if ($pl[12] == $pl[3])
			echo "#00FF01";
		else if ($pl[12] == $pl[4])
			echo "#00FF01";
		else if ($pl[12] == $pl[5])
			echo "#00FF01";
		else if ($pl[12] == $pl[6])
			echo "#00FF01";
		else if ($pl[12] == $pl[7])
			echo "#FFF100";
		else if ($pl[12] == $pl[8])
			echo "#FFF100";
		else if ($pl[12] == $pl[9])
			echo "#FFF100";
		else if ($pl[12] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
    <?php
		if ($pl[12] == $pl[0])
			echo "1";
		else if ($pl[12] == $pl[1])
			echo "2";
		else if ($pl[12] == $pl[2])
			echo "3";
		else if ($pl[12] == $pl[3])
			echo "4";
		else if ($pl[12] == $pl[4])
			echo "5";
		else if ($pl[12] == $pl[5])
			echo "6";
		else if ($pl[12] == $pl[6])
			echo "7";
		else if ($pl[12] == $pl[7])
			echo "8";
		else if ($pl[12] == $pl[8])
			echo "9";
		else if ($pl[12] == $pl[9])
			echo "10";
		else if ($pl[12] == $pl[10])
			echo "11";
		else if ($pl[12] == $pl[11])
			echo "12";
		else
			echo "13";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[12] == $pl[0])
			echo "#D4AF37";
		else if ($pl[12] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[12] == $pl[2])
			echo "#cd7f32";
		else if ($pl[12] == $pl[3])
			echo "#00FF01";
		else if ($pl[12] == $pl[4])
			echo "#00FF01";
		else if ($pl[12] == $pl[5])
			echo "#00FF01";
		else if ($pl[12] == $pl[6])
			echo "#00FF01";
		else if ($pl[12] == $pl[7])
			echo "#FFF100";
		else if ($pl[12] == $pl[8])
			echo "#FFF100";
		else if ($pl[12] == $pl[9])
			echo "#FFF100";
		else if ($pl[12] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
	<?php
		if (($pl[12] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[12] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[12] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[12] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[12] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[12] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[12] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[12] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[12] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[12] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[12] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[12] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[12] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[12] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[12] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[12] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[12] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[12] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[12] == $pl[0])
			echo "#D4AF37";
		else if ($pl[12] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[12] == $pl[2])
			echo "#cd7f32";
		else if ($pl[12] == $pl[3])
			echo "#00FF01";
		else if ($pl[12] == $pl[4])
			echo "#00FF01";
		else if ($pl[12] == $pl[5])
			echo "#00FF01";
		else if ($pl[12] == $pl[6])
			echo "#00FF01";
		else if ($pl[12] == $pl[7])
			echo "#FFF100";
		else if ($pl[12] == $pl[8])
			echo "#FFF100";
		else if ($pl[12] == $pl[9])
			echo "#FFF100";
		else if ($pl[12] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    "><a href = 
   	<?php
		if (($pl[12] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[12] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[12] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[12] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[12] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[12] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[12] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[12] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[12] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[12] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[12] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[12] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[12] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[12] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[12] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[12] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[12] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[12] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[12] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[12] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[12] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[12] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[12] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[12] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[12] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[12] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[12] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[12] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[12] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[12] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[12] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[12] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[12] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[12] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[12] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[12] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
     <tr>
    <th style = "background-color:
    <?php
		if ($pl[13] == $pl[0])
			echo "#D4AF37";
		else if ($pl[13] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[13] == $pl[2])
			echo "#cd7f32";
		else if ($pl[13] == $pl[3])
			echo "#00FF01";
		else if ($pl[13] == $pl[4])
			echo "#00FF01";
		else if ($pl[13] == $pl[5])
			echo "#00FF01";
		else if ($pl[13] == $pl[6])
			echo "#00FF01";
		else if ($pl[13] == $pl[7])
			echo "#FFF100";
		else if ($pl[13] == $pl[8])
			echo "#FFF100";
		else if ($pl[13] == $pl[9])
			echo "#FFF100";
		else if ($pl[13] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
    <?php
		if ($pl[13] == $pl[0])
			echo "1";
		else if ($pl[13] == $pl[1])
			echo "2";
		else if ($pl[13] == $pl[2])
			echo "3";
		else if ($pl[13] == $pl[3])
			echo "4";
		else if ($pl[13] == $pl[4])
			echo "5";
		else if ($pl[13] == $pl[5])
			echo "6";
		else if ($pl[13] == $pl[6])
			echo "7";
		else if ($pl[13] == $pl[7])
			echo "8";
		else if ($pl[13] == $pl[8])
			echo "9";
		else if ($pl[13] == $pl[9])
			echo "10";
		else if ($pl[13] == $pl[10])
			echo "11";
		else if ($pl[13] == $pl[11])
			echo "12";
		else if ($pl[13] == $pl[12])
			echo "13";
		else 
			echo "14";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[13] == $pl[0])
			echo "#D4AF37";
		else if ($pl[13] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[13] == $pl[2])
			echo "#cd7f32";
		else if ($pl[13] == $pl[3])
			echo "#00FF01";
		else if ($pl[13] == $pl[4])
			echo "#00FF01";
		else if ($pl[13] == $pl[5])
			echo "#00FF01";
		else if ($pl[13] == $pl[6])
			echo "#00FF01";
		else if ($pl[13] == $pl[7])
			echo "#FFF100";
		else if ($pl[13] == $pl[8])
			echo "#FFF100";
		else if ($pl[13] == $pl[9])
			echo "#FFF100";
		else if ($pl[13] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
	<?php
		if (($pl[13] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[13] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[13] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[13] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[13] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[13] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[13] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[13] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[13] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[13] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[13] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[13] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[13] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[13] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[13] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[13] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[13] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[13] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[13] == $pl[0])
			echo "#D4AF37";
		else if ($pl[13] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[13] == $pl[2])
			echo "#cd7f32";
		else if ($pl[13] == $pl[3])
			echo "#00FF01";
		else if ($pl[13] == $pl[4])
			echo "#00FF01";
		else if ($pl[13] == $pl[5])
			echo "#00FF01";
		else if ($pl[13] == $pl[6])
			echo "#00FF01";
		else if ($pl[13] == $pl[7])
			echo "#FFF100";
		else if ($pl[13] == $pl[8])
			echo "#FFF100";
		else if ($pl[13] == $pl[9])
			echo "#FFF100";
		else if ($pl[13] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    "><a href = 
   	<?php
		if (($pl[13] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[13] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[13] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[13] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[13] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[13] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[13] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[13] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[13] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[13] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[13] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[13] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[13] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[13] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[13] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[13] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[13] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[13] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[13] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[13] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[13] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[13] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[13] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[13] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[13] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[13] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[13] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[13] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[13] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[13] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[13] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[13] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[13] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[13] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[13] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[13] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
       <tr>
    <th style = "background-color:
    <?php
		if ($pl[14] == $pl[0])
			echo "#D4AF37";
		else if ($pl[14] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[14] == $pl[2])
			echo "#cd7f32";
		else if ($pl[14] == $pl[3])
			echo "#00FF01";
		else if ($pl[14] == $pl[4])
			echo "#00FF01";
		else if ($pl[14] == $pl[5])
			echo "#00FF01";
		else if ($pl[14] == $pl[6])
			echo "#00FF01";
		else if ($pl[14] == $pl[7])
			echo "#FFF100";
		else if ($pl[14] == $pl[8])
			echo "#FFF100";
		else if ($pl[14] == $pl[9])
			echo "#FFF100";
		else if ($pl[14] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
    <?php
		if ($pl[14] == $pl[0])
			echo "1";
		else if ($pl[14] == $pl[1])
			echo "2";
		else if ($pl[14] == $pl[2])
			echo "3";
		else if ($pl[14] == $pl[3])
			echo "4";
		else if ($pl[14] == $pl[4])
			echo "5";
		else if ($pl[14] == $pl[5])
			echo "6";
		else if ($pl[14] == $pl[6])
			echo "7";
		else if ($pl[14] == $pl[7])
			echo "8";
		else if ($pl[14] == $pl[8])
			echo "9";
		else if ($pl[14] == $pl[9])
			echo "10";
		else if ($pl[14] == $pl[10])
			echo "11";
		else if ($pl[14] == $pl[11])
			echo "12";
		else if ($pl[14] == $pl[12])
			echo "13";
		else if ($pl[14] == $pl[13])
			echo "14";
		else 
			echo "15";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[14] == $pl[0])
			echo "#D4AF37";
		else if ($pl[14] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[14] == $pl[2])
			echo "#cd7f32";
		else if ($pl[14] == $pl[3])
			echo "#00FF01";
		else if ($pl[14] == $pl[4])
			echo "#00FF01";
		else if ($pl[14] == $pl[5])
			echo "#00FF01";
		else if ($pl[14] == $pl[6])
			echo "#00FF01";
		else if ($pl[14] == $pl[7])
			echo "#FFF100";
		else if ($pl[14] == $pl[8])
			echo "#FFF100";
		else if ($pl[14] == $pl[9])
			echo "#FFF100";
		else if ($pl[14] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    ">
	<?php
		if (($pl[14] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[14] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[14] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[14] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[14] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[14] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[14] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[14] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[14] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[14] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[14] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[14] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[14] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[14] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[14] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[14] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[14] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[14] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[14] == $pl[0])
			echo "#D4AF37";
		else if ($pl[14] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[14] == $pl[2])
			echo "#cd7f32";
		else if ($pl[14] == $pl[3])
			echo "#00FF01";
		else if ($pl[14] == $pl[4])
			echo "#00FF01";
		else if ($pl[14] == $pl[5])
			echo "#00FF01";
		else if ($pl[14] == $pl[6])
			echo "#00FF01";
		else if ($pl[14] == $pl[7])
			echo "#FFF100";
		else if ($pl[14] == $pl[8])
			echo "#FFF100";
		else if ($pl[14] == $pl[9])
			echo "#FFF100";
		else if ($pl[14] == $pl[10])
			echo "#FFF100";
		else
			echo "#F58220";
	?>
    "><a href = 
   	<?php
		if (($pl[14] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[14] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[14] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[14] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[14] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[14] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[14] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[14] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[14] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[14] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[14] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[14] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[14] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[14] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[14] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[14] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[14] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[14] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[14] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[14] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[14] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[14] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[14] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[14] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[14] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[14] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[14] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[14] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[14] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[14] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[14] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[14] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[14] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[14] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[14] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[14] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
    <tr>
    <th style = "background-color:
    <?php
		if ($pl[15] == $pl[0])
			echo "#D4AF37";
		else if ($pl[15] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[15] == $pl[2])
			echo "#cd7f32";
		else if ($pl[15] == $pl[3])
			echo "#00FF01";
		else if ($pl[15] == $pl[4])
			echo "#00FF01";
		else if ($pl[15] == $pl[5])
			echo "#00FF01";
		else if ($pl[15] == $pl[6])
			echo "#00FF01";
		else if ($pl[15] == $pl[7])
			echo "#FFF100";
		else if ($pl[15] == $pl[8])
			echo "#FFF100";
		else if ($pl[15] == $pl[9])
			echo "#FFF100";
		else if ($pl[15] == $pl[10])
			echo "#FFF100";
		else if ($pl[15] == $pl[11])
			echo "#F58220";
		else if ($pl[15] == $pl[12])
			echo "#F58220";
		else if ($pl[15] == $pl[13])
			echo "#F58220";
		else if ($pl[15] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    ">
    <?php
		if ($pl[15] == $pl[0])
			echo "1";
		else if ($pl[15] == $pl[1])
			echo "2";
		else if ($pl[15] == $pl[2])
			echo "3";
		else if ($pl[15] == $pl[3])
			echo "4";
		else if ($pl[15] == $pl[4])
			echo "5";
		else if ($pl[15] == $pl[5])
			echo "6";
		else if ($pl[15] == $pl[6])
			echo "7";
		else if ($pl[15] == $pl[7])
			echo "8";
		else if ($pl[15] == $pl[8])
			echo "9";
		else if ($pl[15] == $pl[9])
			echo "10";
		else if ($pl[15] == $pl[10])
			echo "11";
		else if ($pl[15] == $pl[11])
			echo "12";
		else if ($pl[15] == $pl[12])
			echo "13";
		else if ($pl[15] == $pl[13])
			echo "14";
		else if ($pl[15] == $pl[14])
			echo "15";
		else
			echo "16";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[15] == $pl[0])
			echo "#D4AF37";
		else if ($pl[15] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[15] == $pl[2])
			echo "#cd7f32";
		else if ($pl[15] == $pl[3])
			echo "#00FF01";
		else if ($pl[15] == $pl[4])
			echo "#00FF01";
		else if ($pl[15] == $pl[5])
			echo "#00FF01";
		else if ($pl[15] == $pl[6])
			echo "#00FF01";
		else if ($pl[15] == $pl[7])
			echo "#FFF100";
		else if ($pl[15] == $pl[8])
			echo "#FFF100";
		else if ($pl[15] == $pl[9])
			echo "#FFF100";
		else if ($pl[15] == $pl[10])
			echo "#FFF100";
		else if ($pl[15] == $pl[11])
			echo "#F58220";
		else if ($pl[15] == $pl[12])
			echo "#F58220";
		else if ($pl[15] == $pl[13])
			echo "#F58220";
		else if ($pl[15] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    ">
	<?php
		if (($pl[15] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[15] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[15] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[15] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[15] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[15] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[15] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[15] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[15] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[15] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[15] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[15] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[15] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[15] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[15] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[15] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[15] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[15] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[15] == $pl[0])
			echo "#D4AF37";
		else if ($pl[15] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[15] == $pl[2])
			echo "#cd7f32";
		else if ($pl[15] == $pl[3])
			echo "#00FF01";
		else if ($pl[15] == $pl[4])
			echo "#00FF01";
		else if ($pl[15] == $pl[5])
			echo "#00FF01";
		else if ($pl[15] == $pl[6])
			echo "#00FF01";
		else if ($pl[15] == $pl[7])
			echo "#FFF100";
		else if ($pl[15] == $pl[8])
			echo "#FFF100";
		else if ($pl[15] == $pl[9])
			echo "#FFF100";
		else if ($pl[15] == $pl[10])
			echo "#FFF100";
		else if ($pl[15] == $pl[11])
			echo "#F58220";
		else if ($pl[15] == $pl[12])
			echo "#F58220";
		else if ($pl[15] == $pl[13])
			echo "#F58220";
		else if ($pl[15] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    "><a href = 
   	<?php
		if (($pl[15] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[15] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[15] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[15] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[15] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[15] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[15] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[15] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[15] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[15] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[15] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[15] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[15] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[15] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[15] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[15] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[15] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[15] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[15] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[15] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[15] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[15] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[15] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[15] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[15] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[15] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[15] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[15] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[15] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[15] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[15] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[15] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[15] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[15] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[15] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[15] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
   <tr>
    <th style = "background-color:
    <?php
		if ($pl[16] == $pl[0])
			echo "#D4AF37";
		else if ($pl[16] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[16] == $pl[2])
			echo "#cd7f32";
		else if ($pl[16] == $pl[3])
			echo "#00FF01";
		else if ($pl[16] == $pl[4])
			echo "#00FF01";
		else if ($pl[16] == $pl[5])
			echo "#00FF01";
		else if ($pl[16] == $pl[6])
			echo "#00FF01";
		else if ($pl[16] == $pl[7])
			echo "#FFF100";
		else if ($pl[16] == $pl[8])
			echo "#FFF100";
		else if ($pl[16] == $pl[9])
			echo "#FFF100";
		else if ($pl[16] == $pl[10])
			echo "#FFF100";
		else if ($pl[16] == $pl[11])
			echo "#F58220";
		else if ($pl[16] == $pl[12])
			echo "#F58220";
		else if ($pl[16] == $pl[13])
			echo "#F58220";
		else if ($pl[16] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    ">
    <?php
		if ($pl[16] == $pl[0])
			echo "1";
		else if ($pl[16] == $pl[1])
			echo "2";
		else if ($pl[16] == $pl[2])
			echo "3";
		else if ($pl[16] == $pl[3])
			echo "4";
		else if ($pl[16] == $pl[4])
			echo "5";
		else if ($pl[16] == $pl[5])
			echo "6";
		else if ($pl[16] == $pl[6])
			echo "7";
		else if ($pl[16] == $pl[7])
			echo "8";
		else if ($pl[16] == $pl[8])
			echo "9";
		else if ($pl[16] == $pl[9])
			echo "10";
		else if ($pl[16] == $pl[10])
			echo "11";
		else if ($pl[16] == $pl[11])
			echo "12";
		else if ($pl[16] == $pl[12])
			echo "13";
		else if ($pl[16] == $pl[13])
			echo "14";
		else if ($pl[16] == $pl[14])
			echo "15";
		else if ($pl[16] == $pl[15])
			echo "16";
		else
			echo "17";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[16] == $pl[0])
			echo "#D4AF37";
		else if ($pl[16] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[16] == $pl[2])
			echo "#cd7f32";
		else if ($pl[16] == $pl[3])
			echo "#00FF01";
		else if ($pl[16] == $pl[4])
			echo "#00FF01";
		else if ($pl[16] == $pl[5])
			echo "#00FF01";
		else if ($pl[16] == $pl[6])
			echo "#00FF01";
		else if ($pl[16] == $pl[7])
			echo "#FFF100";
		else if ($pl[16] == $pl[8])
			echo "#FFF100";
		else if ($pl[16] == $pl[9])
			echo "#FFF100";
		else if ($pl[16] == $pl[10])
			echo "#FFF100";
		else if ($pl[16] == $pl[11])
			echo "#F58220";
		else if ($pl[16] == $pl[12])
			echo "#F58220";
		else if ($pl[16] == $pl[13])
			echo "#F58220";
		else if ($pl[16] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    ">
	<?php
		if (($pl[16] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[16] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[16] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[16] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[16] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[16] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[16] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[16] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[16] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[16] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[16] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[16] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[16] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[16] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[16] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[16] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[16] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[16] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[16] == $pl[0])
			echo "#D4AF37";
		else if ($pl[16] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[16] == $pl[2])
			echo "#cd7f32";
		else if ($pl[16] == $pl[3])
			echo "#00FF01";
		else if ($pl[16] == $pl[4])
			echo "#00FF01";
		else if ($pl[16] == $pl[5])
			echo "#00FF01";
		else if ($pl[16] == $pl[6])
			echo "#00FF01";
		else if ($pl[16] == $pl[7])
			echo "#FFF100";
		else if ($pl[16] == $pl[8])
			echo "#FFF100";
		else if ($pl[16] == $pl[9])
			echo "#FFF100";
		else if ($pl[16] == $pl[10])
			echo "#FFF100";
		else if ($pl[16] == $pl[11])
			echo "#F58220";
		else if ($pl[16] == $pl[12])
			echo "#F58220";
		else if ($pl[16] == $pl[13])
			echo "#F58220";
		else if ($pl[16] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    "><a href = 
   	<?php
		if (($pl[16] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[16] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[16] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[16] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[16] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[16] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[16] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[16] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[16] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[16] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[16] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[16] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[16] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[16] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[16] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[16] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[16] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[16] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[16] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[16] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[16] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[16] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[16] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[16] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[16] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[16] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[16] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[16] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[16] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[16] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[16] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[16] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[16] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[16] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[16] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[16] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
  <tr>
    <th style = "background-color:
    <?php
		if ($pl[17] == $pl[0])
			echo "#D4AF37";
		else if ($pl[17] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[17] == $pl[2])
			echo "#cd7f32";
		else if ($pl[17] == $pl[3])
			echo "#00FF01";
		else if ($pl[17] == $pl[4])
			echo "#00FF01";
		else if ($pl[17] == $pl[5])
			echo "#00FF01";
		else if ($pl[17] == $pl[6])
			echo "#00FF01";
		else if ($pl[17] == $pl[7])
			echo "#FFF100";
		else if ($pl[17] == $pl[8])
			echo "#FFF100";
		else if ($pl[17] == $pl[9])
			echo "#FFF100";
		else if ($pl[17] == $pl[10])
			echo "#FFF100";
		else if ($pl[17] == $pl[11])
			echo "#F58220";
		else if ($pl[17] == $pl[12])
			echo "#F58220";
		else if ($pl[17] == $pl[13])
			echo "#F58220";
		else if ($pl[17] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    ">
    <?php
		if ($pl[17] == $pl[0])
			echo "1";
		else if ($pl[17] == $pl[1])
			echo "2";
		else if ($pl[17] == $pl[2])
			echo "3";
		else if ($pl[17] == $pl[3])
			echo "4";
		else if ($pl[17] == $pl[4])
			echo "5";
		else if ($pl[17] == $pl[5])
			echo "6";
		else if ($pl[17] == $pl[6])
			echo "7";
		else if ($pl[17] == $pl[7])
			echo "8";
		else if ($pl[17] == $pl[8])
			echo "9";
		else if ($pl[17] == $pl[9])
			echo "10";
		else if ($pl[17] == $pl[10])
			echo "11";
		else if ($pl[17] == $pl[11])
			echo "12";
		else if ($pl[17] == $pl[12])
			echo "13";
		else if ($pl[17] == $pl[13])
			echo "14";
		else if ($pl[17] == $pl[14])
			echo "15";
		else if ($pl[17] == $pl[15])
			echo "16";
		else if ($pl[17] == $pl[16])
			echo "17";
		else 
			echo "18";
	?>
    </th>
    <th style = "background-color:
    <?php
		if ($pl[17] == $pl[0])
			echo "#D4AF37";
		else if ($pl[17] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[17] == $pl[2])
			echo "#cd7f32";
		else if ($pl[17] == $pl[3])
			echo "#00FF01";
		else if ($pl[17] == $pl[4])
			echo "#00FF01";
		else if ($pl[17] == $pl[5])
			echo "#00FF01";
		else if ($pl[17] == $pl[6])
			echo "#00FF01";
		else if ($pl[17] == $pl[7])
			echo "#FFF100";
		else if ($pl[17] == $pl[8])
			echo "#FFF100";
		else if ($pl[17] == $pl[9])
			echo "#FFF100";
		else if ($pl[17] == $pl[10])
			echo "#FFF100";
		else if ($pl[17] == $pl[11])
			echo "#F58220";
		else if ($pl[17] == $pl[12])
			echo "#F58220";
		else if ($pl[17] == $pl[13])
			echo "#F58220";
		else if ($pl[17] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    ">
	<?php
		if (($pl[17] == $pash) && ($ashused == 3))
		{
			echo "Ashe";
			$ashused = 2;
		}
		else if (($pl[17] == $pcai) && ($caiused == 3))
		{
			echo "Caitlyn";
			$caiused = 2;
		}
		else if (($pl[17] == $pcor) && ($corused == 3))
		{
			echo "Corki";
			$corused = 2;
		}
		else if (($pl[17] ==$pdra) && ($draused == 3))
		{
			echo "Draven";
			$draused = 2;
		}
		else if (($pl[17] == $pezr) && ($ezrused == 3))
		{
			echo "Ezreal";
			$ezrused = 2;
		}
		else if (($pl[17] == $ptwi) && ($twiused == 3))
		{
			echo "Twitch";
			$twiused = 2;
		}
		else if (($pl[17] == $pjhi) && ($jhiused == 3))
		{
			echo "Jhin";
			$jhiused = 2;
		}
		else if (($pl[17] == $pjin) && ($jinused == 3))
		{
			echo "Jinx";
			$jinused = 2;
		}
		else if (($pl[17] == $pkal) && ($kalused == 3))
		{
			echo "Kalista";
			$kalused = 2;
		}
		else if (($pl[17] == $pkog) && ($kogused == 3))
		{
			echo "Kogmaw";
			$kogused = 2;
		}
		else if (($pl[17] == $pluc) && ($lucused == 3))
		{
			echo "Lucian";
			$lucused = 2;
		}
		else if (($pl[17] == $pmis) && ($misused == 3))
		{
			echo "Miss Fortune";
			$misused = 2;
		}
		else if (($pl[17] == $pqui) && ($quiused == 3))
		{
			echo "Quinn";
			$quiused = 2;
		}
		else if (($pl[17] == $psiv) && ($sivused == 3))
		{
			echo "Sivir";
			$sivused = 2;
		}
		else if (($pl[17] == $ptri) && ($triused == 3))
		{
			echo "Tristana";
			$triused = 2;
		}
		else if (($pl[17] == $purg) && ($urgused == 3))
		{
			echo "Urgot";
			$urgused = 2;
		}
		else if (($pl[17] == $pvar) && ($varused == 3))
		{
			echo "Varus";
			$varused = 2;
		}
		else if (($pl[17] == $pvay) && ($vayused == 3))
		{
			echo "Vayne";
			$vayused = 2;
		}
	?>
    </th> 
    <th style = "background-color:
    <?php
		if ($pl[17] == $pl[0])
			echo "#D4AF37";
		else if ($pl[17] == $pl[1])
			echo "#c0c0c0";
		else if ($pl[17] == $pl[2])
			echo "#cd7f32";
		else if ($pl[17] == $pl[3])
			echo "#00FF01";
		else if ($pl[17] == $pl[4])
			echo "#00FF01";
		else if ($pl[17] == $pl[5])
			echo "#00FF01";
		else if ($pl[17] == $pl[6])
			echo "#00FF01";
		else if ($pl[17] == $pl[7])
			echo "#FFF100";
		else if ($pl[17] == $pl[8])
			echo "#FFF100";
		else if ($pl[17] == $pl[9])
			echo "#FFF100";
		else if ($pl[17] == $pl[10])
			echo "#FFF100";
		else if ($pl[17] == $pl[11])
			echo "#F58220";
		else if ($pl[17] == $pl[12])
			echo "#F58220";
		else if ($pl[17] == $pl[13])
			echo "#F58220";
		else if ($pl[17] == $pl[14])
			echo "#F58220";
		else
			echo "#ED1C24";
	?>
    "><a href = 
   	<?php
		if (($pl[17] == $pash) && ($ashused == 2))
		{
			echo "Ashe.php";
			$ashused = 1;
		}
		else if (($pl[17] == $pcai) && ($caiused == 2))
		{
			echo "Caitlyn.php";
			$caiused = 1;
		}
		else if (($pl[17] == $pcor) && ($corused == 2))
		{
			echo "Corki.php";
			$corused = 1;
		}
		else if (($pl[17] == $pdra) && ($draused == 2))
		{
			echo "Draven.php";
			$draused = 1;
		}
		else if (($pl[17] == $pezr) && ($ezrused == 2))
		{
			echo "Ezreal.php";
			$ezrused = 1;
		}
		else if (($pl[17] == $ptwi) && ($twiused == 2))
		{
			echo "Twitch.php";
			$twiused = 1;
		}
		else if (($pl[17] == $pjhi) && ($jhiused == 2))
		{

			echo "Jhin.php";
			$jhiused = 1;
		}
		else if (($pl[17] == $pjin) && ($jinused == 2))
		{
			echo "Jinx.php";
			$jinused = 1;
		}
		else if (($pl[17] == $pkal) && ($kalused == 2))
		{
			echo "Kalista.php";
			$kalused = 1;
		}
		else if (($pl[17] == $pkog) && ($kogused == 2))
		{
			echo "Kogmaw.php";
			$kogused = 1;
		}
		else if (($pl[17] == $pluc) && ($lucused == 2))
		{
			echo "Lucian.php";
			$lucused = 1;
		}
		else if (($pl[17] == $pmis) && ($misused == 2))
		{
			echo "MissFortune.php";
			$misused = 1;
		}
		else if (($pl[17] == $pqui) && ($quiused == 2))
		{
			echo "Quinn.php";
			$quiused = 1;
		}
		else if (($pl[17] == $psiv) && ($sivused == 2))
		{
			echo "Sivir.php";
			$sivused = 1;
		}
		else if (($pl[17] == $ptri) && ($triused == 2))
		{
			echo "Tristana.php";
			$triused = 1;
		}
		else if (($pl[17] == $purg) && ($urgused == 2))
		{
			echo "Urgot.php";
			$urgused = 1;
		}
		else if (($pl[17] == $pvar) && ($varused == 2))
		{
			echo "Varus.php";
			$varused = 1;
		}
		else if (($pl[17] == $pvay) && ($vayused == 2))
		{
			echo "Vayne.php";
			$vayused = 1;
		}
	?>>
    <img src = 
    <?php
		if (($pl[17] == $pash) && ($ashused == 1))
		{
			echo "images/Ashe.png";
			$ashused = 0;
		}
		else if (($pl[17] == $pcai) && ($caiused == 1))
		{
			echo "images/Caitlyn.png";
			$caiused = 0;
		}
		else if (($pl[17] == $pcor) && ($corused == 1))
		{
			echo "images/Corki.png";
			$corused = 0;
		}
		else if (($pl[17] == $pdra) && ($draused == 1))
		{
			echo "images/Draven.png";
			$draused = 0;
		}
		else if (($pl[17] == $pezr) && ($ezrused == 1))
		{
			echo "images/Ezreal.png";
			$ezrused = 0;
		}
		else if (($pl[17] == $ptwi) && ($twiused == 1))
		{
			echo "images/Twitch.png";
			$twiused = 0;
		}
		else if (($pl[17] == $pjhi) && ($jhiused == 1))
		{
			echo "images/Jhin.png";
			$jhiused = 0;
		}
		else if (($pl[17] == $pjin) && ($jinused == 1))
		{
			echo "images/Jinx.png";
			$jinused = 0;
		}
		else if (($pl[17] == $pkal) && ($kalused == 1))
		{
			echo "images/Kalista.png";
			$kalused = 0;
		}
		else if (($pl[17] == $pkog) && ($kogused == 1))
		{
			echo "images/Kogmaw.png";
			$kogused = 0;
		}
		else if (($pl[17] == $pluc) && ($lucused == 1))
		{
			echo "images/Lucian.png";
			$lucused = 0;
		}
		else if (($pl[17] == $pmis) && ($misused == 1))
		{
			echo "images/MissFortune.png";
			$misused = 0;
		}
		else if (($pl[17] == $pqui) && ($quiused == 1))
		{
			echo "images/Quinn.png";
			$quiused = 0;
		}
		else if (($pl[17] == $psiv) && ($sivused == 1))
		{
			echo "images/Sivir.png";
			$sivused = 0;
		}
		else if (($pl[17] == $ptri) && ($triused == 1))
		{
			echo "images/Tristana.png";
			$triused = 0;
		}
		else if (($pl[17] == $purg) && ($urgused == 1))
		{
			echo "images/Urgot.png";
			$urgused = 0;
		}
		else if (($pl[17] == $pvar) && ($varused == 1))
		{
			echo "images/Varus.png";
			$varused = 0;
		}
		else if (($pl[17] == $pvay) && ($vayused == 1))
		{
			echo "images/Vayne.png";
			$vayused = 0;
		}
	?>
    height = "64px" width= "64px"/></th>
  </tr>
</table>
 </div>
 
 <div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commentlol";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="League.php" method="post">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <?php
if(isset($_POST["comment"]))
{
	$u = $_POST["comment"];
	$p = $_SESSION["validuser"];

	//Add user
	addCommentlol($u, $p);
	
}
?>
<iframe width="100%" height="300px" src="commentlol.php" name="iframe_a"></iframe>
</body>
</div>