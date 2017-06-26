<?php
include 'list.php';

$order = [];
foreach ($list as $key => $item) {
  if ($item['complete']) {
    $order[] = $key;
  }
}

//var_dump($order);
//var_dump($list);



echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

foreach ($order as $id) {
  echo '<tr>';
  echo '<td>' . $list[$id]['title'] . "</td>\n";
  echo '<td>' . $list[$id]['priority'] . "</td>\n";
  echo '<td>' . $list[$id]['due'] . "</td>\n";
  echo '<td>';
  if ($list[$id]['complete']) {
    echo 'Yes';
  } else {
    echo 'No!';
  }
  echo "</td>\n";
  echo '</tr>';
}

echo '</table>';
//var_dump($list);
//echo $list[0]['title'];