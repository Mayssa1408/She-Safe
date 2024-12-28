<?php
/**
 * Template Name: 404 Error
 * 
 * This is the template that displays the 404 page.
 */

get_header(); ?>

<div class="error-404-wrapper">
    <div class="error-404-header">
        <h1><?php esc_html_e('Oops! Page non trouvée', 'shesafe'); ?></h1>
    </div>

    <div class="error-404-message">
        <p><?php esc_html_e('La page que vous recherchez n\'existe pas ou a été déplacée. Veuillez vérifier l\'URL ou retourner à l\'accueil.', 'shesafe'); ?>
        </p>
    </div>

    <a href="<?php echo esc_url(home_url('/')); ?>" class="error-404-btn">
        <?php esc_html_e('Retour à l\'accueil', 'shesafe'); ?>
    </a>
</div>

<style>
    .error-404-wrapper {
        font-family: 'Montserrat', Arial, sans-serif;
        color: #333;
        line-height: 1.6;
        text-align: center;
        animation: fadeIn 1s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
        padding: 80px 20px;
        margin: 0 auto;
        max-width: 800px;
    }

    .error-404-header h1 {
        font-size: clamp(2rem, 5vw, 2.5rem);
        color: #B7536C;
        margin-bottom: 20px;
        animation: slideIn 1s ease-out;
    }

    .error-404-message {
        font-size: clamp(1rem, 3vw, 1.2rem);
        color: #555;
        margin-bottom: 30px;
        animation: slideUp 1s ease-out;
        max-width: 600px;
    }

    .error-404-btn {
        background-color: #B7536C;
        color: #fff;
        font-size: clamp(0.9rem, 2vw, 1rem);
        padding: 15px 30px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        animation: bounce 1.5s ease-out infinite;
    }

    .error-404-btn:hover {
        background-color: #D94F78;
        color: #fff;
        transform: translateY(-2px);
        text-decoration: none;
    }

    .error-404-btn:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(183, 83, 108, 0.3);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            transform: translateY(30px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    @media (max-width: 768px) {
        .error-404-wrapper {
            padding: 40px 20px;
        }

        .error-404-btn {
            padding: 12px 25px;
        }
    }
</style>

<?php get_footer(); ?>