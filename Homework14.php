

<?php



function check($num1,$num2){

  //両方とも７５点以上の場合合格

    if($num1 > 75 and $num2 > 75){    
        echo("Pass");

    //合計が１４０点以上の場合合格

    }elseif($num1+$num2 >=140) {
        echo("Pass");

    //合計が１００点以上で、どちらかが９０点以上あれば合格

    }elseif($num1+$num2 >=100&&$num1 or $num2 >= 90){
        echo("Pass");

    //どれにも該当しない

     }else {
        echo("Fail");
     }
 }
 
 check(75,90);

?>
