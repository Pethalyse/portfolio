<?php
/**
 * @var string $cheminVueBody
 */

use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Portfolio\Lib\Conteneur;

/** @var UrlGenerator $generateurUrl */
$generateurUrl = Conteneur::recupererService("generateurUrl");
/** @var UrlHelper $assistantUrl */
$assistantUrl = Conteneur::recupererService("assistantUrl");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Yanhis Mezence - Portfolio' ?></title>
    <link rel="stylesheet" href="<?= $assistantUrl->getAbsoluteUrl("../ressources/css/style.css")  ?>">
</head>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const competenceElements = document.querySelectorAll('.competence');

        competenceElements.forEach((el) => {
            el.addEventListener('click', () => {
                // Fermer les autres
                competenceElements.forEach((c) => {
                    if (c !== el) {
                        c.scrollTop = 0;
                        c.classList.remove('active');
                    }
                });

                // Basculer la classe active
                el.classList.toggle('active');
            });
        });
    });
</script>

<body>
    <header>
        <nav>
            <a href="<?= $generateurUrl->generate('accueil') ?>">Accueil</a>
            <a href="<?= $generateurUrl->generate('projets') ?>">Portfolio d’apprentissage</a>
            <a href="<?= $generateurUrl->generate('projets') ?>#projets">Projets</a>
            <a href="<?= $generateurUrl->generate('cv') ?>">CV</a>
            <a href="mailto:yanhismez@icloud.com?subject=Contact%20depuis%20le%20portfolio">Contact</a>
        </nav>
    </header>

    <main>
        <?php require __DIR__ . "/{$cheminVueBody}"; ?>
    </main>

    <footer>
        <p>&copy; Yanhis Mezence - BUT Informatique</p>

        <section class="links">
            <a target="_blank" href="https://github.com/Pethalyse">GitHub</a>
            <a target="_blank" href="https://www.linkedin.com/in/yanhis-mezence-a855b2264/">LinkedIn</a>
        </section>
    </footer>
</body>
</html>
