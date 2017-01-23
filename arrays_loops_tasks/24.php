<?php



$number = 23324234555433;

$search = 3;

$count = substr_count( $number, $search );

echo 'Цифра ' . $search . ' встречается в числе ' . $number . ' <b>' . $count . '</b> раз';
