<?php




$row = 5;
$cols = 5;
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
$table = "<table border = '1'>";
for ($i=0; $i<=$row; $i++){
    $table .= "<tr>";
    for($j=0; $j<=$cols; $j++){
        $bgcolor = $colors[array_rand($colors)];
        $number = rand();
        $table .= "<td bgcolor='{$bgcolor}'>{$number}</td>";
    }
    echo '</tr></table>';
}
echo $table;


/*echo "<table border = 1>";

function make_column(){

    $color = array('red','yellow','blue','gray','maroon','brown','green');
    foreach ($color as $v)
    {

    }

    echo "<td >".rand(100,700), "</td>";
}

function make_line(){

    echo "<tr>";
    for ($i = 0; $i < 5; $i++){
        echo make_column();
    }
    echo "</tr>";
}

for ($l = 0; $l < 5; $l++){
    echo make_line();
}

echo "</table>";
*/

//function make_row(){
 //   echo  rand(100,600);
//}
/*
   $row=5;
   $cols=5;


$table = '<table border="1">';

for ($tr=1; $tr<=$row; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){


    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; // сделали эхо всего 1 раз
*/


/*echo "<table border = 1>";


function make_line(){
    echo "<tr>";
    for ($i = 0; $i < 7; $i++){
       echo make_con();
    }
    echo "</tr>";
}

for ($l = 0; $l < 5; $l++){
    echo make_line();
}

function colors_tr(){
    $color = array('red','yellow','blue','gray','maroon','brown','green');
    array_rand($color,7);
}
echo colors_tr(make_con());

echo "</table>";
*/
/**
 * @param $v
 * @return mixed
 */
//function BgGrColor()
//{
//$color = ['red','yellow','blue','gray','maroon','brown','green'];
// foreach ($color as $v)
// {
//    return $v;
//  }
//}
//"<td bgcolor=\"#999900\"></td>";
/**
 * @return mixed
 */
//function td_color()
//{
//    $color = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];
//    return  print_r($color);



//echo "<td>".$arrcolor."</td>";
//}
/**
 *
 */

$color = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];
//var_dump($color);
$a=$color;
//var_dump($a);
