<?php if (!empty($type) && !empty($message)): ?>
	<div class="container my-3 alert alert-<?= esc($type) ?> alert-dismissible fade show" role="alert">
		<?php if(!empty($icon)): ?>
			<i class="bi bi-<?= esc($icon) ?>"></i>
		<?php endif; ?>
		<?= $message ?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>
