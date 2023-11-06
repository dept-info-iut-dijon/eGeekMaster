<!-- author: Théo Cornu -->
<div id="contenu">
    <link rel="stylesheet" href="Public/css/footer.css">
    <link rel="stylesheet" href="Public/css/page_accueil/index.css">

    <script src="Public/Animation_js/page_accueil/index.js"></script>

    <div id="Debut">
        <?php if (isset($message)) : ?>
            <p><?= $message ?></p>
        <?php endif; ?>
        <div id="imageDebut">
            <div class="imageDuDeb haut"></div>
            <div class="imageDuDeb bas"></div>
            <div class="imageDuDeb haut"></div>
            <div class="imageDuDeb bas"></div>
        </div>
        <h1>
            Welcome to Family'Easy
        </h1>
        <p>
            Family'Easy is an application dedicated to calculating the monetary and time value of domestic and parental tasks within couples. Our goal is to highlight the unequal distribution of household and parenting work in a household.
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
                    <img src="Public/image/page_accueil/FAQ.jpg" alt="FAQ">
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
                What client say
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
            <div class="slider-panel active" >
                <p>Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Ipsum Lorem Ipsum dolor sit Lorem Ipsum um dolor sit Lorem Ipsum Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Ipsum 
                </p>
                <div class="people">
                    <div id="imgA"></div>
                    
                    <div>
                        <h2>
                            Joe Root
                        </h2>
                        <h5>UI/UX Designer</h5>
                    </div>
                </div>
            </div>
            <div class="slider-panel" >
                <p>Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Lorem Ipsum Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Ipsum Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Ipsum 
                </p>
                <div class="people">
                    <div id="imgB"></div>
                    <div >
                        <h2>
                            Joe Root
                        </h2>
                        <h5>UI/UX Designer</h5>
                    </div>
                </div>
            </div>
            <div class="slider-panel" >
                <p>Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Ipsum Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Ipsum Lorem Ipsum doum dolor sit Lorem Ipsum dolor sit Lorem Ipsum 
                </p>
                <div class="people">
                    <div id="imgC"></div>
                    <div>
                        <h2>
                            Joe Root
                        </h2>
                        <h5>UI/UX Designer</h5>
                    </div>
                </div>
            </div>
            <div class="slider-panel" >
                <p>Lorempsum dolor sit Lorem Ipsum Lorem Ipsum dolor sit Lorem Ipsum dolor sit Lorem Ipsum 
                </p>
                <div class="people">
                    <div id="imgD"></div>
                    <div>
                        <h2>
                            Joe Root
                        </h2>
                        <h5>UI/UX Designer</h5>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="ligneP"></div>
        <div id="Réseaux">
            
        </div>
        
    </div>
        
    <!-- block-->
</div>
