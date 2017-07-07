<?php
	$hash=$_GET["hash"];
	switch($hash){
			case "first" :echo "<h1>这是第一个</h1>";break;
			case "second" :echo "<h1>这是第二个</h1>";break;
			case "third" :echo "<h1>这是第三个</h1>";break;
		}

?>