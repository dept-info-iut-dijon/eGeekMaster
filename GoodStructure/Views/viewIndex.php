<!-- author: Théo Cornu -->
<?php require_once 'translations.php' ?>
<?php include 'companion.php'; ?>
<div id="contenu">
    <link rel="stylesheet" href="Public/css/page_accueil/index10.css">

    <script src="Public/Animation_js/page_accueil/index.js"></script>
    

    <div id="Debut">
        <?php if (isset($message)) : ?>
            

            <p><?= $message ?></p>
        <?php endif; ?>
        <?php if (isset($_GET['errorMessage'])) : ?>
            <p><?= $_GET['errorMessage']?></p>
        <?php endif; ?>
        <div id="imageDebut">
            <div class="imageDuDeb haut"></div>
            <div class="imageDuDeb bas"></div>
            <div class="imageDuDeb haut"></div>
            <div class="imageDuDeb bas"></div>
        </div>
        <h1>
            <?= $translations[$language]['index_title']?>
        </h1>
        <p>
            <?= $translations[$language]['index_desc']?>
        </p>
    </div>

    <!-- block-->

    <div id="SomeChiffre">
        <div id="SomeChiffreTexte">
            <p>
                With Family'Easy, you can track and value your daily household and parenting tasks, bringing awareness to the fairness of these responsibilities.
            </p>
        </div>
        <div class="SmileyChiffre a">
            <div>
                <img id="smiley1" src="Public/image/page_accueil/Smiley_Familly.png" alt="Smiley_Familly">
            </div>
            <div class="nbWrite">
                <h3>
                    100+
                </h3>
                <p>
                    Satisfied Families
                </p>
            </div>
        </div>
        <div class="SmileyChiffre b">
            <div>
                <img id="smiley2" src="Public/image/page_accueil/Smiley_Choked.png" alt="Smiley_Choked">
            </div>
            <div class="nbWrite">
                <h3>
                    +23k
                </h3>
                <p>
                    Downloads
                </p>
            </div>
        </div>
        <div id="Smiley_Choked" class="SmileyChiffre c">
            <div id="smiley3Div">
                <img id="smiley3" src="Public/image/page_accueil/Smiley_HearthEyes.png" alt="Smiley_HearthEyes">
            </div>
            <div class="nbWrite">
                <h3>
                    95%
                </h3>
                <p>
                    User Satisfaction
                </p>
            </div>
        </div>
    </div>

    <!-- block-->

    <div id="FAQ">
        <div id="FAQcontainer">
        
            <div>
                
                <div id="Faq_Pixi" class="relative-container">
                    <div id='FAQprParent'>
                        <div id='FAQprincipal'>
                            <div id='imageFAQ'>
                            </div>
                        </div>
                    </div>
                    <div id="PixiPresentation">
                        
                        <div class="field">
                        
                            <fieldset>
                                <img src="Public/image/page_accueil/Pixy_Helper.png" alt="Pixy_Helper">
                                <label for="pixi">Pixi</label>
                                <label for="Statut">Helper Agent</label>
                                <input type="button" value="Messages">
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h2>
                    Meet Pixi - Your Helper Agent
                </h2>
                <p>
                    Pixi is here to assist you in managing your household and parenting tasks efficiently. Ask Pixi for guidance and support to make your family life easier.
                </p>
                <input id="MAU" type="button" value="Learn More About Us">
            </div>
        </div>
    </div>

    <!-- block-->

    <div id="Tuto">
        <h2>
            Getting Started with Family'Easy
        </h2>
        <p>
            Discover how to use Family'Easy to improve your family's organization and reduce the workload imbalance.
        </p>
        <video width="320" height="240" controls>
            <source src="tutorial_video.mp4" type="video/mp4">
        </video>
    </div>

    <!-- block-->

    <div id="Publication">
        <div id="PubliGauche">
            <h4>
                What Our Clients Say
            </h4>
            <div>
                <div class="slider-controls">
                    <div class="slider-control active"></div>
                    <div class="slider-control"></div>
                    <div class="slider-control"></div>
                    <div class="slider-control"></div>
                </div>
            </div>
        </div>
        <div class="slider" id="slider_1">
            <div class="slider-panel active">
                <p>
                    Family'Easy has transformed our family life. It's now easier to share responsibilities and maintain a balanced lifestyle.
                </p>
                <div class="people">
                    <div id="imgA"></div>
                    <div>
                        <h2>
                            Jane Doe
                        </h2>
                        <h5>Happy User</h5>
                    </div>
                </div>
            </div>
            <div class="slider-panel">
                <p>
                    We can't imagine managing our household without Family'Easy. It's a game-changer for busy families like ours.
                </p>
                <div class="people">
                    <div id="imgB"></div>
                    <div>
                        <h2>
                            John Smith
                        </h2>
                        <h5>Satisfied Customer</h5>
                    </div>
                </div>
            </div>
            <div class="slider-panel">
                <p>
                    Thanks to Family'Easy, our family is happier, and we have more quality time together. It's an essential tool for every home.
                </p>
                <div class="people">
                    <div id="imgC"></div>
                    <div>
                        <h2>
                            Emily Wilson
                        </h2>
                        <h5>Grateful Parent</h5>
                    </div>
                </div>
            </div>
            <div class="slider-panel">
                <p>
                    Family'Easy has made our life easier and more enjoyable. We recommend it to all families looking for balance.
                </p>
                <div class="people">
                    <div id="imgD"></div>
                    <div>
                        <h2>
                            Mark Johnson
                        </h2>
                        <h5>Delighted User</h5>
                    </div>
                </div>
            </div>
        </div>
        <div id="ligneP"></div>
        <div id="Réseaux">
            <!-- Add your social media links or content here -->
        </div>
    </div>

    <!-- block-->
</div>
