<?php

use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\Routing\Generator\UrlGenerator;

/** @var UrlGenerator $generateurUrl */
/** @var UrlHelper $assistantUrl */
?>

<section class="projet-detail">
    <h1>KCDLE V2</h1>
    <p><strong>Refonte complète d'une application web autour d'une architecture Laravel et Vue.js moderne.</strong></p>

    <h2>Présentation</h2>
    <p>
        KCDLE est une application web inspirée des jeux de type "guessing game" orientés autour de l'univers de l'esport League of Legends et de la structure Karmine Corp. Le projet a fortement évolué cette année avec une refonte importante de son architecture afin de mettre en place une séparation claire entre le front-end et le back-end.
    </p>
    <p>
        Cette nouvelle version du projet repose sur Laravel pour la partie API et Vue.js pour le front-end. Cette séparation m'a permis de travailler sur des problématiques proches de celles rencontrées dans des environnements professionnels modernes : communication via API, gestion d'état côté client, architecture modulaire, sécurité des échanges et organisation scalable du projet.
    </p>
    <p>
        Le projet inclut également de nombreuses fonctionnalités avancées comme un système PvP, un système d'authentification, une gestion des statistiques utilisateurs, un système de notifications Discord, des systèmes d'administration ainsi qu'une importante réflexion autour des performances et de la maintenabilité.
    </p>
    <p>
        Le développement de cette nouvelle version m'a permis d'approfondir mes compétences sur Laravel, Vue.js et les architectures modernes orientées API. J'ai également travaillé sur des problématiques de qualité logicielle, d'organisation du code, de gestion des données et d'évolution continue d'une application déjà existante.
    </p>

    <div class="fiche-projet">
        <h4>Fiche projet</h4>
        <ul>
            <li><strong>Travail :</strong> Refonte d'un projet personnel existant.</li>
            <li><strong>Objectifs :</strong> Moderniser l'architecture de KCDLE avec une API Laravel, un front-end Vue.js séparé et des fonctionnalités avancées.</li>
            <li><strong>Contraintes :</strong> Conserver la logique métier du projet, intégrer de nouveaux modules et maintenir une architecture stable pendant l'évolution.</li>
            <li><strong>Apports techniques :</strong> API REST, Laravel, Vue.js, MySQL, Docker, authentification, administration, PvP, notifications Discord et maintenance applicative.</li>
            <li><strong>Apports humains :</strong> Capacité à faire évoluer un projet réel, à prioriser les refontes et à relier les choix techniques à l'expérience utilisateur.</li>
        </ul>
    </div>

    <h2>Refonte architecture</h2>
    <p>
        La refonte a consisté à passer d'une organisation plus monolithique à une architecture séparant clairement l'API Laravel et l'interface Vue.js. Cette séparation a rendu les responsabilités plus explicites : le back-end porte les règles métier, les routes, la sécurité et l'accès aux données, tandis que le front-end gère l'état de l'interface, les interactions utilisateur et l'affichage dynamique.
    </p>

    <h2>Fonctionnalités</h2>
    <ul>
        <li>API Laravel structurée autour de routes REST.</li>
        <li>Front-end Vue.js séparé et organisé en composants.</li>
        <li>Système d'authentification utilisateur.</li>
        <li>Matchmaking et mécaniques PvP.</li>
        <li>Gestion des statistiques utilisateurs.</li>
        <li>Système de notifications et d'interactions Discord.</li>
        <li>Interface dynamique et administration complète.</li>
        <li>Architecture modulaire pensée pour l'optimisation et la maintenance.</li>
    </ul>

    <h2>Backend Laravel</h2>
    <p>
        La partie Laravel centralise les traitements serveur, les routes API, la gestion des données MySQL et les règles de sécurité. Cette organisation permet de mieux structurer la logique métier, de contrôler les échanges avec le front-end et de faciliter les évolutions futures du projet.
    </p>

    <h2>Frontend Vue.js</h2>
    <p>
        Le front-end Vue.js permet de construire une interface plus réactive, organisée en composants et adaptée aux interactions fréquentes du jeu. Cette approche améliore la séparation entre l'affichage et les traitements serveur, tout en facilitant la maintenance de l'interface.
    </p>

    <h2>Système PvP</h2>
    <p>
        Le système PvP ajoute une dimension temps réel et compétitive au projet. Il impose une gestion plus rigoureuse des états de partie, des échanges entre joueurs, de la validation des actions et de la cohérence des données affichées à chacun.
    </p>

    <h2>Administration</h2>
    <p>
        Les outils d'administration permettent de gérer les contenus, de suivre certains éléments de fonctionnement et de faciliter la maintenance du projet. Leur intégration a nécessité une attention particulière aux droits d'accès, à la sécurité des routes et à la séparation entre les usages publics et les usages administrateurs.
    </p>

    <h2>Apprentissages RACDV</h2>
    <p>
        Les apprentissages RACDV associés à KCDLE V2 sont détaillés dans la sidebar à droite. Ils concernent uniquement les compétences de niveau 3 mobilisées pendant la refonte : Réaliser, Optimiser et Collaborer.
    </p>

    <h2>Captures du projet</h2>
    <ul>
        <li>
            <em>- Architecture API Laravel et front-end Vue.js</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/kcdle-v2-architecture.png") ?>" alt="Architecture API Laravel et front-end Vue.js de KCDLE V2">
        </li>
        <li>
            <em>- Interface de jeu KCDLE V2</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/kcdle-v2-interface.png") ?>" alt="Interface de jeu de KCDLE V2">
        </li>
        <li>
            <em>- Système PvP et matchmaking</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/kcdle-v2-pvp.png") ?>" alt="Système PvP et matchmaking de KCDLE V2">
        </li>
        <li>
            <em>- Interface d'administration</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/kcdle-v2-administration.png") ?>" alt="Interface d'administration de KCDLE V2">
        </li>
    </ul>

    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>

<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence : Réaliser</h3>
        <p><strong>AC31.01 - Choisir et implémenter les architectures adaptées</strong> - La refonte de KCDLE m'a permis de travailler pleinement l'apprentissage critique AC31.01, car l'un des enjeux principaux du projet était de choisir une architecture plus adaptée à l'évolution de l'application. L'ancienne version du projet était plus monolithique, tandis que la nouvelle version repose sur une séparation nette entre un back-end Laravel et un front-end Vue.js.</p>
        <p>Ce choix architectural répond à plusieurs objectifs : améliorer la maintenabilité, faciliter l'évolution du front-end, structurer les échanges via API et rendre le projet plus proche d'une architecture web moderne. Laravel est utilisé pour centraliser les règles métier, les routes API, les accès aux données et les traitements serveur. Vue.js est utilisé pour construire une interface dynamique, réactive et mieux organisée en composants.</p>
        <p>Cette architecture m'a obligé à raisonner sur la responsabilité de chaque partie du système. Les données ne sont plus simplement injectées dans des pages, elles transitent par des endpoints structurés et sont consommées par le front-end. Cette logique m'a permis de mieux comprendre les enjeux d'une architecture découplée et de concevoir une application plus évolutive.</p>
        <p>Le travail réalisé correspond directement à la compétence Réaliser de niveau 3, car il ne s'agit pas seulement de développer une fonctionnalité isolée. Il s'agit d'adapter une application existante à une architecture plus robuste, capable de supporter plusieurs usages : jeu quotidien, PvP, statistiques, administration et intégrations externes.</p>
        <p><strong>AC31.02 - Faire évoluer une application existante</strong> - KCDLE est le projet qui illustre le plus clairement l'apprentissage critique AC31.02. L'application existait déjà avant cette année, mais elle avait atteint un stade où son architecture devait évoluer pour pouvoir supporter de nouvelles fonctionnalités et une meilleure séparation technique. Le travail réalisé a donc consisté à faire évoluer une application existante sans perdre ce qui faisait déjà son intérêt.</p>
        <p>Cette évolution a nécessité une analyse de l'existant. J'ai dû identifier les fonctionnalités déjà présentes, comprendre leurs dépendances, repérer les parties difficiles à maintenir et déterminer quelles zones devaient être restructurées en priorité. Cette démarche m'a permis de dépasser une logique de simple ajout de code pour adopter une logique de refonte progressive.</p>
        <p>La migration vers Laravel et Vue.js a également nécessité de repenser la manière dont les données circulent dans l'application. Les fonctionnalités liées aux utilisateurs, aux parties, aux statistiques ou au PvP doivent être gérées de manière cohérente entre le serveur et l'interface. Chaque évolution devait donc être intégrée sans casser les comportements existants.</p>
        <p>Cette expérience m'a permis de travailler une compétence essentielle en développement professionnel : faire évoluer un projet vivant. Une application utilisée ou destinée à être utilisée ne peut pas être modifiée sans méthode. Il faut préserver l'existant, sécuriser les changements, structurer le code et anticiper les futures évolutions.</p>
        <p><strong>AC31.03 - Intégrer des solutions dans un environnement de production</strong> - Le projet KCDLE m'a permis de travailler l'intégration de solutions dans un environnement proche de la production. L'application ne se limite pas à un ensemble de pages web : elle repose sur plusieurs modules et services qui doivent fonctionner ensemble de manière cohérente. Le back-end Laravel, le front-end Vue.js, la base de données, les services d'authentification, l'administration et les interactions Discord doivent être intégrés dans une même architecture.</p>
        <p>Cette compétence a été mobilisée à travers l'organisation des routes API, la gestion des échanges client/serveur, la structuration des données et la mise en place de fonctionnalités interconnectées. Par exemple, certaines informations produites par le jeu peuvent être utilisées dans les statistiques, dans l'administration ou dans les notifications Discord. Cela impose une architecture stable et correctement pensée.</p>
        <p>J'ai également dû prendre en compte des contraintes de fonctionnement global : cohérence des données, stabilité des endpoints, gestion des erreurs et séparation claire des responsabilités. Ces éléments sont essentiels pour qu'une application puisse être maintenue et exploitée dans un environnement réel.</p>
        <p>L'apprentissage critique AC31.03 est donc directement validé par cette capacité à intégrer plusieurs solutions techniques dans un ensemble applicatif cohérent. KCDLE m'a permis de comprendre qu'une application moderne doit être pensée comme un système complet, et non comme une simple addition de fonctionnalités indépendantes.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Optimiser</h3>
        <p><strong>AC32.01 - Anticiper les résultats de diverses métriques</strong> - Dans KCDLE, l'optimisation a été une préoccupation importante en raison de la nature même de l'application. Un jeu web doit rester fluide, réactif et agréable à utiliser. La séparation entre Laravel et Vue.js m'a obligé à anticiper l'impact des appels API, du chargement des données et de la gestion d'état côté client sur l'expérience utilisateur.</p>
        <p>J'ai dû réfléchir à des métriques concrètes comme le temps de réponse des requêtes, le nombre d'appels réseau nécessaires pour afficher une page, la quantité de données envoyées au front-end ou encore la rapidité d'affichage des informations liées à une partie. Ces éléments influencent directement la qualité d'utilisation du site.</p>
        <p>Cette démarche correspond à l'AC32.01 car elle m'a conduit à anticiper les conséquences de mes choix techniques avant même de constater un problème. Par exemple, une mauvaise organisation des données ou des appels API trop nombreux peuvent rendre l'application moins fluide. En structurant mieux les échanges, il devient possible de limiter ces problèmes.</p>
        <p>Le projet m'a donc permis de comprendre que l'optimisation commence dès la conception. Elle ne consiste pas seulement à corriger un problème de performance après coup, mais à concevoir l'application de manière à éviter les lenteurs, les traitements inutiles et les dépendances trop lourdes.</p>
        <p><strong>AC32.02 - Profiler, analyser et justifier le comportement d'un code existant</strong> - La refonte de KCDLE m'a obligé à analyser une base de code existante avant de pouvoir la faire évoluer. Cette analyse a été indispensable pour comprendre les comportements déjà en place, les dépendances entre les fonctionnalités et les zones qui pouvaient poser problème en cas de modification.</p>
        <p>J'ai dû examiner certains traitements liés aux parties, aux utilisateurs, aux statistiques ou encore aux fonctionnalités PvP afin de comprendre leur logique avant de les restructurer. Cette démarche m'a permis de justifier les modifications réalisées : certaines parties devaient être déplacées côté back-end, d'autres devaient être exposées via API, et certaines responsabilités devaient être clarifiées.</p>
        <p>L'AC32.02 est donc travaillée à travers cette capacité à comprendre puis expliquer le comportement d'un code existant. Dans KCDLE, il ne suffisait pas de réécrire du code : il fallait savoir pourquoi une partie devait être modifiée, quel problème elle posait et quel bénéfice apportait la nouvelle organisation.</p>
        <p>Cette approche m'a permis de développer une posture plus professionnelle face à la maintenance logicielle. Avant d'optimiser ou de refactoriser, il faut analyser précisément le fonctionnement existant et être capable de justifier les choix effectués.</p>
        <p><strong>AC32.03 - Choisir et utiliser des bibliothèques et méthodes dédiées au domaine d'application</strong> - KCDLE m'a permis de mobiliser l'AC32.03 à travers le choix de technologies adaptées à une application web interactive. Laravel et Vue.js ont été retenus car ils répondent à des besoins différents mais complémentaires. Laravel permet de structurer le back-end, de gérer les routes, les modèles, les contrôleurs, l'authentification et la logique métier. Vue.js permet de construire une interface dynamique, organisée en composants et plus adaptée à une expérience utilisateur interactive.</p>
        <p>Le choix de ces outils n'est pas seulement technique, il répond à la nature du projet. KCDLE est un jeu web qui nécessite des interactions rapides, une interface réactive et une gestion claire des données. Une architecture Laravel/Vue.js permet de mieux répondre à ces contraintes qu'une application entièrement rendue côté serveur.</p>
        <p>J'ai également mobilisé des méthodes de développement adaptées : séparation des responsabilités, structuration des composants, organisation des routes API, gestion des états côté front-end et réflexion sur la qualité du code. Ces méthodes m'ont permis de produire une application plus robuste et plus facilement maintenable.</p>
        <p>Cette compétence est donc travaillée car le projet m'a amené à choisir, utiliser et justifier des outils adaptés au domaine du développement web moderne. Les technologies utilisées ne sont pas simplement ajoutées au projet : elles structurent la manière dont l'application fonctionne.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Collaborer</h3>
        <p><strong>AC36.01 - Organiser et partager une veille technologique et informationnelle</strong> - Le développement de KCDLE m'a demandé une veille technologique régulière, notamment autour de Laravel, Vue.js, des architectures API, de la sécurité web et des bonnes pratiques de structuration d'un projet full-stack. Cette veille était nécessaire pour faire évoluer le projet vers une architecture plus moderne et plus maintenable.</p>
        <p>J'ai dû comparer différentes approches techniques, comprendre les pratiques recommandées et sélectionner celles qui correspondaient réellement aux besoins du projet. Cette veille m'a permis de ne pas me limiter à une solution immédiate, mais de choisir des méthodes capables de soutenir l'évolution future de l'application.</p>
        <p>L'AC36.01 est donc mobilisée car j'ai organisé une recherche d'informations utile au projet et réutilisable dans mes choix techniques. Cette démarche s'inscrit dans une logique professionnelle : un développeur doit être capable de suivre l'évolution des technologies, d'évaluer leur pertinence et de les appliquer de manière raisonnée.</p>
        <p><strong>AC36.02 - Identifier les enjeux de l'économie de l'innovation numérique</strong> - KCDLE m'a permis de réfléchir aux enjeux d'un projet numérique orienté communauté et fidélisation des utilisateurs. L'application ne repose pas uniquement sur une fonctionnalité technique, mais sur une expérience de jeu quotidienne, des statistiques, une dimension compétitive et des interactions avec Discord.</p>
        <p>Cette dimension m'a amené à comprendre que la valeur d'un projet numérique dépend fortement de sa capacité à créer de l'engagement. Dans KCDLE, les fonctionnalités comme le jeu quotidien, le PvP, les classements ou les notifications Discord contribuent à maintenir l'intérêt des utilisateurs et à renforcer l'aspect communautaire.</p>
        <p>L'AC36.02 est donc travaillée car le projet m'a permis d'identifier les enjeux économiques, sociaux et technologiques liés à l'innovation numérique. Même s'il s'agit d'un projet personnel, il reprend des logiques présentes dans de nombreux services numériques actuels : rétention, expérience utilisateur, animation de communauté et amélioration continue.</p>
        <p><strong>AC36.03 - Guider la conduite du changement informatique au sein d'une organisation</strong> - La refonte de KCDLE illustre directement une démarche de conduite du changement informatique. Le projet est passé d'une organisation plus classique à une architecture séparant clairement le front-end et le back-end. Ce changement n'est pas uniquement technique : il modifie la manière de développer, de tester, d'organiser les fonctionnalités et de maintenir l'application.</p>
        <p>J'ai dû accompagner ce changement progressivement afin de ne pas désorganiser l'ensemble du projet. Certaines fonctionnalités devaient être conservées, d'autres adaptées, et certaines complètement repensées. Cette transition m'a appris qu'un changement informatique doit être planifié et intégré par étapes.</p>
        <p>L'AC36.03 est donc mobilisée car j'ai dû guider l'évolution technique du projet vers une organisation plus moderne. Cette démarche m'a permis de comprendre que la conduite du changement ne concerne pas uniquement les grandes organisations : elle existe aussi à l'échelle d'un projet logiciel lorsqu'une architecture ou une méthode de développement évolue.</p>
        <p><strong>AC36.04 - Accompagner le management de projet informatique</strong> - KCDLE m'a demandé une organisation de projet beaucoup plus poussée qu'un simple exercice académique. Le nombre de fonctionnalités, la séparation front/back, les systèmes PvP, l'administration, les statistiques et les intégrations externes nécessitent une planification claire pour éviter une progression désordonnée.</p>
        <p>J'ai dû prioriser les développements, identifier les dépendances entre les fonctionnalités et organiser les évolutions de manière cohérente. Par exemple, certaines parties du front-end ne pouvaient être développées correctement qu'après la mise en place des endpoints back-end correspondants. Cette relation entre les tâches m'a obligé à raisonner en termes de gestion de projet.</p>
        <p>L'AC36.04 est donc travaillée car le projet m'a permis d'accompagner le management d'un projet informatique complet. Même en autonomie, il a fallu structurer l'avancement, définir les priorités et maintenir une vision globale de l'application.</p>
        <p>Cette expérience m'a permis de renforcer ma capacité à organiser un projet technique complexe et à comprendre le lien entre architecture, planification et qualité finale du produit.</p>
    </div>
</div>
