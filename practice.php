<?php
function createmsg($price){
  return 500 * $price;
}

var_dump("代金は".createmsg(6). "円です。");
?>