<?php
// $people = array(
//   'person1' => 'Taro' => '25' => 'men',
//   'person2'  => 'Jiro' => '20' => 'men',
//   'person3'  => 'Hanako' => '16' => 'women'
// );

// foreach ($people as $person => $name => $age => $gender) {
//   print $name . $age . $gender . '<br />';
// }



$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}