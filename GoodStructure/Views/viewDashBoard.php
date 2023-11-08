<link rel="stylesheet" href="Public/css/dashboard.css">
    <div id="divBoutonTache">
        <!-- Bouton d'ajout de tâches -->
        <button id="boutonTaches" type="button">Register a new task</button>
    </div>

    <!--TASK REGISTRATION-->
    <div id="divTaskRegistration">


        <!--FORM-->
        <div>
            <form action="index.php?action=" method="post" id="formTask">
                <fieldset>

                    <!--TITLE-->
                    <div>
                        <h1 id="titleTASK">CREATE A TASK</h1>
                    </div>

                    <!--TASK-->
                    <div id="task">
                        <label>Task :</label>
                        <div id="chooseTask">
                            <input list="tasks" placeholder="task" id="searchTask">
                            <datalist id="tasks">
                                <option value="Internet Explorer">                                <option value="Firefox">
                                <option value="Chrome">
                                <option value="Opera">
                                <option value="Safari">
                            </datalist> 
                        </div>
                    </div>

                    <!--LIFETIME-->
                    <div id="lifetime">
                        <div id="titleLifetime">
                            <label>Lifetime :</label>
                        </div>
                        <div class="incrementDecrement">
                            <div class="plus">
                                <input type="button" name="PlusHour" id="plusHour" value="+" class="styleButtons">
                            </div>
                            <div class="moins">
                                <input type="button" name="MoinsHour" id="moinsHour" value="-" class="styleButtons">
                            </div>
                        </div>
                        <div id="time">
                            <p id="timer">00 : 00</p>
                        </div>
                        <div class="incrementDecrement">
                            <div class="plus">
                                <input type="button" name="PlusMinute" id="plusMinute" value="+" class="styleButtons">
                            </div>
                            <div class="moins">
                                <input type="button" name="MoinsMinute" id="moinsMinute" value="-" class="styleButtons">
                            </div>
                        </div>
                        <div>
                            <input type="date" id="custom-date-input">
                        </div>
                    </div> 

                    <!--CANCEL/SUBMIT-->
                    <div id="buttons">

                        <!--CANCEL-->
                        <div id="cancelDiv">
                            <input type="button" value="Cancel" id="cancel">
                        </div>
                        
                        <!--SUBMIT-->
                        <div id="submitDiv">
                            <input type="submit" value="Register" id="submit"> 
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    
    <!-- Titre des graphiques -->
    <div id="titreDashboard">
        <div>
            <h1>Répartition des tâches</h1>
        </div>
        <div>
            <h1>Durée moyenne pour chaque tâches</h1>
        </div>
    </div>
