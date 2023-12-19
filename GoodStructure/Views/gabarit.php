<!-- author : Théo Cornu -->
<?php require 'translations.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="Public/css/header3.css"/>
    <link rel="stylesheet" href="Public/css/footer1.css"/>
    <link rel="stylesheet" href="Public/css/erreur.css"/>
    <link rel="stylesheet" href="Public/css/companion2.css"/>
    <link rel="stylesheet" href="Public/css/mentionLegal.css"/>
    <script src="Public/Animation_js/header.js"></script>
    <script src="Public/Animation_js/companion1.js"></script>
    <script src="Public/Animation_js/scrollTop.js"></script>
</head>

<body>
<!-- header et bars -->
<header>
        <div>
            <img class="icon" id="bars" src="Public/image/header/bars-staggered-solid.svg" alt="">
        </div>
        
        <a class="lien-header" href="index.php?action=Index" >
            
            <div class="icon" id="logoH" ></div>
        
        </a>
        <a class="lien-header" href="">
            <div class="icon" id="search"></div>
        </a>
        
        <?php if (isset($_SESSION['IdLogin']) && (($_SESSION["IdMyHome"]) == null))  : ?>
            <a class="lien-header" href="index.php?action=MyHome" > 
                <div class="icon" id="user"></div>
            </a>
        <?php elseif(!isset($_SESSION['IdLogin'])) : ?>
            <a class="lien-header" href="index.php?action=Connection" > 
                <div class="icon" id="user"></div>
            </a>
        <?php endif; ?>
</header>

<!-- Parti menu déroulant + Flou -->
<div id="menu">
    <ul>
        <?php if (isset($_SESSION['IdLogin'])) : ?>
            <li><a class="lien-header" href="index.php?action=Index" ><?= $translations[$language]['gabarit_button_home']?></a></li>
            <li><a class="lien-header" href="index.php?action=Registration&IdLogin=<?=$_SESSION['IdLogin']?>"  ><?= $translations[$language]['gabarit_button_update']?></a></li>
            <li><a class="lien-header" href="index.php?action=Disconnect"  ><?= $translations[$language]['gabarit_button_disconnect']?></a></li>
            <li><a class="lien-header" href="index.php?action=InfoDashBoard"><?= $translations[$language]['gabarit_button_reference']?></a></li>
            <li><a class="lien-header" href="index.php?action=Reference"><?= $translations[$language]['gabarit_button_login']?></a></li>
            <li><a class="lien-header" href="index.php?action=InfoFollowUp">Follow up</a></li>
        <?php else : ?>
            <li><a class="lien-header" href="index.php?action=Connection"  ><?= $translations[$language]['gabarit_button_login']?></a></li> 
            <li><a class="lien-header" href="index.php?action=Registration"  ><?= $translations[$language]['gabarit_button_register']?></a></li> 
        <?php endif; ?>
    </ul>
</div>
<div id="menuF"></div>

<!-- Partie Compagnon -->
<!-- author : Théo Deguin -->
<!-- author : Lola Cohidon  -->
<div id="companion">
    <div class="bubble">
        <p><?php
            $durationC = 0;
            $imagePath = "Public/image/companion/companion1.png";
            if (isset($_SESSION['IdLogin'])) {
                switch ($_GET['action']) {
                    case 'Index':
                        print("You're on the Homepage. Explore information about the website, its usage, and read customer reviews here.");
                        $imagePath = "Public/image/companion/companion5.png";
                        break;
                    case 'ConnectLogin':
                        print("You have just logged into your account. Welcome or welcome back among us.");
                        break;
                    case 'InfoDashBoard':
                        if ((isset($_SESSION['tasks'])) && ((end($_SESSION['tasks']))->getId() != null)) {
                            $currentDateT = new DateTime();
                            $currentDate = $currentDateT->format('Y-m-d');
                            $lastTaskDate = end($_SESSION['tasks'])->getDateAdded();
                            $lastTaskDateD = strtotime($lastTaskDate);
                            $currentDateD = strtotime($currentDate);
                            $oneWeekAgo = strtotime("-1 week", $currentDateD);
                            foreach ($_SESSION['tasks'] as $task) {
                                $durationC += $task->getDuration();
                            }
                            if ($lastTaskDateD <= $oneWeekAgo) {
                                print("It seems you haven't recorded any tasks in a week or more. Consider updating your task log to stay organized.");
                                $imagePath = "Public/image/companion/companion7.png";
                            }
                            else{
                                if($durationC >= 8){
                                    print("You've accomplished quite a few tasks this week. Great job!");
                                    $imagePath = "Public/image/companion/companion4.png";
                                }
                                elseif($durationC <= 4){
                                    print("It seems like you haven't completed enough tasks this week. Consider taking on a few more to stay on track.");
                                    $imagePath = "Public/image/companion/companion6.png";
                                }
                                else{
                                    print("It looks like you've completed a decent number of tasks this week. Keep it up!");
                                    $imagePath = "Public/image/companion/companion8.png";
                                }
                            }
                        }
                        else{
                            print("You're on the dashboard page. Here, you can view information about tasks completed in the last week.");
                        }
                        break;
                    case 'Reference':
                        print("You're on the Reference page. Here, you can check the value reference for each possible task.");
                        break;
                    case 'Registration':
                        print("You're on the 'Update My Account' page. Here, you can modify the information associated with your account.");
                        break;
                    case 'TaskRegistration':
                        print("You've just added a completed task to the dashboard.");
                        $imagePath = "Public/image/companion/companion2.png";
                        break;
                    case 'TaskSupression':
                        if (!isset($_SESSION['tasks']) || (end($_SESSION['tasks']))->getId() == null){
                            print("Unable to delete tasks as there are currently none recorded.");
                        }
                        else{
                            print("You've just removed the last added task.");
                        }
                        break;
                    case 'TaskModification':
                        if (!isset($_SESSION['tasks']) || (end($_SESSION['tasks']))->getId() == null){
                            print("Unable to modify tasks as there are currently none recorded.");
                        }
                        else{
                            print("You've just modified the last added task.");
                        }
                        break;
                    default:
                        print('Action non reconnue');
                        break;
                }
            }
            else {
                switch ($_GET['action']) {
                    case 'Index':
                        print("Welcome to Family'Easy, your new tool for household task management. You're on the homepage. Explore information about the website, its usage, and read customer reviews here.");
                        $imagePath = "Public/image/companion/companion5.png";
                        break;
                    case 'Connection':
                        print("You're on the Login page. Sign in here to access your account.");
                        break;
                    case 'Registration':
                        print("You're on the Registration page. Create your account here to get started.");
                        break;
                    default:
                        print('Action non reconnue');
                        break;
                }
            }
        ?></p>
    </div>
    <?php
        echo '<img src="' . $imagePath . '" alt="companion">';
    ?>
</div>

<!-- #contenu -->
<main id="contenu">
<?= $contenu ?>
</main>

<!-- footer -->
<!-- author : Lola Cohidon -->
<!-- author : Théo Cornu -->
<footer>
    <div class="footer-inner">
        <div class="footer-logo">
            <a  class="scroll-to-top">
                <img src="Public/image/page_connection/logo_F.png" alt="Logo">
            </a>                
        </div>
        <div id="shortcuts" class="link">
            <ul>
                <li class="linkTitle" ><a href="#"><?= $translations[$language]['gabarit_shortcuts']?></a></li>
                <li class="linkSubstitle"><a href="#">New link 1</a></li>
                <li class="linkSubstitle"><a href="#">New link 2</a></li>
                <li class="linkSubstitle"><a href="#">New link 3</a></li>
                <li class="linkSubstitle"><a href="#">New link 4</a></li>
            </ul>
        </div>
        <div id="services" class="link">
            <ul>
                <li class="linkTitle"><a href="#"><?= $translations[$language]['gabarit_services']?></a></li>
                <li class="linkSubstitle"><a href="#">New link 1</a></li>
                <li class="linkSubstitle"><a href="#">New link 2</a></li>
                <li class="linkSubstitle"><a href="#">New link 3</a></li>
            </ul>
        </div>
        <div id="legalNotice" class="link">
            <ul>
                <li class="linkTitle" ><a href="#"><?= $translations[$language]['home_title']?></a></li>
                <li class="linkSubstitle" ><a href="index.php?action=PrivacyPolicy">Privacy Policy</a></li>
                <li class="linkSubstitle" ><a href="index.php?action=TermsConditions">Terms and Conditions</a></li>
                <li class="linkSubstitle" ><a href="index.php?action=LegalNotice">Legal Notice</a></li>
                <li class="linkSubstitle" ><a href="index.php?action=CookiePolicy">Cookie Policy</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <div id="follow-text-div">
                <p id="follow-text"><?= $translations[$language]['gabarit_followUs']?></p>
            </div>
            <div id="ResLogo">
                <a class="Facebook" href="#"><img src="Public/image/page_footer/facebook.png" alt="Facebook"></a>
                <a class="Instagram" href="#"><img src="Public/image/page_footer/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="Public/image/page_footer/twitter.png" alt="Twitter"></a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>