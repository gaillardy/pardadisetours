<?php


require __DIR__ . '/../autoload.php';

use App\Helpers\Language;
use App\Controllers\Router;
session_start();

$router = new Router();

$router->add('/', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\HomeController();
    $controller->index($lang);
});

$router->add('/{lang}/sendnews', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\NewsletterController();
    $controller->sendnews($lang);
});

$router->add('/{lang}/news', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\NewsletterController();
    $controller->newsForm($lang);
});

$router->add('/{lang}/subscribe', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\NewsletterController();
    $controller->subscribe($lang);
});

$router->add('/{lang}/newsletter', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\NewsletterController();
    $controller->showForm($lang);
});


$router->add('/{lang}/home', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\HomeController();
    $controller->index($lang);
});




$router->add('/{lang}/contact', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\ContactController();
    $controller->showForm($lang);
});

$router->add('/{lang}/sub', function ($params) {
    $validLanguages = ['en', 'fr', 'es']; // Langues prises en charge

    $lang = $params['lang']; // Récupérer la langue
    if (!in_array($lang, $validLanguages)) {
        http_response_code(404);
        echo "Language not supported!";
        return;
    }

    // Appeler le HomeController avec la langue
    $controller = new \App\Controllers\ContactController();
    $controller->sendEmail();
});

if (!preg_match('#^/[a-z]{2}/#', $_SERVER['REQUEST_URI'])) {
    header("Location: /en/home");
    exit;
}

// Continuer avec le routeur ou le contrôleur
$router->dispatch();

// $router->handle($_SERVER['REQUEST_URI']);
