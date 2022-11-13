<?php 
$array = [1,2,3,4,5];
$map = array_map(function($x)
{
    return $x +1 ;
},$array);
print_r($map);

?>