<?php if(uri_string() == 'dashboard'): ?>
	<div class="row mb-4">
		<?php if (session()->get('active_group') == 'superadmin') : ?>
			<div class="col-xl-3 col-md-5 mb-2">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col me-2">
								<div class="text-xs fw-bold text-primary text-uppercase mb-1">
									Total de Usuários
								</div>
								<div class="h5 mb-0 fw-bold text-gray-800">
									<?= count(auth()->getProvider()->findAll()) ?>
									(<?= count(auth()->getProvider()->where('active', true)->findAll()) ?> ativos).
								</div>
							</div>
							<div class="col-auto"><i class="bi bi-people fs-1 text-primary"></i></div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>

	
	<!-- begin::Cards de Estatísticas -->
	<div class="row mb-4">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
							<div class="col me-2">
									<div class="text-xs fw-bold text-primary text-uppercase mb-1">
											Visitas Hoje</div>
									<div class="h5 mb-0 fw-bold text-gray-800">1,245</div>
							</div>
							<div class="col-auto">
									<i class="bi bi-people fs-1 text-primary"></i>
							</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
							<div class="col me-2">
									<div class="text-xs fw-bold text-success text-uppercase mb-1">
											Receita (Mensal)</div>
									<div class="h5 mb-0 fw-bold text-gray-800">R$ 24,500</div>
							</div>
							<div class="col-auto">
									<i class="bi bi-currency-dollar fs-1 text-success"></i>
							</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
							<div class="col me-2">
									<div class="text-xs fw-bold text-info text-uppercase mb-1">
											Tarefas</div>
									<div class="row align-items-center no-gutters">
											<div class="col-auto">
													<div class="h5 mb-0 me-3 fw-bold text-gray-800">75%</div>
											</div>
											<div class="col">
													<div class="progress progress-sm">
															<div class="progress-bar bg-info" role="progressbar" style="width: 75%"></div>
													</div>
											</div>
									</div>
							</div>
							<div class="col-auto">
									<i class="bi bi-list-check fs-1 text-info"></i>
							</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
							<div class="col me-2">
									<div class="text-xs fw-bold text-warning text-uppercase mb-1">
											Mensagens</div>
									<div class="h5 mb-0 fw-bold text-gray-800">18</div>
							</div>
							<div class="col-auto">
									<i class="bi bi-envelope fs-1 text-warning"></i>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end::Cards de Estatísticas -->
	
<?php endif; ?>