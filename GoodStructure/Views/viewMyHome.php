<!-- author: Théo Cornu-->
<link rel="stylesheet" href="Public/css/myhome2.css">
<script src="Public/Animation_js/myhome.js"></script>    

<div id="page">
    
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
            <div id="HeadForm">
                <h1>Join Home</h1>
                <p>Join a home to be with your family</p>
            </div>
            <div>
                <form id="HomeForm" action="index.php?action=MyHomeConnect" method="post">
                    <fieldset>
                        <div class="formConnect">   
                            <div class="infoSend">
                                <label id="labelcode" for="CodeHome">Code Home</label><br>
                                <input type="text" id="CodeHome" name="CodeHome" class="inputs" autofocus required>
                            </div>
                                   
                            <div id="submitDiv">
                                <input type="submit" value="Validate" id="submitbutton">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="FootForm">
                <p >Don't have a home ? <input type="button" id="lienCreatHome" value="Create one here"></p>
            </div>    
        </div>
    </div>
</div>

