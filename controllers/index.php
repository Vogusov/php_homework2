<?php

include "../models/gallery.php";

// Внутренний шаблон
$content = Templater($template, [
  'title' => $title,
  'images' => $images
]);

// Внешний шаблон
$page = Templater($mainTemplate, [
  'content' => $content
]);

//Вывод страницы на экран:
echo $page;