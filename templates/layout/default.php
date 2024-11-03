<?php

/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

/**
 * レイアウト
 * 呼出箇所：全ページ
 * @var UIView $this
 */
$request = $this->getRequest();
$attributes = $request->getAttributes();
$base = $attributes['base'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= $this->Html->css('DubBootstrapUI.bootstrap.min') ?>
	<?= $this->Html->css(['DubBootstrapUI./font/bootstrap-icons', 'DubBootstrapUI./font/bootstrap-icon-sizes']) ?>
	<?php $this->BcBaser->css(['custom']) ?>
	<?= $this->Html->script(['DubBootstrapUI.popper.min', 'DubBootstrapUI.bootstrap.min']) ?>
	<?php $this->BcBaser->title() ?>
	<?php $this->BcBaser->metaDescription() ?>
	<?php $this->BcBaser->metaKeywords() ?>
	<?php $this->BcBaser->icon() ?>
	<?php $this->BcBaser->scripts() ?>
	<!-- /Elements/google_analytics.php -->
	<?php $this->BcBaser->googleAnalytics() ?>
</head>

<body>
	<?php $this->BcBaser->header(); ?>
	<?php $this->BcBaser->contentsMenu(); ?><!-- マイページのグローバルメニュー -->

	<?php if ($this->BcBaser->isHome()): ?>
		<!-- jumbotron -->
		<article class="jumbotron-extend">
			<div class="container-fluid py-4 py-md-5">
				<h1 class="display-5 fw-bold">Lorem ipsum</h1>
				<p class="col-md-8 fs-4">Lorem ipsum dolor sit amet, consectetur adipisci elit,</p>
			</div>
		</article>
	<?php endif; ?>

	<div class="container mt-5">
		<div class="row">
			<main class="col-lg-9 mb-5">

				<?php $this->BcBaser->flash() ?>
				<?php if ($this->BcBaser->isHome()): ?>
					<?php $this->BcBaser->element('top_page') ?>
				<?php else: ?>
					<?php $this->BcBaser->content() ?>
				<?php endif; ?>

			</main>
			<?php $this->BcBaser->element('sidebar') ?>
		</div>
	</div>
	<?php $this->BcBaser->footer() ?>
</body>


</html>