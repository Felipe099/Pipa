<?php
// error_reporting(0);
$utf8 = header("Content-Type: text/html; charset=utf-8");
$link = new mysqli('localhost', 'root', '', 'credenciamento');
$link->set_charset('utf8');

function ExecutarConsulta($sql)
{
  $link = new mysqli('localhost', 'root', '', 'credenciamento');
  $aux = $link->query($sql);
  while ($row = $aux->fetch_assoc()) {
    $registro[] = $row;
  }
  return $registro;
}
