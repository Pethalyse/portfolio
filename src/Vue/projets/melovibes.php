<?php

use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\Routing\Generator\UrlGenerator;

/** @var UrlGenerator $generateurUrl */
/** @var UrlHelper $assistantUrl */
?>

<section class="projet-detail">
    <h1>Melovibes</h1>
    <p><strong>Plateforme web musicale moderne orientée expérience utilisateur et architecture web dynamique.</strong></p>

    <h2>Présentation</h2>
    <p>
        Melovibes est un projet web réalisé dans le cadre du BUT Informatique parcours RACDV. L'objectif du projet était de concevoir une plateforme musicale moderne mettant l'accent sur l'expérience utilisateur, la fluidité de navigation et l'architecture applicative.
    </p>
    <p>
        Le projet repose sur une séparation claire entre le front-end et le back-end. La partie back-end est principalement exposée sous forme d'API, documentée avec Swagger / API Platform, ce qui permet au front-end de consommer les données de manière structurée. Cette organisation m'a permis de travailler une architecture plus proche des pratiques actuelles du développement web, où le serveur ne se limite pas à générer des pages mais fournit des ressources exploitables par une interface cliente.
    </p>
    <p>
        Melovibes utilise également deux API externes. La première est l'API Spotify, utilisée pour récupérer et importer des informations musicales comme des artistes, des albums ou des titres. La seconde est une API d'hébergement de photos développée par moi et mon équipe, utilisée pour gérer les images liées à l'application. L'intégration de ces services m'a permis de travailler sur la communication entre plusieurs systèmes, la structuration des échanges de données et la cohérence globale d'une application connectée à des ressources externes.
    </p>
    <p>
        Le développement de Melovibes m'a également permis de renforcer mes compétences dans la gestion des interactions utilisateur, l'intégration de composants dynamiques et l'organisation d'une architecture logicielle cohérente. Le projet a nécessité une réflexion complète sur la structure des données, les échanges entre le front-end, le back-end et les API externes, ainsi que sur l'expérience utilisateur globale.
    </p>

    <div class="fiche-projet">
        <h4>Fiche projet</h4>
        <ul>
            <li><strong>Travail :</strong> Projet web BUT Informatique parcours RACDV</li>
            <li><strong>Objectifs :</strong> Concevoir une plateforme musicale moderne avec une navigation fluide, une interface dynamique et une architecture maintenable.</li>
            <li><strong>Contraintes :</strong> Respect d'une architecture MVC, séparation claire des responsabilités, gestion des données utilisateur et communication front/back.</li>
            <li><strong>Apports techniques :</strong> Architecture modulaire, structuration PHP, intégration JavaScript, SQL, API web et réflexion sur la performance applicative.</li>
            <li><strong>Apports humains :</strong> Prise de recul sur l'ergonomie, la qualité d'une expérience utilisateur et l'évolution progressive d'une application web.</li>
            <li><strong>Lien :</strong> <a href="https://webinfo.iutmontp.univ-montp2.fr/~mezencey/melovibes/" target="_blank" rel="noopener noreferrer">Accéder à Melovibes</a></li>
        </ul>
    </div>

    <h2>Fonctionnalités</h2>
    <ul>
        <li>Interface dynamique</li>
        <li>Navigation fluide</li>
        <li>Gestion de contenu musical</li>
        <li>Back-end exposé sous forme d'API</li>
        <li>Documentation API avec Swagger / API Platform</li>
        <li>Communication front-end / back-end via API REST</li>
        <li>Intégration de l'API Spotify</li>
        <li>Intégration d'une API externe d'hébergement de photos développée par l'équipe</li>
        <li>Architecture modulaire</li>
        <li>Gestion des données utilisateurs</li>
        <li>Travail sur l'ergonomie et l'expérience utilisateur</li>
    </ul>

    <h2>Technologies</h2>
    <ul>
        <li>PHP</li>
        <li>JavaScript</li>
        <li>HTML / CSS</li>
        <li>Architecture MVC</li>
        <li>SQL</li>
        <li>API Platform</li>
        <li>Swagger</li>
        <li>API REST</li>
        <li>API Spotify</li>
        <li>API d'hébergement de photos développée par l'équipe</li>
    </ul>

    <h2>Difficultés rencontrées</h2>
    <p>
        La principale difficulté a été de conserver une application lisible et évolutive malgré l'ajout progressif de comportements dynamiques. La gestion de l'interface, des échanges de données et des traitements serveur pouvait rapidement créer un couplage trop fort entre les différentes parties du projet. Pour limiter ce risque, j'ai travaillé sur une séparation claire des responsabilités et sur une organisation du code permettant d'identifier facilement le rôle de chaque fichier.
    </p>
    <p>
        Une autre difficulté concernait la cohérence de l'expérience utilisateur. Une plateforme musicale doit rester fluide, réactive et agréable à utiliser. Les choix techniques ne pouvaient donc pas être uniquement guidés par le fonctionnement interne de l'application : ils devaient aussi tenir compte du ressenti utilisateur, des temps de chargement, de la lisibilité des interfaces et de la simplicité des interactions.
    </p>

    <h2>Apprentissages RACDV</h2>
    <p>
        Les apprentissages RACDV associés à Melovibes sont détaillés dans la sidebar à droite. Ils concernent uniquement les compétences de niveau 3 mobilisées pendant ce projet : Réaliser, Optimiser et Collaborer.
    </p>

    <h2>Captures du projet</h2>
    <ul>
        <li>
            <em>- Interface principale de Melovibes</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/melovibes-interface.png") ?>" alt="Interface principale de Melovibes">
        </li>
        <li>
            <em>- Composants dynamiques et interactions utilisateur</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/melovibes-composants-dynamiques.png") ?>" alt="Composants dynamiques de Melovibes">
        </li>
        <li>
            <em>- Organisation MVC et communication front/back</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/melovibes-architecture.png") ?>" alt="Architecture MVC de Melovibes">
        </li>
        <li>
            <em>- Documentation API avec Swagger / API Platform</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/melovibes-api.png") ?>" alt="Documentation API Swagger de Melovibes">
        </li>
    </ul>

    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>

<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence : Réaliser</h3>
        <p><strong>AC31.01 - Choisir et implémenter les architectures adaptées</strong> - Le développement de Melovibes m'a conduit à choisir une architecture web adaptée à une application musicale dynamique. Le projet ne repose pas uniquement sur des pages générées côté serveur : il met en place une séparation claire entre le front-end et le back-end. Le back-end est exposé sous forme d'API, documentée avec Swagger / API Platform, ce qui permet au front-end de récupérer les données nécessaires de manière structurée.</p>
        <p>Ce choix architectural m'a permis de mieux comprendre l'intérêt d'une application découplée. Le front-end peut se concentrer sur l'affichage, l'expérience utilisateur et les interactions, tandis que le back-end centralise les traitements, les routes API et l'accès aux données. Cette séparation rend le projet plus lisible, plus maintenable et plus facilement évolutif.</p>
        <p>L'architecture de Melovibes intègre également des services externes. L'API Spotify est utilisée pour importer et exploiter des données musicales, tandis qu'une API d'hébergement de photos développée par moi et mon équipe permet de gérer les images associées à l'application. Cette intégration de plusieurs sources de données m'a obligé à concevoir une architecture cohérente, capable de faire communiquer différents systèmes sans mélanger leurs responsabilités.</p>
        <p>Cette démarche correspond directement à l'AC31.01, car elle m'a amené à choisir, justifier et implémenter une architecture adaptée au contexte du projet. L'objectif n'était pas seulement de produire une application fonctionnelle, mais de construire une base technique claire, modulaire et exploitable dans une logique de développement web moderne.</p>
        <p><strong>AC31.02 - Faire évoluer une application existante</strong> - Au fur et à mesure du développement de Melovibes, plusieurs fonctionnalités ont été ajoutées ou modifiées. Cette évolution progressive m'a amené à retravailler certaines parties déjà existantes du projet, notamment au niveau de l'interface, de l'organisation des fichiers et des traitements liés aux données affichées. J'ai donc dû apprendre à modifier une application sans remettre en cause son fonctionnement global.</p>
        <p>Cette compétence a été travaillée lorsque j'ai dû adapter le code existant à de nouveaux besoins fonctionnels. Chaque modification devait être intégrée dans la structure déjà en place, sans créer de rupture dans l'organisation du projet. Cette démarche m'a obligé à raisonner en termes de maintenabilité : avant d'ajouter une fonctionnalité, il fallait vérifier son impact sur le reste de l'application et éviter de dupliquer inutilement du code.</p>
        <p>Cette expérience m'a permis de comprendre qu'une application évolue rarement de manière linéaire. Même lorsqu'un projet est bien défini au départ, de nouveaux besoins apparaissent et nécessitent des ajustements. Avec Melovibes, j'ai donc travaillé la capacité à faire évoluer une base applicative existante en conservant sa cohérence technique, ce qui correspond directement à l'apprentissage critique AC31.02.</p>
        <p><strong>AC31.03 - Intégrer des solutions dans un environnement de production</strong> - Melovibes m'a permis de travailler l'intégration de plusieurs solutions techniques dans un même environnement applicatif. Le projet repose sur un back-end exposé en API, une interface front-end qui consomme cette API, ainsi que deux services externes : l'API Spotify et une API d'hébergement de photos développée par mon équipe.</p>
        <p>Cette organisation m'a permis de comprendre qu'une application web moderne ne fonctionne pas toujours comme un bloc unique. Elle peut dépendre de plusieurs services spécialisés qui doivent communiquer correctement entre eux. Dans Melovibes, le back-end sert d'intermédiaire structurant : il expose les ressources nécessaires, organise les traitements et permet au front-end d'accéder aux données de manière cohérente.</p>
        <p>L'utilisation de Swagger / API Platform a également joué un rôle important dans cette intégration. La documentation de l'API facilite la compréhension des routes disponibles, des ressources manipulées et des échanges possibles entre les différentes parties du projet. Cela rend l'application plus claire à maintenir et plus simple à faire évoluer.</p>
        <p>Cette expérience correspond à l'AC31.03, car elle montre ma capacité à intégrer une solution applicative dans un environnement technique complet. J'ai dû prendre en compte la communication entre services, la structuration des endpoints, l'utilisation d'API externes et la cohérence globale de l'application.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Optimiser</h3>
        <p><strong>AC32.01 - Anticiper les résultats de diverses métriques</strong> - Dans Melovibes, l'optimisation a aussi été abordée à travers l'architecture API. Le fait de séparer le front-end et le back-end impose de réfléchir aux échanges réseau, au nombre d'appels effectués et à la quantité de données retournées par chaque endpoint. Une API mal organisée peut rapidement dégrader l'expérience utilisateur, notamment si les réponses sont trop lourdes ou si le front-end doit multiplier les requêtes pour afficher une page.</p>
        <p>L'intégration de l'API Spotify et de l'API d'hébergement de photos m'a également amené à anticiper l'impact des dépendances externes sur les performances de l'application. Lorsqu'une application dépend de services extérieurs, il faut tenir compte du temps de réponse, de la disponibilité des services et de la manière dont les données sont récupérées puis exploitées.</p>
        <p>Cette réflexion correspond à l'AC32.01, car elle m'a permis d'anticiper des métriques concrètes comme le temps de chargement, le nombre de requêtes, la fluidité de navigation et la performance perçue par l'utilisateur. L'optimisation ne concerne donc pas seulement le code interne, mais aussi la manière dont l'application communique avec ses propres API et avec des services externes.</p>
        <p><strong>AC32.02 - Profiler, analyser et justifier le comportement d'un code existant</strong> - Le projet Melovibes m'a amené à analyser plusieurs portions de code existantes afin de comprendre leur fonctionnement avant de les modifier. Cette phase d'analyse était nécessaire pour éviter de corriger ou d'améliorer une partie du projet sans mesurer les conséquences sur les autres éléments de l'application.</p>
        <p>J'ai notamment dû identifier certaines zones moins lisibles, certaines répétitions ou certains enchaînements de traitements qui pouvaient être simplifiés. Cette démarche m'a appris à ne pas considérer le code uniquement comme une suite d'instructions, mais comme un ensemble de choix techniques qu'il faut être capable d'expliquer et de justifier.</p>
        <p>L'apprentissage critique AC32.02 a donc été travaillé à travers cette capacité à lire, comprendre, analyser puis améliorer du code existant. Le projet m'a permis de renforcer une posture plus universitaire et professionnelle : avant de modifier, il faut comprendre ; avant d'optimiser, il faut identifier ce qui pose réellement problème.</p>
        <p><strong>AC32.03 - Choisir et utiliser des bibliothèques et méthodes dédiées au domaine d'application</strong> - Melovibes m'a permis de travailler l'AC32.03 à travers l'utilisation de méthodes et de services adaptés au domaine d'une application musicale. Le choix d'intégrer l'API Spotify répond directement au besoin du projet : récupérer des données musicales fiables, structurées et exploitables dans l'application. Cette API permet d'enrichir le contenu de Melovibes sans devoir créer manuellement toutes les données liées aux artistes, albums ou musiques.</p>
        <p>Le projet utilise également une API d'hébergement de photos développée par moi et mon équipe. Cette solution répond à un besoin complémentaire : gérer les images associées aux contenus de l'application. Son intégration m'a permis de travailler sur la consommation d'une API externe conçue dans un autre contexte technique, ce qui m'a obligé à prendre en compte la structure des réponses, les routes disponibles et la cohérence des données récupérées.</p>
        <p>L'utilisation d'API Platform et de Swagger pour le back-end de Melovibes m'a aussi permis de travailler avec des outils adaptés à la conception d'API REST. Ces outils facilitent la documentation, la compréhension et l'exploitation des endpoints par le front-end.</p>
        <p>Cette compétence est donc mobilisée car le projet m'a amené à choisir et utiliser des solutions techniques adaptées au domaine musical et à l'architecture web retenue. Les API utilisées ne sont pas accessoires : elles participent directement au fonctionnement, à la richesse et à la maintenabilité de l'application.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Collaborer</h3>
        <p><strong>AC36.01 - Organiser et partager une veille technologique et informationnelle</strong> - Dans le cadre de Melovibes, j'ai dû m'appuyer sur une veille technologique liée aux pratiques de développement web, à l'organisation d'interfaces modernes et à la structuration d'une application dynamique. Cette veille m'a permis d'identifier des approches pertinentes pour améliorer l'ergonomie, la lisibilité du code et la cohérence technique du projet.</p>
        <p>Même lorsque le projet est réalisé en autonomie ou dans un cadre réduit, cette démarche reste essentielle car elle permet de ne pas se limiter aux connaissances déjà acquises. J'ai consulté des ressources techniques, comparé certaines manières d'organiser les composants et retenu les solutions les plus adaptées au contexte du projet.</p>
        <p>Cette compétence correspond à l'AC36.01, car elle montre une capacité à organiser une veille utile au développement d'un projet informatique et à transformer cette veille en choix concrets. Elle participe également à une posture professionnelle : savoir chercher, sélectionner et réutiliser une information technique fiable.</p>
        <p><strong>AC36.02 - Identifier les enjeux de l'économie de l'innovation numérique</strong> - Melovibes m'a amené à réfléchir aux enjeux d'une application web orientée contenu musical et expérience utilisateur. Dans ce type de projet, la valeur ne repose pas uniquement sur la présence de fonctionnalités, mais aussi sur la capacité à proposer une interface agréable, claire et adaptée aux usages numériques actuels.</p>
        <p>Cette réflexion m'a permis de mieux comprendre que l'innovation numérique n'est pas nécessairement liée à une technologie complexe. Elle peut aussi se situer dans la manière de concevoir un service, de simplifier l'accès à l'information ou d'améliorer l'interaction entre l'utilisateur et l'application.</p>
        <p>L'AC36.02 est donc mobilisée à travers l'analyse des usages et de la valeur apportée par le projet. Melovibes m'a permis de prendre du recul sur l'intérêt d'une application musicale et sur les critères qui peuvent rendre un service numérique pertinent pour ses utilisateurs.</p>
        <p><strong>AC36.03 - Guider la conduite du changement informatique au sein d'une organisation</strong> - Même si Melovibes n'a pas été développé dans une organisation professionnelle complète, le projet m'a permis de travailler une logique de changement informatique à l'échelle d'une application. Chaque évolution apportée au projet nécessitait de conserver une cohérence avec l'existant tout en améliorant progressivement la solution.</p>
        <p>Cette démarche m'a appris à introduire des changements de manière progressive, sans désorganiser l'ensemble du projet. Modifier une interface, réorganiser une partie du code ou améliorer une fonctionnalité suppose de mesurer les conséquences de ce changement sur l'utilisateur et sur la maintenabilité de l'application.</p>
        <p>L'AC36.03 est donc travaillée ici dans une logique d'accompagnement de l'évolution technique. Le projet m'a permis de comprendre qu'un changement informatique doit être pensé, justifié et intégré progressivement pour être réellement efficace.</p>
        <p><strong>AC36.04 - Accompagner le management de projet informatique</strong> - Le développement de Melovibes m'a demandé d'organiser le travail autour d'objectifs techniques et fonctionnels précis. J'ai dû hiérarchiser les tâches, identifier les priorités et structurer l'avancement du projet afin de produire une application cohérente.</p>
        <p>Cette organisation m'a permis de mieux comprendre l'importance du suivi de projet, même dans un projet de taille limitée. Les choix techniques, les fonctionnalités à développer et les corrections à apporter devaient être planifiés afin d'éviter une progression désordonnée.</p>
        <p>L'apprentissage critique AC36.04 est donc mobilisé par cette capacité à accompagner l'organisation du projet informatique. Melovibes m'a permis de renforcer ma méthode de travail, ma capacité à prioriser et ma compréhension du lien entre gestion de projet et qualité du résultat final.</p>
    </div>
</div>
