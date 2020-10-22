<?php

include 'twig.php';
include 'config.php';

$title = 'LESSON 4';
$defaultGoodsCount = 5;

if (isset($_GET['show'])) {
  $limit = $_GET['show'];
} else {
  $limit = $defaultGoodsCount;
}

$items = getItems($connect, $limit);
$count = count($items);
//print_r($items);


try {
  $data = [
    'title' => $title,
    'items' => $items,
    'count' => $count,
    'defaultGoodsCount' => $defaultGoodsCount,
  ];
  $template = $twig->render('main.tmpl', $data);
  echo $template;
} catch (Exception $e) {
  'Error: ' . $e->getMessage();
}