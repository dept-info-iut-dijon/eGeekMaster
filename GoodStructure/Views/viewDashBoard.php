<!--
    author : Enzo
-->

<link rel="stylesheet" href="Public/css/dashboard.css">
<link rel="stylesheet" href="Public/css/taskRegistration.css">
<script src="Public/Animation_js/taskRegistration.js"></script>
<div id="bar">
    <!--TASK REGISTRATION-->
    <div id="divTaskRegistration">

        <!--FORM-->
        <div id="formDiv">
            <form action="index.php?action=TaskRegistration" method="post" id="formTask">
                <fieldset>

                    <!--TITLE-->
                    <div>
                        <h1 id="titleTASK">CREATE A TASK</h1>
                    </div>

                    <!--TASK-->
                    <div id="task">
                        <label id="taskLabel">Task :</label>
                        <div id="chooseTask">
                            <input list="tasks" placeholder="Search a task" id="searchTask" autofocus required>
                            <datalist id="tasks">
                                <option value="Cleaning">                                
                                <option value="Shopping">
                                <option value="Cooking">
                                <option value="Dishes">
                                <option value="Laundry">                                
                                <option value="ChildsPlay">
                                <option value="ChildrensJourney">                                
                                <option value="ParentJourney">                                
                                <option value="ParentCare">
                                <option value="Administrative">
                                <option value="PetCare">
                                <option value="Gardening">                               
                                <option value="DIY">
                                <option value="HouseholdManagement">
                            </datalist> 
                        </div>
                    </div>

                    <!--LIFETIME-->
                    <div id="lifetime">
                        <div id="titleLifetime">
                            <label id="lifetimeLabel">Lifetime :</label>
                        </div>
                        <div class="incrementDecrement">
                            <div class="plus">
                                <input type="button" name="IncrementHours" id="incrementHours" value="+" class="styleButtons" onclick="incrementValue('hours')">
                            </div>
                            <div class="moins">
                                <input type="button" name="DecrementHours" id="decrementHours" value="-" class="styleButtons" onclick="decrementValue('hours')">
                            </div>
                        </div>
                        <div id="time">
                            <input type="text" id="hours" class="inputsTime" readonly>
                            <p id="a"> : </p>
                            <input type="text" id="minutes" class="inputsTime" readonly>
                        </div>
                        <div class="incrementDecrement">
                            <div class="plus">
                                <input type="button" name="IncrementMinutes" id="incrementMinutes" value="+" class="styleButtons" onclick="incrementValue('minutes')">
                            </div>
                            <div class="moins">
                                <input type="button" name="DecrementMinutes" id="decrementMinutes" value="-" class="styleButtons" onclick="decrementValue('minutes')">
                            </div>
                        </div>
                        <div id="dateDiv">
                            <input type="date" name="Date" id="date" pattern="\d{1,2}-\d{1,2}-\d{4}">
                        </div>
                    </div> 

                    <!--CANCEL/SUBMIT-->
                    <div id="buttons">
                        <table id="table">
                            <tr>
                                <td class="cases" id="caseCancel">

                                    <!--CANCEL-->
                                    <div id="cancelDiv">
                                        <input type="button" value="Cancel" id="cancel" class="buttonsEnd" onclick="window.location.reload();">    
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

    <div id="divBoutonTache">
        <!-- Bouton d'ajout de tâches -->
        <button id="boutonTaches" type="button">Register a new task</button>
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