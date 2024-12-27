<?php
/*
Template Name: Page Erreur 404
*/
get_header();
?>
<style>
/* Styles généraux pour la page 404 */
.error-404-wrapper {
    font-family: 'Arial', sans-serif;
    color: #333;
    line-height: 1.6;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
    
    /* Pour centrer verticalement et horizontalement */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centrer verticalement */
    align-items: center; /* Centrer horizontalement */
    height: 80vh; /* Hauteur de la fenêtre */
    
    /* Padding par défaut (desktop) */
    padding: 100px 20px;
}

/* En-tête de l'erreur 404 */
.error-404-header {
    font-size: 2.5rem;
    color: #B7536C;
    margin-bottom: 20px;
    animation: slideIn 1s ease-out;
}

/* Message de l'erreur 404 */
.error-404-message {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 30px;
    animation: slideUp 1s ease-out;
}

/* Bouton de retour à l'accueil */
.error-404-btn {
    background-color: #B7536C;
    color: #fff;
    font-size: 1rem;
    padding: 15px 30px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    transition: background 0.3s ease;
    animation: bounce 1.5s ease-out infinite;
}

/* Effet au survol du bouton */
.error-404-btn:hover {
    background-color: #D94F78;
}

/* Effet lorsque le bouton est sélectionné */
.error-404-btn:focus {
    outline: none;
}

/* Définition des animations */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes slideIn {
    0% {
        transform: translateY(-100%);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes slideUp {
    0% {
        transform: translateY(50px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes bounce {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0);
    }
}

/* Réglages pour les petits écrans */
@media (max-width: 768px) {
    .error-404-wrapper {
        /* Padding réduit pour mobile */
        padding: 60px 20px; /* Réduire légèrement le padding pour les mobiles */
    }

    .error-404-header {
        font-size: 2rem;
    }

    .error-404-message {
        font-size: 1rem;
    }

    .error-404-btn {
        font-size: 0.9rem;
        padding: 12px 25px;
    }
}

/* Réglages pour les grands écrans (tablettes et plus grands) */
@media (max-width: 1024px) {
    .error-404-wrapper {
        /* Padding pour les tablettes */
        padding: 80px 20px;
    }

    .error-404-header {
        font-size: 2.2rem;
    }

    .error-404-message {
        font-size: 1.1rem;
    }

    .error-404-btn {
        font-size: 1rem;
        padding: 14px 28px;
    }
}
</style>

<div class="error-404-wrapper">
    <div class="error-404-header">
        <h1>Oops! Page non trouvée</h1>
    </div>

    <div class="error-404-message">
        <p>La page que vous recherchez n'existe pas ou a été déplacée. Veuillez vérifier l'URL ou retourner à l'accueil.</p>
    </div>

    <a href="<?php echo esc_url(home_url()); ?>" class="error-404-btn">Retour à l'accueil</a>
</div>

<?php get_footer(); ?>
