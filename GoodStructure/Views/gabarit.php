<!-- author : Théo Cornu -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="Public/css/header3.css"/>
    <link rel="stylesheet" href="Public/css/footer1.css"/>
    <link rel="stylesheet" href="Public/css/erreur.css"/>
    <link rel="stylesheet" href="Public/css/companion1.css"/>
    <script src="Public/Animation_js/header.js"></script>
    <script src="Public/Animation_js/companion.js"></script>
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
        <a class="lien-header" href="index.php?action=Connection" > 
            <div class="icon" id="user"></div>
        </a>
</header>

<!-- Parti menu déroulant + Flou -->
<div id="menu">
    <ul>
        <?php if (isset($_SESSION['IdLogin'])) : ?>
            <li><a class="lien-header" href="index.php?action=Index" >Home</a></li>
            <li><a class="lien-header" href="index.php?action=Registration&IdLogin=<?=$_SESSION['IdLogin']?>"  >Upadte my account</a></li>
            <li><a class="lien-header" href="index.php?action=Disconnect"  >Disconnect</a></li>
            <li><a class="lien-header" href="index.php?action=InfoDashBoard">DashBoard</a></li>
            <li><a class="lien-header" href="index.php?action=Reference">Reference</a></li>
        <?php else : ?>
            <li><a class="lien-header" href="index.php?action=Connection"  >Login</a></li> 
            <li><a class="lien-header" href="index.php?action=Registration"  >Register</a></li> 
        <?php endif; ?>
    </ul>
</div>
<div id="menuF"></div>

<!-- Partie Compagnon -->
<!-- author : Théo Cornu -->
<div id="companion">
    <div id="companionConnect">
        <div class="bubble">
            <p><?php
                if (isset($_SESSION['IdLogin'])) {
                    switch ($_GET['action']) {
                        case 'Index':
                            print("You're on the Homepage. Explore information about the website, its usage, and read customer reviews here.");
                            break;
                        case 'ConnectLogin':
                            print("You have just logged into your account. Welcome or welcome back among us.");
                            break;
                        case 'InfoDashBoard':
                            print("You're on the Dashboard page. Here, you can view information about tasks completed in the last week.");
                            break;
                        case 'Reference':
                            print("You're on the Reference page. Here, you can check the value reference for each possible task.");
                            break;
                        case 'Registration':
                            print("You're on the 'Update My Account' page. Here, you can modify the information associated with your account.");
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
        <img src="Public/image/companion/companion1.png" alt="companion">
    </div>
</div>

<!-- #contenu -->
<main id="contenu">
<?= $contenu ?>
</main>

<!-- footer -->
<!-- author : Théo Cornu -->
<!-- author : Lola -->
<footer>
    <div class="footer-inner">
        <div class="footer-logo">
            <a  class="scroll-to-top">
                <img src="Public/image/page_connection/logo_F.png" alt="Logo">
            </a>                
        </div>
        <div id="shortcuts" class="link">
            <ul>
                <li class="linkTitle" ><a href="#">Shortcuts</a></li>
                <li class="linkSubstitle"><a href="#">New link 1</a></li>
                <li class="linkSubstitle"><a href="#">New link 2</a></li>
                <li class="linkSubstitle"><a href="#">New link 3</a></li>
                <li class="linkSubstitle"><a href="#">New link 4</a></li>
            </ul>
        </div>
        <div id="services" class="link">
            <ul>
                <li class="linkTitle"><a href="#">Services</a></li>
                <li class="linkSubstitle"><a href="#">New link 1</a></li>
                <li class="linkSubstitle"><a href="#">New link 2</a></li>
                <li class="linkSubstitle"><a href="#">New link 3</a></li>
            </ul>
        </div>
        <div id="legalNotice" class="link">
            <ul>
                <li class="linkTitle" ><a href="#">Legal notices</a></li>
                <li class="linkSubstitle" ><a href="#">New link 1</a></li>
                <li class="linkSubstitle" ><a href="#">New link 2</a></li>
                <li class="linkSubstitle" ><a href="#">New link 3</a></li>
                <li class="linkSubstitle" ><a href="#">New link 4</a></li>
                <li class="linkSubstitle"><a href="#">New link 5</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <div id="follow-text-div">
                <p id="follow-text">Follow us !</p>
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