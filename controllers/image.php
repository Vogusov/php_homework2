<?php

include "../models/image.php";

increaseViews($connect, $id);

// Внутренний шаблон
$content = Templater($template, [
  'title' => $title,
  'views' => $image['views'] + 1,
  'imagePath' => IMAGES_FOLDER . $image['name']
]);

// Внешний шаблон
$page = Templater($mainTemplate, [
  'content' => $content
]);

//Вывод страницы на экран:
echo $page;
