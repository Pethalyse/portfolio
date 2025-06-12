<?php

namespace Portfolio\Controleur;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControleurPortfolio extends ControleurMere
{
    #[Route(path: ['/'], name:'accueil', methods:["GET"])]
    static function accueil(): Response
    {
        return self::afficherVueGeneral("accueil.php",);
    }

    #[Route(path: ['/cv'], name:'cv', methods:["GET"])]
    static function cv(): Response
    {
        return self::afficherVueGeneral("cv.php",);
    }

    #[Route(path: ['/projets'], name:'projets', methods:["GET"])]
    static function projets(): Response
    {
        return self::afficherVueGeneral("projets.php", ["pageTitle" => "Mes projets - Yanhis Mezence"]);
    }

    #[Route(path: ['/projets/kcdle'], name:'kcdle', methods:["GET"])]
    static function kcdle(): Response
    {
        return self::afficherVueGeneral("projets/kcdle.php", ["pageTitle" => "Projet KCDLE - Yanhis Mezence"]);
    }

    #[Route(path: ['/projets/veryBadSplit'], name:'veryBadSplit', methods:["GET"])]
    static function veryBadSplit(): Response
    {
        return self::afficherVueGeneral("projets/veryBadSplit.php", ["pageTitle" => "Projet VeryBadSplit - Yanhis Mezence"]);
    }

    #[Route(path: ['/projets/projet-c'], name:'projet-c', methods:["GET"])]
    static function projetC(): Response
    {
        return self::afficherVueGeneral("projets/projetC.php", ["pageTitle" => "Projet C - Yanhis Mezence"]);
    }

    #[Route(path: ['/projets/sconote'], name:'sconote', methods:["GET"])]
    static function sconote(): Response
    {
        return self::afficherVueGeneral("projets/sconote.php", ["pageTitle" => "Mes projets - Yanhis Mezence"]);
    }
}