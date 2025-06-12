<?php /** @var UrlGenerator $generateurUrl */
/** @var UrlHelper $assistantUrl */


use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\Routing\Generator\UrlGenerator; ?>

<section class="projet-detail">
    <h1>Projet C</h1>
    <p><strong>Projet personnel en cours</strong>, Projet C est un jeu de combat 2D compétitif développé en solo sous Unity. Il intègre un univers original avec un système de combat dynamique, des personnages uniques, et une logique de gameplay pensée pour les affrontements en 1v1. Le projet repose sur une architecture modulaire et extensible, avec séparation claire des responsabilités (principes SOLID), et une documentation complète via un Game Design Document (GDD).</p>
    <p>Le développement est encore en cours, mais le code, les mécaniques, et les systèmes de base (attaques, statistiques, mana, synergie...) sont déjà implémentés. Aucun lien du GDD n’est fourni ici car ce document reste privé : ce projet a vocation à être finalisé et commercialisé à l’avenir.</p>

    <div class="fiche-projet">
        <h4>Fiche projet</h4>
        <ul>
            <li><strong>Durée :</strong> Projet en cours depuis mai 2025</li>
            <li><strong>Travail :</strong> Projet personnel de jeu vidéo</li>
            <li><strong>Objectifs :</strong> Créer un jeu de combat 2D basé sur un univers original, avec synergies, statistiques et attaques complexes.</li>
            <li><strong>Contraintes :</strong> Développement sur Unity (gameplay uniquement), structuration modulaire SOLID</li>
            <li><strong>Apports techniques :</strong> Programmation orientée architecture (composants, ScriptableObjects), tests unitaires, GDD exhaustif</li>
            <li><strong>Apports humains :</strong> Capacité à concevoir un univers complet et à anticiper les besoins d’un vrai développement à moyen terme</li>
        </ul>
    </div>


    <h2>Captures et preuves</h2>
    <ul>
        <li>
            <em>- Extraits du Game Design Document (AC 1.1, 6.3)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/gddC.png") ?>" alt="Extraits du Game Design Document">
        </li>
        <li>
            <em>- Architecture modulaire, l'arborescence montre la bonne séparation des différentes logiques (AC 1.3, 6.2)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/arborescenceC.png") ?>" alt="Architecture modulaire SOLID">
        </li>
        <li>
            <em>- Utilisation de ScriptableObjects (AC 2.1, 4.4)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/scriptableobjectC.png") ?>" alt="Utilisation de ScriptableObjects">
        </li>
        <li>
            <em>- Tests unitaires (AC 1.4)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/testsC.png") ?>" alt="Tests unitaires">
        </li>
    </ul>
    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>

<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence 1 : Réaliser un développement d’application</h3>
        <p><strong>AC 1.1</strong> – Le développement s’est basé sur un Game Design Document complet servant de spécification fonctionnelle. Ce document décrit l’ensemble des règles métiers : logique de mana, gestion du shield, fonctionnement du mode Synergie, attaques et statistiques. Chaque système du code, comme les composants Health, Mana, ou encore AttackExecutor, découle de ces règles, garantissant un respect strict des exigences métier tout en intégrant des contraintes de fluidité et de performance.</p>
        <p><strong>AC 1.2</strong> – L’interface utilisateur, même en phase initiale, a été pensée pour allier lisibilité et accessibilité. Le HUD affiche les ressources (mana, vie) et les actions disponibles selon le contexte (sol ou air), avec des icônes ou segments colorés. Ce système dynamique s’adapte au joueur tout en respectant les principes d’ergonomie, avec une charge cognitive réduite et une possibilité de personnalisation.</p>
        <p><strong>AC 1.3</strong> – L’ensemble du projet suit une architecture modulaire SOLID. Chaque composant est indépendant : CombatManager coordonne le combat sans dépendre des détails internes des personnages ; les personnages eux-mêmes sont structurés avec des composants (santé, mana, attaque) clairement séparés. L’utilisation d’interfaces et de classes abstraites permet d’étendre les fonctionnalités sans modifier l’existant, assurant ainsi une évolutivité propre.</p>
        <p><strong>AC 1.4</strong> – Des tests unitaires ont été rédigés pour vérifier la validité des calculs critiques (dégâts, réduction, synergie, récupération de mana, transitions de round). Des tests manuels complètent cette démarche pour simuler des cas d’usage complexes (interruption d’action, combo long, sauts multiples), validant ainsi la stabilité globale du gameplay.</p>
    </div>

    <div class="competence">
        <h3>Compétence 2 : Optimiser des applications informatiques</h3>
        <p><strong>AC 2.1</strong> – Les attaques sont des ScriptableObject (Un conteneur de données que l'on peut utiliser pour enregistrer de grandes quantités de données, indépendamment des instances de classe) et sont stockées dans des dictionnaires multidimensionnels selon leur type, direction et contexte, assurant un accès rapide et précis. Les statistiques (CharacterStats) sont encapsulées dans des objets centralisés, et les effets sont gérés sous forme de listes d’objets typés (Effect) avec durée, type et impact. Ces structures assurent lisibilité, performance et modularité.</p>
        <p><strong>AC 2.2</strong> – Une IA est en préparation pour gérer les combats en solo. Elle utilise un système basé sur une machine à états avec des priorités d’actions selon la position, le mana, ou l’historique d’attaques. Cette logique avancée reflète une application d’algorithmes de décision adaptés à la complexité du jeu compétitif.</p>
        <p><strong>AC 2.3</strong> – La logique métier est protégée contre toute altération extérieure : encapsulation des ressources (PV, mana), contrôles internes sur les méthodes publiques, gestion défensive des erreurs (impossibilité de lancer une attaque sans ressources). Ce cloisonnement assure la robustesse du gameplay même en cas de bug ou d’utilisation imprévue.</p>
    </div>

    <div class="competence">
        <h3>Compétence 3 : Administrer des systèmes informatiques communicants complexes</h3>
        <p><strong>AC 3.1</strong> – Un mode multijoueur 1v1 est prévu. Le code a été pensé pour permettre la synchronisation réseau : séparation des couches (logique métier / réseau), objets sérialisables, échanges d’états (position, mana, attaque) à travers une future interface réseau.</p>
        <p><strong>AC 3.2</strong> – Le projet est destiné à être hébergé sur serveur distant ou VPS. L’organisation du code en modules indépendants permet le déploiement en local ou à distance. Unity offre la possibilité de compiler une version serveur, et l’architecture actuelle facilite cette transition future.</p>
    </div>

    <div class="competence">
        <h3>Compétence 4 : Gérer des données de l’information</h3>
        <p><strong>AC 4.1</strong> – Les données liées aux personnages (stats, attaques, effets, etc.) sont modélisées en objets métiers propres, structurés pour éviter toute redondance. L’utilisation de clés d’identification et la séparation des responsabilités garantissent une intégration fluide de nouveaux éléments sans perturber l’existant.</p>
        <p><strong>AC 4.3</strong> – Toutes les informations affichées à l’écran (HUD, états, mana, attaques possibles) sont issues de traitements internes. Ces données sont filtrées et adaptées en temps réel pour garantir la clarté, avec un rendu dynamique basé sur le contexte (sol / air / synergie).</p>
        <p><strong>AC 4.4</strong> – Le projet utilise différents types de données : booléens, entiers, chaînes, listes typées et objets métiers. Ces données sont combinées dans des systèmes cohérents (par exemple, l’interaction entre attaque, mana, locktime, synergie) permettant une gestion fluide et structurée, même dans des logiques complexes.</p>
    </div>

    <div class="competence">
        <h3>Compétence 5 : Conduire un projet</h3>
        <p><strong>AC 5.1</strong> – Le projet a été mené avec une vision structurée : un GDD complet a été utilisé pour centraliser les mécaniques, définir les dépendances entre systèmes et poser les bases d’un développement progressif et modulaire. Chaque étape a été guidée par ce référentiel.</p>
        <p><strong>AC 5.3</strong> – Une démarche de faisabilité a été conduite avant le développement : priorisation du gameplay, séparation claire des couches (métier, input, interface), non-intégration initiale des assets visuels pour se concentrer sur l’architecture. Cette organisation garantit un développement progressif et professionnel.</p>
    </div>

    <div class="competence">
        <h3>Compétence 6 : Travailler dans une équipe informatique</h3>
        <p><strong>AC 6.1</strong> – Bien que réalisé en solo, Projet C est conçu comme un projet modulaire structuré, comparable à ceux rencontrés en entreprise. La séparation des composants, l’usage d’interfaces et l’indépendance des modules rendent le code facilement partageable entre plusieurs développeurs.</p>
        <p><strong>AC 6.2</strong> – Le projet est documenté, lisible et prêt à être repris en équipe. L’usage de noms clairs, de principes SOLID, et d’une logique d’extension sans dépendances circulaires permettrait une collaboration fluide sur des modules spécifiques (combat, UI, IA…).</p>
        <p><strong>AC 6.3</strong> – Grâce à mon expérience acquise lors de précédents projets d’équipe (comme Pokémon Orange Garnet), j’ai anticipé les besoins d’un développement collectif dès la conception : découpage logique, commentaires précis, architecture modulaire. Le projet peut évoluer vers une collaboration sans refonte majeure.</p>
    </div>
</div>

