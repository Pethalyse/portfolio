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
        Les apprentissages RACDV associés à Melovibes sont détaillés dans la sidebar à droite. Ils concernent uniquement les compétences de niveau 3 mobilisées pendant ce projet : Réaliser, Optimiser et Conduire.
    </p>

    <h2>Captures du projet</h2>
    <div class="fiche-projet">
        <h4>Emplacements de captures</h4>
        <ul>
            <li><strong>Interface principale :</strong> capture à ajouter lorsque l'écran final de navigation musicale sera disponible.</li>
            <li><strong>Composants dynamiques :</strong> capture à ajouter pour illustrer les interactions utilisateur et le chargement de contenu.</li>
            <li><strong>Architecture :</strong> capture à ajouter pour présenter l'organisation MVC et les échanges front/back.</li>
        </ul>
    </div>

    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>

<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence : Réaliser</h3>
        <p><strong>AC31.01 - Choisir et implémenter les architectures adaptées</strong> - Le développement de Melovibes m'a permis de travailler de manière concrète sur le choix et l'implémentation d'une architecture web adaptée aux besoins du projet. Dès le début du développement, j'ai organisé l'application selon une structure MVC afin de séparer clairement les différentes responsabilités de l'application : la gestion des données, la logique métier et l'interface utilisateur. Cette organisation m'a permis d'obtenir un code plus maintenable, plus lisible et surtout plus évolutif.</p>
        <p>J'ai également dû réfléchir à la manière dont les différentes parties de l'application communiquaient entre elles afin d'éviter un couplage trop fort entre le front-end et le back-end. Cette réflexion a été importante pour permettre l'ajout de nouvelles fonctionnalités sans devoir modifier l'ensemble du projet. La mise en place d'une architecture modulaire m'a également permis de mieux organiser les composants de l'interface, les traitements serveur ainsi que les échanges de données.</p>
        <p>Le projet m'a aussi sensibilisé à l'importance de concevoir une architecture adaptée à l'expérience utilisateur. Certains choix techniques ont été réalisés afin de garantir une navigation fluide, une bonne réactivité de l'interface et une structure facilement maintenable dans le temps. Cette expérience m'a permis de mieux comprendre l'importance des choix d'architecture dans le développement d'une application web moderne.</p>
        <p><strong>AC31.02 - Faire évoluer une application existante</strong> - Au cours du développement de Melovibes, le projet a régulièrement évolué avec l'ajout de nouvelles fonctionnalités et l'amélioration progressive de certaines parties déjà développées. Cette évolution continue m'a obligé à travailler sur une base de code existante tout en conservant la stabilité globale de l'application.</p>
        <p>J'ai notamment dû modifier certains comportements front-end, restructurer plusieurs parties du back-end et adapter certains traitements afin de répondre à de nouveaux besoins fonctionnels. Cette démarche m'a appris à faire évoluer une application sans introduire de régressions importantes et à conserver une cohérence globale dans l'organisation du projet.</p>
        <p>Le projet m'a également permis de comprendre l'importance d'écrire un code maintenable dès les premières étapes du développement. En structurant correctement les composants et les différentes couches de l'application, il devenait plus simple d'ajouter de nouvelles fonctionnalités ou de modifier certains comportements sans devoir reconstruire entièrement certaines parties du projet.</p>
        <p><strong>AC31.03 - Intégrer des solutions dans un environnement de production</strong> - Le développement de Melovibes m'a permis de mieux comprendre les contraintes liées à l'intégration d'une application dans un environnement technique complet. Au-delà du simple développement des fonctionnalités, j'ai dû réfléchir à l'organisation globale du projet afin de faciliter son exécution, sa maintenance et son évolution.</p>
        <p>J'ai travaillé sur la structuration des ressources de l'application, l'organisation des fichiers, la gestion des dépendances et la communication entre les différentes couches du projet. Cette approche m'a permis de mieux comprendre comment préparer une application à être utilisée dans un contexte proche de la production.</p>
        <p>Le projet m'a également sensibilisé aux problématiques de stabilité, de cohérence technique et de maintenabilité. J'ai ainsi appris qu'une application ne doit pas uniquement fonctionner localement, mais également être pensée pour pouvoir évoluer, être maintenue et intégrée dans un environnement plus large.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Optimiser</h3>
        <p><strong>AC32.01 - Anticiper les résultats de diverses métriques</strong> - Lors du développement de Melovibes, j'ai dû réfléchir à la fluidité globale de l'application et aux impacts des choix techniques sur les performances. L'organisation des composants, les échanges entre le client et le serveur ainsi que la gestion du chargement des données avaient un impact direct sur l'expérience utilisateur. Cette réflexion m'a permis de mieux comprendre l'importance des performances dans une application web moderne.</p>
        <p>Dans ce contexte, les métriques ne se limitaient pas à des chiffres isolés : elles concernaient aussi le temps de réponse perçu, le nombre d'échanges nécessaires pour afficher une information et la capacité de l'interface à rester utilisable pendant le chargement des données. En reliant ces éléments à l'expérience utilisateur, j'ai appris à anticiper les conséquences techniques de mes choix avant même d'observer un problème visible dans l'application.</p>
        <p><strong>AC32.02 - Profiler, analyser et justifier le comportement d'un code existant</strong> - Le projet m'a amené à analyser certaines portions de code afin d'identifier des problèmes de structure ou de performances. J'ai dû comprendre le fonctionnement de certaines parties déjà réalisées afin de pouvoir les améliorer sans introduire de régressions. Cette démarche m'a appris à adopter une approche plus rigoureuse dans l'analyse et l'évolution d'une base de code existante.</p>
        <p>Cette analyse m'a également obligé à justifier les modifications réalisées. Avant de restructurer un traitement ou de déplacer une responsabilité, je devais comprendre pourquoi le code se comportait ainsi, quelles dépendances existaient avec les autres parties du projet et quel gain réel pouvait être obtenu. Cette posture correspond directement à une démarche d'optimisation raisonnée : améliorer le code sans le fragiliser.</p>
    </div>

    <div class="competence">
        <h3>Compétence : Conduire</h3>
        <p><strong>AC35.01 - Mesurer les impacts économiques, sociétaux et technologiques d'un projet informatique</strong> - Melovibes m'a permis de réfléchir à l'importance de l'expérience utilisateur et de l'accessibilité dans une application destinée à être utilisée régulièrement. J'ai pris conscience des enjeux liés à la conception d'interfaces modernes, à la fluidité de navigation et à l'adaptation des usages numériques aux attentes des utilisateurs.</p>
        <p>Un projet musical repose fortement sur l'engagement de l'utilisateur : si la navigation est lente, confuse ou incohérente, la valeur du service diminue immédiatement. Cette réflexion m'a permis de relier les décisions techniques à leurs impacts concrets : une architecture claire facilite la maintenance, une interface lisible améliore l'usage, et une application stable renforce la confiance dans le produit.</p>
        <p><strong>AC35.02 - Savoir intégrer un projet informatique dans le système d'information d'une organisation</strong> - Le développement du projet m'a amené à concevoir une application capable d'être organisée proprement dans un environnement web complet. J'ai travaillé sur la structuration du projet, l'organisation des fichiers et la séparation des responsabilités afin de rendre l'application maintenable et facilement intégrable.</p>
        <p>Cette compétence a été mobilisée à travers la manière dont Melovibes a été pensé comme un ensemble de composants cohérents plutôt que comme une succession de fichiers indépendants. En organisant les données, les vues, les traitements serveur et les interactions front-end, j'ai pu mieux comprendre comment une application peut s'inscrire dans un système plus large, être reprise par d'autres développeurs et évoluer sans perdre sa cohérence technique.</p>
    </div>
</div>
