<footer class="bg-light p-3 mt-4 p-md-5 mt-md-5 border-top small">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="row">
        <div class="col-4">
          <?= $this->BcBaser->img('24x24.png', ['alt' => '...', 'class' => 'mb-2', 'width' => '24', 'height' => '24']) ?>
          <small class="d-block mb-3 text-muted">&copy; 2018 - 2024</small>
        </div>
        <div class="col-8">
          <h6 class="text-secondary">Link<?= $this->BootstrapUI->icon('box-arrow-up-right', ['class' => 'ms-2']) ?></h6>
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
            <li class="mb-1"><a href="/price" class="link-secondary">料金・プラン</a></li>
            <li class="mb-1"><a href="/contact/" class="link-secondary">お問い合わせ</a></li>
            <li class="mb-1"><a href="/dub-manual/dub-man/" class="link-secondary">使い方・操作方法</a></li>
            <li class="mb-1"><a href="/qanda/" class="link-secondary">Q&A - よくある質問</a></li>
            <li class="mb-1"><a href="about.html" class="link-secondary">link サンプル</a></li>
          </ul>
        </div>
        <div class="col-6">
          <h6 class="text-secondary">About</h6>
          <ul class="list-unstyled">
            <li class="mb-1"><a href="signup.html" class="link-secondary">会員登録</a></li>
            <li class="mb-1"><a href="login.html" class="link-secondary">ログイン</a></li>
            <li class="mb-1"><a href="reset_password.html" class="link-secondary">パスワード再発行</a></li>
            <li class="mb-1"><a href="/about" class="link-secondary">事業概要</a></li>
            <li class="mb-1"><a href="terms_of_service.html" class="link-secondary">利用規約</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-3 mt-md-5">
    <a href="http://basercms.net/" target="_blank">
      <?= $this->BcBaser->img('baser.power.gif', ['alt' => 'baserCMS : Based Website Development Project', 'border' => '0']) ?>
    </a>
    <a href="http://cakephp.org/" target="_blank">
      <?= $this->BcBaser->img('cake.power.gif', ['alt' => 'CakePHP(tm) : Rapid Development Framework', 'border' => '0']) ?>
    </a>
    <a href="http://dubmilli.com/" target="_blank">
      <?= $this->BcBaser->img('dubmilli.power.gif', ['alt' => '合同会社ダブミリ dubmilli LLC.', 'border' => '0']) ?>
    </a>
  </div>
</footer>