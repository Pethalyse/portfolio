<?php
/** @var Symfony\Component\Routing\Generator\UrlGenerator $generateurUrl */
?>

<section class="projets">
    <h1>Portfolio d’apprentissage</h1>
    <p>
        Au cours de ma deuxième année de BUT Informatique, j’ai eu l’occasion de développer mes compétences techniques et humaines à travers des cours spécialisés, des projets encadrés et des productions personnelles. Parmi les compétences du référentiel, trois d’entre elles s’arrêtent au niveau 2 dès la fin du BUT2. Il s’agit des :
    </p>
    <ul>
        <li>📙 Compétence 3 : Administrer des systèmes informatiques communicants complexes</li>
        <li>📗 Compétence 4 : Gérer des données de l’information</li>
        <li>📘 Compétence 5 : Conduire un projet</li>
    </ul>
    <p>Cette page présente un bilan global et réfléchi de mon appropriation de ces trois compétences, en croisant mes enseignements théoriques et leur application concrète dans mes projets. Les éléments détaillés avec traces sont accessibles dans les pages projets du portfolio.</p>

    <div>
        <h1>📙 Compétence 3 – Administrer des systèmes informatiques communicants complexes</h1>
        <p>
            Cette compétence a été abordée en cours à travers les unités R3.06 – Architecture Réseaux, R4.01 – Architecture Logicielle et R4.08 – Virtualisation. J’y ai appris les bases du fonctionnement des réseaux (modèle OSI, adressage IP, routage), la conception d’architectures orientées services, ainsi que l’utilisation d’outils modernes comme Docker pour isoler et faire communiquer des composants logiciels.
            Ces savoirs m’ont été particulièrement utiles dans le projet <a href="<?= $generateurUrl->generate('veryBadSplit') ?>">VeryBadSplit</a>, où nous avons mis en place un environnement de développement virtualisé. J’ai appris à écrire et interpréter des fichiers Dockerfile, à configurer docker-compose, à lier des conteneurs, et à utiliser des volumes pour la persistance des données. Cela m’a permis de mieux comprendre les mécanismes d’intégration continue, de portabilité des applications, et d’environnement reproductible.
            Dans <a href="<?= $generateurUrl->generate('kcdle') ?>">KCDLE</a>, j’ai travaillé sur la sécurisation des accès à l’application, en implémentant une gestion de session robuste (vérification des accès, redirections, routes protégées), ce qui m’a permis d’approfondir mes connaissances vues en sécurité web et en communication client-serveur.
            Ces expériences m’ont sensibilisé aux enjeux de modularité, sécurité, déploiement, et m’ont donné de solides bases pour administrer et configurer des systèmes communicants, que ce soit localement ou dans une optique de mise en production.
        </p>
    </div>

    <div>
        <h1>📗 Compétence 4 – Gérer des données de l’information</h1>
        <p>
            Cette compétence a été développée à travers R3.07 – SQL et programmation, R4.03 – Qualité & non-relationnel, et R4.04 – Méthodes d’optimisation. En cours, j’ai appris à modéliser des données complexes, à écrire des requêtes SQL avancées, à optimiser des structures et à m’initier à l’analyse de performance dans des systèmes de gestion de données.
            Le projet <a href="<?= $generateurUrl->generate('sconote') ?>">Sconote</a> m’a offert une mise en application concrète. J’ai conçu une base de données relationnelle, tout en tenant compte des besoins métiers du système. J’ai rédigé des requêtes SQL complexes intégrant des jointures multiples, des triggers, des fonctions, tout en garantissant une exécution rapide grâce à un schéma optimisé.
            En parallèle, dans le projet <a href="<?= $generateurUrl->generate('veryBadSplit') ?>">VeryBadSplit</a>, j’ai restructuré les accès aux données pour mieux séparer la logique métier de la vue utilisateur. En suivant le modèle MVCS, j’ai appris à organiser le code pour éviter les dépendances fortes et à structurer les données côté serveur pour faciliter leur restitution dans l’interface utilisateur via Twig.
            Enfin, dans <a href="<?= $generateurUrl->generate('kcdle') ?>">KCDLE</a>, j’ai été confronté à la manipulation de données dynamiques dans une interface interactive. Cela m’a demandé de réfléchir à la présentation claire de l’information, à la pagination, et à l’ergonomie, tout en veillant à la performance des traitements côté serveur.
            Ces expériences m’ont permis de consolider une compréhension approfondie des enjeux liés aux données : qualité, cohérence, structuration, et pertinence métier.
        </p>
    </div>

    <div>
        <h1>📘 Compétence 5 – Conduire un projet</h1>
        <p>
            Cette compétence a été développée à travers les ressources R3.14 / R4.07 – PPP, R4.09 – Management avancé SI, et R4.06 – Communication interne. Ces enseignements m’ont permis de mieux comprendre les étapes clés de la gestion de projet : définition des objectifs, planification, répartition des rôles, suivi des livrables, ainsi que la communication efficace en équipe, à l’oral comme à l’écrit.
            Le projet <a href="<?= $generateurUrl->generate('sconote') ?>">Sconote</a>, mené en équipe, a été l’occasion d’appliquer ces notions en adoptant une organisation agile. Nous avons structuré le travail autour de sprints, avec un backlog priorisé, des réunions de planification, et des revues régulières pour évaluer l’avancement. Lors de l’un des sprints, j’ai pris le rôle de Scrum Master : j’ai animé les réunions quotidiennes, veillé au respect des engagements, et facilité la communication entre les membres de l’équipe. Ce rôle m’a permis de développer mes compétences en coordination, gestion des blocages et dynamique de groupe.
            Nous avons utilisé GitHub comme outil de gestion collaborative, avec une organisation des branches, un suivi des issues, et des pull requests validées collectivement. Le travail s’est déroulé dans un cadre professionnel simulé, ce qui m’a permis de m’adapter aux imprévus, de gérer les dépendances techniques et de tenir les délais tout en garantissant la qualité du livrable.
            Cette expérience m’a permis de comprendre concrètement les enjeux d’une gestion de projet efficace : établir des objectifs réalistes, impliquer les membres, maintenir une vision commune et valoriser les compétences de chacun. Elle a aussi renforcé ma confiance dans ma capacité à assumer des responsabilités de coordination.
            Enfin, ce projet a nourri ma réflexion dans le cadre du PPP, en me confortant dans l’idée de travailler dans un environnement collaboratif où la communication et la gestion de projet sont centrales.
        </p>
    </div>

    <div id="projets">
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
