<h1><?= $title ?></h1>

<div class="gallery">

  <?php
  foreach ($items as $item):
  ?>
  <div style="border: 1px solid black">
<<<<<<< HEAD
=======
    <p><?= $item['id'] ?></p>
    <p><?= $item['name'] ?></p>
>>>>>>> f741fa8c1240bdc0f2d8745579d234ceba332059
  </div>

  <?php endforeach; ?>
  
  <a href="../controllers/index.php?show=<?= $count + $defaultGoodsCount ?>">Show more <?= $defaultGoodsCount ?>></a>

</div>

