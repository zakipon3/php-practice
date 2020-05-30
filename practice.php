<?php
var_dump("入力せよ");
$msg = trim(fgets(STDIN));
$price = trim(fgets(STDIN));
var_dump($price.$msg);
var_dump($price + $msg);
?>