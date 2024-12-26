document.addEventListener('DOMContentLoaded', function() {
  const accountDropdown = document.getElementById('accountDropdown');
  const dropdownMenu = document.getElementById('accountMenu');

  if (accountDropdown && dropdownMenu) {
      accountDropdown.addEventListener('click', function(e) {
          e.preventDefault();
          dropdownMenu.classList.toggle('show');
      });

      // Fermer le menu si on clique en dehors
      document.addEventListener('click', function(e) {
          if (!accountDropdown.contains(e.target) && !dropdownMenu.contains(e.target)) {
              dropdownMenu.classList.remove('show');
          }
      });
  }
});