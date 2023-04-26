
function checkUserLogin() {
    // Vérifier si l'utilisateur est connecté
    if (loggedIn) {
      // Si l'utilisateur est connecté, afficher un popover avec son nom d'utilisateur
      const popover = new bootstrap.Popover(document.querySelector('.user-profile'), {
        content: `Bonjour ${username}!`,
        trigger: 'click',
        placement: 'bottom'
      });
      // Ajouter des boutons de profil et de déconnexion au popover
      popover._element.insertAdjacentHTML('beforeend', `<div class="popover-body"><a href="profil.html">Profil</a> | <a href="#" id="logout-btn">Déconnexion</a></div>`);
      // Ajouter un gestionnaire d'événement pour le bouton Déconnexion
      document.querySelector('#logout-btn').addEventListener('click', () => {
        // Code pour déconnecter l'utilisateur
      });
    } else {
      // Si l'utilisateur n'est pas connecté, afficher un popover pour l'inviter à se connecter
      const popover = new bootstrap.Popover(document.querySelector('.user-profile'), {
        content: `Vous n'êtes pas encore connecté ? <br> <a href="login.html">Connectez-vous</a>`,
        trigger: 'click',
        placement: 'bottom',
        html: true
      });
    }
  }
