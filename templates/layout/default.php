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

use BootstrapUI\View\UIView;

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
	<header class="border-bottom">
		<nav class="navbar navbar-expand-md navbar-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<?= $this->BcBaser->img('198x33.png', ['alt' => 'logo image']) ?>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown link
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<nav class="container status-header">
		<div class="row p-1 m-1 bg-light rounded border border-warning">
			<div class="col-7">
				<div class="ms-sm-3">
					<span class="text-muted">会員番号</span>:4<br>
					ダブミリ
				</div>
			</div>
			<div class="col-5 d-flex align-items-center">
				<a class="btn btn-outline-secondary w-100" href="mypage.html" role="button">
					<span class="narrow-size">マイページ</span>
				</a>
			</div>
		</div>
	</nav>

	<!-- jumbotron -->
	<article class="jumbotron-extend">
		<div class="container-fluid py-4 py-md-5">
			<h1 class="display-5 fw-bold">Lorem ipsum</h1>
			<p class="col-md-8 fs-4">Lorem ipsum dolor sit amet, consectetur adipisci elit,</p>
		</div>
	</article>

	<div class="container mt-5">
		<div class="row">
			<main class="col-lg-9 mb-5">
				<section class="mb-5 mx-3">
					<h1 class="fs-4">それも昔たしかその試験顔</h1>
					<p>
						それも昔たしかその試験顔という事の他をもっですたい。ようやく十月に自覚家はよほどそのお話しますうかもに装うてつけますがも仕事云っだないから、当然とは聴いませませなた。自己でよっないはずはいくら時分をひょろひょろなますまし。
					</p>
					<a href="#" class="btn btn-primary">Primary</a>
				</section>
				<section class="row mb-5 mx-3">
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="card">
							<?= $this->BcBaser->img('286x180.png', ['alt' => '...', 'class' => 'card-img-top']) ?>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="card">
							<?= $this->BcBaser->img('286x180.png', ['alt' => '...', 'class' => 'card-img-top']) ?>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="card">
							<?= $this->BcBaser->img('286x180.png', ['alt' => '...', 'class' => 'card-img-top']) ?>
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</section>
				<section class="mb-3 mx-3">
					<h4 class="fs-6 text-muted border-bottom mb-3 mb-md-4">Publication</h4>
					<article class="row">
						<div class="col-md mb-3">
							<div class="row flex-nowrap">
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
							</div>
						</div>
						<div class="col-md mb-3">
							<div class="row flex-nowrap">
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
							</div>
						</div>
					</article>
					<article class="row">
						<div class="col-md mb-3">
							<div class="row flex-nowrap">
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
							</div>
						</div>
						<div class="col-md mb-3">
							<div class="row flex-nowrap">
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
								<div class="col"><a href="#" target="_blank"><img src="img/127x44.png" class="img-fluid rounded mx-auto d-block" alt=""></a></div>
							</div>
						</div>
					</article>
				</section>

			</main>
			<aside class="col-lg-3 mt-5 mt-md-0 mb-5">
				<h6 class="text-secondary border-bottom">News latest</h6>
				<p class="mx-2">
					<small class="text-muted">2024/05/23</small><br>
					<a href="single.html">それも昔たしかその試験顔という事の他をもっですたい。</a>
				</p>
				<p class="mx-2">
					<small class="text-muted">2024/05/23</small><br>
					<a href="single.html">それも昔たしかその試験顔という事の他をもっですたい。</a>
				</p>
				<p class="mx-2">
					<small class="text-muted">2024/05/23</small><br>
					<a href="single.html">それも昔たしかその試験顔という事の他をもっですたい。</a>
				</p>
				<p class="mx-2">
					<small class="text-muted">2024/05/23</small><br>
					<a href="single.html">それも昔たしかその試験顔という事の他をもっですたい。</a>
				</p>
				<p class="mx-2">
					<small class="text-muted">2024/05/23</small><br>
					<a href="single.html">それも昔たしかその試験顔という事の他をもっですたい。</a>
				</p>
				<p class="mx-2">
					<small class="text-muted">2024/05/23</small><br>
					<a href="#">それも昔たしかその試験顔という事の他をもっですたい。</a>
				</p>
				<h6 class="text-secondary border-bottom mt-3 mt-md-4 mb-3">News category</h6>
				<ul class="mx-2">
					<li class="mb-2"><a href="archives.html" class="link-secondary"><i class="bi bi-info-circle me-2"></i>お知らせ</a></li>
					<li class="mb-2"><a href="archives.html" class="link-secondary"><i class="bi bi-database-gear me-2"></i>障害・メンテナンス</a></li>
					<li class="mb-2"><a href="archives.html" class="link-secondary"><i class="bi bi-person-workspace me-2"></i>事例紹介</a></li>
					<li class="mb-2"><a href="archives.html" class="link-secondary"><i class="bi bi-broadcast-pin me-2"></i>メディア掲載</a></li>
					<li class="mb-2"><a href="archives.html" class="link-secondary"><i class="bi bi-pencil-square me-2"></i>コラム・その他</a></li>
					<li class="mb-2"><a href="archives.html" class="link-secondary"><i class="bi bi-list-ul me-2"></i>一覧 - All</a></li>
				</ul>
			</aside>
		</div>
	</div>

	<footer class="bg-light p-3 mt-4 p-md-5 mt-md-5 border-top small">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="row">
					<div class="col-4">
						<?= $this->BcBaser->img('24x24.png', ['alt' => '...', 'class' => 'mb-2', 'width' => '24', 'height' => '24']) ?>
						<small class="d-block mb-3 text-muted">&copy; 2018 - 2024</small>
					</div>
					<div class="col-8">
						<h6 class="text-secondary">Link<i class="bi bi-box-arrow-up-right ms-2"></i></h6>
						<ul class="list-unstyled small">
							<li class="mb-1"><a href="#" target="_blank" class="link-secondary">link サンプル</a></li>
							<li class="mb-1"><a href="#" target="_blank" class="link-secondary">link サンプル</a></li>
							<li class="mb-1"><a href="#" target="_blank" class="link-secondary">link サンプル</a></li>
							<li class="mb-1"><a href="#" target="_blank" class="link-secondary">link サンプル</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="row">
					<div class="col-6">
						<h6 class="text-secondary">Menu</h6>
						<ul class="list-unstyled">
							<li class="mb-1"><a href="price.html" class="link-secondary">料金</a></li>
							<li class="mb-1"><a href="contact.html" class="link-secondary">お問い合わせ</a></li>
							<li class="mb-1"><a href="about.html" class="link-secondary">link サンプル</a></li>
							<li class="mb-1"><a href="faq.html" class="link-secondary">Q&A - よくある質問</a></li>
							<li class="mb-1"><a href="about.html" class="link-secondary">link サンプル</a></li>
						</ul>
					</div>
					<div class="col-6">
						<h6 class="text-secondary">About</h6>
						<ul class="list-unstyled">
							<li class="mb-1"><a href="signup.html" class="link-secondary">会員登録</a></li>
							<li class="mb-1"><a href="login.html" class="link-secondary">ログイン</a></li>
							<li class="mb-1"><a href="reset_password.html" class="link-secondary">パスワード再発行</a></li>
							<li class="mb-1"><a href="about.html" class="link-secondary">事業概要</a></li>
							<li class="mb-1"><a href="terms_of_service.html" class="link-secondary">利用規約</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center mt-3 mt-md-5">
			<a href="http://basercms.net/" target="_blank"><img src="img/baser.power.gif" alt="baserCMS : Based Website Development Project" border="0" /></a>&nbsp;
			<a href="http://cakephp.org/" target="_blank"><img src="img/cake.power.gif" alt="CakePHP(tm) : Rapid Development Framework" border="0" /></a>
			<a href="http://dubmilli.com/" target="_blank"><img src="img/dubmilli.power.gif" alt="合同会社ダブミリ dubmilli LLC." border="0" /></a>
		</div>
	</footer>
</body>

</html>