<?php
$db = mysqli_connect($_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);

echo '<pre>';
echo print_r($_ENV);
echo '</pre>';
  
$q = mysqli_query($db, 'SELECT * FROM tmp');
while ( $a = mysqli_fetch_assoc($q) ) {
  print_r($a);
  echo '<hr>';
}
