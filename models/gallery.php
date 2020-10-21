<?php

include '../models/templater.php';
include '../models/config.php';

$title = 'LESSON 4';
$template = '../templates/gallery.php';
$mainTemplate = '../templates/main.php';

$defaultGoodsCount = 5;

try {
  if (isset($_GET['show'])){
    $limit = $_GET['show'];
  } else {
    $limit = $defaultGoodsCount;
  }

  $items = getItems($pdo, $limit);
//print_r($items);

  $count = count($items);

  // Внутренний шаблон
  $content = Templater($template, [
    'title' => $title,
    'items' => $items,
    'count' => $count,
    'defaultGoodsCount' => $defaultGoodsCount,
  ]);

// Внешний шаблон
  $page = Templater($mainTemplate, [
    'content' => $content
  ]);

//Вывод страницы на экран:
  echo $page;
} catch (Exception $e) {
  die ('ERRORRRR: '.$e->getMessage());
}









