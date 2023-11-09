<link rel="stylesheet" href="Public/css/dashboard.css">
<link rel="stylesheet" href="Public/css/taskRegistration1.css">
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
                            <input list="tasks" placeholder="Search a task" id="searchTask">
                            <datalist id="tasks">
                                <option value="Cleaning">                                <option value="Firefox">
                                <option value="Shopping">
                                <option value="Cooking">
                                <option value="Dishes">
                                <option value="Laundry">                                <option value="Firefox">
                                <option value="ChildrensCare">
                                <option value="ChildsPlay">
                                <option value="ChildrensJourney">                                
                                <option value="ParentJourney">                                <option value="Firefox">
                                <option value="ParentCare">
                                <option value="Administrative">
                                <option value="PetCare">
                                <option value="Gardening">                                <option value="Firefox">
                                <option value="DIY">
                                <option value="HouseholdManagement">
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
                            <input type="date" name="Date" id="date">
                        </div>
                    </div> 

                    <!--CANCEL/SUBMIT-->
                    <div id="buttons">
                        <table id="table">
                            <tr>
                                <td class="cases" id="caseCancel">

                                    <!--CANCEL-->
                                    <div id="cancelDiv">
                                        <input type="button" value="Cancel" id="cancel" class="buttonsEnd">    
                                    </div>
                                </td>
                                <td class="cases">  
                                    <!--SUBMIT-->
                                    <div id="submitDiv">
                                        <input type="submit" value="Register" id="submit" class="buttonsEnd">  
                                    </div>
                                </td>
                            </tr>
                        </table>
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