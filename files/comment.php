<?php
session_start();

require("dbConnect.php");
require("functions.php");
?>
<body>
	<h1>Comment- </h1>
    
    <form name="comment" action="results.php" method="post">
    Comment: 
    </br>
   <input type="text" name="response" value="" checked>
    <input type="submit" value="Add">
    </form>
</body>