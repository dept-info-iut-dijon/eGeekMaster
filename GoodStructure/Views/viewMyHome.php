<!-- author: Théo Cornu-->

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
                <p>Join a home to be with your family</p>
            </div>
            <div>
                <form action="index.php?action=HomeConnect" method="post">
                    <fieldset>
                        <div id="Home">   
                            <div class="infoSend">
                                <label for="CodeHome">Code Home</label><br>
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
                <p>Don't have a home ? <a id="lienCreatHome" href="index.php?action=MyHomeRegistration">Create one here</a></p>
            </div>    
        </div>
    </div>
</div>