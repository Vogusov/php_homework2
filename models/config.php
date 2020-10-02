<?php
//       !!!!! Абсолютные адреса НЕ РАБОТАЮТ !!!!!

// define("IMAGES_FOLDER", $_SERVER['DOCUMENT_ROOT']."/images/");
// define("SMALL_IMAGES_FOLDER", $_SERVER['DOCUMENT_ROOT']."/images-sm/");

define("IMAGES_FOLDER", "/images/");
define("SMALL_IMAGES_FOLDER", "/images-sm/");

const SERVER = "localhost";
const DB = "gallery-t";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Ошибка соединения с базой данных!");

function getImages($connect) {
  $str = "select * from `images` order by `views` desc";
  $res = mysqli_query($connect, $str);
  if (!$res)
    die(mysqli_error($connect));
  while ($image = mysqli_fetch_assoc($res)){
    $images[] = $image;
  }

  return $images;
}

function getImage($connect, $id) {
  $str = "select * from `images` where `id`=$id";
  $res = mysqli_query($connect, $str);
  if (!$res)
    die(mysqli_error($connect));
  $image = mysqli_fetch_assoc($res);
  return $image;
}


function increaseViews($connect, $id) {
  $str = "update `images` set `views`=`views`+1 where `id`=$id";
  $res = mysqli_query($connect, $str);
  if (!$res)
    die(mysqli_error($connect));
  return mysqli_affected_rows($connect);
}

