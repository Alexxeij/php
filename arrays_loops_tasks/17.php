<?php
 $month='November';
 $arr = ['January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'Jule',
        'August',
        'September',
        'October',
         $month,
         'December'];
 foreach ($arr as $value){
     echo $value."<br/>";
    if($value==$month){
         echo "<b>"."<b>";

     }

 }