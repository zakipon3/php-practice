<?php
$msg = "hello";
var_dump($msg);
$msg = 7;
var_dump($msg);
$msg += 8;
var_dump($msg);
$msg -= 12;
var_dump($msg);
$msg *= 8;
var_dump($msg);
$msg /= 2;
var_dump($msg);
$msg %= 5;
var_dump($msg);
$msg **= 4;
var_dump($msg);

var_dump("入力せよ");
$msg = fgets(STDIN);
var_dump($msg);
?>