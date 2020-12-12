<?php
if(!isset($_COOKIE["vtime"])){
	setcookie("vtime",date("y-m-d H:i:s"));
	echo "第一次访问"."<br>";
}else{
	echo "上次访问时间为：".$_COOKIE["vtime"];
	echo "<br>";
	setcookie("vtime",date("y-m-dH:i:s"),time()+60);
}
echo "本次访问时间为：".date("y-m-d H:i:s");
?>