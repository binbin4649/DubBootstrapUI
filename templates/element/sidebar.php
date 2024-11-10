<?php

/**
 * サイドバー
 */

$posts = $this->Blog->getPosts('news', 5);
$categories = $this->BcBaser->getBlogCategories(['blogContentId' => 1]); //blogContentId = 実体ID

?>

<aside class="col-lg-3 mt-5 mt-md-0 mb-5">
  <h6 class="text-secondary border-bottom">News latest</h6>

  <?php if ($posts): ?>
    <?php foreach ($posts as $post): ?>
      <p class="mx-2">
        <small class="text-muted"><?php $this->BcBaser->blogPostDate($post, 'Y.m.d') ?></small><br>
        <?php $this->BcBaser->blogPostTitle($post) ?>
      </p>
    <?php endforeach; ?>
  <?php else: ?>
    <p class="mx-2 small text-muted">記事がありません。</p>
  <?php endif; ?>

  <?php if ($categories): ?>
    <h6 class="text-secondary border-bottom mt-3 mt-md-4 mb-3">News category</h6>
    <ul class="mx-2">
      <?php foreach ($categories as $category): ?>
        <li class="mb-2"><a href="<?= $this->Blog->getCategoryUrl($category->id) ?>" class="link-secondary"><?= $category->title ?></a></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

</aside>