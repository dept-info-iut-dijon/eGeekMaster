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
            <li><a class="lien-header" href="index.php?action=InfoFollowUp"><?= $translations[$language]['gabarit_button_followUp']?></a></li>
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
                        print($translations[$language]['gabarit_companion_index']);
                        $imagePath = "Public/image/companion/companion5.png";
                        break;
                    case 'ConnectLogin':
                        print($translations[$language]['gabarit_companion_connectLogin']);
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
                                print($translations[$language]['gabarit_companion_infoDashBoard1']);
                                $imagePath = "Public/image/companion/companion7.png";
                            }
                            else{
                                if($durationC >= 8){
                                    print($translations[$language]['gabarit_companion_infoDashBoard2']);
                                    $imagePath = "Public/image/companion/companion4.png";
                                }
                                elseif($durationC <= 4){
                                    print($translations[$language]['gabarit_companion_infoDashBoard3']);
                                    $imagePath = "Public/image/companion/companion6.png";
                                }
                                else{
                                    print($translations[$language]['gabarit_companion_infoDashBoard4']);
                                    $imagePath = "Public/image/companion/companion8.png";
                                }
                            }
                        }
                        else{
                            print($translations[$language]['gabarit_companion_infoDashBoard5']);
                        }
                        break;
                    case 'Reference':
                        print($translations[$language]['gabarit_companion_reference']);
                        break;
                    case 'Registration':
                        print($translations[$language]['gabarit_companion_registration']);
                        break;
                    case 'TaskRegistration':
                        print($translations[$language]['gabarit_companion_taskRegistration']);
                        $imagePath = "Public/image/companion/companion2.png";
                        break;
                    case 'TaskSupression':
                        if (!isset($_SESSION['tasks']) || (end($_SESSION['tasks']))->getId() == null){
                            print($translations[$language]['gabarit_companion_taskSuppresion1']);
                        }
                        else{
                            print($translations[$language]['gabarit_companion_taskSuppression2']);
                        }
                        break;
                    case 'TaskModification':
                        if (!isset($_SESSION['tasks']) || (end($_SESSION['tasks']))->getId() == null){
                            print($translations[$language]['gabarit_companion_taskModification1']);
                        }
                        else{
                            print("<?= $translations[$language]['gabarit_companion_taskModification2']?>");
                        }
                        break;
                    default:
                        print($translations[$language]['gabarit_companion_unknownAction']);
                        break;
                }
            }
            else {
                switch ($_GET['action']) {
                    case 'Index':
                        print("<?= $translations[$language]['gabarit_companion_else_index']?>");
                        $imagePath = "Public/image/companion/companion5.png";
                        break;
                    case 'Connection':
                        print("<?= $translations[$language]['gabarit_companion_else_connection']?>");
                        break;
                    case 'Registration':
                        print("<?= $translations[$language]['gabarit_companion_else_registration']?>");
                        break;
                    default:
                        print("<?= $translations[$language]['gabarit_companion_unknownAction']?>");
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
                <li class="linkTitle" ><a href="#"><?= $translations[$language]['gabarit_legalNotice']?></a></li>
                <li class="linkSubstitle" ><a href="index.php?action=PrivacyPolicy"><?= $translations[$language]['gabarit_privacyPolicy']?></a></li>
                <li class="linkSubstitle" ><a href="index.php?action=TermsConditions"><?= $translations[$language]['gabarit_termsConditions']?></a></li>
                <li class="linkSubstitle" ><a href="index.php?action=LegalNotice"><?= $translations[$language]['gabarit_legalMention']?></a></li>
                <li class="linkSubstitle" ><a href="index.php?action=CookiePolicy"><?= $translations[$language]['gabarit_cookiePolicy']?></a></li>
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