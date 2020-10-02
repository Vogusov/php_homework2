<?php

include '../models/templater.php';
include '../models/config.php';

$title = 'Просмотр изображения';
$id = $_GET['id'];
$image = getImage($connect, $id);

$template = '../templates/image.php';
$mainTemplate = '../templates/main.php';