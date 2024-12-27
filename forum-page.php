<?php
/* Template Name: Forum Page */

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_experience'])) {
    if (!isset($_POST['experience_nonce']) || !wp_verify_nonce($_POST['experience_nonce'], 'submit_experience')) {
        die('La vérification de sécurité a échoué.');
    }

    $content = sanitize_textarea_field($_POST['experience']);
    $nom = !empty($_POST['nom']) ? sanitize_text_field($_POST['nom']) : 'Anonyme';
    $age = intval($_POST['age']);
    $lieu = sanitize_text_field($_POST['lieu']);
    $date = sanitize_text_field($_POST['date']);

    // Création du post
    $post_data = array(
        'post_title'    => $nom,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => 'experience'
    );

    $post_id = wp_insert_post($post_data);

    if (!is_wp_error($post_id)) {
        update_post_meta($post_id, 'age', $age);
        update_post_meta($post_id, 'lieu', $lieu);
        update_post_meta($post_id, 'date', $date);
        
        // Redirection vers la même page
        $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        wp_redirect(add_query_arg('success', 'true', $current_url));
        exit;
    }
}



// Code de débogage
$args = array(
    'post_type'      => 'experience',
    'posts_per_page' => -1,  // Affiche tous les posts
    'post_status'    => 'publish'
);

$experiences = new WP_Query($args);

// Affiche des informations de débogage
echo '<!-- Nombre de posts trouvés : ' . $experiences->found_posts . ' -->';
echo '<!-- La requête SQL : ' . $experiences->request . ' -->';

if ($experiences->have_posts()) :
    while ($experiences->have_posts()) : $experiences->the_post();
        // Votre code d'affichage des expériences
    endwhile;
    wp_reset_postdata();
else:
    echo '<div>Aucune expérience trouvée. Soyez le premier à partager !</div>';
endif;

get_header();
?>

<style>
    /* Variables CSS */
    :root {
        --primary-color: #B7536C;
        --primary-light: #F4C7C2;
        --background-light: #FEF6E9;
        --text-dark: #333333;
        --text-light: #666666;
        --transition: all 0.3s ease;
    }

    /* Styles de base */
    .forum-section {
        background: linear-gradient(135deg, var(--background-light), #fff);
        padding: 70px 20px;
        min-height: 400px;
        position: relative;
        overflow: hidden;
    }

    .forum-title {
        color: var(--primary-color);
        font-size: 2.5em;
        margin-bottom: 30px;
        text-align: center;
        font-family: 'Lora', serif;
        opacity: 0;
        animation: slideDown 1s ease forwards;
    }

    .forum-description {
        text-align: center;
        color: var(--text-dark);
        max-width: 800px;
        margin: 0 auto 50px;
        line-height: 1.6;
        opacity: 0;
        animation: slideUp 1s ease forwards 0.5s;
    }

    /* Section formulaire */
    .post-section {
        background: linear-gradient(45deg, var(--primary-light), #fff);
        padding: 70px 20px;
        position: relative;
    }

    .experience-form {
        background: white;
        max-width: 800px;
        margin: 0 auto;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transform: translateY(0);
        transition: var(--transition);
    }

    .experience-form:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: var(--primary-color);
        font-weight: bold;
    }

    .form-input,
    .form-textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid var(--primary-light);
        border-radius: 10px;
        transition: var(--transition);
    }

    .form-textarea {
        min-height: 150px;
        resize: vertical;
    }

    .form-input:focus,
    .form-textarea:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(183, 83, 108, 0.1);
    }

    .submit-button {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 15px 30px;
        border-radius: 25px;
        cursor: pointer;
        font-size: 16px;
        transition: var(--transition);
        display: block;
        margin: 30px auto 0;
    }

    .submit-button:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(183, 83, 108, 0.3);
    }

    /* Message de succès */
    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: center;
        animation: slideDown 0.5s ease;
    }
    /* Grid des expériences */
    .experiences-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        padding: 20px;
        max-width: 1200px;
        margin: 40px auto;
    }

    .experience-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: var(--transition);
        transform: translateY(20px);
        opacity: 0;
        animation: fadeIn 0.5s ease-out forwards;
    }

    .experience-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .experience-header {
        border-bottom: 2px solid var(--primary-light);
        padding-bottom: 15px;
        margin-bottom: 15px;
    }

    .experience-title {
        color: var(--primary-color);
        margin: 0;
        font-size: 1.2em;
    }

    .experience-meta {
        display: flex;
        gap: 15px;
        color: var(--text-light);
        font-size: 0.9em;
        margin-top: 10px;
    }

    .experience-content {
        color: var(--text-dark);
        line-height: 1.6;
    }

    /* Animations */
    @keyframes slideDown {
        from { transform: translateY(-30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .forum-title {
            font-size: 2em;
        }
        .experiences-grid {
            grid-template-columns: 1fr;
        }
        .experience-form {
            padding: 20px;
        }
    }
</style>

<section class="forum-section">
    <h1 class="forum-title">Forum de Partage d'Expériences</h1>
    <p class="forum-description">
        Un espace sécurisé pour partager vos expériences et soutenir d'autres femmes. 
        Vos témoignages contribuent à créer une communauté plus forte et plus sûre.
    </p>
</section>

<section class="post-section">
    <div class="container">
        <?php if (isset($_GET['success'])): ?>
            <div class="success-message">
                Merci d'avoir partagé votre expérience. Votre témoignage a été publié avec succès.
            </div>
        <?php endif; ?>

        <form class="experience-form" method="POST" action="">
            <?php wp_nonce_field('submit_experience', 'experience_nonce'); ?>
            
            <div class="form-group">
                <label class="form-label">Votre expérience :</label>
                <textarea name="experience" class="form-textarea" required 
                    placeholder="Partagez votre vécu ici..."></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Votre prénom (optionnel) :</label>
                <input type="text" name="nom" class="form-input" 
                    placeholder="Laissez vide pour rester anonyme">
            </div>

            <div class="form-group">
                <label class="form-label">Votre âge :</label>
                <input type="number" name="age" class="form-input" 
                    required min="13" max="100">
            </div>

            <div class="form-group">
                <label class="form-label">Lieu :</label>
                <input type="text" name="lieu" class="form-input" 
                    required placeholder="Quartier ou lieu de l'événement">
            </div>

            <div class="form-group">
                <label class="form-label">Date de l'événement :</label>
                <input type="date" name="date" class="form-input" required>
            </div>

            <button type="submit" name="submit_experience" class="submit-button">
                Partager mon expérience
            </button>
        </form>

        <div class="experiences-grid">
            <?php
            $args = array(
                'post_type'      => 'experience',
                'posts_per_page' => 9,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post_status'    => 'publish'
            );

            $experiences = new WP_Query($args);
            $delay = 0;

            if ($experiences->have_posts()) :
                while ($experiences->have_posts()) : $experiences->the_post();
                    $age = get_post_meta(get_the_ID(), 'age', true);
                    $lieu = get_post_meta(get_the_ID(), 'lieu', true);
                    $date = get_post_meta(get_the_ID(), 'date', true);
                    $delay += 0.1;
            ?>
                <article class="experience-card" style="animation-delay: <?php echo $delay; ?>s">
                    <header class="experience-header">
                        <h3 class="experience-title">
                            <?php echo esc_html(get_the_title()); ?>
                        </h3>
                        <div class="experience-meta">
                            <?php if ($age) : ?>
                                <span class="age"><?php echo esc_html($age); ?> ans</span>
                            <?php endif; ?>
                            <?php if ($lieu) : ?>
                                <span class="lieu"><?php echo esc_html($lieu); ?></span>
                            <?php endif; ?>
                            <?php if ($date) : ?>
                                <span class="date"><?php echo date('d/m/Y', strtotime($date)); ?></span>
                            <?php endif; ?>
                        </div>
                    </header>
                    <div class="experience-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else:
            ?>
                <div style="grid-column: 1/-1; text-align: center;">
                    <p>Aucune expérience n'a encore été partagée. Soyez la première à partager votre vécu.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation au scroll pour les cartes
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.experience-card').forEach(card => {
        observer.observe(card);
    });
});
</script>

<?php get_footer(); ?>