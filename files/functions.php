<?php

function login($name,$password) //method
{
	$result = mysqli_query($GLOBALS['con'], "SELECT NAME, PASSWORD FROM users WHERE NAME='$name' AND PASSWORD='$password'");//sending something to the database
	
	if(mysqli_num_rows($result) > 0)
		return true;
	else
		return false;
}


function add($name, $password)
{
	$query = "INSERT INTO users (NAME, PASSWORD) VALUES ('$name', '$password')";
	
	mysqli_query($GLOBALS['con'], $query);
}

function nameExists($name)
{
	$result = mysqli_query($GLOBALS['con'], "SELECT NAME FROM users WHERE NAME = '$name'");
	
	if(mysqli_num_rows($result) > 0)
		return true;
	else
		return false;	
}

function getComment($page)
{
	$result = mysqli_query($GLOBALS['con'], "SELECT COMMENT FROM comment1");
	
	return $result;
}
function addComment($comment, $name)
{
	$query = "INSERT INTO comment1 (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}

function addCommentpal($comment, $name)
{
	$query = "INSERT INTO commentpal (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentdru($comment, $name)
{
	$query = "INSERT INTO commentdru (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentmag($comment, $name)
{
	$query = "INSERT INTO commentmag (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentwar($comment, $name)
{
	$query = "INSERT INTO commentwar (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentsha($comment, $name)
{
	$query = "INSERT INTO commentsha (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentwarr($comment, $name)
{
	$query = "INSERT INTO commentwarr (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentpri($comment, $name)
{
	$query = "INSERT INTO commentpri (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentrog($comment, $name)
{
	$query = "INSERT INTO commentrog (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}

function addCommenthun($comment, $name)
{
	$query = "INSERT INTO commenthun (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}


function addCommentarena($comment, $name)
{
	$query = "INSERT INTO commentarena (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function deleteVoteArena($NAME)
{
	$user = $_SESSION["validuser"];
	$query = "DELETE FROM votehearth WHERE NAME = '$user'"; 
	mysqli_query($GLOBALS['con'], $query);
}
function addVoteArena($NAME, $PALA, $DRUI, $MAGE, $WARL, $SHAM, $WARR, $PRIE, $ROGU, $HUNT)
{
	$query = "INSERT INTO votehearth (NAME, PALA, DRUI, MAGE, WARL, SHAM, WARR, PRIE, ROGU, HUNT) VALUES ('$NAME','$PALA', '$DRUI', '$MAGE', '$WARL', '$SHAM', '$WARR', '$PRIE', '$ROGU', '$HUNT')";
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentKogmaw($comment, $name)
{
	$query = "INSERT INTO commentkogmaw (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentlol($comment, $name)
{
	$query = "INSERT INTO commentlol (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentAshe($comment, $name)
{
	$query = "INSERT INTO commentashe (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentSivir($comment, $name)
{
	$query = "INSERT INTO commentsivir (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentTwitch($comment, $name)
{
	$query = "INSERT INTO commenttwitch (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentJinx($comment, $name)
{
	$query = "INSERT INTO commentjinx (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentJhin($comment, $name)
{
	$query = "INSERT INTO commentjhin (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentMissFortune($comment, $name)
{
	$query = "INSERT INTO commentmissfortune (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentVarus($comment, $name)
{
	$query = "INSERT INTO commentvarus (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentCaityln($comment, $name)
{
	$query = "INSERT INTO commentcaityln(COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentDraven($comment, $name)
{
	$query = "INSERT INTO commentdraven (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentVayne($comment, $name)
{
	$query = "INSERT INTO commentvayne (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentEzreal($comment, $name)
{
	$query = "INSERT INTO commentezreal (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentLucian($comment, $name)
{
	$query = "INSERT INTO commentlucian (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentTristana($comment, $name)
{
	$query = "INSERT INTO commenttristana (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentQuinn($comment, $name)
{
	$query = "INSERT INTO commentquinn (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentUrgot($comment, $name)
{
	$query = "INSERT INTO commenturgot (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentKalista($comment, $name)
{
	$query = "INSERT INTO commentkalista (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function addCommentCorki($comment, $name)
{
	$query = "INSERT INTO commentcorki (COMMENT, NAME) VALUES ('$comment', '$name')";
	
	mysqli_query($GLOBALS['con'], $query);
}
function deleteVoteLeague($NAME)
{
	$user = $_SESSION["validuser"];
	$query = "DELETE FROM voteleague WHERE NAME = '$user'";
	mysqli_query($GLOBALS['con'], $query);
}
function addVoteLeague($NAME, $KOG, $ASH, $SIV, $TWI, $JIN, $JHI, $MIS, $VAR, $CAI, $DRA, $VAY, $EZR, $LUC, $TRI, $QUI, $URG, $KAL, $COR)
{
	$query = "INSERT INTO voteleague (NAME, KOG, ASH, SIV, TWI, JIN, JHI, MIS, VAR, CAI, DRA, VAY, EZR, LUC, TRI, QUI, URG, KAL, COR) VALUES ('$NAME','$KOG', '$ASH', '$SIV', '$TWI', '$JIN', '$JHI', '$MIS', '$VAR', '$CAI','$DRA','$VAY','$EZR','$LUC','$TRI','$QUI','$URG','$KAL','$COR')";
	mysqli_query($GLOBALS['con'], $query);
}

function deleteVote($NAME)
{
	$user = $_SESSION["validuser"];
	$query = "DELETE FROM votehearthstone WHERE NAME = '$user'";
	mysqli_query($GLOBALS['con'], $query);
}
function addVote($NAME, $PALA, $DRUI, $MAGE, $WARL, $SHAM, $WARR, $PRIE, $ROGU, $HUNT)
{
	$query = "INSERT INTO votehearthstone (NAME, PALA, DRUI, MAGE, WARL, SHAM, WARR, PRIE, ROGU, HUNT) VALUES ('$NAME','$PALA', '$DRUI', '$MAGE', '$WARL', '$SHAM', '$WARR', '$PRIE', '$ROGU', '$HUNT')";
	mysqli_query($GLOBALS['con'], $query);
}
?>