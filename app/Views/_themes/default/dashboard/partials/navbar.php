<!-- Navbar Superior -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
  <div class="container-fluid">
    <!-- Botão para sidebar em mobile -->
    <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Logo -->
    <?= anchor(route_to('home.index'), img(image_asset(config('MyApp')->webImage), false, ['alt' => 'Logo', 'height' => 40]), ['class' => 'navbar-brand']) ?>
    <!-- Itens do lado direito -->
    <div class="d-flex align-items-center">
      <!-- Search -->
      <form class="d-none d-md-flex me-3">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Pesquisar...">
          <button class="btn btn-light" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </form>
      
      <!-- Ícones -->
      <ul class="navbar-nav flex-row">
        <li class="nav-item mx-2">
          <a class="nav-link position-relative" href="#">
            <i class="bi bi-bell fs-5"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              3
            </span>
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link position-relative" href="#">
            <i class="bi bi-envelope fs-5"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              5
            </span>
          </a>
        </li>

        <?= view_cell('Menu/UserCell::render') ?>
      </ul>
    </div>
  </div>
</nav>