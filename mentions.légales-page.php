<?php
/*
Template Name: Mentions Légales
*/
get_header();
?>
<style>
/* Styles généraux pour la page des mentions légales */
.mentions-legales-wrapper {
    font-family: 'Arial', sans-serif;
    color: #333;
    line-height: 1.6;
    padding: 40px 20px;
    animation: fadeIn 1s ease-in-out;
}

/* Section principale */
.mentions-legales-header {
    text-align: center;
    margin-bottom: 40px;
    animation: slideIn 1s ease-out;
}

.mentions-legales-header h1 {
    font-size: 2.5rem;
    color: #B7536C;
    margin-bottom: 10px;
}



/* Contenu de la page des mentions légales */
.mentions-legales-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    animation: slideUp 1s ease-out;
}

.mentions-legales-content h2 {
    font-size: 1.8rem;
    color: #B7536C;
    margin-bottom: 20px;
    font-weight: bold;
}

.mentions-legales-content p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 15px;
}

.mentions-legales-content ul {
    list-style-type: disc;
    margin-left: 20px;
}

.mentions-legales-content a {
    color: #B7536C;
    text-decoration: none;
}

.mentions-legales-content a:hover {
    text-decoration: underline;
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
        transform: translateX(-100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
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

/* Responsive */
@media (max-width: 768px) {
    .mentions-legales-wrapper {
        padding: 20px 10px;
    }

    .mentions-legales-header h1 {
        font-size: 2rem;
    }

    .mentions-legales-header p {
        font-size: 1rem;
    }

    .mentions-legales-content {
        padding: 15px;
    }

    .mentions-legales-content h2 {
        font-size: 1.6rem;
    }

    .mentions-legales-content p {
        font-size: 0.9rem;
    }


</style>

<div class="mentions-legales-wrapper">
    <div class="mentions-legales-header">
        <h1>Mentions Légales</h1>
    </div>

    <div class="mentions-legales-content">
        <h2>1. Présentation du site</h2>
        <p>Le site internet <strong>She Safe</strong> (ci-après "le Site") est accessible à l’adresse suivante : [insérer l'URL de votre site Web]. Il est édité par <strong>She Safe</strong>, une société enregistrée sous le numéro [numéro d'enregistrement] ayant son siège social à [adresse complète].</p>

        <h2>2. Responsable de la publication</h2>
        <p>Le responsable de la publication du site <strong>She Safe</strong> est [Prénom et nom du responsable], en qualité de [fonction du responsable].</p>

        <h2>3. Hébergement</h2>
        <p>Le site <strong>She Safe</strong> est hébergé par la société [nom de l’hébergeur], dont le siège social est situé à [adresse complète de l'hébergeur]. Vous pouvez les contacter à l'adresse email suivante : [email de l’hébergeur].</p>

        <h2>4. Propriété intellectuelle</h2>
        <p>Tous les éléments du site <strong>She Safe</strong>, incluant mais ne se limitant pas aux textes, images, logos, vidéos, et logiciels, sont la propriété exclusive de <strong>She Safe</strong> ou de ses partenaires. Toute reproduction, modification ou diffusion, même partielle, de ces éléments sans autorisation préalable est interdite et constitue une violation des droits d'auteur.</p>

        <h2>5. Données personnelles</h2>
        <p>Conformément au Règlement Général sur la Protection des Données (RGPD), nous vous informons que les données personnelles collectées sur notre site (notamment via le formulaire de contact) sont nécessaires à l’utilisation de nos services et au traitement de vos demandes. Elles sont traitées avec la plus grande confidentialité.</p>
        <p>Les informations collectées peuvent inclure des données telles que votre nom, adresse email, et tout autre renseignement nécessaire à la gestion de votre demande. Vous disposez de droits d'accès, de rectification, et de suppression de vos données personnelles en vous adressant à notre service client à l'adresse suivante : [adresse email de contact pour la protection des données].</p>

        <h2>6. Cookies</h2>
        <p>Le site utilise des cookies afin d’améliorer votre expérience utilisateur. Les cookies sont des fichiers temporaires stockés sur votre appareil, permettant notamment de se souvenir de vos préférences et de suivre votre navigation sur le site. Vous pouvez désactiver les cookies via les paramètres de votre navigateur, mais cela pourrait affecter certaines fonctionnalités du site.</p>

        <h2>7. Responsabilité</h2>
        <p>Les informations fournies sur ce site le sont à titre indicatif. <strong>She Safe</strong> s'efforce de garantir l'exactitude des informations présentes sur le site, mais ne saurait être tenue responsable des erreurs ou omissions qui pourraient survenir.</p>
        <p>Le site peut contenir des liens vers d'autres sites. <strong>She Safe</strong> ne peut être tenue responsable du contenu de ces sites externes.</p>

        <h2>8. Loi applicable et litiges</h2>
        <p>Les présentes mentions légales sont soumises à la législation en vigueur dans [pays de votre société]. En cas de litige, les tribunaux de [lieu où se situe le siège social de votre société] seront compétents.</p>

        <h2>9. Modifications des mentions légales</h2>
        <p><strong>She Safe</strong> se réserve le droit de modifier les présentes mentions légales à tout moment. Toute modification sera publiée sur cette page avec une nouvelle date de mise à jour.</p>

        <p><strong>Date de dernière mise à jour :</strong> [insérer la date]</p>
    </div>
</div>

<?php get_footer(); ?>
