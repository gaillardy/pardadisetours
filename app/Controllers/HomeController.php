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

        View::render('home', [
            'title' => $title,
            'lang' => $lang,
            'translations' => $translations,
            'currentRoute' => $currentRoute,
        ]);
    }
}
