<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
  <div class="container">
    <!-- Logo à esquerda -->
    <?= anchor(route_to('home.index'), img(image_asset(config('MyApp')->webImage), false, ['alt' => 'Logo', 'height' => 40]), ['class' => 'navbar-brand']) ?>
    <!-- Botão para mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
		<?php if(uri_string() != 'login' && uri_string() != 'register'): ?>
			<!-- Menu ao centro -->
			<div class="collapse navbar-collapse" id="navbarContent">
				<?= view_cell('Navbar/MenuCell::render') ?>
				<?= view_cell('Navbar/LoginCell::render') ?>
			</div>
		<?php endif; ?>
  </div>
</nav>