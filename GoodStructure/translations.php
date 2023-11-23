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
    
?>