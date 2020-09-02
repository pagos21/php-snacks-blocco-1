
<?php
  $arr = [
    "game1" => [
      "home" => 'Olimpia',
      'homePoints' => '55',
      "foreign" => 'Cantu',
      'foreignPoints' => '60'
    ],
    "game2" => [
      "home" => 'Roma',
      'homePoints' => '86',
      "foreign" => 'Tokyo',
      'foreignPoints' => '50'
    ],
    "game3" => [
      "home" => 'Salt Lake City',
      'homePoints' => '12',
      "foreign" => 'NY',
      'foreignPoints' => '40'
    ]
  ];

  foreach ($arr as $value) {
    echo $value['home'] . ' - ' . $value['foreign'];
    echo ' | ';
    echo $value['homePoints'] . '-' . $value['foreignPoints'];
    echo '<br>';
  }

 ?>
