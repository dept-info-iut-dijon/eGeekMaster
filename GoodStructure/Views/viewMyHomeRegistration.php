<!-- author: Théo Cornu-->

<div id="page">
    <link rel="stylesheet" href="Public/css/myhome2.css">
    
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
                <h1>Create Home</h1>
                <p>Create a home to join your family</p>
            </div>
            <div>
                <form action="index.php?action=HomeRegistration" method="post">
                    <fieldset>
                        <div id="Home">   
                            <div class="infoSend">
                                <label id="labelname" for="NameHome">Name</label><br>
                                <input type="text" id="nameHome" name="NameHome" class="inputs" autofocus required><br>

                                <label id="labelcode" for="CodeHome">Code</label><br>
                                <input type="text" id="codeHome" name="CodeHome" class="inputs" required>
                            </div>
                                   
                            <div id="submitDiv">
                                <input type="submit" value="Validate" id="submitbutton">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div>
                <p>Do you have a home ? <a id="lieninscription" href="index.php?action=MyHome">Connect to it</a></p>
            </div>    
        </div>
    </div>
</div>