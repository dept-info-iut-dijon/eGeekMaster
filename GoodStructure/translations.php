<?php
    $translations = [
        'en' => [
            'welcome' => 'Welcome to Family Easy',
        ],
        'fr' => [
            'welcome' => 'Bienvenue sur Family Easy',
        ],
    ];
    $preferredLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $allowedLanguages = ['en', 'fr'];
    if (in_array($preferredLanguage, $allowedLanguages)) {
        $language = $preferredLanguage;
    } else {
        $language = 'en';
    }
    
    
    /**<?= $translations[$language]['welcome']?> */
    /**<?php require_once 'translations.php' ?>*/
?>

