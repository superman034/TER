<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/inscription' => [
                [['_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
                [['_route' => 'inscription', '_controller' => 'App\\Controller\\Registration::register'], null, null, null, true, false, null],
            ],
            '/security' => [[['_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::connexion'], null, null, null, true, false, null]],
            '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, true, false, null]],
            '/dashboard/new-project' => [[['_route' => 'new-project', '_controller' => 'App\\Controller\\ProjectController::newProject'], null, null, null, true, false, null]],
            '/deconnexion' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/dashboard/my\\-project/([^/]++)/(?'
                        .'|gros\\-oeuvre(?'
                            .'|(*:219)'
                            .'|/(?'
                                .'|e(?'
                                    .'|tude\\-sol(*:244)'
                                    .'|xcavation(*:261)'
                                    .'|levation(*:277)'
                                .')'
                                .'|vrd(*:289)'
                                .'|fondations(*:307)'
                                .'|p(?'
                                    .'|lancher(*:326)'
                                    .'|rep\\-terrain(*:346)'
                                .')'
                                .'|soubassement(*:367)'
                                .'|charpente(*:384)'
                                .'|toiture(*:399)'
                                .'|menuiseries(*:418)'
                            .')'
                        .')'
                        .'|second\\-oeuvre(?'
                            .'|(*:445)'
                            .'|/(?'
                                .'|ventilation(*:468)'
                                .'|climatisation(*:489)'
                                .'|domotique(*:506)'
                            .')'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            219 => [[['_route' => 'my-project', '_controller' => 'App\\Controller\\GrosOeuvreController::view'], ['id'], null, null, false, false, null]],
            244 => [[['_route' => 'etude-sol', '_controller' => 'App\\Controller\\GrosOeuvreController::etudeSol'], ['id'], null, null, false, false, null]],
            261 => [[['_route' => 'excavation', '_controller' => 'App\\Controller\\GrosOeuvreController::excavation'], ['id'], null, null, false, false, null]],
            277 => [[['_route' => 'elevation', '_controller' => 'App\\Controller\\GrosOeuvreController::Elevation'], ['id'], null, null, false, false, null]],
            289 => [[['_route' => 'vrd', '_controller' => 'App\\Controller\\GrosOeuvreController::vrd'], ['id'], null, null, false, false, null]],
            307 => [[['_route' => 'fondation', '_controller' => 'App\\Controller\\GrosOeuvreController::fondation'], ['id'], null, null, false, false, null]],
            326 => [[['_route' => 'plancher', '_controller' => 'App\\Controller\\GrosOeuvreController::plancher'], ['id'], null, null, false, false, null]],
            346 => [[['_route' => 'prep-terrain', '_controller' => 'App\\Controller\\GrosOeuvreController::PreparationEtAcces'], ['id'], null, null, false, false, null]],
            367 => [[['_route' => 'soubassement', '_controller' => 'App\\Controller\\GrosOeuvreController::Soubassement'], ['id'], null, null, false, false, null]],
            384 => [[['_route' => 'charpente', '_controller' => 'App\\Controller\\GrosOeuvreController::charpente'], ['id'], null, null, false, false, null]],
            399 => [[['_route' => 'toiture', '_controller' => 'App\\Controller\\GrosOeuvreController::toiture'], ['id'], null, null, false, false, null]],
            418 => [[['_route' => 'menuiserie', '_controller' => 'App\\Controller\\GrosOeuvreController::menuiserie'], ['id'], null, null, false, false, null]],
            445 => [[['_route' => 'second-oeuvre', '_controller' => 'App\\Controller\\SecondOeuvreController::view'], ['id'], null, null, false, false, null]],
            468 => [[['_route' => 'ventilation', '_controller' => 'App\\Controller\\SecondOeuvreController::ventilation'], ['id'], null, null, false, false, null]],
            489 => [[['_route' => 'climatisation', '_controller' => 'App\\Controller\\SecondOeuvreController::climatisation'], ['id'], null, null, false, false, null]],
            506 => [[['_route' => 'domotique', '_controller' => 'App\\Controller\\SecondOeuvreController::domotique'], ['id'], null, null, false, false, null]],
        ];
    }
}
