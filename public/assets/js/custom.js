document.addEventListener('DOMContentLoaded', function () {
  // Espera 4 segundos para começar o fechamento
  setTimeout(function () {
    document.querySelectorAll('.alert.show').forEach(function(alertElement) {
      let alertInstance = bootstrap.Alert.getOrCreateInstance(alertElement);
      alertInstance.close();
    });
  }, 4000); // 4000 ms = 4 segundos
});
