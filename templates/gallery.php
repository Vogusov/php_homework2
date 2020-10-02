<h1><?= $title ?></h1>
<div class="gallery">

  <?php
  foreach ($images as $image):
  ?>
    <a href="/controllers/image.php?id=<?= $image['id']; ?>" class="gallery__item">
      <img src="<?= SMALL_IMAGES_FOLDER . $image['name']; ?>" alt="">
    </a>

  <?php endforeach; ?>

</div>

