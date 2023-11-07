<!-- author: Théo Cornu
author: Théo Deguin 
author : Enzo-->
<div id="page">
    <link rel="stylesheet" href="Public/css/connection.css">
    
    <div id="familyGlobal">
        <img id="family" src="Public/image/page_connection/image_connection.png" alt="">
    </div>
    <div class="container">
        <div id="divlogo">
            <img id="logo" src="Public/image/page_connection/logo_soupape2.png" alt="">
        </div>
        <div id="rightPart">
            <?php if (isset($_GET['errorMessage'])) : ?>
                <div id="fond-erreur">
                    <p id="erreur"><?= $_GET['errorMessage']?></p>
                </div>
            <?php endif; ?>
            <div>
                <h1>LOG IN</h1>
                <p>Log to your account to access your workspace</p>
            </div>
            <div>
                <form action="index.php?action=ConnectLogin" method="post">
                    <fieldset>
                        <div id="Connect">   
                            <div class="cc">
                                <label for="Username">Login :</label><br>
                                <input type="text" id="login" name="Username" class="inputs" autofocus required>
                            </div>
                            <div class="cc">
                                <label for="Password">Password :</label><br>
                                <input type="password" id="password" name="Password" class="inputs" required> 
                            </div >         
                            <div id="submitDiv">
                                <input type="submit" value="Log in" id="submitbutton">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div>
                <p>Don't have an account ? <a id="lieninscription" href="index.php?action=Registration">Create one here</a></p>
            </div>    
        </div>
    </div>
</div>