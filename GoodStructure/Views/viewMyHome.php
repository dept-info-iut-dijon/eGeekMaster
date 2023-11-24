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
            <img id="logo" src="Public/image/page_connection/logo_F2.png" alt="">
        </div>
        <div id="rightPart">
            <?php if (isset($_GET['errorMessage'])) : ?>
                <div id="fond-erreur">
                    <p id="erreur"><?= $_GET['errorMessage']?></p>
                </div>
            <?php endif; ?>
            <div>
                <h1>Join Home</h1>
                <p>Create a home to join your family</p>
            </div>
            <div>
                <form action="index.php?action=ConnectHome" method="post">
                    <fieldset>
                        <div id="Home">   
                            <div class="cc">
                                <label for="CodeHome">Code Home :</label><br>
                                <input type="text" id="codeHome" name="CodeHome" class="inputs" autofocus required>
                            </div>
                                   
                            <div id="submitDiv">
                                <input type="submit" value="Validate" id="submitbutton">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div>
                <p>Don't have an home ? <a id="lieninscription" href="index.php?action=RegistrationHome">Create one here</a></p>
            </div>    
        </div>
    </div>
</div>