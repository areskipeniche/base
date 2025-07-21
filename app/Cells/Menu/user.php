<?= $header ?>
	<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		<i class="bi bi-person-circle fs-5"></i>
		<?= userName() ?> [<?= session()->get('active_group') ?>]
	</a>
	<ul class="dropdown-menu dropdown-menu-end">
		<!-- <li><h6 class="dropdown-header">Olá, <?= userName() ?>!</h6></li> -->
			<?php foreach ($menu as $item) {
				if (array_key_exists('href', $item)) {
					$modal = (array_key_exists('modal', $item) ? ' data-bs-toggle="modal" data-bs-target="'.$item['modal'].'"' : '');
					echo '<li><a class="dropdown-item" href="' . $item['href'] . '" '.$modal.'><i class="bi bi-'.$item['icon'].' me-2"></i> '.$item['title'].'</a></li>';
				} else {
					echo '<li><hr class="dropdown-divider"></li>';
				}
			} ?>
	</ul>
<?= $footer ?>