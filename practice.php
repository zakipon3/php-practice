<?php
$team = ["A", "B", "C", "D", "E"];
$opps = ["A", "B", "C", "D", "E"];
foreach($team as $a){
  array_shift($opps);
  foreach($opps as $b){
    var_dump($a."対".$b);
  }
}
?>