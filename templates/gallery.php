<h1><?= $title ?></h1>

<div class="gallery">

  <?php
  foreach ($items as $item):
  ?>
  <div style="border: 1px solid black">

    <p><?= "{$item['name']} {$item['id']}" ?></p>

  </div>

  <?php endforeach; ?>

  <a href="../controllers/index.php?show=<?= $count + $defaultGoodsCount ?>">Show more <?= $defaultGoodsCount ?>></a>

</div>

