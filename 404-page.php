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
    padding: 60px 20px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

.error-404-header {
    font-size: 2.5rem;
    color: #B7536C;
    margin-bottom: 20px;
    animation: slideIn 1s ease-out;
}

.error-404-message {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 30px;
    animation: slideUp 1s ease-out;
}

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

.error-404-btn:hover {
    background-color: #8D8DAF;
}

.error-404-btn:focus {
    outline: none;
}

/* Animation Definitions */
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

/* Responsive */
@media (max-width: 768px) {
    .error-404-wrapper {
        padding: 40px 20px;
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
