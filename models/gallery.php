<?php
include 'twig.php';
include 'config.php';

$title = 'LESSON 4';
$mainTemplate = 'main.tmpl';
$defaultGoodsCount = 5;


try {
  if (isset($_GET['show'])){
    $limit = $_GET['show'];
  } else {
    $limit = $defaultGoodsCount;
  }

  $items = getItems($pdo, $limit);
  $count = count($items);

  $data = [
    'title' => $title,
    'items' => $items,
    'count' => $count,
    'defaultGoodsCount' => $defaultGoodsCount,
  ];
  $template = $twig->render('main.tmpl', $data);
  echo $template;

} catch (Exception $e) {
  die ('Error in gallery templating: '.$e->getMessage());
}









