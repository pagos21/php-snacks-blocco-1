
<?php
  $arr = [];

  while (count($arr) < 15) {
  $rnum = rand(1, 50);

    if (!in_array($rnum, $arr) ) {
      $arr[] = $rnum;
    }
}

  print_r($arr);

 ?>
