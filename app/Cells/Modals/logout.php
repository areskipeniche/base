<!-- Logout Modal (for desktop user menu) -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="logoutModal">Pronto para Sair?</h5>
				<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">Selecione "<?= lang('Auth.action.logout') ?>" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-bs-dismiss="modal"><?= lang('Auth.action.cancel') ?></button>
				<a class="btn btn-primary" href="<?= route_to('logout') ?>"><?= lang('Auth.action.logout') ?></a>
			</div>
		</div>
	</div>
</div>