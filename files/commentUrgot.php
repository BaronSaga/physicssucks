<meta http-equiv="refresh" content=".5" >
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
<table>
<?php
$query = "SELECT NAME, COMMENT FROM commenturgot";
$result = mysqli_query($GLOBALS['con'], $query);
?>

<?php
while($row = mysqli_fetch_assoc($result))
	echo "<tr><td>".$row["NAME"]."</td><td>".$row["COMMENT"]."</td></tr>";

?>
</table>
