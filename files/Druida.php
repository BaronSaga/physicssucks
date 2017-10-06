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
    height:1245px;
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

</h1>
</div>

<div id="nav">
<b><i>Games:</i></br>
<a href = "league.php"> League Of Legends (Marksmen)</a></br>
<a href = "Hearthstone.php"> Hearthstone (Constructed)</a></br>
<a href = "Heartharena.php"> Hearthstone (Arena)</a></br></b>
</div>
<div id = "comment">
<?php
$query = "SELECT NAME, COMMENT FROM commentdru";
$result = mysqli_query($GLOBALS['con'], $query);
?>
<body>
	<h1>Comment</h1>
    
     <form name="addComment" action="comment3.php" method="post"name="iframe_b">
    
    Comment: <input type="text" name="comment"><br/><br/>
    <input type="submit" value="Add">
    </form>
    <iframe width="100%" height="300px" src="comment3.php" name="iframe_b"></iframe>
</body>
</div>
<div id="section">
<h1><img src = "images/druidN.png" height="100px" width="377px"/>
</h1>
</br>
<h3>Hero</h3>
<img src = "images/Malfurion_Stormrage.gif" height ="197.5px" width = "143px"/>
</br>
<h3>Hero Power</h3>
<img src = "images/Shapeshift.png" height = "232.5px" width= "153.5px"/>
</br>
<h3>Legendaries</h3>
<img src = "images/Cenarius.gif" height = "184px" width= "133.3px"/>
<img src = "images/Malorne.gif" height = "184px" width= "133.3px"/>
<img src = "images/Avianna.gif" height = "184px" width= "133.3px"/>
<img src = "images/Fandral Staghelm.gif" height = "184px" width= "133.3px"/>
</br>

<h3>Bio</h3>
Malfurion Stormrage was the first night elf druid, and initiated the mainstream use of druidism among the night elven people ten millennia ago under tutelage of the demigod Cenarius within Val'Sharah. Through Malfurion's guidance, the kaldorei managed to successfully halt the Burning Legion's first invasion of Azeroth during the War of the Ancients. In its aftermath, he became the greatest of the world's archdruids. Malfurion Stormrage is the twin brother of Illidan Stormrage, as well as the loving and beloved husband of the high priestess of Elune, Tyrande Whisperwind. Together, the two have represented the highest leadership of the night elves ever since the fall of Queen Azshara and her Highborne caste.

Malfurion is often referred to as shan'do, which means "Honored Instructor" in Darnassian. Connected deeply to the ebb and flow of all life on Azeroth and bearing ten thousand years of responsibility and experience, he is one of the most powerful and venerated mortals of the Warcraft universe.
</div>

</body>