<!-- Bootstrap 5 JS Bundle com Popper -->
<?= script_tag(bootstrap_asset('js/bootstrap.bundle.min.js')) ?>  
<!-- JS Customizado -->
<?= script_tag(custom_asset('js/custom.js')) ?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    
    // Inicializar o offcanvas apenas se existir
    if (sidebar) {
      const bsOffcanvas = new bootstrap.Offcanvas(sidebar);

      // Fechar sidebar ao clicar em um link (mobile)
      const navLinks = sidebar.querySelectorAll('.nav-link');
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          if (window.innerWidth < 768) { // Ajuste para telas pequenas (mobile)
            bsOffcanvas.hide();
          }
        });
      });
    }
  });    
</script>