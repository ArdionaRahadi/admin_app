<?php
include "koneksi.php";

//Deklarasi Fungsi Select
function select($sql_select)
{
  global $db_conn;
  
  $result = mysqli_query($db_conn, $sql_select);
  $containers = [];

  while ($container = mysqli_fetch_assoc($result)) {
    $containers[] = $container;
  }
  return $containers;
}
