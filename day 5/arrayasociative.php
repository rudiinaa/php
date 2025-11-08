<?php

$grade = array(
    "math"=>"2",
    "chemistry"=>"5",
    "art"=>"4"
);

$grade ['math']="9";

echo "nota per math eshte: " . $grade['math'];

foreach( $grade as $emriLandes => $nota){
    echo "per landen : " . $emriLandes. " nota eshte: ". $nota."<br>";
}
?>