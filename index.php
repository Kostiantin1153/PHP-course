<?php
define("HGF", "First step", true);
echo hgf;
$name = "gogo";
function getHgf(){
	global $name;
	echo $name;
}
getHgf();
echo $name.'<br/>';
$g = "Google";
$Google = 1;
$Google++;
echo $$g.'<br/>';
$d = 23;
echo $d % $$g;
$r=6;
$r+=$d;
echo $r.'<br/>';
$r*=$d;
echo $r.'<br/>';

 
