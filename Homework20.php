
<?php

//演習１、２

    $array = array(60,50,90,70,80,45);

//最大値を求める
    echo max($array) ."\n";

//最小値を求める
    echo min($array)."\n";

//最小値順にソート（関数使用）
    sort($array);
    var_dump($array)."\n";

//最小値順にソート（関数不使用）
    for($i = 0; $i < count($array) - 1; $i++) {
    for($j = $i+ 1; $j < count($array); $j++) {
    if($array[$i] > $array[$j]) {
    $num = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $num;
    } 
    }
    }
var_dump($array);
    
?>
    