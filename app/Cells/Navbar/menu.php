<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
	<?php foreach ($menu as $item) : ?>
		<?php
			$item['href'] = ($item['href'] == '' || $item['href'] == '/' ? base_url() : $item['href']);
		?>
		<li class="nav-item">
			<a class="nav-link <?= ($uri == $item['href']) ? 'active' : '' ?>" href="<?= $item['href'] ?>"><?= $item['title'] ?></a>
		</li>		
	<?php endforeach; ?>
</ul>