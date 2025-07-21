<!-- Botão de Login/UserMenu à direita -->
<div class="d-flex">
	<?php if (auth()->loggedIn()) {
		echo view_cell('Menu/UserCell::render');
	} else {
		echo anchor($url,"<i class=\"bi bi-{$icon} me-1\"></i> {$title}", $attr);
	} ?>
</div>