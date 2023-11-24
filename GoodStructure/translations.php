<?php
    $translations = [
        'en' => [
            'index_title' => 'Welcome to Family Easy',
            'index_desc'=> 'Family Easy is an application dedicated to calculating the monetary and time value of domestic and parental tasks within couples. Our goal is to highlight the unequal distribution of household and parenting work in a household.',
        ],
        'fr' => [
            'index_title' => 'Bienvenue sur Family Easy',
            'index_desc'=> 'Family Easy est une application dédiée au calcul de la valeur monétaire et temporelle des tâches domestiques et parentales au sein des couples. Notre objectif est de mettre en lumière la répartition inégale du travail ménager et parental au sein d un foyer.',
        ],
    ];
    $preferredLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $allowedLanguages = ['en', 'fr'];
    if (in_array($preferredLanguage, $allowedLanguages)) {
        $language = $preferredLanguage;
    } else {
        $language = 'en';
    }
    
    
    /**<?= $translations[$language]['home_title']?> */
    /**<?php require_once 'translations.php' ?>*/
?>

