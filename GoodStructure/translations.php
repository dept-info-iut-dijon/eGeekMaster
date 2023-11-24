<?php
    /** 
     * This file contains the translations for the application.
     * It is used to display the content in the user's preferred language.
     * 
     * @var array $translations
     * @var string $language
     * @var string $preferredLanguage
     * @var array $allowedLanguages
     * @author Nicolas
     */
    $translations = [
        'en' => [
            // viewIndex.php
            'index_title' => 'Welcome to Family\'Easy',
            'index_desc'=> 'Family Easy is an application dedicated to calculating the monetary and time value of domestic and parental tasks within couples. Our goal is to highlight the unequal distribution of household and parenting work in a household.',
            'index_SomeChiffreTexte' => 'With Family\'Easy, you can track and value your daily household and parenting tasks, bringing awareness to the fairness of these responsibilities.',
            'index_Satisfied_Families' => 'Satisfied Families',
            'index_downloads' => 'Downloads',
            'index_User_Satisfaction' => 'User Satisfaction',
            'index_pixi_status' => 'Helper Agent',
            'index_pixi_button_Messages' => 'Messages',
            'index_pixi_meet_pixi' => 'Meet Pixi - Your Helper Agent',
            'index_pixi_desc' => 'Pixi is here to assist you in managing your household and parenting tasks efficiently. Ask Pixi for guidance and support to make your family life easier.',
            'index_pixi_button_LearnMore' => 'Learn More About Us',
            'index_tuto_h2' => 'Getting Started with Family\'Easy',
            'index_tuto_p' => 'Discover how to use Family\'Easy to improve your family\'s organization and reduce the workload imbalance.',
            'index_PubliGauche_h4' => 'What Our Clients Say',
            'index_slider_slider-panel_active_p' => 'Family\'Easy has transformed our family life. It\'s now easier to share responsibilities and maintain a balanced lifestyle.',
            'index_slider_imgA_h5' => 'Happy User',
            'index_slider_slider-panel_1_p' => 'We can\'t imagine managing our household without Family\'Easy. It\'s a game-changer for busy families like ours.',
            'index_slider_imgB_h5' => 'Satisfied Customer',
            'index_slider_slider-panel_2_p' => 'Thanks to Family\'Easy, our family is happier, and we have more quality time together. It\'s an essential tool for every home.',
            'index_slider_imgC_h5' => 'Grateful Parent',
            'index_slider_slider-panel_3_p' => 'Family\'Easy has made our life easier and more enjoyable. We recommend it to all families looking for balance.',
            'index_slider_imgD_h5' => 'Delighted User',
            
        ],
        'fr' => [
            // viewIndex.php
            'index_title' => 'Bienvenue sur Family\'Easy',
            'index_desc'=> 'Family Easy est une application dédiée au calcul de la valeur monétaire et temporelle des tâches domestiques et parentales au sein des couples. Notre objectif est de mettre en lumière la répartition inégale du travail ménager et parental au sein d\'un foyer.',
            'index_SomeChiffreTexte' => 'Avec Family\'Easy, vous pouvez suivre et évaluer vos tâches quotidiennes liées au foyer et à la parentalité, en mettant en lumière l\'équité de ces responsabilités.',
            'index_Satisfied_Families' => 'Familles satisfaites',
            'index_downloads' => 'Téléchargements',
            'index_User_Satisfaction' => 'Satisfaction des utilisateurs',
            'index_pixi_status' => 'Agent Assistant',
            'index_pixi_button_Messages' => 'Messages',
            'index_pixi_meet_pixi' => 'Rencontrez Pixi - Votre Agent Assistant',
            'index_pixi_desc' => 'Pixi est là pour vous aider à gérer efficacement vos tâches ménagères et parentales. Demandez à Pixi des conseils et du soutien pour faciliter votre vie familiale.',
            'index_pixi_button_LearnMore' => 'En savoir plus sur nous',
            'index_tuto_h2' => 'Bien commencer avec Family\'Easy',
            'index_tuto_p' => 'Découvrez comment utiliser Family\'Easy pour améliorer l\'organisation de votre famille et réduire le déséquilibre des charges de travail.',
            'index_PubliGauche_h4' => 'Ce que disent nos clients',
            'index_slider_slider-panel_active_p' => 'Family\'Easy a transformé notre vie familiale. Il est désormais plus facile de partager les responsabilités et de maintenir un équilibre de vie.',
            'index_slider_imgA_h5' => 'Utilisateur satisfait',
            'index_slider_slider-panel_1_p' => 'Nous ne pouvons pas imaginer gérer notre foyer sans Family\'Easy. C\'est un changement de jeu pour les familles occupées comme la nôtre.',
            'index_slider_imgB_h5' => 'Client satisfait',
            'index_slider_slider-panel_2_p' => 'Grâce à Family\'Easy, notre famille est plus heureuse, et nous avons plus de temps de qualité ensemble. C\'est un outil essentiel pour chaque foyer.',
            'index_slider_imgC_h5' => 'Parent reconnaissant',
            'index_slider_slider-panel_3_p' => 'Family\'Easy a rendu notre vie plus facile et plus agréable. Nous le recommandons à toutes les familles en quête d\'équilibre.',
            'index_slider_imgD_h5' => 'Utilisateur ravi',
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
