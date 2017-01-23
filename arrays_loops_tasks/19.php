<?php

   $day='Воскресенье';
   $arr= ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота', $day];

  foreach ($arr as $value){
      while($value==$day){
          echo "<em>"."<em>";
          break;
      }
      echo $value;
  }