<?php 
function lonelyinteger($a) {
    // Write your code here
    $arrlength = count($a);
    for($i = 0; $i < $arrlength; $i++){
        $temp = 0;
        for($j = 0; $j < $arrlength; $j++){
            if($a[$j]==$a[$i]){
                $temp++;
            }
        }
        if($temp==1){
            return $a[$i];
        }
    }
}
$arr = array(1,2,3,4,2,3,1);
echo lonelyinteger($arr);
?>