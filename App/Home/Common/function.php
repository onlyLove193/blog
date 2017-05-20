<?php
function getCont($str,$len){
	$str = htmlspecialchars_decode($str);
	if(strlen($str) <= $len){
		return $str;
	}else{
		$i = 0;
		$con = '';
		while($i < $len){
			if(ord($str[$i]) < '0xa0'){
				$con .= substr($str, $i,1);
				$i++;
			}else{
				$con .= substr($str, $i,3);
				$i = $i+3;
			}
		}
		return $con;
	}
}