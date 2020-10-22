<?php

const SERVER = 'localhost';
const DB = 'testing';
const LOGIN = 'root';
const PASS = 'root';

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die('Ошибка соединения с базой данных!');

function getItems($connect, $limit) {
  $str = "select * from `goods` limit $limit";
  $res = mysqli_query($connect, $str);
  if (!$res)
    die(mysqli_error($connect));
  while ($item = mysqli_fetch_assoc($res)) {
    $items[] = $item;
  }

  return $items;
}