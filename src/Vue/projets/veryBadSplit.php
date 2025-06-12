<?php

use Symfony\Component\HttpFoundation\UrlHelper;

$pageTitle = "Projet VeryBadSplit - Yanhis Mezence";

/** @var Symfony\Component\Routing\Generator\UrlGenerator $generateurUrl */
/** @var UrlHelper $assistantUrl */
?>

<section class="projet-detail">
    <h1>VeryBadSplit</h1>

    <p><strong>Description :</strong></p>
    <p>
        VeryBadSplit est un projet académique réalisé en <strong>SAÉ au semestre 4</strong> du BUT Informatique. Le but était d’effectuer un <strong>refactoring complet</strong> d’une application PHP existante, en la transformant selon les standards professionnels :
        architecture MVCS, normes PSR, vues via Twig, virtualisation Docker, tests PHPUnit, etc. Réalisé en groupe de 4, le projet visait à produire un code propre, modulaire, maintenable et sécurisé tout en respectant des contraintes réelles d’équipe et de délais.
    </p>

    <div class="fiche-projet">
        <h4>Fiche projet</h4>
        <ul>
            <li><strong>Durée :</strong> 1 mois</li>
            <li><strong>Travail :</strong> Groupe de 4 personnes</li>
            <li><strong>Objectifs :</strong> Refondre une application PHP existante selon les bonnes pratiques modernes (Twig, MVC, tests...)</li>
            <li><strong>Contraintes :</strong> Application existante bancale, imposée par le sujet, exigence de conformité aux normes (PSR, Docker, tests)</li>
            <li><strong>Apports techniques :</strong> Utilisation de Twig, architecture MVC propre, tests automatisés, virtualisation via Docker</li>
            <li><strong>Apports humains :</strong> Travail collaboratif, organisation de code en équipe, compréhension d’un existant complexe</li>
        </ul>
    </div>

    <h2>Captures et preuves</h2>
    <ul>
        <li>
            <em>- Arborescence MVCS du projet après refactorisation (AC 1.3)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/arborescenceVBS.png") ?>" alt="Arborescence du projet MVCS">
        </li>
        <li>
            <em>- Interface utilisateur avec templates Twig (AC 1.2)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/interfaceVBS.png") ?>" alt="Interface Twig">
        </li>
        <li>
            <em>- Test PHPUnit avec assertion et mock (AC 1.4, 2.3)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/testVBS.png") ?>" alt="Test PHPUnit">
        </li>
        <li>
            <em>- Conteneurisation Docker avec fichier docker-compose.yml (AC 3.2)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/dockerVBS.png") ?>" alt="Dockerisation du projet">
        </li>
    </ul>

    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>

<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence 1 : Réaliser un développement d’application</h3>
        <p><strong>AC 1.1</strong> – Nous avons analysé en profondeur l’application existante pour en extraire des exigences implicites, puis les avons traduites en spécifications fonctionnelles claires. Cela nous a permis de reconstruire les fonctionnalités de façon structurée et fidèle aux besoins réels de l’utilisateur.</p>
        <p><strong>AC 1.2</strong> – L’interface utilisateur a été refondue avec Twig, ce qui nous a permis de dissocier proprement l'affichage de la logique métier. Nous avons veillé à rendre la navigation fluide, lisible et cohérente sur tous types de terminaux.</p>
        <p><strong>AC 1.3</strong> – Le projet repose sur une architecture MVCS rigoureuse. Nous avons organisé les fichiers selon leur rôle (Modèle, Vue, Contrôleur, Service) en respectant les principes SOLID, ce qui a rendu le code modulaire, lisible et maintenable.</p>
        <p><strong>AC 1.4</strong> – Nous avons écrit des tests unitaires avec PHPUnit pour valider le fonctionnement des classes critiques. Cela nous a permis de corriger rapidement les régressions et d’améliorer notre maîtrise des tests automatisés.</p>
    </div>

    <div class="competence">
        <h3>Compétence 2 : Optimiser des applications</h3>
        <p><strong>AC 2.1</strong> – Le refactoring des classes de gestion (utilisateurs, dépenses, événements) nous a amenés à choisir des structures de données explicites, favorisant la clarté du code et la rapidité des traitements.</p>
        <p><strong>AC 2.3</strong> – Nous avons renforcé la sécurité globale de l’application : validation systématique des entrées utilisateur, échappement côté vue, et usage généralisé des requêtes préparées pour contrer les injections SQL.</p>
        <p><strong>AC 2.4</strong> – Le projet a été entièrement dockerisé avec `docker-compose`, ce qui permet une exécution rapide, identique sur tous les postes. Cela contribue aussi à une meilleure gestion des ressources et à une forme d’éco-conception.</p>
    </div>

    <div class="competence">
        <h3>Compétence 3 : Administrer des systèmes informatiques communicants complexes</h3>
        <p><strong>AC 3.1</strong> – Le projet inclut la configuration d’un serveur de développement local complet via Docker. PHP, MySQL et PHPMyAdmin y sont orchestrés pour offrir un environnement stable et fonctionnel, propice au travail en équipe.</p>
        <p><strong>AC 3.2</strong> – L’usage de `docker-compose` a permis de reproduire l’environnement sur toutes les machines sans configuration manuelle. Cela garantit une compatibilité totale entre les membres du groupe et simplifie la maintenance.</p>
        <p><strong>AC 3.3</strong> – Nous avons mis en place des pratiques de sécurisation à la fois au niveau applicatif (filtrage des entrées) et au niveau infrastructurel (configuration des ports, volumes Docker, visibilité des services). Ces choix renforcent la robustesse globale de l'application.</p>
    </div>

    <div class="competence">
        <h3>Compétence 4 : Gérer des données de l’information</h3>
        <p><strong>AC 4.1</strong> – Nous avons repensé le modèle de données à partir de l’ancien système. Le schéma relationnel a été nettoyé et réorganisé pour correspondre à notre nouvelle architecture MVCS. Cela a facilité la gestion des entités dans le code.</p>
        <p><strong>AC 4.2</strong> – Des requêtes préparées ont été utilisées systématiquement pour garantir l’intégrité des données. Les rôles et permissions ont été centralisés afin d’éviter les incohérences et les accès non autorisés.</p>
        <p><strong>AC 4.3</strong> – L’affichage des données dans Twig a été retravaillé pour une meilleure clarté. Les dépenses, membres et événements sont présentés de manière lisible, avec tri, regroupements et feedbacks adaptés.</p>
    </div>

    <div class="competence">
        <h3>Compétence 5 : Conduire un projet</h3>
        <p><strong>AC 5.1</strong> – Une phase initiale d’analyse de l’existant a été menée pour définir ce qui devait être refondu ou conservé. Cela nous a permis de cadrer les objectifs techniques et fonctionnels du projet avant de démarrer le développement.</p>
        <p><strong>AC 5.2</strong> – Le travail a été réparti entre les membres selon leurs compétences : gestion du backend, refonte graphique, conteneurisation, documentation, etc. Cette organisation nous a permis d’avancer efficacement tout en partageant les responsabilités.</p>
        <p><strong>AC 5.3</strong> – Le suivi s’est fait avec Gitlab et Discord, accompagné de réunions régulières. J’ai pu expérimenter une gestion de projet agile, ajuster les priorités au fil des semaines et assurer un bon rythme d’avancement collectif.</p>
    </div>

    <div class="competence">
        <h3>Compétence 6 : Travailler dans une équipe informatique</h3>
        <p><strong>AC 6.1</strong> – Le travail a été réparti entre les 4 membres de manière complémentaire. Chacun a pris en charge un ou plusieurs modules, tout en gardant une vision commune. Cela m’a appris à coordonner mon travail avec celui des autres.</p>
        <p><strong>AC 6.2</strong> – Nous avons utilisé Discord pour la communication quotidienne, GitHub pour le versioning et les pull requests. Cela m’a permis de me familiariser avec les outils et bonnes pratiques de travail collaboratif à distance.</p>
    </div>
</div>