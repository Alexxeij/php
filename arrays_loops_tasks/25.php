<?php



$arr = array();
for ($i=0; $i<=20; $i++) {
    $arr[] = rand(0, 20);
}

echo "<pre>";
print_r($arr);
echo "<pre>";

$min = min($arr);
$max = max($arr);

foreach($arr as $k=>$v){
    if($v == $min){
        $arr[$k] = $max;
    }
    if($v == $max){
        $arr[$k] = $min;
    }
}

echo "<pre>";
print_r($arr);
echo "<pre>";





 // $arr = [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];


  // print_r(min($arr))."<br>";
  // echo max($arr);

