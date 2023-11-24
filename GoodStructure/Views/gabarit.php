<!-- author : Théo Cornu -->
<?php require_once 'translations.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="Public/css/header3.css"/>
    <link rel="stylesheet" href="Public/css/footer1.css"/>
    <link rel="stylesheet" href="Public/css/erreur.css"/>
    <script src="Public/Animation_js/header.js"></script>
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