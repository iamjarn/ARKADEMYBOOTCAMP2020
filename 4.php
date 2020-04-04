<?php

function validateColor($color) { 
	$cross = preg_match('/^#[A-F]{3}$/', $color);
	$check = preg_match('/^#[a-f0-9]{6}$/', $color);
	
if($cross) {
	echo $color." </BR>";
	echo "Format kode Hex benar!";
} 
  else if($check) {
	echo $color." </BR>";
	echo "Format kode Hex benar!";
}
	else {
	echo $color." </BR>";	
	echo "Format kode Hex salah!";
}
}

echo validateColor("#FFF");
echo "</BR>";
echo validateColor("#e3e3e3");
echo "</BR>";
echo validateColor("#ata910");
echo "</BR>";