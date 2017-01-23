<?php

$min = rand(1, 100);
$max = rand(1, 100);
$a = range($min, $max);
$maxCount = count($a);
//var_dump($a);
//$b = 1;
  //echo"Элементы больше нуля и парные элементы "."<br>";
    for($i=0; $i < $maxCount; $i=$i+2) {
    if( $a[$i] > 0&&$a[$i]&2) {
       // echo " " . $a[$i] . " ";
    }

 }
//echo " ". $b ."<br>";
  echo "Элементы больше нуля и не парные элементы "."<br>";
  for($i=1; $i < $maxCount; $i=$i+2) {
      if ($a[$i] > 0 && $a[$i] & 1) {
          echo " " . $a[$i] . " ";
      }

  }

/*$arr=[];

for ($v=0;$v<=100;$v++)
{
    $arr[$v]=rand(1,9);
}

/**
 * @param $v
 * @return bool
 */
/*
function odd($v)
 {
     return($v&1 && $v>0);
 }



function even($v)
{
    return(!($v&1 && $v>0));
}
echo "<pre>";
print_r(array_filter($arr,"odd"));

*/



//}
//for($i=0;$i<100;$i++)
//{   $mas=[];
//    $mas[]=rand(0,10);
//    echo "<pre>";
//    print_r(array_filter($mas,"odd"));
//}

//for($i=0;$i<5;$i++){print $mas[$i];print"<br>";}
/*$a=array_fill(1,100,);
echo "<pre>";
var_dump($a);
*/