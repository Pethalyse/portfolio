<?php
namespace Portfolio\Controleur;

use Exception;
use LogicException;
use Portfolio\Lib\AttributeRouteControllerLoader;
use Portfolio\Lib\Conteneur;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Loader\AttributeDirectoryLoader;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

class RouteurURL
{
    public static function traiterRequete(): void
    {
        $requete = Request::createFromGlobals();
        $contexteRequete = (new RequestContext())->fromRequest($requete);

        $fileLocator = new FileLocator(__DIR__);
        $attrClassLoader = new AttributeRouteControllerLoader();
        $routes = (new AttributeDirectoryLoader($fileLocator, $attrClassLoader))->load(__DIR__);

        $generateurUrl = new UrlGenerator($routes, $contexteRequete);
        $assistantUrl = new UrlHelper(new RequestStack(), $contexteRequete);

        Conteneur::ajouterService("generateurUrl", $generateurUrl);
        Conteneur::ajouterService("assistantUrl", $assistantUrl);

        try {
            $associateurUrl = new UrlMatcher($routes, $contexteRequete);
            $donneesRoute = $associateurUrl->match($requete->getPathInfo());
            //NoConfigurationException ResourceNotFoundException MethodNotAllowedException

            $requete->attributes->add($donneesRoute);

            $resolveurDeControleur = new ControllerResolver();
            $controleur = $resolveurDeControleur->getController($requete);
            //LogicException

            $resolveurDArguments = new ArgumentResolver();
            $arguments = $resolveurDArguments->getArguments($requete, $controleur);
            //RuntimeException

            $reponse = call_user_func_array($controleur, $arguments);
        } catch (MethodNotAllowedException $exception) {
            // Remplacez xxx par le bon code d'erreur
            $reponse = ControleurMere::afficherErreur($exception->getMessage(), 405);
        } catch (LogicException $exception) {
            // Remplacez xxx par le bon code d'erreur
            $reponse = ControleurMere::afficherErreur($exception->getMessage(), 404);
        } catch (Exception $exception) {
            var_dump("ok");
            $reponse = ControleurMere::afficherErreur($exception->getMessage()) ;
        }

        $reponse->send();
    }
}