<?php

function chunky($arr, $part){
    $arr = array_chunk($arr, $part);
    if(($a = count($arr)-1) > 0){   
        if(count($arr[$a]) < $part){
            $arr[$a-1] = array_merge($arr[$a-1], $arr[$a]);
            unset($arr[$a]);
        }
		}		 
    return $arr;   
}


$arr = array('1', '2', '3', '4', '5');
$arr1 = chunky($arr, 2); //sub array terakhir tidak boleh dibagi 1
$arr2 = chunky($arr, 3); 
$arr3 = chunky($arr, 1); //sub array terakhir 1 karena dibagi 1

print_r($arr);
echo "</BR>";
echo "</BR>";
echo "</BR>";
echo "divide 2 : ";
print_r($arr1);
echo "</BR>";
echo "divide 3 : ";
print_r($arr2);
echo "</BR>";
echo "divide 1 : ";
print_r($arr3);
echo "</BR>";