<?php
var_dump("年齢は？");
(int)$age = trim(fgets(STDIN));
if($age > 20){
  var_dump($age."歳");
  var_dump("成人です");
}else{
  var_dump("20歳以下です");
  var_dump("未成年です");
}
?>