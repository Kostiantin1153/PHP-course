<?php
define("HGF", "First step", true);
echo hgf;
$name = "gogo";
function getHgf(){
	global $name;
	echo $name;
}
getHgf();
 
?>