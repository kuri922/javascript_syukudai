
<?php
$str="ABCDEFGHIJKLMNOPQRSTUVWXYZ";

//文字の長さを取得する

echo strlen($str) ."\n";

//文字を表示させる

echo substr($str,0) ."\n";

//Gが何文字目にあるか表示させる

//$result = array_search('G', $str);
//echo_r($result);

?>

<?php
$str =['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

$result = array_search('G', $str);
var_dump($result);

?>
