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
            
            // gabarit.php
            'gabarit_button_home' => 'Home',
            'gabarit_button_update' => 'Update my account',
            'gabarit_button_disconnect' => 'Disconnect',
            'gabarit_button_dashboard' => 'Dashboard',
            'gabarit_button_reference' => 'Reference',
            'gabarit_button_login' => 'Login',
            'gabarit_button_register' => 'Register',
            'gabarit_button_followUp' => 'Follow up',
            'gabarit_shortcuts' => 'Shortcuts',
            'gabarit_services' => 'Services',
            'gabarit_legalNotice' => 'Legal Notices',
            'gabarit_followUs' => 'Follow us !',
            'gabarit_privacyPolicy' => 'Privacy Policy',
            'gabarit_termsConditions' => 'Terms & Conditions',
            'gabarit_legalMention' => 'Legal Mentions',
            'gabarit_cookiePolicy' => 'Cookie Policy',
            'gabarit_companion_index' => 'You\'re on the Homepage. Explore information about the website, its usage, and read customer reviews here.', 
            'gabarit_companion_connectLogin' => 'You have just logged into your account. Welcome or welcome back among us.',
            'gabarit_companion_infoDashBoard1' => 'It seems you haven\'t recorded any tasks in a week or more. Consider updating your task log to stay organized.',
            'gabarit_companion_infoDashBoard2' => 'You\'ve accomplished quite a few tasks this week. Great job!',
            'gabarit_companion_infoDashBoard3' => 'It seems like you haven\'t completed enough tasks this week. Consider taking on a few more to stay on track.',
            'gabarit_companion_infoDashBoard4' => 'It looks like you\'ve completed a decent number of tasks this week. Keep it up!',
            'gabarit_companion_infoDashBoard5' => 'You\'re on the dashboard page. Here, you can view information about tasks completed in the last week.',
            'gabarit_companion_reference' => 'You\'re on the Reference page. Here, you can check the value reference for each possible task.',
            'gabarit_companion_registration' => 'You\'re on the \'Update My Account\' page. Here, you can modify the information associated with your account.',
            'gabarit_companion_taskRegistration' => 'You\'ve just added a completed task to the dashboard.',
            'gabarit_companion_taskSuppression1'=> 'Unable to delete tasks as there are currently none recorded.',
            'gabarit_companion_taskSuppression2'=> 'You\'ve just removed the last added task.',
            'gabarit_companion_taskModification1'=> 'Unable to modify tasks as there are currently none recorded.',
            'gabarit_companion_taskModification2'=> 'You\'ve just modified the last added task.',
            'gabarit_companion_unknownAction'=> 'Unknown action',
            'gabarit_companion_else_index'=> 'Welcome to Family\'Easy, your new tool for household task management. You\'re on the homepage. Explore information about the website, its usage, and read customer reviews here.',
            'gabarit_companion_else_connection'=>  'You\'re on the Login page. Sign in here to access your account.',
            'gabarit_companion_else_registration'=> 'You\'re on the Registration page. Create your account here to get started.',


            // viewConnection.php
            'connection_title' => 'LOG IN',
            'connection_desc' => 'Log in to your account to access your workspace',
            'connection_login_label' => 'Login',
            'connection_password_label' => 'Password',
            'connection_submit' => 'Log in',
            'connection_noAccount' => 'Don\'t have an account ?',
            'connection_createAccount' => 'Create one here',


            // viewDashboard.php
            'dashboard_title' => 'CREATE A TASK',
            'dashboard_task_label' => 'Task :',
            'dashboard_lifetime_label' => 'Lifetime :',
            'dashboard_button_cancel' => 'cancel',
            'dashboard_button_register' => 'register',
            'dashboard_button_add' => 'Register a new task',
            'dashboard_button_delete' => 'Delete last task',
            'dashboard_button_modify' => 'Modify last task',
            'dashboard_piechart_title' => 'Tasks distribution',
            'dashboard_barchart_title' => 'Average duration for each task',

            // viewRegistration.php
            'registration_title' => 'Create a new account',
            'registration_desc' => 'It\'s easy and fast',
            'registration_lastname_label' => 'Lastname',
            'registration_firstname_label' => 'Firstname',
            'registration_email_label' => 'Email',
            'registration_username_label' => 'Username',
            'registration_password_label' => 'Password',
            'registration_birthdate_label' => 'Birthdate',
            'registration_gender_label' => 'Gender',
            'registration_gender_woman' => 'Woman',
            'registration_gender_man' => 'Man',
            'registation_gender_other' => 'Other',
            'registration_placeFamily_desc'=> 'What\'s your place in your family ?',
            'registration_placeFamily_option' => 'Select your place',
            'registration_placeFamily_parent' => 'Parent',
            'registration_placeFamily_child' => 'Child',
            'registration_placeFamily_grandparent' => 'Grandparent',
            'registration_placeFamily_grandchild' => 'Grand child',
            'registration_placeFamily_uncle' => 'Uncle/Aunt',
            'registration_placeFamily_cousin' => 'Cousin',
            'registration_placeFamily_nephew' => 'Nephew/Niece',
            'registration_placeFamily_stepchild' => 'Stepchild',
            'registration_placeFamily_inlaw' => 'In-law',
            'registration_placeFamily_stepparent' => 'Step-parent',
            'registration_placeFamily_halfSibling' => 'Half-sibling',
            'registration_placeFamily_otherPlace' => 'OtherPlace',	
            'registration_conditions' => 'By clicking “Sign up”, you agree to our terms of service and acknowledge that you have read and understand our ',
            'registration_privacyPolicy' => 'privacy policy',
            'registration_and'=> 'and',
            'registration_codeOfConduct' => 'code of conduct',
            'registration_submit' => 'Sign up',
            'registration_haveAccount' => 'Already have an account',
            'registration_month_jan' => 'Janvier',
            'registration_month_feb' => 'February',
            'registration_month_mar' => 'March',
            'registration_month_apr' => 'April',
            'registration_month_may' => 'May',
            'registration_month_jun' => 'June',
            'registration_month_jul' => 'July',
            'registration_month_aug' => 'August',
            'registration_month_sep' => 'September',
            'registration_month_oct' => 'October',
            'registration_month_nov' => 'November',
            'registration_month_dec' => 'December',

            // viewPrivacyPolicy.php
            'privacyPolicy_title' => 'Privacy Policy for Family\'Easy',
            'privacyPolicy_1_title'=> '1. Information Collection',
            'privacyPolicy_1.1_title'=> '1.1 Information We Collect',
            'privacyPolicy_1.1__desc1'=> 'When you use our website, we may collect the following types of information:',
            'privacyPolicy_1.1_desc2'=> 'Personal Information: Name, email address, phone number, etc., when you create an account on Family\'Easy.
            Household Tasks Information: Details of tasks you add or manage on the platform.',
            'privacyPolicy_1.2_title'=> '1.2 Automated Collection',
            'privacyPolicy_1.2_desc'=> 'We may also automatically collect certain information about your use of our site, including your IP address, browser type, pages you visit, and access times.',
            'privacyPolicy_2_title'=> '2. Use of Information',
            'privacyPolicy_2.1_title'=> '2.1 Use of Personal Information',
            'privacyPolicy_2.1_desc1'=> 'We use the personal information you provide to us to:',
            'privacyPolicy_2.1_desc2'=> 'Create and manage your account on Family\'Easy. Facilitate the management of household tasks within your home. Send you notifications related to tasks and activities on the platform.',
            'privacyPolicy_2.2_title'=> '2.2 Use of Automatically Collected Information',
            'privacyPolicy_2.2_desc'=> 'Automatically collected information is used to analyze and improve the user experience on our site, as well as for internal analytics related to site performance.',
            'privacyPolicy_3_title'=> '3. Information Sharing',
            'privacyPolicy_3_desc1'=> 'We do not share your personal information with third parties, except under the following circumstances:',
            'privacyPolicy_3_desc2'=> 'With Your Consent: If you expressly consent to the sharing of information. Service Providers: We may share your information with third-party service providers who assist us in providing and improving our services.',
            'privacyPolicy_4_title'=> '4. Security',
            'privacyPolicy_4_desc'=> 'We take appropriate security measures to protect your information from unauthorized access or alteration, disclosure, or destruction.',
            'privacyPolicy_5_title'=> '5. Cookies',
            'privacyPolicy_5_desc'=> 'We use cookies to enhance your experience on our site. By using our site, you consent to the use of cookies in accordance with our',
            'privacyPolicy_5_link'=> 'Cookie Policy',
            'privacyPolicy_6_title'=> '6. Changes to the Privacy Policy',
            'privacyPolicy_6_desc'=> 'We reserve the right to modify this privacy policy at any time. Changes will take effect upon posting to this page.',
            'privacyPolicy_7_title'=> '7. Contact Us',
            'privacyPolicy_7_desc'=> 'If you have any questions or concerns about our privacy policy, please contact us at [email address].',
        
            // viewTermsConditions.php
            'termsConditions_title'=> 'Terms & Conditions',
            'termsConditions_desc'=> 'These Terms of Service ("Terms") govern your use of our website, Family\'Easy, and the services provided by Family\'Easy (collectively referred to as the "Service"). By accessing or using our Service, you agree to be bound by these Terms.',
            'termsConditions_1_title'=> '1. Use of the Service',
            'termsConditions_1.1_title'=> '1.1 Eligibility',
            'termsConditions_1.1_desc'=> 'You must be at least 13 years old to use our Service. By using the Service, you represent and warrant that you are at least 13 years old.',
            'termsConditions_1.2_title'=> '1.2 Your Account',
            'termsConditions_1.2_desc'=> 'To access certain features of the Service, you may be required to create an account. You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account.',
            'termsConditions_1.3_title'=> '1.3 User Conduct',
            'termsConditions_1.3_desc1'=> 'You agree to use the Service in accordance with all applicable laws and regulations. You further agree not to:',
            'termsConditions_1.3_desc2'=> 'Violate these Terms or any other applicable rules or policies. Use the Service for any illegal or unauthorized purpose. Post or transmit any content that is offensive, harmful, or violates the rights of others.',
            'termsConditions_2_title'=> '2. Privacy',
            'termsConditions_2_desc1'=> 'Your use of the Service is also governed by our Privacy Policy, which can be found at',
            'termsConditions_2_link'=> 'Privacy Policy',
            'termsConditions_2_desc2'=> '. Please review our Privacy Policy to understand how we collect, use, and disclose information.',
            'termsConditions_3_title'=> '3. Intellectual Property',
            'termsConditions_3.1_title' => '3.1 Ownership',
            'termsConditions_3.1_desc' => 'All content and materials available on the Service, including but not limited to text, graphics, logos, and images, are the property of [Your Company Name] or its licensors and are protected by intellectual property laws.',
            'termsConditions_3.2_title' => '3.2 Restrictions',
            'termsConditions_3.2_desc' => 'You may not copy, reproduce, modify, distribute, or display any part of the Service without our prior written consent.',
            'termsConditions_4_title' => '4. Termination',
            'termsConditions_4_desc' => 'We reserve the right to terminate or suspend your account and access to the Service at our sole discretion, without notice, for conduct that we believe violates these Terms or is harmful to other users of the Service or to us.',
            'termsConditions_5_title'=> '5. Disclaimer of Warranty',
            'termsConditions_5_desc'=> 'The Service is provided "as is" and "as available" without any warranties, either expressed or implied, including but not limited to the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.',
            'termsConditions_6_title'=> '6. Limitation of Liability',
            'termsConditions_6_desc'=> 'In no event shall Family\'Easy be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly.',
            'termsConditions_7_title'=> '7. Changes to Terms',
            'termsConditions_7_desc'=> 'We reserve the right to modify these Terms at any time. Any changes will be effective immediately upon posting on this page.',
            'termsConditions_8_title'=> '8. Contact Us',
            'termsConditions_8_desc'=> 'If you have any questions about these Terms, please contact us at [email address].',

            // viewReference.php
            'reference_searchbox_cleaning'=> 'Cleaning',
            'reference_searchbox_shopping'=> 'Shopping',
            'reference_searchbox_cooking'=> 'Cooking',
            'reference_searchbox_dishes'=> 'Dishes',
            'reference_searchbox_laundry'=> 'Laundry',
            'reference_searchbox_childsPlay' => 'Child\'s play',
            'reference_searchbox_parentJourney' => 'Parent\'s journey',
            'reference_searchbox_parentCare' => 'Parent\'s care',
            'reference_searchbox_administrative' => 'Administrative',
            'reference_searchbox_petCare'=> 'Pet care',
            'reference_searchbox_gardening'=> 'Gardening',
            'reference_searchbox_diy'=> 'DIY',
            'reference_searchbox_householdManagement'=> 'Household management',

            // viewFollowUp.php
            'followUp_button_suiviD'=> 'Detailed tracking',
            'followUp_button_suiviG'=> 'Overall tracking',
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

            // gabarit.php
            'gabarit_button_home' => 'Accueil',
            'gabarit_button_update' => 'Mettre à jour mon compte',
            'gabarit_button_disconnect' => 'Déconnexion',
            'gabarit_button_dashboard' => 'Tableau de bord',
            'gabarit_button_reference' => 'Référence',
            'gabarit_button_login' => 'Connexion',
            'gabarit_button_register' => 'Inscription',
            'gabarit_button_followUp' => 'Suivi',
            'gabarit_shortcuts' => 'Raccourcis',
            'gabarit_services' => 'Services',
            'gabarit_legalNotice' => 'Mentions Juridiques',
            'gabarit_followUs' => 'Suivez-nous !',
            'gabarit_privacyPolicy' => 'Politique de confidentialité',
            'gabarit_termsConditions' => 'Conditions générales',
            'gabarit_legalMention' => 'Mentions légales',
            'gabarit_cookiePolicy' => 'Politique de cookies',
            'gabarit_companion_index' => 'Vous êtes sur la page d\'accueil. Explorez les informations sur le site, son utilisation et lisez les avis des clients ici.',
            'gabarit_companion_connectLogin' => 'Vous venez de vous connecter à votre compte. Bienvenue ou bienvenue parmi nous.',
            'gabarit_companion_infoDashBoard1' => 'Il semble que vous n\'ayez pas enregistré de tâches depuis une semaine ou plus. Pensez à mettre à jour votre journal de tâches pour rester organisé.',
            'gabarit_companion_infoDashBoard2' => 'Vous avez accompli un certain nombre de tâches cette semaine. Excellent travail !',
            'gabarit_companion_infoDashBoard3' => 'Il semble que vous n\'ayez pas terminé suffisamment de tâches cette semaine. Pensez à en prendre quelques-unes de plus pour rester sur la bonne voie.',
            'gabarit_companion_infoDashBoard4' => 'Il semble que vous ayez terminé un nombre décent de tâches cette semaine. Continuez comme ça !',
            'gabarit_companion_infoDashBoard5' => 'Vous êtes sur la page du tableau de bord. Ici, vous pouvez consulter des informations sur les tâches effectuées au cours de la dernière semaine.',
            'gabarit_companion_reference' => 'Vous êtes sur la page Référence. Ici, vous pouvez vérifier la référence de valeur pour chaque tâche possible.',
            'gabarit_companion_registration' => 'Vous êtes sur la page \'Mettre à jour mon compte\'. Ici, vous pouvez modifier les informations associées à votre compte.',
            'gabarit_companion_taskRegistration' => 'Vous venez d\'ajouter une tâche terminée au tableau de bord.',
            'gabarit_companion_taskSuppression1'=> 'Impossible de supprimer les tâches car il n\'y en a actuellement aucune enregistrée.',
            'gabarit_companion_taskSuppression2'=> 'Vous venez de supprimer la dernière tâche ajoutée.',
            'gabarit_companion_taskModification1'=> 'Impossible de modifier les tâches car il n\'y en a actuellement aucune enregistrée.',
            'gabarit_companion_taskModification2'=> 'Vous venez de modifier la dernière tâche ajoutée.',
            'gabarit_companion_unknownAction'=> 'Action inconnue',
            'gabarit_companion_else_index'=> 'Bienvenue sur Family\'Easy, votre nouvel outil de gestion des tâches ménagères. Vous êtes sur la page d\'accueil. Explorez les informations sur le site, son utilisation et lisez les avis des clients ici.',
            'gabarit_companion_else_connection'=>  'Vous êtes sur la page de connexion. Connectez-vous ici pour accéder à votre compte.',
            'gabarit_companion_else_registration'=> 'Vous êtes sur la page d\'inscription. Créez votre compte ici pour commencer.',
            
            
            // viewConnection.php
            'connection_title' => 'CONNEXION',
            'connection_desc' => 'Connectez-vous à votre compte pour accéder à votre espace de travail',
            'connection_login_label' => 'Identifiant',
            'connection_password_label' => 'Mot de passe',
            'connection_submit' => 'Connexion',
            'connection_noAccount' => 'Vous n\'avez pas de compte ?',
            'connection_createAccount' => 'Créez-en un ici',

            // viewDashboard.php
            'dashboard_title' => 'CRÉER UNE TÂCHE',
            'dashboard_task_label' => 'Tâche :',
            'dashboard_lifetime_label' => 'Durée :',
            'dashboard_button_cancel' => 'annuler',
            'dashboard_button_register' => 'enregistrer',
            'dashboard_button_add' => 'Enregistrer une nouvelle tâche',
            'dashboard_button_delete' => 'Supprimer la dernière tâche',
            'dashboard_button_modify' => 'Modifier la dernière tâche',
            'dashboard_piechart_title' => 'Distribution des tâches',
            'dashboard_barchart_title' => 'Durée moyenne pour chaque tâche',

            // viewRegistration.php
            'registration_title' => 'Créer un nouveau compte',
            'registration_desc' => 'C\'est facile et rapide',
            'registration_lastname_label' => 'Nom',
            'registration_firstname_label' => 'Prénom',
            'registration_email_label' => 'Email',
            'registration_username_label' => 'Identifiant',
            'registration_password_label' => 'Mot de passe',
            'registration_birthdate_label' => 'Date de naissance',
            'registration_gender_label' => 'Genre',
            'registration_gender_woman' => 'Femme',
            'registration_gender_man' => 'Homme',
            'registration_gender_other' => 'Autre',
            'registration_placeFamily_desc'=> 'Quelle est votre place dans votre famille ?',
            'registration_placeFamily_option' => 'Sélectionnez votre place dans la famille',
            'registration_placeFamily_parent' => 'Parent',
            'registration_placeFamily_child' => 'Enfant',
            'registration_placeFamily_grandparent' => 'Grand-parent',
            'registration_placeFamily_grandchild' => 'Petit-enfant',
            'registration_placeFamily_uncle' => 'Oncle/Tante',
            'registration_placeFamily_cousin' => 'Cousin',
            'registration_placeFamily_nephew' => 'Neveu/Nièce',
            'registration_placeFamily_stepchild' => 'Beau-fils/Belle-fille',
            'registration_placeFamily_inlaw' => 'Par alliance',
            'registration_placeFamily_stepparent' => 'Beau-parent',
            'registration_placeFamily_halfSibling' => 'Demi-frère/Demi-soeur',
            'registration_placeFamily_otherPlace' => 'Autre',
            'registration_conditions' => 'En cliquant sur “S\'inscrire”, vous acceptez nos conditions d\'utilisation et reconnaissez avoir lu et compris notre ',
            'registration_privacyPolicy' => 'politique de confidentialité',
            'registration_and'=> 'et',
            'registration_codeOfConduct' => 'code de conduite',
            'registration_submit' => 'S\'inscrire',
            'registration_haveAccount' => 'Vous avez déjà un compte',
            'registration_month_jan' => 'Janvier',
            'registration_month_feb' => 'Février',
            'registration_month_mar' => 'Mars',
            'registration_month_apr' => 'Avril',
            'registration_month_may' => 'Mai',
            'registration_month_jun' => 'Juin',
            'registration_month_jul' => 'Juillet',
            'registration_month_aug' => 'Août',
            'registration_month_sep' => 'Septembre',
            'registration_month_oct' => 'Octobre',
            'registration_month_nov' => 'Novembre',
            'registration_month_dec' => 'Décembre',

            // viewPrivacyPolicy.php
            'privacyPolicy_title' => 'Politique de confidentialité pour Family\'Easy',
            'privacyPolicy_1_title'=> '1. Collecte d\'informations',
            'privacyPolicy_1.1_title'=> '1.1 Informations que nous collectons',
            'privacyPolicy_1.1__desc1'=> 'Lorsque vous utilisez notre site Web, nous pouvons collecter les types d\'informations suivants :',
            'privacyPolicy_1.1_desc2'=> 'Informations personnelles : Nom, adresse e-mail, numéro de téléphone, etc., lorsque vous créez un compte sur Family\'Easy.
            Informations sur les tâches ménagères : Détails des tâches que vous ajoutez ou gérez sur la plateforme.',
            'privacyPolicy_1.2_title'=> '1.2 Collecte automatisée',
            'privacyPolicy_1.2_desc'=> 'Nous pouvons également collecter automatiquement certaines informations sur votre utilisation de notre site, y compris votre adresse IP, le type de navigateur, les pages que vous visitez et les heures d\'accès.',
            'privacyPolicy_2_title'=> '2. Utilisation des informations',
            'privacyPolicy_2.1_title'=> '2.1 Utilisation des informations personnelles',
            'privacyPolicy_2.1_desc1'=> 'Nous utilisons les informations personnelles que vous nous fournissez pour :',
            'privacyPolicy_2.1_desc2'=> 'Créer et gérer votre compte sur Family\'Easy. Faciliter la gestion des tâches ménagères au sein de votre foyer. Vous envoyer des notifications liées aux tâches et aux activités sur la plateforme.',
            'privacyPolicy_2.2_title'=> '2.2 Utilisation des informations collectées automatiquement',
            'privacyPolicy_2.2_desc'=> 'Les informations collectées automatiquement sont utilisées pour analyser et améliorer l\'expérience utilisateur sur notre site, ainsi que pour les analyses internes liées aux performances du site.',
            'privacyPolicy_3_title'=> '3. Partage d\'informations',
            'privacyPolicy_3_desc1'=> 'Nous ne partageons pas vos informations personnelles avec des tiers, sauf dans les circonstances suivantes :',
            'privacyPolicy_3_desc2'=> 'Avec votre consentement : Si vous consentez expressément au partage d\'informations. Prestataires de services : Nous pouvons partager vos informations avec des prestataires de services tiers qui nous aident à fournir et à améliorer nos services.',
            'privacyPolicy_4_title'=> '4. Sécurité',
            'privacyPolicy_4_desc'=> 'Nous prenons des mesures de sécurité appropriées pour protéger vos informations contre tout accès ou altération, divulgation ou destruction non autorisés.',
            'privacyPolicy_5_title'=> '5. Cookies',
            'privacyPolicy_5_desc'=> 'Nous utilisons des cookies pour améliorer votre expérience sur notre site. En utilisant notre site, vous consentez à l\'utilisation de cookies conformément à notre',
            'privacyPolicy_5_link'=> 'Politique de cookies',
            'privacyPolicy_6_title'=> '6. Modifications de la politique de confidentialité',
            'privacyPolicy_6_desc'=> 'Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment. Les modifications entreront en vigueur dès leur publication sur cette page.',
            'privacyPolicy_7_title'=> '7. Contactez-nous',
            'privacyPolicy_7_desc'=> 'Si vous avez des questions ou des préoccupations concernant notre politique de confidentialité, veuillez nous contacter à l\'adresse [email].',
            
            // viewTermsConditions.php
            'termsConditions_title'=> 'Conditions générales',
            'termsConditions_desc'=> 'Ces conditions générales d\'utilisation ("Conditions") régissent votre utilisation de notre site Web, Family\'Easy, et des services fournis par Family\'Easy (collectivement dénommés le "Service"). En accédant ou en utilisant notre Service, vous acceptez d\'être lié par ces Conditions.',
            'termsConditions_1_title'=> '1. Utilisation du service',
            'termsConditions_1.1_title'=> '1.1 Éligibilité',
            'termsConditions_1.1_desc'=> 'Vous devez avoir au moins 13 ans pour utiliser notre Service. En utilisant le Service, vous déclarez et garantissez que vous avez au moins 13 ans.',
            'termsConditions_1.2_title'=> '1.2 Votre compte',
            'termsConditions_1.2_desc'=> 'Pour accéder à certaines fonctionnalités du Service, vous devrez peut-être créer un compte. Vous êtes responsable du maintien de la confidentialité de vos informations de compte et de toutes les activités qui se produisent sous votre compte.',
            'termsConditions_1.3_title'=> '1.3 Conduite de l\'utilisateur',
            'termsConditions_1.3_desc1'=> 'Vous acceptez d\'utiliser le Service conformément à toutes les lois et réglementations applicables. Vous acceptez en outre de ne pas :',
            'termsConditions_1.3_desc2'=> 'Violent ces conditions ou toute autre règle ou politique applicable. Utilisez le Service à des fins illégales ou non autorisées. Publier ou transmettre tout contenu offensant, nuisible ou qui viole les droits des autres.',
            'termsConditions_2_title'=> '2. Confidentialité',
            'termsConditions_2_desc1'=> 'Votre utilisation du Service est également régie par notre Politique de confidentialité, qui peut être consultée à l\'adresse',
            'termsConditions_2_link'=> 'Politique de confidentialité',
            'termsConditions_2_desc2'=> '. Veuillez consulter notre Politique de confidentialité pour comprendre comment nous collectons, utilisons et divulguons les informations.',
            'termsConditions_3_title'=> '3. Propriété intellectuelle',
            'termsConditions_3.1_title' => '3.1 Propriété',
            'termsConditions_3.1_desc' => 'Tous les contenus et matériaux disponibles sur le Service, y compris, mais sans s\'y limiter, le texte, les graphiques, les logos et les images, sont la propriété de [Nom de votre entreprise] ou de ses concédants de licence et sont protégés par les lois sur la propriété intellectuelle.',
            'termsConditions_3.2_title' => '3.2 Restrictions',
            'termsConditions_3.2_desc' => 'Vous ne pouvez pas copier, reproduire, modifier, distribuer ou afficher une partie du Service sans notre consentement écrit préalable.',
            'termsConditions_4_title' => '4. Résiliation',
            'termsConditions_4_desc' => 'Nous nous réservons le droit de résilier ou de suspendre votre compte et l\'accès au Service à notre seule discrétion, sans préavis, pour un comportement que nous estimons en violation de ces Conditions ou qui est préjudiciable aux autres utilisateurs du Service ou à nous-mêmes.',
            'termsConditions_5_title'=> '5. Exonération de responsabilité',
            'termsConditions_5_desc'=> 'Le Service est fourni "tel quel" et "tel que disponible" sans aucune garantie, expresse ou implicite, y compris, mais sans s\'y limiter, les garanties implicites de qualité marchande, d\'adéquation à un usage particulier ou de non-contrefaçon.',
            'termsConditions_6_title'=> '6. Limitation de responsabilité',
            'termsConditions_6_desc'=> 'En aucun cas Family\'Easy ne pourra être tenu responsable de tout dommage indirect, accessoire, spécial, consécutif ou punitif, ou de toute perte de profits ou de revenus, qu\'il soit encouru directement ou indirectement.',
            'termsConditions_7_title'=> '7. Modifications des conditions',
            'termsConditions_7_desc'=> 'Nous nous réservons le droit de modifier ces conditions à tout moment. Toute modification entrera en vigueur immédiatement après sa publication sur cette page.',
            'termsConditions_8_title'=> '8. Contactez-nous',
            'termsConditions_8_desc'=> 'Si vous avez des questions sur ces conditions, veuillez nous contacter à l\'adresse [email].',
            
            // viewReference.php
            'reference_searchbox_cleaning'=> 'Nettoyage',
            'reference_searchbox_shopping'=> 'Shopping',
            'reference_searchbox_cooking'=> 'Cuisine',
            'reference_searchbox_dishes'=> 'Vaisselle',
            'reference_searchbox_laundry'=> 'Lessive',
            'reference_searchbox_childsPlay' => 'Jeu d\'enfant',
            'reference_searchbox_parentJourney' => 'Parcours parent',
            'reference_searchbox_parentCare' => 'Soins parentaux',
            'reference_searchbox_administrative' => 'Administratif',
            'reference_searchbox_petCare'=> 'Soins aux animaux',
            'reference_searchbox_gardening'=> 'Jardinage',
            'reference_searchbox_diy'=> 'Bricolage',
            'reference_searchbox_householdManagement'=> 'Gestion du ménage',
            
            // viewFollowUp.php
            'followUp_button_suiviD'=> 'Suivi détaillé',
            'followUp_button_suiviG'=> 'Suivi global',
            
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
