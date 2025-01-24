<?php

namespace App\Controllers;

use App\Helpers\Language;
use App\Core\View;

class HomeController
{
    
    public function index($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Accueil';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        View::render('home', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
        ]);
    }

    public function w_iranja($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'Nosy Iranja';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $flashMessages = FlashController::getFlashMessages();

        $metaDescription = "Week-End à Nosy Iranja";
        $metaKeywords = "Week-End à Nosy Iranja";

        View::render('w_iranja', [
            'flashMessages' => $flashMessages,
            'title'         => $title,
            'lang'          => $lang,
            'translations'  => $translations,
            'currentRoute'  => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
        ]);
    }

    public function notfound($lang)
    {

        $title = '404 - not found';
        $translations = Language::getTranslations($lang);


        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];

        View::render('404', [
            'title'         => $title,
            'currentRoute'  => $currentRoute,
            'lang'         => $lang,
            'translations' => $translations,

        ]);
    }

    public function about($lang)
    {
        $translations = Language::getTranslations($lang);

        $title = 'A propos';

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "A propos Nosy be Paradise Tour";
        $metaKeywords = "A propos Nosy be Paradise Tour";

        View::render('about', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title,
        ]);
    }

    

    public function guide($lang)
    {
        // Charger les traductions pour la langue donnée
        $translations = Language::getTranslations($lang);

        // Obtenir la route actuelle
        $currentRoute = $_SERVER['REQUEST_URI'];
        $metaDescription = "Voyager peut-être excitant et stressant à la foi, 
        surtout lorsqu’il s’agit d’une nouvelle destination. 
        Cependant, Il est toujours plus prudent  de savoir où on va.";
        $metaKeywords = "Nosy be, guide";
        $title = "Guide";

        // Rendre la vue `home.php` avec les données nécessaires
        View::render('guide', [
            'lang'         => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
            'metaDescription' => $metaDescription,
            'metaKeywords'    => $metaKeywords,
            'title' => $title,
        ]);
    }
}
