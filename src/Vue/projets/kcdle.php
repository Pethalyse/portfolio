<?php

use Symfony\Component\HttpFoundation\UrlHelper;

$pageTitle = "Projet KCDLE - Yanhis Mezence";

/** @var Symfony\Component\Routing\Generator\UrlGenerator $generateurUrl */
/** @var UrlHelper $assistantUrl */
?>


<section class="projet-detail">
    <h1>KCDLE</h1>

    <p><strong>Description :</strong></p>
    <p>
        KCDLE est un jeu web de type "Daily Guess" dans l'univers de League of Legends et de la Karmine Corp qui a été développé pour un projet personnel avec une équipe de 4 personnes en une durée de 3 semaines. Chaque jour, les joueurs doivent deviner un joueur professionnel à partir d'indices tels que le rôle, la région, l'équipe, etc. Le site a connu un succès viral avec un pic de plus de <strong>370 000 visiteurs</strong> en une journée. Il a été conçu en équipe de 4 (développement, design, communication, BDD), avec une architecture MVCS entièrement codée sans framework.
    </p>

    <div class="fiche-projet">
        <h4>Fiche projet</h4>
        <ul>
            <li><strong>Durée :</strong> 3 semaines</li>
            <li><strong>Travail :</strong> Projet personnel</li>
            <li><strong>Objectifs :</strong> Créer un jeu de type Wordle sur le thème de la Karmine Corp, intégrant des mécaniques de daily pick, de remake, et de statistiques.</li>
            <li><strong>Contraintes :</strong> Développement fullstack MVC sans bundler, responsive, hébergé en ligne</li>
            <li><strong>Apports techniques :</strong> Maîtrise du MVC, des appels dynamiques Vue.js, PHP avancé, logique de routing</li>
            <li><strong>Apports humains :</strong> Gestion autonome d’un projet complet, prise d’initiative, créativité autour du gameplay</li>
        </ul>
    </div>


    <p><strong>Lien web :</strong>
        <a href="https://kcdle.fr/" target="_blank">
            https://kcdle.fr/
        </a>
    </p>

    <p>
        Un article détaillant le jeu est disponible sur Breakflip : <a href="https://www.breakflip.com/actualites/league-of-legends/kcdle-lfldle-et-lecdle-lol-comment-jouer-au-mini-jeu-league-of-legends-56217" target="_blank">Lire l'article</a>
    </p>

    <h2>Captures et preuves</h2>
    <ul>
        <li>
            <em>- Schéma de l'arborescence du projet (MVC) (AC 1.3)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/arborescenceKcdle.png") ?>" alt="Schéma de l'arborescence du projet (MVC)">
        </li>
        <li>
            <em>- Capture de l'interface responsive (mobile/desktop) (AC 1.2, 4.3)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/responsiveKcdle.png") ?>" alt="Capture de l'interface responsive (mobile/desktop)">
        </li>
        <li>
            <em>Manipulations d'objet php to json (AC 2.1, 4.4)</em>
            <img src="<?= $assistantUrl->getAbsoluteUrl("../ressources/img/toJsonKcdle.png") ?>" alt="Manipulations d'objet php to json">
        </li>
    </ul>

    <p><a href="<?= $generateurUrl->generate('projets') ?>">&larr; Retour aux projets</a></p>
</section>

<div class="competence-sidebar">
    <div class="competence">
        <h3>Compétence 1 : Réaliser un développement d'application</h3>
        <p><strong>AC 1.1</strong> – J’ai élaboré les spécifications fonctionnelles de KCDLE à partir de l’idée principale : proposer un jeu quotidien inspiré de Wordle mais basé sur des joueurs professionnels. J’ai défini les règles (1 joueur par jour), les contraintes (temps d’affichage, anonymat de la réponse), ainsi que les besoins techniques (jeu jouable sur navigateur, sans inscription). Ces éléments ont guidé la structure du code et les choix techniques.</p>
        <p><strong>AC 1.2</strong> – L’interface a été pensée pour être utilisable aussi bien sur mobile que sur ordinateur. J’ai porté une attention particulière à la taille des éléments, à l’espacement et à la clarté des indices. Des tests visuels ont été faits sur plusieurs résolutions pour m'assurer d’un affichage correct.</p>
        <p><strong>AC 1.3</strong> – L’architecture suit un modèle MVC clair : les contrôleurs gèrent les routes, les vues PHP affichent dynamiquement les composants, et les modèles accèdent aux données. Cette organisation m’a permis de séparer proprement la logique, d’ajouter des fonctionnalités sans casser le reste du code, et de maintenir le projet facilement.</p>
        <p><strong>AC 1.4</strong> – J’ai testé manuellement chaque fonctionnalité après modification. En cas de bug, je testais différents scénarios utilisateurs (réponse invalide, joueur inconnu, réponse juste, etc.). Les retours des joueurs m’ont également permis d’améliorer certains comportements ou messages.</p>
    </div>

    <div class="competence">
        <h3>Compétence 2 : Optimiser des applications</h3>
        <p><strong>AC 2.1</strong> – Pour gérer les joueurs, les indices et les filtres, j’ai utilisé des tableaux associatifs en PHP, ce qui permet des accès rapides et une manipulation souple. Ces structures ont suffi à garantir de bonnes performances sur serveur mutualisé.</p>
        <p><strong>AC 2.2</strong> – Le système de comparaison repose sur des fonctions personnalisées qui analysent les écarts entre le joueur cible et la proposition. J’ai conçu une logique qui prend en compte le rôle, la région, l’équipe, la nationalité et d'autres caractéristiques, pour générer des feedbacks visuels cohérents.</p>
        <p><strong>AC 2.3</strong> – Chaque donnée utilisateur est systématiquement vérifiée côté serveur. Aucune requête critique n’est traitée sans validation préalable. Par exemple, un joueur proposé qui n'existe pas dans la base renvoie une réponse neutre sans erreur.</p>
        <p><strong>AC 2.4</strong> – Le projet n’utilise aucun framework externe pour limiter la charge serveur. Le tout est hébergé sur un serveur mutualisé et repose sur du PHP natif avec des composants JS simples. Ce choix allège le temps de chargement et rend le déploiement facile.</p>
    </div>

    <div class="competence">
        <h3>Compétence 3 : Administrer des systèmes</h3>
        <p><strong>AC 3.1</strong> – Le site fonctionne avec un système automatique de rotation de contenu : un script PHP lit la date du jour et récupère le joueur associé dans la base. Cela rend le jeu autonome, sans intervention manuelle quotidienne.</p>
        <p><strong>AC 3.2</strong> – Le développement a été réalisé en local avec Apache et PHP, avant d’être déployé sur OVH mutualisé. J’ai pu configurer les routes via un .htaccess, et faire des tests sans avoir à recompiler ou déployer chaque fois.</p>
        <p><strong>AC 3.3</strong> – Les routes sensibles sont protégées. Le panel d’administration n’est accessible qu’avec un mot de passe et une session active. De plus, les scripts critiques (chargement de joueur, score, etc.) sont masqués dans la structure du site.</p>
    </div>

    <div class="competence">
        <h3>Compétence 4 : Gérer des données</h3>
        <p><strong>AC 4.1</strong> – Chaque jour de l’année est associé à un joueur dans une base de données MySQL. Cela permet au backend de servir dynamiquement la réponse du jour et les joueurs valides. Ce système rend l’ajout de joueurs simple via l’espace admin.</p>
        <p><strong>AC 4.3</strong> – Les indices sont présentés via un système visuel : couleurs, flèches, pictogrammes. Cela rend la compréhension plus intuitive et offre un retour immédiat à l’utilisateur, ce qui améliore la fluidité de l’expérience de jeu.</p>
        <p><strong>AC 4.4</strong> – Les données issues de la BDD sont transformées en JSON avant d’être envoyées au frontend. Ce format léger permet un affichage réactif via JavaScript et facilite le découplage entre la logique serveur et l’affichage client.</p>
    </div>

    <div class="competence">
        <h3>Compétence 5 : Conduire un projet informatique</h3>
        <p><strong>AC 5.3</strong> – J’ai mené seul ce projet, du concept initial au déploiement. Pour rester organisé, j’ai rédigé une liste d’objectifs sur papier, que j’ai suivie tout au long du développement. Cela m’a permis de prioriser les tâches, d’adapter le contenu en fonction du temps disponible et de gérer les retours utilisateurs une fois le site en ligne.</p>
        <p><strong>AC 5.4</strong> – Même sans outils de suivi en ligne, j’ai régulièrement réévalué mon avancement en me basant sur les objectifs définis. J’ai documenté mes choix à travers le code et pris en compte les retours communautaires pour faire évoluer certaines fonctionnalités. Ce projet m’a appris à structurer ma démarche de développement et à analyser mes progrès de manière autonome.</p>
    </div>

    <div class="competence">
        <h3>Compétence 6 : Travailler dans une équipe informatique</h3>
        <p><strong>AC 6.1</strong> – Même si KCDLE est un projet individuel, j’ai intégré des retours d’utilisateurs, ce qui m’a amené à collaborer de façon indirecte avec la communauté. J’ai adapté certaines fonctionnalités en fonction des remarques reçues, comme l’ajustement des indices ou la simplification de l’interface de jeu.</p>
        <p><strong>AC 6.2</strong> – J’ai échangé régulièrement avec des membres de Discord ou X (Twitter) pour présenter le projet, obtenir des suggestions et identifier des bugs. Ces interactions m’ont permis de simuler un travail en équipe, où le dialogue et l’écoute des besoins extérieurs sont essentiels.</p>
        <p><strong>AC 6.3</strong> – J’ai pris en compte les retours publics pour améliorer la lisibilité de certaines informations et équilibrer la difficulté du jeu. Même seul, j’ai appris à considérer l’avis d’un public comme une forme de collaboration indirecte, et à faire évoluer mon projet en conséquence.</p>
    </div>
</div>
