<?php
var_dump("年齢は？");
(int)$age = trim(fgets(STDIN));
if($age > 6 && $age < 15){
  var_dump($age."歳なので義務教育です");
}else{
  var_dump($age."歳なので義務教育ではありません");
}
?>