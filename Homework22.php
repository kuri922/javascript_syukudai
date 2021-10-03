<?php

$users = [
    ['名前' => '山田', '性別' =>'男', '数学' => 78, '国語' => 47, '英語' => 92],
    ['名前' => '田中', '性別' =>'女', '数学' => 12, '国語' => 88, '英語' => 67],
    ['名前' => '高橋', '性別' =>'男', '数学' => 56, '国語' => 34, '英語' => 77],
    ['名前' => '橋本', '性別' =>'女', '数学' => 97, '国語' => 55, '英語' => 45]
    ];

    $math = array_column($users, "数学");
    $language = array_column($users, "国語");
    $english = array_column($users,'英語');
    $count = count($users);



// 数学の最高得点者

    $max_math = max($math);
    for($i = 0; $i < $count; ++ $i) {
        if($max_math == $math[$i]) {
            echo $users[$i]["名前"]."\n";
        }
    }

// 国語の最低得点者

    $min_language = min($language);
for($i = 0; $i < $count; ++$i) {
    if($min_language == $language[$i]) {
        echo $users[$i]["名前"]."\n";
    }
}

// 数学の平均

$total = 0;
foreach($math as $value){
$total +=$value;
$ave = $total / count($users)."\n";
 }
echo($ave);

// 国語の平均

$total = 0;
foreach($language as $value){
$total +=$value;
$ave = $total / count($users)."\n";
 }
print($ave);

// 英語の平均

$total = 0;
foreach($english as $value){
$total +=$value;
$ave = $total / count($users)."\n";
 }
echo($ave);

$total=0;
foreach($users as $user ){
    if($user['性別']=='女'){ 
        print($user['英語']);
            foreach($users as $user['英語'] =>$total){
             $total = $total+$user['英語']; 
            //  $ave = $total / count($users)."\n";

}
    }
        }

echo($total)."\n";;
?>



