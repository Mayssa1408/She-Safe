<?php
/*
Template Name: reconnexion
*/
get_header();
?>

<style>
:root {
  --primary: #BA476D;
  --primary-hover: #90274f;
  --background-light: #FEF6E9;
  --secondary-light: #F7D7D4;
  --text-dark: #333333;
  --transition: all 0.3s ease;
}

body {
  font-family: 'Glory', sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: linear-gradient(135deg, var(--background-light), var(--secondary-light));
}

section {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 3rem 0;
  animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

.login-container {
  text-align: center;
  max-width: 400px;
  width: 90%;
  animation: floatIn 1s ease-out;
  border: none; /* Retrait de la bordure */
  box-shadow: none; /* Retrait de l'ombre */
  padding: 0; /* Retrait des marges internes */
  background: none; /* Pas de fond */
}

@keyframes floatIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.login-container h1 {
  font-size: 2rem;
  margin-bottom: 2.5rem;
  color: var(--primary);
  font-weight: bold;
}

.login-form {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.form-group {
  position: relative;
}

.input-field {
  width: 100%;
  padding: 1.2rem 1.5rem;
  border: 2px solid rgba(186, 71, 109, 0.3);
  border-radius: 25px;
  font-size: 1rem;
  transition: var(--transition);
  background: var(--background-light); /* Couleur légère pour les champs */
}

.input-field:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 15px rgba(186, 71, 109, 0.15);
  transform: translateY(-2px);
}

.submit-btn {
  background: var(--primary);
  color: white;
  padding: 0.8rem 1.5rem; /* Ajuste la taille autour du texte */
  border: none;
  border-radius: 25px;
  cursor: pointer;
  font-size: 1rem;
  font-weight: bold;
  margin: 1.5rem auto 0; /* Centrage horizontal */
  transition: var(--transition);
  position: relative;
  overflow: hidden;
  display: inline-block; /* Adapte la largeur au texte */
  box-shadow: 0 4px 15px rgba(186, 71, 109, 0.2);
}

.submit-btn::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, transparent, rgba(255,255,255,0.3), transparent);
  transform: translateX(-100%);
  transition: transform 0.6s ease;
}

.submit-btn:hover::after {
  transform: translateX(100%);
}

.submit-btn:hover {
  background-color: var(--primary-hover);
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(186, 71, 109, 0.3);
}


.forgot-password {
  margin-top: 0.5rem;
  text-align: right;
}

.forgot-password a {
  color: var(--primary);
  text-decoration: none;
  font-size: 0.9rem;
  transition: var(--transition);
}

.forgot-password a:hover {
  color: var(--primary-hover);
  text-decoration: underline;
}

.links-separator {
  width: 100%;
  height: 2px;
  background: linear-gradient(to right, transparent, rgba(186, 71, 109, 0.3), transparent);
  margin: 2rem 0;
}

.login-link {
  margin-top: 1.5rem;
  font-size: 1rem;
  color: var(--text-dark);
}

.login-link a {
  color: var(--primary);
  text-decoration: none;
  font-weight: bold;
  transition: var(--transition);
}

.login-link a:hover {
  color: var(--primary-hover);
  transform: translateY(-1px);
  display: inline-block;
}

@media (max-width: 768px) {
  .login-container {
    width: 85%;
  }

  .login-container h1 {
    font-size: 1.8rem;
  }
  
  .input-field {
    padding: 1rem 1.5rem;
  }
  
  .submit-btn {
    padding: 1rem 2rem;
  }
}
</style>

<section>
  <div class="login-container">
    <h1>Connectez-vous pour accéder au forum</h1>
    <form class="login-form" action="connexion.php" method="post">
      <div class="form-group">
        <input 
          type="text" 
          name="username" 
          placeholder="Nom d'utilisateur" 
          required 
          class="input-field"
        >
      </div>
      <div class="form-group">
        <input 
          type="password" 
          name="password" 
          placeholder="Mot de passe" 
          required 
          class="input-field"
        >
      </div>
      <div class="forgot-password">
        <a href="mot-de-passe-oublie">Mot de passe oublié ?</a>
      </div>
      <button type="submit" class="submit-btn">Se connecter</button>
    </form>
    <div class="links-separator"></div>
    <div class="login-link">
      <p>Pas encore inscrit ? <a href="inscription.php">Créer un compte</a></p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
