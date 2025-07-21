<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
  <div class="container">
    <!-- Logo à esquerda -->
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= image_asset(setting('app.logo')) ?>" alt="Logo" height="40">
    </a>
    <!-- Botão para mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
		<?php if(uri_string() != 'login' && uri_string() != 'register'): ?>
			<!-- Menu ao centro -->
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link <?= (current_url() == base_url()) ? 'active' : '' ?>" href="<?= base_url() ?>">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (uri_string() == 'sobre') ? 'active' : '' ?>" href="<?= base_url('sobre') ?>">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (uri_string() == 'servicos') ? 'active' : '' ?>" href="<?= base_url('servicos') ?>">Serviços</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (uri_string() == 'contato') ? 'active' : '' ?>" href="<?= base_url('contato') ?>">Contato</a>
					</li>
				</ul>
				<?= view_cell('Menu/LoginCell::render') ?>
			</div>
		<?php endif; ?>
  </div>
</nav>