<?php
# db configurations
define('DB_HOST',    'localhost');
define('DB_USER',    'winterma_mark1');
define('DB_PASS',    'dinger');
define('DB_NAME',    'winterma_tnd');

# db connect
function dbConnect($close=true){
  global $link;

  if (!$close) {
    mysql_close($link);
    return true;
  }

  $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to MySQL DB ') . mysql_error();
  if (!mysql_select_db(DB_NAME, $link))
    return false;
}
?>