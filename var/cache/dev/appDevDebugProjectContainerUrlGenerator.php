<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterArticle' => array (  0 =>   array (    0 => 'libelle',    1 => 'codebarres',    2 => 'marque',    3 => 'type',    4 => 'description',    5 => 'note',    6 => 'poids',    7 => 'couleur',    8 => 'taille',    9 => 'prix',    10 => 'id_magasin',    11 => 'id_utilisateur',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArticleController::ajouterArticleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_magasin',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prix',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'taille',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'couleur',    ),    5 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'poids',    ),    6 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'note',    ),    7 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'description',    ),    8 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    9 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'marque',    ),    10 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codebarres',    ),    11 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'libelle',    ),    12 =>     array (      0 => 'text',      1 => '/ajouterArticle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getArticleById' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArticleController::getArticleByIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getArticleById',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getArticleByRef' => array (  0 =>   array (    0 => 'codebarres',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArticleController::getArticleByRefAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codebarres',    ),    1 =>     array (      0 => 'text',      1 => '/getArticleByRef',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getArticleByNom' => array (  0 =>   array (    0 => 'libelle',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArticleController::getArticleByNomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'libelle',    ),    1 =>     array (      0 => 'text',      1 => '/getArticleByNom',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getComparaison' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArticleController::getComparaisonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/getComparaison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getComparaisonDate' => array (  0 =>   array (    0 => 'id_article',    1 => 'id_magasin',    2 => 'dateDeb',    3 => 'dateFin',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArticleController::getComparaisonDateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dateFin',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dateDeb',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_magasin',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_article',    ),    4 =>     array (      0 => 'text',      1 => '/getComparaisonDate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getListeArticle' => array (  0 =>   array (    0 => 'id_article',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CaptureController::getListeCaptureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_article',    ),    1 =>     array (      0 => 'text',      1 => '/getListeCapture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getListeCartesFidelite' => array (  0 =>   array (    0 => 'id_utilisateur',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CarteFideliteController::getListeCartesFideliteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/getListeCartesFidelite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterCarte' => array (  0 =>   array (    0 => 'id_utilisateur',    1 => 'id_enseigne',    2 => 'codebarres',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CarteFideliteController::ajouterCarteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codebarres',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_enseigne',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    3 =>     array (      0 => 'text',      1 => '/ajouterCarte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerCarte' => array (  0 =>   array (    0 => 'id_carte',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CarteFideliteController::supprimerCarteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_carte',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerCarte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterFavoris' => array (  0 =>   array (    0 => 'id_article',    1 => 'id_utilisateur',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FavorisController::ajouterFavorisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_article',    ),    2 =>     array (      0 => 'text',      1 => '/ajouterFavoris',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerFavoris' => array (  0 =>   array (    0 => 'id_favoris',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FavorisController::supprimerFavorisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_favoris',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerFavoris',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherListeFavoris' => array (  0 =>   array (    0 => 'id_utilisateur',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FavorisController::afficherListeFavorisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/afficherListeFavoris',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CreerListe' => array (  0 =>   array (    0 => 'id_utilisateur',    1 => 'nom',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListeCoursesController::CreerListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    2 =>     array (      0 => 'text',      1 => '/CreerListe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerArticleListe' => array (  0 =>   array (    0 => 'id_article',    1 => 'id_liste',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListeCoursesController::supprimerArticleListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_liste',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_article',    ),    2 =>     array (      0 => 'text',      1 => '/supprimerArticleListe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouterArticleListe' => array (  0 =>   array (    0 => 'id_article',    1 => 'id_liste',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListeCoursesController::ajouterArticleListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_liste',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_article',    ),    2 =>     array (      0 => 'text',      1 => '/ajouterArticleListe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherArticleListe' => array (  0 =>   array (    0 => 'id_utilisateur',    1 => 'id_liste',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListeCoursesController::afficherArticleListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_liste',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    2 =>     array (      0 => 'text',      1 => '/afficherArticleListe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficherListeCourses' => array (  0 =>   array (    0 => 'id_utilisateur',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListeCoursesController::afficherListeCoursesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_utilisateur',    ),    1 =>     array (      0 => 'text',      1 => '/afficherListeCourses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getListeMagasin' => array (  0 =>   array (    0 => 'lat',    1 => 'long',    2 => 'km',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MagasinController::getListeMagasin',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'km',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'long',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'lat',    ),    3 =>     array (      0 => 'text',      1 => '/getListeMagasin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getListeMagasins' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MagasinController::getListeMagasinsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getListeMagasins',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addUser' => array (  0 =>   array (    0 => 'nom',    1 => 'prenom',    2 => 'email',    3 => 'pwd',    4 => 'addresse',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UtilisateurController::addUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'addresse',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pwd',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prenom',    ),    4 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    5 =>     array (      0 => 'text',      1 => '/addUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'checkUser' => array (  0 =>   array (    0 => 'email',    1 => 'pwd',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UtilisateurController::checkUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pwd',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    2 =>     array (      0 => 'text',      1 => '/checkUser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
