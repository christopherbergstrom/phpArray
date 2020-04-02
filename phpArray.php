<?php
  $arr = [1,2,3,4,5,6,7,8,9,10];
  function sumArr($arr) {
    return array_sum($arr);
  }
  function countArr($arr) {
    return count($arr);
  }
  function medianArr($arr) {
    return (array_sum($arr)/count($arr));
  }
  echo "sum " . sumArr($arr) . "<br>";
  echo "count " . countArr($arr) . "<br>";
  echo "median " . medianArr($arr) . "<br>";
?>