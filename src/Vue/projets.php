<?php
/** @var Symfony\Component\Routing\Generator\UrlGenerator $generateurUrl */
?>

<section class="projets">
    <h1>Portfolio d'apprentissage - BUT3 Informatique parcours RACDV</h1>
    <p>
        Au cours de cette troisième année de BUT Informatique parcours RACDV, j'ai pu approfondir mes compétences techniques à travers plusieurs projets académiques et personnels. Les projets <a href="<?= $generateurUrl->generate('melovibes') ?>">Melovibes</a> et <a href="<?= $generateurUrl->generate('kcdle-v2') ?>">KCDLE V2</a> m'ont notamment permis de travailler sur des problématiques concrètes de développement web moderne, d'architecture logicielle, d'intégration d'API, d'optimisation et d'évolution d'applications existantes.
    </p>
    <p>
        Ces projets m'ont permis de mobiliser plusieurs compétences du référentiel RACDV de niveau 3, notamment autour de la conception d'architectures adaptées, de l'évolution d'applications complexes et de l'intégration de solutions dans des environnements techniques complets.
    </p>
    <p>
        Le travail réalisé cette année m'a également permis de gagner en autonomie dans l'organisation de projets informatiques, dans la structuration du code et dans la prise en compte des problématiques de maintenabilité, de performances et de qualité logicielle.
    </p>

    <div>
        <h1>Compétence Réaliser - Niveau 3</h1>
        <p>
            La compétence Réaliser a été principalement travaillée à travers la conception et l'évolution d'architectures web. Dans <a href="<?= $generateurUrl->generate('melovibes') ?>">Melovibes</a>, j'ai appliqué une organisation MVC afin de séparer les responsabilités entre les vues, les traitements serveur et la gestion des données. Cette démarche m'a permis de comprendre que le choix d'une architecture ne dépend pas seulement d'une préférence technique, mais aussi de la capacité du projet à rester lisible, maintenable et évolutif.
        </p>
        <p>
            Dans <a href="<?= $generateurUrl->generate('kcdle-v2') ?>">KCDLE V2</a>, cette compétence a pris une dimension plus avancée grâce à la refonte d'une application existante vers une architecture séparant une API Laravel et un front-end Vue.js. Cette évolution m'a confronté à des problématiques proches d'un contexte professionnel : analyser l'existant, identifier les parties à conserver, restructurer les échanges de données et intégrer de nouvelles fonctionnalités sans dégrader la stabilité globale.
        </p>
    </div>

    <div>
        <h1>Compétence Optimiser - Niveau 3</h1>
        <p>
            La compétence Optimiser a été mobilisée en reliant les choix de développement à leurs conséquences mesurables sur l'expérience utilisateur et la maintenabilité. Sur Melovibes, j'ai dû anticiper l'impact de l'organisation des composants, des échanges client/serveur et du chargement des données sur la fluidité de navigation. Cette réflexion m'a aidé à comprendre que l'optimisation ne se limite pas à rendre un traitement plus rapide : elle consiste aussi à concevoir une application dont le comportement reste prévisible et cohérent.
        </p>
        <p>
            Sur KCDLE V2, l'optimisation a été plus directement liée à la refonte d'un code existant. J'ai dû analyser des parties déjà développées, comprendre leurs dépendances et justifier les restructurations nécessaires. L'utilisation de Laravel et Vue.js m'a également permis de choisir des bibliothèques adaptées au domaine du développement web moderne, en exploitant leurs mécanismes pour structurer les routes API, les composants front-end et les échanges de données.
        </p>
    </div>

    <div>
        <h1>Compétence Administrer - Niveau 3</h1>
        <p>
            La compétence Administrer est principalement mise en avant dans KCDLE V2, car le projet intègre plusieurs éléments techniques devant fonctionner ensemble : API Laravel, base de données MySQL, front-end Vue.js, environnement Docker et interactions Discord. Cette organisation m'a amené à réfléchir à la configuration d'un environnement web complet, à la séparation des services et à l'automatisation de certains traitements.
        </p>
        <p>
            Les fonctionnalités comme les statistiques, les traitements serveur, les notifications Discord ou les outils d'administration montrent l'importance d'une infrastructure cohérente. J'ai également dû prendre en compte les questions de sécurité liées à l'authentification, aux routes sensibles et à la protection des échanges entre le client et le serveur. Cette compétence m'a donc permis de dépasser le simple développement fonctionnel pour réfléchir au fonctionnement global d'une application dans un environnement technique structuré.
        </p>
    </div>

    <div>
        <h1>Compétence Conduire - Niveau 3</h1>
        <p>
            La compétence Conduire a été travaillée en prenant du recul sur les impacts des projets et sur leur intégration dans un environnement logiciel plus large. Avec Melovibes, j'ai réfléchi aux conséquences des choix techniques sur l'expérience utilisateur, l'accessibilité, la fluidité de navigation et la capacité du projet à être maintenu dans le temps. Cette réflexion m'a permis de relier les décisions de développement à leurs effets concrets sur les usages.
        </p>
        <p>
            Avec KCDLE V2, cette compétence s'est exprimée à travers l'adaptation continue d'un projet existant. La migration vers une architecture moderne, l'ajout de modules comme le PvP ou Discord et l'organisation de l'administration m'ont obligé à penser le projet comme un système évolutif. J'ai ainsi mieux compris comment intégrer et adapter un projet informatique dans un environnement structuré, en conservant une cohérence entre les besoins utilisateurs, les contraintes techniques et la maintenabilité.
        </p>
    </div>

    <div id="projets">
        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('melovibes') ?>">Melovibes</a></h2>
            <p>
                Plateforme web musicale moderne orientée expérience utilisateur, architecture MVC, composants dynamiques et communication front/back. Ce projet sert de support aux apprentissages RACDV de niveau 3 autour de la réalisation, de l'optimisation et de la conduite d'un projet web.
            </p>
        </div>

        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('kcdle-v2') ?>">KCDLE V2</a></h2>
            <p>
                Refonte complète de KCDLE autour d'une API Laravel et d'un front-end Vue.js séparé. Le projet mobilise les compétences RACDV de niveau 3 liées à l'architecture, à l'évolution d'une application existante, à l'optimisation, à l'administration et à l'adaptation d'un système d'information.
            </p>
        </div>

        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('kcdle') ?>">KCDLE</a></h2>
            <p>
                Jeu web de type Daily Guess autour de l’univers League of Legends et de la Karmine Corp.
                KCDLE est un jeu web où chaque jour, les joueurs doivent deviner un joueur professionnel à partir d'indices tels que le rôle, la région, l'équipe, etc.</p>
        </div>


        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('sconote') ?>">Sconote</a></h2>
            <p>
                Reproduction d’un portail universitaire pour le suivi des avis d’orientation en master, réalisée en méthode Agile avec livraison client. Le projet comprend une documentation fonctionnelle complète, des rôles définis (Product Owner, Scrum Master), et un hébergement final sur le serveur de l’IUT.
            </p>
        </div>

        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('projet-c') ?>">Projet C</a></h2>
            <p>
                Jeu de combat 2D développé avec Unity autour d’un lore original. Système de synergie, gestion des barres de mana, logique métier structurée et GDD détaillé. Projet en cours avec vocation commerciale.
            </p>
        </div>

        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('veryBadSplit') ?>">VeryBadSplit</a></h2>
            <p>
                Refonte complète d'une application PHP existante en suivant les bonnes pratiques de qualité logicielle. Projet en équipe de 4 : restructuration en MVCS, intégration de Twig, conteneurisation avec Docker, mise en place de tests et renforcement de la sécurité.
            </p>
        </div>
    </div>
</section>
