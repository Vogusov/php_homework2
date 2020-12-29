<?php

include 'twig.php';
include 'config.php';

$title = 'LESSON 4';
$mainTemplate = 'main.html';
$galleryTemplate = 'gallery_content.html';
$defaultGoodsCount = 5;


if (isset($_POST['SHOW'])) {
  try{
    $limit = $_POST['SHOW'];
    $items = getItems($pdo, $limit);
    $count = count($items);

    $data = [
      'title' => $title,
      'items' => $items,
    ];

    $template = $twig->render($galleryTemplate, $data);
    echo $template;

  } catch (Exception $e) {
    die('Error in gallery templating: ' . $e->getMessage());
  }


} else {

  try {
    $limit = $defaultGoodsCount;
    $items = getItems($pdo, $limit);
    $count = count($items);

    $data = [
      'title' => $title,
      'items' => $items,
      'count' => $count,
      'defaultGoodsCount' => $defaultGoodsCount,
    ];

    $template = $twig->render($mainTemplate, $data);
    echo $template;

  } catch (Exception $e) {
    die('Error in gallery templating: ' . $e->getMessage());
  }
}
