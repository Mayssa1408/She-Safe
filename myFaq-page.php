<?php
/** 
 * Template Name: myFaq - Page 
 */
get_header();
?>

<div class="container">
    <h1><?php the_title(); ?></h1>
</div>

<main>
    <div class="container">
        <?php the_content(); ?>
    </div>

    <div class="container">
        <?php
        // Requête pour récupérer les FAQs
        $faqs = new WP_Query([
            'post_type' => 'faqs',
            'post_status' => 'publish',
            'posts_per_page' => -1 // Récupère toutes les FAQ sans limite
        ]);

        if ($faqs->have_posts()):
            $i = 0; // Initialise le compteur
            ?>
            <div class="accordion" id="accordionExample">
                <?php while ($faqs->have_posts()):
                    $faqs->the_post();
                    $prix = esc_html(get_field('prix')); // Protection des champs personnalisés
                    $url_video = esc_url(get_field('url_video'));
                    $is_first = $i === 0; // Ouvre le premier élément de l'accordéon uniquement
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?= $i; ?>">
                            <button class="accordion-button <?= $is_first ? '' : 'collapsed'; ?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse<?= $i; ?>"
                                aria-expanded="<?= $is_first ? 'true' : 'false'; ?>" aria-controls="collapse<?= $i; ?>">
                                <?php the_title(); ?>
                                <strong><?= $prix; ?></strong>
                            </button>
                        </h2>

                        <div id="collapse<?= $i; ?>" class="accordion-collapse collapse <?= $is_first ? 'show' : ''; ?>"
                            aria-labelledby="heading<?= $i; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php the_content(); ?><br>

                                <?php if ($url_video): ?>
                                    <a href="<?= $url_video; ?>" class="btn btn-secondary" target="_blank">
                                        Voir la vidéo
                                    </a>
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++; // Incrémenter le compteur
                endwhile;
                wp_reset_postdata(); // Réinitialiser la requête principale
                ?>
            </div>
        <?php else: ?>
            <p>Aucune FAQ disponible pour le moment.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>