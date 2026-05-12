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
        Les apprentissages RACDV associés à KCDLE V2 sont détaillés dans la sidebar à droite. Ils concernent uniquement les compétences de niveau 3 mobilisées pendant la refonte : Réaliser, Optimiser, Administrer et Conduire.
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
        <p><strong>AC31.01 - Choisir et implémenter les architectures adaptées</strong> - La refonte de KCDLE a représenté une étape importante dans ma progression technique car elle m'a permis de mettre en place une véritable architecture moderne basée sur une séparation claire entre le front-end et le back-end. L'ancienne version du projet reposait sur une organisation beaucoup plus monolithique, tandis que cette nouvelle version utilise Laravel pour l'API et Vue.js pour l'interface utilisateur.</p>
        <p>Cette séparation m'a obligé à réfléchir précisément au rôle de chaque partie de l'application, à la structuration des routes API, à l'organisation des composants front-end ainsi qu'à la circulation des données entre le client et le serveur. J'ai dû concevoir des échanges cohérents et sécurisés afin de garantir une bonne communication entre les différentes couches applicatives.</p>
        <p>Le projet m'a également permis de travailler sur une architecture modulaire afin de faciliter la maintenance et l'évolution future de l'application. Cette organisation m'a permis d'ajouter plus facilement de nouvelles fonctionnalités comme le système PvP, les statistiques avancées ou encore les fonctionnalités d'administration sans devoir modifier profondément l'ensemble du projet.</p>
        <p>Cette expérience m'a permis de mieux comprendre l'importance des choix d'architecture dans un projet web moderne, notamment lorsqu'une application commence à grandir et à intégrer plusieurs systèmes distincts.</p>
        <p><strong>AC31.02 - Faire évoluer une application existante</strong> - KCDLE étant un projet personnel développé depuis plusieurs années, cette refonte m'a confronté à une problématique très concrète d'évolution d'une application déjà existante. L'objectif n'était pas de repartir de zéro mais de moderniser progressivement l'architecture tout en conservant les fonctionnalités déjà utilisées par les utilisateurs.</p>
        <p>J'ai donc dû analyser une base de code importante, identifier les éléments à conserver, restructurer certaines parties et remplacer progressivement des portions devenues moins adaptées à l'évolution du projet. Cette démarche m'a obligé à travailler avec précaution afin d'éviter les régressions et de maintenir la stabilité globale de l'application.</p>
        <p>Le projet m'a également appris à concevoir du code suffisamment modulaire pour faciliter les futures évolutions. En restructurant progressivement l'architecture, j'ai pu ajouter de nouvelles fonctionnalités comme le PvP, les systèmes d'administration ou les intégrations Discord tout en gardant une cohérence globale dans le fonctionnement du projet.</p>
        <p>Cette expérience se rapproche fortement de problématiques rencontrées dans un contexte professionnel où les applications existantes doivent continuellement évoluer pour répondre à de nouveaux besoins.</p>
        <p><strong>AC31.03 - Intégrer des solutions dans un environnement de production</strong> - KCDLE m'a permis de travailler sur des problématiques très proches de celles rencontrées dans un environnement de production réel. Le projet ne se limite pas à une simple application web : il intègre plusieurs systèmes qui doivent communiquer correctement entre eux tout en conservant de bonnes performances et une stabilité globale.</p>
        <p>J'ai notamment travaillé sur la mise en place d'une API Laravel structurée, sur la gestion des échanges avec le front-end Vue.js ainsi que sur l'intégration de fonctionnalités externes comme les interactions Discord. Cette organisation nécessitait une gestion rigoureuse des routes, des traitements serveur et des échanges de données.</p>
        <p>Le projet m'a également sensibilisé à l'importance de la maintenabilité et de la stabilité d'une application lorsqu'elle évolue continuellement. Certaines fonctionnalités comme les systèmes PvP, les statistiques utilisateurs ou les outils d'administration devaient être intégrées sans dégrader les autres parties du projet.</p>
        <p>Cette expérience m'a permis de mieux comprendre comment intégrer différentes solutions techniques dans une architecture globale cohérente et maintenable.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Optimiser</h3>
        <p><strong>AC32.01 - Anticiper les résultats de diverses métriques</strong> - Le développement de KCDLE m'a amené à réfléchir aux performances globales de l'application, notamment au niveau des échanges API, du chargement des données et de l'expérience utilisateur. La séparation front/back nécessitait une attention particulière sur la rapidité des réponses serveur et l'organisation des appels réseau afin de conserver une navigation fluide.</p>
        <p>Les fonctionnalités comme le PvP, les statistiques utilisateurs ou l'administration peuvent générer de nombreux traitements et échanges de données. J'ai donc dû anticiper l'impact de ces choix sur la charge serveur, le nombre de requêtes, la cohérence des états côté client et le ressenti utilisateur. Cette réflexion m'a permis de relier les métriques techniques à des effets concrets : temps d'attente, stabilité de l'interface et capacité du projet à évoluer.</p>
        <p><strong>AC32.02 - Profiler, analyser et justifier le comportement d'un code existant</strong> - La refonte du projet m'a obligé à analyser une base de code importante afin d'identifier les éléments à conserver, modifier ou restructurer. J'ai dû comprendre précisément le fonctionnement de certaines parties existantes pour éviter les régressions et améliorer progressivement la qualité du projet. Cette démarche m'a permis de développer une meilleure capacité d'analyse et de maintenance logicielle.</p>
        <p>Chaque modification devait être justifiée par un objectif clair : améliorer la séparation des responsabilités, rendre un traitement plus lisible, préparer l'ajout d'une fonctionnalité ou réduire un risque de maintenance. Cette manière de travailler m'a rapproché d'une démarche professionnelle où l'optimisation ne consiste pas seulement à accélérer le code, mais aussi à rendre son comportement compréhensible, mesurable et défendable.</p>
        <p><strong>AC32.03 - Choisir et utiliser des bibliothèques et méthodes dédiées au domaine d'application</strong> - Le projet m'a permis d'utiliser plusieurs frameworks et bibliothèques modernes adaptés au développement web, notamment Laravel et Vue.js. J'ai appris à exploiter leurs outils afin de structurer correctement une application complète, gérer les composants dynamiques, organiser les routes API et améliorer la maintenabilité globale du projet.</p>
        <p>Le choix de Laravel s'est justifié par son écosystème back-end, sa gestion des routes, son organisation MVC et ses mécanismes adaptés à une API. Le choix de Vue.js s'est justifié par la nécessité de produire une interface réactive et modulaire. Ces outils n'ont donc pas été utilisés comme de simples technologies à ajouter au projet, mais comme des réponses cohérentes aux besoins réels de l'application.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Administrer</h3>
        <p><strong>AC34.01 - Créer des processus de traitement automatisé</strong> - Le développement de KCDLE inclut plusieurs mécanismes automatisés comme la gestion des statistiques, certains traitements côté serveur et les interactions automatiques avec Discord. Cela m'a permis de mieux comprendre l'importance de l'automatisation dans une application moderne afin de limiter les tâches manuelles et d'améliorer la fiabilité du système.</p>
        <p>Ces automatisations ont un rôle direct dans l'expérience utilisateur et dans l'administration du projet. Les statistiques doivent être calculées de manière fiable, les notifications doivent être déclenchées au bon moment et certains traitements doivent rester cohérents sans intervention manuelle permanente. Cette logique m'a permis de relier l'administration technique à la qualité de service fournie par l'application.</p>
        <p><strong>AC34.02 - Configurer un serveur et des services réseaux de manière avancée</strong> - Le projet m'a amené à travailler sur l'organisation technique de l'application et sur l'utilisation d'outils comme Docker afin de faciliter le développement et le déploiement. Cette approche m'a permis de mieux comprendre la structuration d'un environnement web moderne et la séparation des différents services nécessaires au fonctionnement d'une application complète.</p>
        <p>L'utilisation d'un environnement structuré permet de mieux isoler les responsabilités entre l'application, la base de données et les services nécessaires au développement. Cette configuration favorise la reproductibilité, réduit les écarts entre environnements et prépare le projet à une intégration plus propre dans un contexte proche de la production.</p>
        <p><strong>AC34.03 - Appliquer une politique de sécurité au niveau de l'infrastructure</strong> - Le développement de KCDLE m'a sensibilisé aux problématiques de sécurité liées aux applications web modernes. J'ai dû prendre en compte la gestion des authentifications, la protection des données utilisateurs ainsi que la sécurisation des échanges entre le client et le serveur.</p>
        <p>La séparation entre front-end et back-end rend ces questions encore plus importantes, car l'API devient un point d'entrée central. Les routes sensibles, les traitements d'administration et les données utilisateur doivent être protégés par des contrôles cohérents. Cette réflexion m'a permis de comprendre que la sécurité n'est pas uniquement une fonctionnalité ajoutée à la fin du projet, mais une contrainte d'architecture à intégrer dès la conception.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Conduire</h3>
        <p><strong>AC35.01 - Mesurer les impacts économiques, sociétaux et technologiques d'un projet informatique</strong> - KCDLE étant un projet accessible publiquement, j'ai pu réfléchir à l'impact d'une application web communautaire et à l'importance de proposer une expérience stable et agréable pour les utilisateurs. Le projet m'a permis de mieux comprendre les enjeux liés à la fidélisation des utilisateurs, à l'ergonomie et à la qualité logicielle.</p>
        <p>Les choix techniques ont un impact direct sur la perception du projet : une application lente, instable ou difficile à utiliser perd rapidement l'intérêt de sa communauté. A l'inverse, une architecture fiable, des fonctionnalités cohérentes et une interface claire renforcent la crédibilité du service. Cette réflexion m'a permis de relier les décisions de développement à des enjeux plus larges d'usage, de maintien du projet et de valeur pour les utilisateurs.</p>
        <p><strong>AC35.02 - Savoir intégrer un projet informatique dans le système d'information d'une organisation</strong> - Le projet repose sur une architecture organisée autour de plusieurs composants distincts communiquant entre eux. Cette approche m'a permis de mieux comprendre comment intégrer un projet dans un environnement logiciel structuré et évolutif.</p>
        <p>Avec Laravel, Vue.js, MySQL, Docker et Discord, KCDLE V2 ne fonctionne pas comme un bloc isolé mais comme un ensemble de services et de modules. Cette organisation m'a appris à penser l'application comme une partie d'un système plus large, avec des dépendances, des flux de données, des droits d'accès et des contraintes de maintenance.</p>
        <p><strong>AC35.03 - Savoir adapter un système d'information</strong> - La migration progressive de KCDLE vers une architecture moderne m'a obligé à adapter continuellement le fonctionnement du projet. J'ai dû faire évoluer l'organisation technique de l'application afin de répondre à de nouveaux besoins tout en conservant la stabilité des fonctionnalités déjà présentes.</p>
        <p>Cette adaptation a demandé une prise de recul sur l'existant : identifier ce qui devait être conservé, ce qui devait être remplacé et ce qui devait être repensé pour permettre au projet de continuer à évoluer. Cette démarche correspond directement à une logique d'adaptation d'un système d'information, où les choix techniques doivent accompagner les nouveaux usages sans interrompre le fonctionnement global.</p>
    </div>
</div>
