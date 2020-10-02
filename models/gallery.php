<?php

include '../models/templater.php';
include '../models/config.php';

$title = 'Галлерея';
$images = getImages($connect);

$template = '../templates/gallery.php';
$mainTemplate = '../templates/main.php';