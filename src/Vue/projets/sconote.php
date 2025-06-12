<?php /** @var UrlGenerator $generateurUrl */
/** @var UrlHelper $assistantUrl */


use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\Routing\Generator\UrlGenerator; ?>

<section class="projet-detail">
    <h1>Sconote</h1>
    <p><strong>Description :</strong> Projet académique réalisé en 2e année dans le cadre d’un projet agile SCRUM. Sconote est un outil de gestion de notes pour les enseignants, conçu pour simplifier la saisie, la visualisation et la gestion des évaluations dans un établissement scolaire. L’application repose sur une base de données MySQL, un backend PHP et un frontend HTML/CSS. Le projet a été mené par une équipe de 5 personnes, avec une limite de 4 mois, des sprints, des rôles définis (Scrum Master, Product Owner) et des interactions régulières avec le client.</p>

    <div class="fiche-projet">
        <h4>Fiche projet</h4>
        <ul>
            <li><strong>Durée :</strong> 3 mois</li>
            <li><strong>Travail :</strong> Projet de groupe</li>
            <li><strong>Objectifs :</strong> Concevoir un système de gestion de notes simplifié à destination d’un personnel fictif</li>
            <li><strong>Contraintes :</strong> Travail encadré, architecture imposée (MVC), délais courts, soutenance obligatoire</li>
            <li><strong>Apports techniques :</strong> Intégration de requêtes SQL complexes, génération de documents PDF, gestion d’un backlog</li>
            <li><strong>Apports humains :</strong> Répartition des tâches, adaptation aux imprévus, restitution orale en groupe</li>
        </ul>
    </div>

    <p>
        <strong>Accès au site livré :</strong> Le projet a été hébergé sur le serveur de l'IUT pour la livraison finale au client. Il est accessible à l'adresse suivante :<br>
        <a href="https://webinfo.iutmontp.univ-montp2.fr/~bussierea/sae3a-base/web/" target="_blank">https://webinfo.iutmontp.univ-montp2.fr/~bussierea/sae3a-base/web/</a>
    </p>

    <h2>Captures et preuves</h2>
    <ul>
        <li>
            <em>- Liste des élèves (AC 1.2)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/listeSconote.png") ?>" alt="Liste des élèves">
        </li>
        <li>
            <em>- Extrait de code des requêtes préparées (AC 2.3)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/requeteSconote.png") ?>" alt="Extrait de code des requêtes préparées">
        </li>
        <li>
            <em>- Schéma de la base de données relationnelle (AC 4.1)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/ModeleEASconote.png") ?>" alt="Schéma de la base de données relationnelle">
        </li>
        <li>
            <em>- Planning Trello d’un sprint (AC 5.3)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/backlogSconote.png") ?>" alt="Planning Trello d’un sprint">
        </li>
    </ul>

    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>


<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence 1 : Réaliser un développement d’application</h3>
        <p><strong>AC 1.1</strong> – Les besoins du client ont été recueillis à travers plusieurs réunions et traduits en user stories claires. Chaque fonctionnalité développée (ajout de notes, consultation des moyennes, gestion des utilisateurs) a été définie dans un backlog affiné à chaque sprint planning. Les spécifications fonctionnelles ont été rédigées dans un document partagé, puis implémentées progressivement en respectant les priorités du client.</p>
        <p><strong>AC 1.2</strong> – L’interface de Sconote a été pensée pour être intuitive, notamment pour des enseignants peu familiers avec les outils numériques. Une navigation simple avec des boutons explicites, des couleurs cohérentes, et un affichage clair des informations ont été privilégiés. Les retours du client ont permis d’améliorer la lisibilité et l’ergonomie au fil des sprints.</p>
        <p><strong>AC 1.3</strong> – L’architecture suit une organisation MVC simplifiée. Le code PHP est structuré par rôles (modèles, vues, contrôleurs), les fonctions sont bien nommées et les fichiers séparés par responsabilité. Une attention particulière a été portée à la réutilisabilité des composants (ex. formulaire de saisie de notes).</p>
        <p><strong>AC 1.4</strong> – Des tests manuels ont été effectués à chaque fin de sprint pour valider les fonctionnalités. Un document de suivi des bugs a été tenu à jour sur Trello. Les cas d’usage critiques (comme la validation des notes ou l’authentification) ont été testés systématiquement sur plusieurs navigateurs.</p>
    </div>

    <div class="competence">
        <h3>Compétence 2 : Optimiser des applications informatiques</h3>
        <p><strong>AC 2.1</strong> – Le projet Sconote repose sur la mise en œuvre de structures de données adaptées pour gérer les relations complexes entre élèves, avis, tranches d’évaluation et domaines. Les entités du modèle métier (Élève, TrancheAvis, Domaine, Moyenne, etc.) ont été réfléchies pour refléter au mieux les besoins métiers, tout en assurant une navigation fluide dans les traitements. Par exemple, l’utilisation de maps associatives et de tableaux indexés dans certaines fonctions PHP permet de regrouper efficacement les données par élève ou par domaine, facilitant les calculs d’agrégation. Ces choix de structures ont permis une meilleure lisibilité du code, une exécution plus rapide des traitements, et une simplification des algorithmes de validation des moyennes, particulièrement dans le trigger final de génération des avis.</p>
        <p><strong>AC 2.2</strong> – Bien que le projet n’intègre pas de techniques avancées comme l’intelligence artificielle, il applique des raisonnements algorithmiques avancés pour résoudre des problèmes métiers complexes. L’exemple le plus significatif est le trigger final qui simule une logique de décision conditionnelle à plusieurs niveaux : il doit parcourir tous les élèves, puis pour chaque élève itérer sur toutes les tranches d’un domaine pour vérifier les conditions de validation à partir de moyennes. L’algorithme met en œuvre des boucles imbriquées, des ruptures conditionnelles, et une logique d’arrêt anticipé, traduisant une réflexion algorithmique rigoureuse pour répondre à des exigences métiers non triviales. Cette logique s’apparente à une méthode arborescente d’analyse des cas, visant à optimiser la prise de décision automatisée.</p>
        <p><strong>AC 2.3</strong> – La sécurité des données est un enjeu fondamental dans Sconote, qui manipule des informations sensibles comme les résultats des élèves et leurs identifiants. Pour garantir l’intégrité des données, plusieurs mécanismes ont été mis en place : le code PHP inclut des vérifications systématiques sur les entrées (ex. contrôles de type et de validité), et des protections contre les injections SQL via l’utilisation systématique de requêtes préparées. Côté structure, les fichiers critiques sont organisés de manière à ne pas exposer de données en clair. Par ailleurs, lors du déploiement, les fichiers sensibles (comme la configuration de la base de données) ne sont jamais placés dans des zones publiques du serveur, assurant ainsi un cloisonnement efficace. Ces pratiques renforcent la confidentialité et la résilience de l’application face aux risques d’exploitation malveillante.</p>
    </div>

    <div class="competence">
        <h3>Compétence 3 : Administrer des systèmes informatiques communicants complexes</h3>
        <p><strong>AC 3.1</strong> – Le site a été développé et testé en local pour permettre des démonstrations et faciliter les itérations pendant les sprints. Pour la livraison finale, il a été déployé sur le serveur web de l’IUT. Cette mise en production a nécessité des ajustements sur la configuration du serveur Apache, notamment pour les droits d’accès, la structure des URLs et les chemins relatifs, assurant ainsi une compatibilité multi-utilisateur en environnement académique.</p>
        <p><strong>AC 3.2</strong> – La base de données du projet est hébergée sur le service PhpMyAdmin de l’IUT, utilisé tout au long du développement et pour la livraison finale. Bien qu’aucun fichier `.sql` ne soit directement fourni, un modèle de données complet a été réalisé sous Enterprise Architect (EA). Ce modèle formalise la structure des tables, leurs relations, ainsi que les clés primaires et étrangères. Il permet de reconstituer fidèlement la base dans n’importe quel environnement compatible MySQL, y compris sur un serveur virtualisé avec PHP. Ce schéma a d’ailleurs servi de référence commune à l’équipe pour assurer la cohérence entre le front-end, le back-end et la base de données.</p>
        <p><strong>AC 3.3</strong> – Des fichiers `.htaccess` ont été utilisés pour sécuriser certaines parties du site. L’authentification par mot de passe est obligatoire et chaque utilisateur est redirigé vers son espace spécifique selon son rôle (élève, enseignant, administrateur).</p>
    </div>

    <div class="competence">
        <h3>Compétence 4 : Gérer des données de l’information</h3>
        <p><strong>AC 4.1</strong> – Le projet Sconote a nécessité la modélisation complète d’un système de gestion des avis pédagogiques pour l’orientation des étudiants. Pour cela, un modèle conceptuel de données (modèle EA) a été produit en amont, permettant de structurer les informations clés : étudiants, moyennes, tranches d’avis, domaines, agrégations, etc. Ce modèle a été conçu pour respecter les bonnes pratiques de modélisation relationnelle (éviter les redondances, garantir l’unicité des clés primaires, assurer la cohérence des dépendances fonctionnelles). Des réflexions ont été menées sur la normalisation des données, en particulier pour éviter les anomalies lors de la mise à jour ou de la suppression d’un élève ou d’une tranche. Le modèle a ensuite été transformé en schéma physique, intégrant des types précis, des clés étrangères, et des index, assurant ainsi des performances optimisées pour les traitements SQL réalisés en back-end. Cette optimisation du modèle a permis une exécution rapide et fiable des calculs d’agrégation et des filtres complexes utilisés dans les fonctionnalités métiers.</p>
        <p><strong>AC 4.2</strong> – Le projet Sconote intègre plusieurs mesures visant à assurer la confidentialité, l’intégrité et la sécurité des données. Tout d’abord, les accès aux fonctionnalités sensibles sont protégés par un système d’authentification basé sur les rôles des utilisateurs (étudiant, enseignant, administrateur), ce qui limite les droits de consultation et de modification selon le profil connecté. Les identifiants de connexion ne sont jamais exposés dans les URLs, et les formulaires sont conçus pour éviter les failles de type injection SQL (grâce à l’utilisation de requêtes préparées dans PDO). Des vérifications côté serveur sont systématiquement appliquées pour éviter toute falsification de données, comme la modification d’avis sans autorisation. Le site étant hébergé sur le serveur de l’IUT, les connexions sont sécurisées par le protocole HTTPS imposé par l’établissement. Enfin, l’organisation du code MVC permet un cloisonnement clair entre les données, les vues et les traitements, ce qui renforce la sécurité et la lisibilité du système. Ces éléments montrent que la sécurité et la confidentialité des données ont été considérées comme prioritaires tout au long du développement.</p>
        <p><strong>AC 4.3</strong> – L’une des fonctionnalités principales de Sconote consiste à restituer des résultats d’analyse pédagogique pour chaque élève, en fonction de plusieurs critères (agrégations, domaines, moyennes, seuils définis par les tranches d’avis). Cette restitution est programmée dynamiquement en PHP, avec un affichage conditionnel basé sur les calculs SQL réalisés en back-end. Les données sont présentées sous forme de tableaux explicites, regroupant les résultats par élève et par domaine, avec une différenciation visuelle entre les cas favorables et défavorables. L’application inclut aussi des mécanismes d’interprétation des règles métiers pour générer automatiquement des avis ou des statuts, rendant la restitution intelligible pour l’utilisateur final. Les filtres disponibles permettent aux responsables pédagogiques de consulter les résultats selon des vues spécifiques (filtrage par INE, par tranche d’avis, par agrégation, etc.), garantissant ainsi une visualisation ciblée, synthétique et contextualisée des informations pertinentes.</p>
        <p><strong>AC 4.4</strong> – Le projet Sconote nécessite la manipulation de données hétérogènes, provenant de sources et de formats variés. D’une part, les données manipulées incluent des informations personnelles (noms, identifiants, rôles), des résultats académiques (notes, moyennes), ainsi que des données de configuration ou de règles métier (tranches d’avis, seuils de validation). Ces données sont traitées aussi bien sous forme tabulaire dans la base de données relationnelle que sous forme d’objets en PHP côté serveur. De plus, certaines données sont générées dynamiquement et affichées dans des tableaux HTML interactifs. Le projet implique donc des conversions fréquentes entre formats SQL, objets métier en PHP et structures HTML, nécessitant une bonne maîtrise de la transformation et de l’adaptation de ces formats. Cette capacité à intégrer et exploiter des données de natures différentes est essentielle pour assurer le bon fonctionnement du système dans toutes ses dimensions (calculs, affichage, validation, etc.).</p>
    </div>

    <div class="competence">
        <h3>Compétence 5 : Conduire un projet</h3>
            <p><strong>AC 5.1</strong> – Le projet Sconote a été initié dans un contexte organisationnel clairement défini : il s’agissait de reproduire un portail universitaire de suivi des candidatures à la poursuite d'études, en particulier les demandes de master. Cela nous a amenés à analyser les processus pédagogiques existants : saisie des résultats par les enseignants, génération automatisée d’avis via des règles métiers, et prise de décision par les responsables. Nous avons donc identifié les étapes clés du traitement pédagogique pour les structurer sous forme numérique, avec des scénarios fonctionnels clairs. Cette compréhension des processus réels a permis de proposer un système adapté à l’organisation cible.</p>
            <p><strong>AC 5.2</strong> – Durant les premières phases du projet, des ateliers ont été organisés pour recueillir les besoins du client (enseignants référents, responsables pédagogiques). Ces besoins ont été retranscrits sous forme de documents de spécifications fonctionnelles, accompagnés de maquettes illustrant les cas d’usage. Des user stories ont été créées dans Trello, puis affinées à l’aide de techniques comme le planning poker. Une attention particulière a été portée à l’expérience utilisateur, avec un affichage clair et logique de l’information (par INE, par agrégation, par avis). Les itérations successives ont permis de valider la compréhension et la bonne formalisation des attentes du client.</p>
            <p><strong>AC 5.3</strong> – Plusieurs critères de faisabilité ont été évalués en amont du développement : contraintes techniques (hébergement sur le serveur de l’IUT, base de données accessible uniquement en interne), contraintes temporelles (sprints définis à l’avance), et faisabilité humaine (nombre de membres dans l’équipe, disponibilité, compétences). Ces critères ont orienté nos choix d’architecture (structure MVCS), de technologies (PHP, SQL, HTML/CSS) et de périmètre fonctionnel à implémenter dans le délai imparti.</p>
            <p><strong>AC 5.4</strong> – Le projet a été mené selon une méthodologie Agile, avec plusieurs sprints encadrés par un Product Owner et un Scrum Master (rôle que j’ai assuré lors d’un sprint). À chaque itération, nous avons produit des documents de suivi : tableaux d’avancement, burndown charts, rétrospectives collectives, fiches de validation fonctionnelle. Le Trello a permis un suivi précis des tâches, leur répartition, et leur avancement. Des réunions régulières avec le client ont rythmé le développement et validé les livrables au fil du temps. Cette démarche a assuré un bon pilotage du projet jusqu’à sa livraison finale sur le serveur de l’IUT.</p>
    </div>

    <div class="competence">
        <h3>Compétence 6 : Travailler dans une équipe informatique</h3>
        <p><strong>AC 6.1</strong> – Le projet m’a permis de découvrir le fonctionnement d’un projet d’équipe avec interactions client. J’ai pu mieux comprendre la structure classique d’un projet web collaboratif, depuis la conception jusqu’à la démonstration finale.</p>
        <p><strong>AC 6.2</strong> – L’intégration dans l’équipe a été progressive, avec une bonne répartition des tâches. La revue de code, les tests croisés et la communication constante sur Discord et en réunion ont facilité la cohésion de groupe.</p>
        <p><strong>AC 6.3</strong> – J’ai participé activement aux décisions techniques et aux choix de conception. Ma prise d’initiative dans l’implémentation de certaines fonctionnalités critiques (comme l’ajout de notes avec vérification) a renforcé ma posture professionnelle dans l’équipe.</p>
    </div>
</div>
