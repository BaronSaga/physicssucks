<?php
session_start();

if(!isset($_SESSION["validuser"]))
{
	echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=index.php\">";
	exit();
}

require("dbConnect.php");
require("functions.php");

if(isset($_POST["dropOne"]) && ($_POST["dropTwo"]) && ($_POST["dropThree"]) && ($_POST["dropFour"]) && ($_POST["dropFive"]) && ($_POST["dropSix"]) && ($_POST["dropSeven"]) && ($_POST["dropEight"]) && ($_POST["dropNine"])&& ($_POST["dropTen"])&& ($_POST["dropEleven"])&& ($_POST["dropTwelve"])&& ($_POST["dropThirteen"])&& ($_POST["dropFourteen"])&& ($_POST["dropFifteen"])&& ($_POST["dropSixteen"])&& ($_POST["dropSeventeen"])&& ($_POST["dropEighteen"]))
{
$NAME = 0;
$KOG = 0;
$ASH = 0;
$SIV = 0;
$TWI = 0;
$JIN= 0;
$JHI= 0;
$MIS= 0;
$VAR= 0;
$CAI= 0;
$DRA= 0;
$VAY= 0;
$EZR= 0;
$LUC= 0;
$TRI= 0;
$QUI= 0;
$URG= 0;
$KAL= 0;
$COR= 0;
	

	$one = $_POST["dropOne"];
		if ($one == "kog")
		{$KOG = 1;}
		if ($one == "ash")
		{$ASH = 1;}
		if ($one == "siv")
		{$SIV = 1;}
		if ($one == "twi")
		{$TWI = 1;}
		if ($one == "jin")
		{$JIN = 1;}
		if ($one == "jhi")
		{$JHI = 1;}
		if ($one == "mis")
		{$MIS = 1;}
		if ($one == "var")
		{$VAR = 1;}
		if ($one == "cai")
		{$CAI = 1;}
		if ($one == "dra")
		{$DRA = 1;}
		if ($one == "vay")
		{$VAY = 1;}
		if ($one == "ezr")
		{$EZR = 1;}
		if ($one == "luc")
		{$LUC = 1;}
		if ($one == "tri")
		{$TRI = 1;}
		if ($one == "qui")
		{$QUI = 1;}
		if ($one == "urg")
		{$URG = 1;}
		if ($one == "kal")
		{$KAL = 1;}
		if ($one == "cor")
		{$COR = 1;}

		
		
	
	$two = $_POST["dropTwo"];
		if ($two == "kog")
		{$KOG = 2;}
		if ($two == "ash")
		{$ASH = 2;}
		if ($two == "siv")
		{$SIV = 2;}
		if ($two == "twi")
		{$TWI = 2;}
		if ($two == "jin")
		{$JIN = 2;}
		if ($two == "jhi")
		{$JHI = 2;}
		if ($two == "mis")
		{$MIS = 2;}
		if ($two == "var")
		{$VAR = 2;}
		if ($two == "cai")
		{$CAI = 2;}
		if ($two == "dra")
		{$DRA = 2;}
		if ($two == "vay")
		{$VAY = 2;}
		if ($two == "ezr")
		{$EZR = 2;}
		if ($two == "luc")
		{$LUC = 2;}
		if ($two == "tri")
		{$TRI = 2;}
		if ($two == "qui")
		{$QUI = 2;}
		if ($two == "urg")
		{$URG = 2;}
		if ($two == "kal")
		{$KAL = 2;}
		if ($two == "cor")
		{$COR = 2;}
		
		$three = $_POST["dropThree"];
		if ($three == "kog")
		{$KOG = 3;}
		if ($three =="ash")
		{$ASH = 3;}
		if ($three == "siv")
		{$SIV = 3;}
		if ($three == "twi")
		{$TWI = 3;}
		if ($three == "jin")
		{$JIN = 3;}
		if ($three == "jhi")
		{$JHI = 3;}
		if ($three == "mis")
		{$MIS = 3;}
		if ($three == "var")
		{$VAR = 3;}
		if ($three == "cai")
		{$CAI = 3;}
		if ($three == "dra")
		{$DRA = 3;}
		if ($three == "vay")
		{$VAY = 3;}
		if ($three == "ezr")
		{$EZR = 3;}
		if ($three == "luc")
		{$LUC = 3;}
		if ($three == "tri")
		{$TRI = 3;}
		if ($three == "qui")
		{$QUI = 3;}
		if ($three == "urg")
		{$URG = 3;}
		if ($three == "kal")
		{$KAL = 3;}
		if ($three == "cor")
		{$COR = 3;}
		
		$four = $_POST["dropFour"];
		if ($four == "kog")
		$KOG = 4;
		if ($four == "ash")
		$ASH = 4;
		if ($four == "siv")
		$SIV = 4;
		if ($four == "twi")
		$TWI = 4;
		if ($four == "jin")
		$JIN = 4;
		if ($four == "jhi")
		$JHI = 4;
		if ($four == "mis")
		$MIS = 4;
		if ($four == "var")
		$VAR = 4;
		if ($four == "cai")
		$CAI = 4;
		if ($four == "dra")
		$DRA = 4;
		if ($four == "vay")
		$VAY = 4;
		if ($four == "ezr")
		$EZR = 4;
		if ($four == "luc")
		$LUC = 4;
		if ($four == "tri")
		$TRI = 4;
		if ($four == "qui")
		$QUI = 4;
		if ($four == "urg")
		$URG = 4;
		if ($four == "kal")
		$KAL = 4;
		if ($four == "cor")
		$COR = 4;
	
		$five = $_POST["dropFive"];
		if ($five == "kog")
		$KOG = 5;
		if ($five == "ash")
		$ASH = 5;
		if ($five == "siv")
		$SIV = 5;
		if ($five == "twi")
		$TWI = 5;
		if ($five == "jin")
		$JIN = 5;
		if ($five == "jhi")
		$JHI = 5;
		if ($five == "mis")
		$MIS = 5;
		if ($five == "var")
		$VAR = 5;
		if ($five == "cai")
		$CAI = 5;
		if ($five == "dra")
		$DRA = 5;
		if ($five == "vay")
		$VAY = 5;
		if ($five == "ezr")
		$EZR = 5;
		if ($five == "luc")
		$LUC = 5;
		if ($five == "tri")
		$TRI = 5;
		if ($five == "qui")
		$QUI = 5;
		if ($five == "urg")
		$URG = 5;
		if ($five == "kal")
		$KAL = 5;
		if ($five == "cor")
		$COR = 5;
		
		$six = $_POST["dropSix"];
		if ($six == "kog")
		$KOG = 6;
		if ($six == "ash")
		$ASH = 6;
		if ($six == "siv")
		$SIV = 6;
		if ($six == "twi")
		$TWI = 6;
		if ($six == "jin")
		$JIN = 6;
		if ($six == "jhi")
		$JHI = 6;
		if ($six == "mis")
		$MIS = 6;
		if ($six == "var")
		$VAR = 6;
		if ($six == "cai")
		$CAI = 6;
		if ($six == "dra")
		$DRA = 6;
		if ($six == "vay")
		$VAY = 6;
		if ($six == "ezr")
		$EZR = 6;
		if ($six == "luc")
		$LUC = 6;
		if ($six == "tri")
		$TRI = 6;
		if ($six == "qui")
		$QUI = 6;
		if ($six == "urg")
		$URG = 6;
		if ($six == "kal")
		$KAL = 6;
		if ($six == "cor")
		$COR = 6;
		
		$seven = $_POST["dropSeven"];
		if ($seven == "kog")
		$KOG = 7;
		if ($seven == "ash")
		$ASH = 7;
		if ($seven == "siv")
		$SIV = 7;
		if ($seven == "twi")
		$TWI = 7;
		if ($seven == "jin")
		$JIN = 7;
		if ($seven == "jhi")
		$JHI = 7;
		if ($seven == "mis")
		$MIS = 7;
		if ($seven == "var")
		$VAR = 7;
		if ($seven == "cai")
		$CAI = 7;
		if ($seven == "dra")
		$DRA = 7;
		if ($seven == "vay")
		$VAY = 7;
		if ($seven == "ezr")
		$EZR = 7;
		if ($seven == "luc")
		$LUC = 7;
		if ($seven == "tri")
		$TRI = 7;
		if ($seven == "qui")
		$QUI = 7;
		if ($seven == "urg")
		$URG = 7;
		if ($seven == "kal")
		$KAL = 7;
		if ($seven == "cor")
		$COR = 7;
		
		$eight = $_POST["dropEight"];
		if ($eight == "kog")
		$KOG = 8;
		if ($eight == "ash")
		$ASH = 8;
		if ($eight == "siv")
		$SIV = 8;
		if ($eight == "twi")
		$TWI = 8;
		if ($eight == "jin")
		$JIN = 8;
		if ($eight == "jhi")
		$JHI = 8;
		if ($eight == "mis")
		$MIS = 8;
		if ($eight == "var")
		$VAR = 8;
		if ($eight == "cai")
		$CAI = 8;
		if ($eight == "dra")
		$DRA = 8;
		if ($eight == "vay")
		$VAY = 8;
		if ($eight == "ezr")
		$EZR = 8;
		if ($eight == "luc")
		$LUC = 8;
		if ($eight == "tri")
		$TRI = 8;
		if ($eight == "qui")
		$QUI = 8;
		if ($eight == "urg")
		$URG = 8;
		if ($eight == "kal")
		$KAL = 8;
		if ($eight == "cor")
		$COR = 8;
		
		$nine = $_POST["dropNine"];
		if ($nine == "kog")
		$KOG = 9;
		if ($nine == "ash")
		$ASH = 9;
		if ($nine == "siv")
		$SIV = 9;
		if ($nine == "twi")
		$TWI = 9;
		if ($nine == "jin")
		$JIN = 9;
		if ($nine == "jhi")
		$JHI = 9;
		if ($nine == "mis")
		$MIS = 9;
		if ($nine == "var")
		$VAR = 9;
		if ($nine == "cai")
		$CAI = 9;
		if ($nine == "dra")
		$DRA = 9;
		if ($nine == "vay")
		$VAY = 9;
		if ($nine == "ezr")
		$EZR = 9;
		if ($nine == "luc")
		$LUC = 9;
		if ($nine == "tri")
		$TRI = 9;
		if ($nine == "qui")
		$QUI = 9;
		if ($nine == "urg")
		$URG = 9;
		if ($nine == "kal")
		$KAL = 9;
		if ($nine == "cor")
		$COR = 9;
		
		$ten = $_POST["dropTen"];
		if ($ten == "kog")
		$KOG = 10;
		if ($ten == "ash")
		$ASH = 10;
		if ($ten == "siv")
		$SIV = 10;
		if ($ten == "twi")
		$TWI = 10;
		if ($ten == "jin")
		$JIN = 10;
		if ($ten == "jhi")
		$JHI = 10;
		if ($ten == "mis")
		$MIS = 10;
		if ($ten == "var")
		$VAR = 10;
		if ($ten == "cai")
		$CAI = 10;
		if ($ten == "dra")
		$DRA = 10;
		if ($ten == "vay")
		$VAY = 10;
		if ($ten == "ezr")
		$EZR = 10;
		if ($ten == "luc")
		$LUC = 10;
		if ($ten == "tri")
		$TRI = 10;
		if ($ten == "qui")
		$QUI = 10;
		if ($ten == "urg")
		$URG = 10;
		if ($ten == "kal")
		$KAL = 10;
		if ($ten == "cor")
		$COR = 10;
		
		$eleven = $_POST["dropEleven"];
		if ($eleven == "kog")
		$KOG = 11;
		if ($eleven == "ash")
		$ASH = 11;
		if ($eleven == "siv")
		$SIV = 11;
		if ($eleven == "twi")
		$TWI = 11;
		if ($eleven == "jin")
		$JIN = 11;
		if ($eleven == "jhi")
		$JHI = 11;
		if ($eleven == "mis")
		$MIS = 11;
		if ($eleven == "var")
		$VAR = 11;
		if ($eleven == "cai")
		$CAI = 11;
		if ($eleven == "dra")
		$DRA = 11;
		if ($eleven == "vay")
		$VAY = 11;
		if ($eleven == "ezr")
		$EZR = 11;
		if ($eleven == "luc")
		$LUC = 11;
		if ($eleven == "tri")
		$TRI = 11;
		if ($eleven == "qui")
		$QUI = 11;
		if ($eleven == "urg")
		$URG = 11;
		if ($eleven == "kal")
		$KAL = 11;
		if ($eleven == "cor")
		$COR = 11;
		
		$twelve = $_POST["dropTwelve"];
		if ($twelve == "kog")
		$KOG = 12;
		if ($twelve == "ash")
		$ASH = 12;
		if ($twelve == "siv")
		$SIV = 12;
		if ($twelve == "twi")
		$TWI = 12;
		if ($twelve == "jin")
		$JIN = 12;
		if ($twelve == "jhi")
		$JHI = 12;
		if ($twelve == "mis")
		$MIS = 12;
		if ($twelve == "var")
		$VAR = 12;
		if ($twelve == "cai")
		$CAI = 12;
		if ($twelve == "dra")
		$DRA = 12;
		if ($twelve == "vay")
		$VAY = 12;
		if ($twelve == "ezr")
		$EZR = 12;
		if ($twelve == "luc")
		$LUC = 12;
		if ($twelve == "tri")
		$TRI = 12;
		if ($twelve == "qui")
		$QUI = 12;
		if ($twelve == "urg")
		$URG = 12;
		if ($twelve == "kal")
		$KAL = 12;
		if ($twelve == "cor")
		$COR = 12;
		
		$thirteen = $_POST["dropThirteen"];
		if ($thirteen == "kog")
		$KOG = 13;
		if ($thirteen == "ash")
		$ASH = 13;
		if ($thirteen == "siv")
		$SIV = 13;
		if ($thirteen == "twi")
		$TWI = 13;
		if ($thirteen == "jin")
		$JIN = 13;
		if ($thirteen == "jhi")
		$JHI = 13;
		if ($thirteen == "mis")
		$MIS = 13;
		if ($thirteen == "var")
		$VAR = 13;
		if ($thirteen == "cai")
		$CAI = 13;
		if ($thirteen == "dra")
		$DRA = 13;
		if ($thirteen == "vay")
		$VAY = 13;
		if ($thirteen == "ezr")
		$EZR = 13;
		if ($thirteen == "luc")
		$LUC = 13;
		if ($thirteen == "tri")
		$TRI = 13;
		if ($thirteen == "qui")
		$QUI = 13;
		if ($thirteen == "urg")
		$URG = 13;
		if ($thirteen == "kal")
		$KAL = 13;
		if ($thirteen == "cor")
		$COR = 13;
		
		$fourteen = $_POST["dropFourteen"];
		if ($fourteen == "kog")
		$KOG = 14;
		if ($fourteen == "ash")
		$ASH = 14;
		if ($fourteen == "siv")
		$SIV = 14;
		if ($fourteen == "twi")
		$TWI = 14;
		if ($fourteen == "jin")
		$JIN = 14;
		if ($fourteen == "jhi")
		$JHI = 14;
		if ($fourteen == "mis")
		$MIS = 14;
		if ($fourteen == "var")
		$VAR = 14;
		if ($fourteen == "cai")
		$CAI = 14;
		if ($fourteen == "dra")
		$DRA = 14;
		if ($fourteen == "vay")
		$VAY = 14;
		if ($fourteen == "ezr")
		$EZR = 14;
		if ($fourteen == "luc")
		$LUC = 14;
		if ($fourteen == "tri")
		$TRI = 14;
		if ($fourteen == "qui")
		$QUI = 14;
		if ($fourteen == "urg")
		$URG = 14;
		if ($fourteen == "kal")
		$KAL = 14;
		if ($fourteen == "cor")
		$COR = 14;
		
		$fifteen = $_POST["dropFifteen"];
		if ($fifteen == "kog")
		$KOG = 15;
		if ($fifteen == "ash")
		$ASH = 15;
		if ($fifteen == "siv")
		$SIV = 15;
		if ($fifteen == "twi")
		$TWI = 15;
		if ($fifteen == "jin")
		$JIN = 15;
		if ($fifteen == "jhi")
		$JHI = 15;
		if ($fifteen == "mis")
		$MIS = 15;
		if ($fifteen == "var")
		$VAR = 15;
		if ($fifteen == "cai")
		$CAI = 15;
		if ($fifteen == "dra")
		$DRA = 15;
		if ($fifteen == "vay")
		$VAY = 15;
		if ($fifteen == "ezr")
		$EZR = 15;
		if ($fifteen == "luc")
		$LUC = 15;
		if ($fifteen == "tri")
		$TRI = 15;
		if ($fifteen == "qui")
		$QUI = 15;
		if ($fifteen == "urg")
		$URG = 15;
		if ($fifteen == "kal")
		$KAL = 15;
		if ($fifteen == "cor")
		$COR = 15;
		
		$sixteen = $_POST["dropSixteen"];
		if ($sixteen == "kog")
		$KOG = 16;
		if ($sixteen == "ash")
		$ASH = 16;
		if ($sixteen == "siv")
		$SIV = 16;
		if ($sixteen == "twi")
		$TWI = 16;
		if ($sixteen == "jin")
		$JIN = 16;
		if ($sixteen == "jhi")
		$JHI = 16;
		if ($sixteen == "mis")
		$MIS = 16;
		if ($sixteen == "var")
		$VAR = 16;
		if ($sixteen == "cai")
		$CAI = 16;
		if ($sixteen == "dra")
		$DRA = 16;
		if ($sixteen == "vay")
		$VAY = 16;
		if ($sixteen == "ezr")
		$EZR = 16;
		if ($sixteen == "luc")
		$LUC = 16;
		if ($sixteen == "tri")
		$TRI = 16;
		if ($sixteen == "qui")
		$QUI = 16;
		if ($sixteen == "urg")
		$URG = 16;
		if ($sixteen == "kal")
		$KAL = 16;
		if ($sixteen == "cor")
		$COR = 16;
		
		$seventeen = $_POST["dropSeventeen"];
		if ($seventeen == "kog")
		$KOG = 17;
		if ($seventeen == "ash")
		$ASH = 17;
		if ($seventeen == "siv")
		$SIV = 17;
		if ($seventeen == "twi")
		$TWI = 17;
		if ($seventeen == "jin")
		$JIN = 17;
		if ($seventeen == "jhi")
		$JHI = 17;
		if ($seventeen == "mis")
		$MIS = 17;
		if ($seventeen == "var")
		$VAR = 17;
		if ($seventeen == "cai")
		$CAI = 17;
		if ($seventeen == "dra")
		$DRA = 17;
		if ($seventeen == "vay")
		$VAY = 17;
		if ($seventeen == "ezr")
		$EZR = 17;
		if ($seventeen == "luc")
		$LUC = 17;
		if ($seventeen == "tri")
		$TRI = 17;
		if ($seventeen == "qui")
		$QUI = 17;
		if ($seventeen == "urg")
		$URG = 17;
		if ($seventeen == "kal")
		$KAL = 17;
		if ($seventeen == "cor")
		$COR = 17;
		
		$eighteen = $_POST["dropEighteen"];
		if ($eighteen == "kog")
		$KOG = 18;
		if ($eighteen == "ash")
		$ASH = 18;
		if ($eighteen == "siv")
		$SIV = 18;
		if ($eighteen == "twi")
		$TWI = 18;
		if ($eighteen == "jin")
		$JIN = 18;
		if ($eighteen == "jhi")
		$JHI = 18;
		if ($eighteen == "mis")
		$MIS = 18;
		if ($eighteen == "var")
		$VAR = 18;
		if ($eighteen == "cai")
		$CAI = 18;
		if ($eighteen == "dra")
		$DRA = 18;
		if ($eighteen == "vay")
		$VAY = 18;
		if ($eighteen == "ezr")
		$EZR = 18;
		if ($eighteen == "luc")
		$LUC = 18;
		if ($eighteen == "tri")
		$TRI = 18;
		if ($eighteen == "qui")
		$QUI = 18;
		if ($eighteen == "urg")
		$URG = 18;
		if ($eighteen == "kal")
		$KAL = 18;
		if ($eighteen == "cor")
		$COR = 18;
		
if (!($KOG == "no") && !($ASH == "no") && !($SIV == "no") && !($TWI == "no") && !($JIN == "no") && !($JHI == "no") && !($MIS == "no") && !($VAR == "no") && !($CAI== "no")&& !($DRA == "no")&& !($VAY == "no")&& !($EZR == "no")&& !($LUC == "no")&& !($TRI == "no")&& !($QUI == "no")&& !($URG == "no")&& !($KAL == "no")&& !($COR == "no"))
{ 
	if (!($KOG == $ASH) && !($KOG == $SIV) && !($KOG == $TWI) && !($KOG == $JIN) && !($KOG == $JHI) && !($KOG == $MIS) && !($KOG == $VAR) && !($KOG == $CAI)&& !($KOG == $DRA)&& !($KOG == $VAY)&& !($KOG == $EZR)&& !($KOG == $LUC)&& !($KOG == $TRI)&& !($KOG == $QUI)&& !($KOG == $URG)&& !($KOG == $KAL)&& !($KOG == $COR) && !($ASH == $SIV) && !($ASH == $TWI) && !($ASH == $JIN) && !($ASH == $JHI) && !($ASH == $MIS) && !($ASH == $VAR) && !($ASH == $CAI)&& !($ASH == $DRA)&& !($ASH == $VAY)&& !($ASH == $EZR)&& !($ASH == $LUC)&& !($ASH == $TRI)&& !($ASH == $QUI)&& !($ASH == $URG)&& !($ASH == $KAL)&& !($ASH == $COR) && !($SIV == $TWI) && !($SIV == $JIN) && !($SIV == $JHI) && !($SIV == $MIS) && !($SIV == $VAR) && !($SIV == $CAI) && !($SIV == $DRA) && !($SIV == $VAY) && !($SIV == $EZR) && !($SIV == $LUC) && !($SIV == $TRI) && !($SIV == $QUI) && !($SIV == $URG) && !($SIV == $KAL) && !($SIV == $COR) && !($TWI == $JIN) && !($TWI == $JHI) && !($TWI == $MIS) && !($TWI == $VAR) && !($TWI == $CAI)&& !($TWI == $DRA)&& !($TWI == $VAY)&& !($TWI == $EZR)&& !($TWI == $LUC)&& !($TWI == $TRI)&& !($TWI == $QUI)&& !($TWI == $URG)&& !($TWI == $KAL)&& !($TWI == $COR) && !($JIN == $JHI) && !($JIN == $MIS) && !($JIN == $VAR) && !($JIN == $CAI)&& !($JIN == $DRA)&& !($JIN == $VAY)&& !($JIN == $EZR)&& !($JIN == $LUC)&& !($JIN == $TRI)&& !($JIN == $QUI)&& !($JIN == $URG)&& !($JIN == $KAL)&& !($JIN == $COR) && !($JHI == $MIS) && !($JHI == $VAR) && !($JHI == $CAI)&& !($JHI == $DRA)&& !($JHI == $VAY)&& !($JHI == $EZR)&& !($JHI == $LUC)&& !($JHI == $TRI)&& !($JHI == $QUI)&& !($JHI == $URG)&& !($JHI == $KAL)&& !($JHI == $COR) && !($MIS == $VAR) && !($MIS == $CAI)&& !($MIS == $DRA)&& !($MIS == $VAY)&& !($MIS == $EZR)&& !($MIS == $LUC)&& !($MIS == $TRI)&& !($MIS == $QUI)&& !($MIS == $URG)&& !($MIS == $KAL)&& !($MIS == $COR) && !($VAR == $CAI)&& !($VAR == $DRA)&& !($VAR == $VAY)&& !($VAR == $EZR)&& !($VAR == $LUC)&& !($VAR == $TRI)&& !($VAR == $QUI)&& !($VAR == $URG)&& !($VAR == $KAL)&& !($VAR == $COR)&& !($CAI == $DRA)&& !($CAI == $VAY)&& !($CAI == $EZR)&& !($CAI == $LUC)&& !($CAI == $TRI)&& !($CAI == $QUI)&& !($CAI == $URG)&& !($CAI == $KAL)&& !($CAI == $COR)&& !($DRA == $VAY)&& !($DRA == $EZR)&& !($DRA == $LUC)&& !($DRA == $TRI)&& !($DRA == $QUI)&& !($DRA == $URG)&& !($DRA == $KAL)&& !($DRA == $COR)&& !($VAY == $EZR)&& !($VAY == $LUC)&& !($VAY == $TRI)&& !($VAY == $QUI)&& !($VAY == $URG)&& !($VAY == $KAL)&& !($VAY == $COR)&& !($EZR == $LUC)&& !($EZR == $TRI)&& !($EZR == $QUI)&& !($EZR == $URG)&& !($EZR == $KAL)&& !($EZR == $COR)&& !($LUC == $TRI)&& !($LUC == $QUI)&& !($LUC == $URG)&& !($LUC == $KAL)&& !($LUC == $COR)&& !($TRI == $QUI)&& !($TRI == $URG)&& !($TRI == $KAL)&& !($TRI == $COR)&& !($QUI == $URG)&& !($QUI == $KAL)&& !($QUI == $COR)&& !($URG == $KAL)&& !($URG == $COR)&& !($KAL == $COR))
	{
		$NAME = $_SESSION["validuser"];
		deleteVoteLeague($NAME);
		addVoteLeague($NAME, $KOG, $ASH, $SIV, $TWI, $JIN, $JHI, $MIS, $VAR, $CAI, $DRA, $VAY, $EZR, $LUC, $TRI, $QUI, $URG, $KAL, $COR);
	}
	else
	{
		echo"<script>alert(\"One or More of These Champions are Used Twice. Fix This Problem and Try Again.\");</script>";
	}
}
else
	echo"<script>alert(\"One or More of The Champions Were Not Picked. Fix This Problem and Try Again.\");</script>";
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
<h1><a href="League.php">
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
<a href = "voteleague.php"> League Of Legends (Marksmen)</a></br>
<a href = "vote.php"> Hearthstone (Constructed)</a></br>
<a href = "votearena.php"> Hearthstone (Arena)</a></br>
</div>

<div id="section">
<h1>League Voting:</h1>
<form name="vote" form action="voteLeague.php" method="post">
<table style="width:100%">
  <tr>
    <th style = "background-color:#D4AF37">1</th>
    <th style = "background-color:#D4AF37">
  <select name="dropOne">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
   <th style = "background-color:#D4AF37">2</th>
    <th style = "background-color:#D4AF37">
  <select name="dropTwo">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
    <th style = "background-color:#D4AF37">3</th>
    <th style = "background-color:#D4AF37">
  <select name="dropThree">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
    <th style = "background-color:#D4AF37">4</th>
    <th style = "background-color:#D4AF37">
  <select name="dropFour">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
    <th style = "background-color:#D4AF37">5</th>
    <th style = "background-color:#D4AF37">
  <select name="dropFive">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
    <th style = "background-color:#D4AF37">6</th>
    <th style = "background-color:#D4AF37">
  <select name="dropSix">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
    <th style = "background-color:#D4AF37">7</th>
    <th style = "background-color:#D4AF37">
  <select name="dropSeven">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
    <th style = "background-color:#D4AF37">8</th>
    <th style = "background-color:#D4AF37">
  <select name="dropEight">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
    <th style = "background-color:#D4AF37">9</th>
    <th style = "background-color:#D4AF37">
  <select name="dropNine">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">10</th>
    <th style = "background-color:#D4AF37">
  <select name="dropTen">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">11</th>
    <th style = "background-color:#D4AF37">
  <select name="dropEleven">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">12</th>
    <th style = "background-color:#D4AF37">
  <select name="dropTwelve">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">13</th>
    <th style = "background-color:#D4AF37">
  <select name="dropThirteen">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">14</th>
    <th style = "background-color:#D4AF37">
  <select name="dropFourteen">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">15</th>
    <th style = "background-color:#D4AF37">
  <select name="dropFifteen">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">16</th>
    <th style = "background-color:#D4AF37">
  <select name="dropSixteen">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">17</th>
    <th style = "background-color:#D4AF37">
  <select name="dropSeventeen">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
 <th style = "background-color:#D4AF37">18</th>
    <th style = "background-color:#D4AF37">
  <select name="dropEighteen">
    <option value="no"></option>
    <option value="kog">Kogmaw</option>
    <option value="ash">Ashe</option>
    <option value="siv">Sivir</option>
    <option value="twi">Twitch</option>
    <option value="jin">Jinx</option>
    <option value="jhi">Jhin</option>
    <option value="mis">Miss Fortune</option>
    <option value="var">Varus</option>
    <option value="cai">Caitlyn</option>
    <option value="dra">Draven</option>
    <option value="vay">Vayne</option>
    <option value="ezr">Ezreal</option>
    <option value="luc">Lucian</option>
    <option value="tri">Tristana</option>
    <option value="qui">Quinn</option>
    <option value="urg">Urgot</option>
    <option value="kal">Kalista</option>
    <option value="cor">Corki</option>
  </select>
</th>
 </tr>
</table>
<input type="submit" value="Vote">
</form>
</div>