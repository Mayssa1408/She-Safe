document.addEventListener('DOMContentLoaded', function() {
    const accountDropdown = document.getElementById('accountDropdown');
    const accountMenu = document.getElementById('accountMenu');

    // Ouvrir/fermer le menu au clic
    accountDropdown.addEventListener('click', function(e) {
      e.preventDefault();
      accountMenu.classList.toggle('show');
    });

    // Fermer le menu si on clique ailleurs
    document.addEventListener('click', function(e) {
      if (!accountDropdown.contains(e.target) && !accountMenu.contains(e.target)) {
        accountMenu.classList.remove('show');
      }
    });
  });