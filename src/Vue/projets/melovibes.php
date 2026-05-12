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
        Le projet m'a permis de travailler sur la conception d'interfaces dynamiques, l'organisation du code front-end et back-end, ainsi que la structuration complète d'une application web moderne. J'ai pu appliquer des principes d'ergonomie, de modularité et de maintenabilité tout en réfléchissant aux problématiques de performances et d'évolutivité.
    </p>
    <p>
        Le développement de Melovibes m'a également permis de renforcer mes compétences dans la gestion des interactions utilisateur, l'intégration de composants dynamiques et l'organisation d'une architecture logicielle cohérente. Le projet a nécessité une réflexion complète sur la structure des données, les échanges client/serveur et l'expérience utilisateur globale.
    </p>

    <div class="fiche-projet">
        <h4>Fiche projet</h4>
        <ul>
            <li><strong>Travail :</strong> Projet web BUT Informatique parcours RACDV</li>
            <li><strong>Objectifs :</strong> Concevoir une plateforme musicale moderne avec une navigation fluide, une interface dynamique et une architecture maintenable.</li>
            <li><strong>Contraintes :</strong> Respect d'une architecture MVC, séparation claire des responsabilités, gestion des données utilisateur et communication front/back.</li>
            <li><strong>Apports techniques :</strong> Architecture modulaire, structuration PHP, intégration JavaScript, SQL, API web et réflexion sur la performance applicative.</li>
            <li><strong>Apports humains :</strong> Prise de recul sur l'ergonomie, la qualité d'une expérience utilisateur et l'évolution progressive d'une application web.</li>
        </ul>
    </div>

    <h2>Fonctionnalités</h2>
    <ul>
        <li>Interface dynamique adaptée à la consultation de contenu musical.</li>
        <li>Navigation fluide entre les différentes parties de l'application.</li>
        <li>Gestion de contenu musical et organisation des données associées.</li>
        <li>Architecture modulaire facilitant l'ajout de nouvelles fonctionnalités.</li>
        <li>Gestion des données utilisateurs et des interactions avec l'application.</li>
        <li>Communication entre les traitements serveur et les composants front-end.</li>
        <li>Travail spécifique sur l'ergonomie et l'expérience utilisateur.</li>
    </ul>

    <h2>Technologies</h2>
    <ul>
        <li>PHP</li>
        <li>JavaScript</li>
        <li>HTML / CSS</li>
        <li>Architecture MVC</li>
        <li>SQL</li>
        <li>API web</li>
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
    </ul>

    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>

<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence : Réaliser</h3>
        <p><strong>AC31.01 - Choisir et implémenter les architectures adaptées</strong> - Le développement de Melovibes m'a conduit à choisir une architecture web capable de répondre à un besoin applicatif complet : afficher du contenu musical, permettre une navigation fluide et organiser les échanges entre les différentes parties de l'application. J'ai structuré le projet autour d'une logique MVC afin de séparer les responsabilités entre la gestion des données, les traitements applicatifs et l'affichage. Ce choix architectural m'a permis de mieux maîtriser l'évolution du projet, car chaque partie du code possédait un rôle identifiable.</p>
        <p>Dans une logique de niveau BUT3, cette compétence ne se limite pas au fait de produire du code fonctionnel. Elle consiste aussi à justifier les choix techniques retenus. Dans Melovibes, l'organisation en couches m'a permis d'éviter une application trop monolithique et difficile à maintenir. Les vues pouvaient évoluer sans remettre en cause toute la logique métier, tandis que les traitements serveur restaient isolés de la présentation. Cette séparation a directement participé à la qualité globale du projet.</p>
        <p>Ce travail montre ma capacité à choisir une architecture adaptée au contexte d'une application web. L'objectif n'était pas seulement de faire fonctionner le site, mais de concevoir une structure suffisamment claire pour pouvoir être comprise, modifiée et enrichie par la suite. Cette démarche correspond bien à l'apprentissage critique AC31.01, car elle associe conception, choix techniques et implémentation concrète d'une architecture adaptée.</p>
        <p><strong>AC31.02 - Faire évoluer une application existante</strong> - Au fur et à mesure du développement de Melovibes, plusieurs fonctionnalités ont été ajoutées ou modifiées. Cette évolution progressive m'a amené à retravailler certaines parties déjà existantes du projet, notamment au niveau de l'interface, de l'organisation des fichiers et des traitements liés aux données affichées. J'ai donc dû apprendre à modifier une application sans remettre en cause son fonctionnement global.</p>
        <p>Cette compétence a été travaillée lorsque j'ai dû adapter le code existant à de nouveaux besoins fonctionnels. Chaque modification devait être intégrée dans la structure déjà en place, sans créer de rupture dans l'organisation du projet. Cette démarche m'a obligé à raisonner en termes de maintenabilité : avant d'ajouter une fonctionnalité, il fallait vérifier son impact sur le reste de l'application et éviter de dupliquer inutilement du code.</p>
        <p>Cette expérience m'a permis de comprendre qu'une application évolue rarement de manière linéaire. Même lorsqu'un projet est bien défini au départ, de nouveaux besoins apparaissent et nécessitent des ajustements. Avec Melovibes, j'ai donc travaillé la capacité à faire évoluer une base applicative existante en conservant sa cohérence technique, ce qui correspond directement à l'apprentissage critique AC31.02.</p>
        <p><strong>AC31.03 - Intégrer des solutions dans un environnement de production</strong> - Melovibes m'a permis d'aborder l'intégration d'une solution web dans un environnement technique complet. Même si le projet reste académique, il a été conçu comme une application devant pouvoir être installée, testée et consultée dans un environnement cohérent. J'ai donc porté une attention particulière à l'organisation des ressources, à la structuration des fichiers et à la séparation des éléments nécessaires au fonctionnement de l'application.</p>
        <p>Cette compétence a été travaillée à travers la préparation de l'application pour une utilisation hors du simple contexte de développement. Il ne s'agissait pas uniquement de produire des pages isolées, mais de construire un ensemble applicatif exploitable, avec une logique de navigation, des ressources correctement reliées et une architecture suffisamment stable pour être présentée et maintenue.</p>
        <p>Cette démarche m'a permis de mieux comprendre la différence entre un code qui fonctionne localement et une application réellement intégrable. Une solution destinée à être utilisée doit être organisée, cohérente et suffisamment robuste pour être déplacée ou déployée sans dépendre uniquement de conditions locales. Cette réflexion correspond à l'apprentissage critique AC31.03.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Optimiser</h3>
        <p><strong>AC32.01 - Anticiper les résultats de diverses métriques</strong> - Dans Melovibes, l'optimisation a principalement été abordée à travers la fluidité de l'expérience utilisateur et la manière dont l'application charge et affiche les informations. J'ai dû anticiper l'impact de certains choix techniques sur le temps de chargement, la lisibilité du code et la réactivité de l'interface. Même sans mettre en place un profilage avancé, cette réflexion m'a amené à penser l'application en termes de performance perçue par l'utilisateur.</p>
        <p>L'organisation des composants, la limitation des traitements inutiles et la structuration des échanges entre les différentes parties de l'application ont constitué des points importants. J'ai compris que des choix apparemment simples, comme la manière de charger des données ou de structurer une page, peuvent avoir un impact direct sur la rapidité et la qualité d'utilisation du site.</p>
        <p>Cette approche correspond à l'apprentissage critique AC32.01, car elle m'a amené à anticiper des métriques concrètes comme le temps d'affichage, la charge côté client et la complexité de maintenance. Elle montre également que l'optimisation ne concerne pas uniquement les algorithmes complexes, mais aussi l'ensemble des choix qui influencent le comportement d'une application web.</p>
        <p><strong>AC32.02 - Profiler, analyser et justifier le comportement d'un code existant</strong> - Le projet Melovibes m'a amené à analyser plusieurs portions de code existantes afin de comprendre leur fonctionnement avant de les modifier. Cette phase d'analyse était nécessaire pour éviter de corriger ou d'améliorer une partie du projet sans mesurer les conséquences sur les autres éléments de l'application.</p>
        <p>J'ai notamment dû identifier certaines zones moins lisibles, certaines répétitions ou certains enchaînements de traitements qui pouvaient être simplifiés. Cette démarche m'a appris à ne pas considérer le code uniquement comme une suite d'instructions, mais comme un ensemble de choix techniques qu'il faut être capable d'expliquer et de justifier.</p>
        <p>L'apprentissage critique AC32.02 a donc été travaillé à travers cette capacité à lire, comprendre, analyser puis améliorer du code existant. Le projet m'a permis de renforcer une posture plus universitaire et professionnelle : avant de modifier, il faut comprendre ; avant d'optimiser, il faut identifier ce qui pose réellement problème.</p>
        <p><strong>AC32.03 - Choisir et utiliser des bibliothèques et méthodes dédiées au domaine d'application</strong> - Melovibes étant une application web centrée sur l'expérience utilisateur, j'ai dû mobiliser des méthodes adaptées au développement d'interfaces dynamiques et à l'organisation d'une application web. Le choix des technologies et des méthodes utilisées a été guidé par les besoins du projet : produire une interface lisible, organiser correctement les données et permettre une navigation cohérente.</p>
        <p>Cette compétence a été travaillée par l'utilisation de technologies web classiques mais structurées autour d'une logique applicative. J'ai dû choisir des solutions adaptées au contexte du projet plutôt que d'empiler des outils sans justification. Cette démarche m'a permis de mieux comprendre l'importance du choix raisonné des ressources techniques.</p>
        <p>L'apprentissage critique AC32.03 est donc mobilisé dans la mesure où le projet m'a amené à sélectionner et utiliser des méthodes adaptées au domaine du développement web. Les choix réalisés répondaient à un besoin précis : construire une application musicale dynamique, maintenable et compréhensible.</p>
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
