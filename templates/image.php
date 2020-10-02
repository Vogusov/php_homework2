<h1><?= $title ?></h1>
<div class="image">

  <a href="/controllers/index.php"> Вернуться в галерею </a>

  <p>
    Просмотров: <?= $views; ?>
  </p>

  <div class="full-image-container">
    <img src="<?= $imagePath ?>" alt="">
  </div>
</div>

