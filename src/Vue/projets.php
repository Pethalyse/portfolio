<?php
/** @var Symfony\Component\Routing\Generator\UrlGenerator $generateurUrl */
?>

<section class="projets">
    <h1>Portfolio d'apprentissage - BUT3 Informatique parcours RACDV</h1>
    <p>
        Au cours de cette troisième année de BUT Informatique parcours RACDV, j'ai approfondi mes compétences à travers deux projets significatifs : <a href="<?= $generateurUrl->generate('melovibes') ?>">Melovibes</a> et <a href="<?= $generateurUrl->generate('kcdle-v2') ?>">KCDLE V2</a>. Ces projets m'ont permis de travailler les trois compétences de niveau 3 attendues dans le parcours RACDV : Réaliser, Optimiser et Collaborer.
    </p>
    <p>
        Melovibes m'a permis de consolider mes compétences en conception d'application web, en structuration d'architecture MVC, en organisation d'interfaces dynamiques et en réflexion sur l'expérience utilisateur. Ce projet a constitué une mise en pratique importante de la compétence Réaliser, car il m'a demandé de concevoir une application cohérente, évolutive et techniquement organisée.
    </p>
    <p>
        KCDLE V2 m'a permis d'aller plus loin dans l'évolution d'une application existante, avec une refonte importante autour de Laravel et Vue.js. Cette séparation nette entre le back-end et le front-end m'a amené à travailler sur des problématiques plus avancées : architecture API, structuration des données, optimisation des échanges, intégration de services externes et maintenabilité d'un projet en évolution continue.
    </p>
    <p>
        Ces deux projets m'ont également permis de travailler la compétence Optimiser, en analysant les impacts de mes choix techniques sur la performance, la fluidité, la lisibilité du code et la capacité d'évolution des applications. L'optimisation n'a pas été abordée uniquement comme une recherche de vitesse, mais comme une démarche globale visant à produire des applications plus efficaces, plus robustes et plus faciles à maintenir.
    </p>
    <p>
        Enfin, la compétence Collaborer a été mobilisée à travers la veille technologique, l'organisation du travail, la conduite du changement technique et la gestion de projet. Même lorsque certaines réalisations ont été menées en autonomie, elles ont nécessité une posture professionnelle : rechercher les bonnes informations, justifier les choix techniques, planifier les évolutions et structurer le projet comme un système informatique complet.
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
        <h1>Compétence Collaborer - Niveau 3</h1>
        <p>
            La compétence Collaborer a été travaillée à travers la veille technologique, l'organisation du projet et la conduite progressive des évolutions techniques. Dans <a href="<?= $generateurUrl->generate('melovibes') ?>">Melovibes</a>, cette compétence s'est exprimée par la recherche d'informations fiables sur les pratiques de développement web, l'organisation d'interfaces modernes et la structuration d'une application dynamique. Cette veille m'a permis de transformer des ressources techniques en choix concrets pour améliorer l'ergonomie et la cohérence du projet.
        </p>
        <p>
            Dans <a href="<?= $generateurUrl->generate('kcdle-v2') ?>">KCDLE V2</a>, cette compétence a pris une dimension plus importante avec la refonte complète de l'architecture. Il a fallu organiser le travail, prioriser les évolutions, accompagner le passage vers une séparation front-end/back-end et maintenir une vision globale du projet. La veille autour de Laravel, Vue.js, des architectures API et des bonnes pratiques full-stack a directement soutenu les décisions techniques prises pendant le développement.
        </p>
        <p>
            Ces projets m'ont aussi permis d'identifier les enjeux de l'innovation numérique. Melovibes met en avant la valeur d'une expérience utilisateur claire et adaptée aux usages actuels, tandis que KCDLE V2 montre l'importance de l'engagement communautaire, des statistiques, du PvP et des interactions Discord dans un service numérique orienté fidélisation. La compétence Collaborer ne se limite donc pas au travail en équipe : elle implique aussi de comprendre les usages, de partager une veille, d'accompagner le changement technique et de structurer l'avancement d'un projet informatique.
        </p>
    </div>

    <div id="projets">
        <h1>Projets BUT3 - RACDV niveau 3</h1>
        <p>
            Les projets suivants constituent le coeur de mon portfolio d'apprentissage de troisième année. Ce sont eux qui servent de support principal aux apprentissages RACDV de niveau 3 présentés dans les pages détaillées.
        </p>

        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('melovibes') ?>">Melovibes</a></h2>
            <p>
                Plateforme web musicale moderne orientée expérience utilisateur, architecture MVC, composants dynamiques et communication front/back. Ce projet sert de support aux apprentissages RACDV de niveau 3 autour de la réalisation, de l'optimisation et de la collaboration appliquée à l'organisation d'un projet web.
            </p>
        </div>

        <div class="projet">
            <h2><a href="<?= $generateurUrl->generate('kcdle-v2') ?>">KCDLE V2</a></h2>
            <p>
                Refonte complète de KCDLE autour d'une API Laravel et d'un front-end Vue.js séparé. Le projet mobilise les compétences RACDV de niveau 3 liées à l'architecture, à l'évolution d'une application existante, à l'optimisation, à la veille technologique, à la conduite du changement technique et à l'organisation du projet.
            </p>
        </div>

        <h1>Projets BUT2 - archives du portfolio</h1>
        <p>
            Les projets suivants correspondent aux travaux présentés dans mon portfolio de deuxième année. Ils restent accessibles pour montrer la continuité de mon parcours, mais ils ne sont pas utilisés comme preuves principales pour les compétences RACDV de niveau 3.
        </p>

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
