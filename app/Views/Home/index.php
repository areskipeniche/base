<?= $this->extend(theme_view('index')) ?>

<?= $this->section('content') ?>
  <!-- begin::Hero Section -->
  <section class="hero-section bg-primary text-white py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="display-4 fw-bold mb-4">Bem-vindo ao Nosso Projeto</h1>
          <p class="lead mb-4">Uma solução incrível para seus problemas. Experimente agora mesmo!</p>
          <div class="d-flex gap-3">
            <a href="<?= base_url('cadastro') ?>" class="btn btn-light btn-lg px-4">Cadastre-se</a>
            <a href="<?= base_url('saiba-mais') ?>" class="btn btn-outline-light btn-lg px-4">Saiba Mais</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="<?= image_asset('hero-image.png') ?>" alt="Hero Image" class="img-fluid rounded shadow">
        </div>
      </div>
    </div>
  </section><!-- end::Hero Section -->

  <!-- begin::Features Section -->
  <section class="py-5">
    <div class="container py-5">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Nossos Recursos</h2>
        <p class="lead text-muted">Descubra o que temos a oferecer</p>
      </div>
      
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                <i class="bi bi-speedometer2 fs-2"></i>
              </div>
              <h5 class="card-title">Rápido</h5>
              <p class="card-text">Nossa plataforma foi projetada para velocidade e eficiência.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                <i class="bi bi-shield-check fs-2"></i>
              </div>
              <h5 class="card-title">Seguro</h5>
              <p class="card-text">Seus dados estão protegidos com nossas medidas de segurança.</p>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                <i class="bi bi-people fs-2"></i>
              </div>
              <h5 class="card-title">Fácil de Usar</h5>
              <p class="card-text">Interface intuitiva que qualquer pessoa pode usar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end::Features Section -->

<?= $this->endSection() ?>

<?= $this->section('modal') ?>

<?= $this->endSection() ?>

<?= $this->section('CustomHeadInsertions') ?>

<?= $this->endSection() ?>

<?= $this->section('CustomFooterInsertions') ?>

<?= $this->endSection() ?>
