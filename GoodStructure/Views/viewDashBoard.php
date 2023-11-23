<!--
    author : Enzo
    author : Théo Cornu
    author : Théo D
-->

<link rel="stylesheet" href="Public/css/dashboard3.css">
<link rel="stylesheet" href="Public/css/taskRegistration7.css">
<script src="Public/Animation_js/taskRegistration.js"></script>
<div id="bar">
    <!--MESSAGE-->
    <?php if (isset($message)) : ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <?php if (isset($_GET['errorMessage'])) : ?>
        <p><?= $_GET['errorMessage']?></p>
    <?php endif; ?>
        
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
                            <input list="tasks" placeholder="Search a task" name="searchTask" id="searchTask" value="<?php if (isset($_SESSION['tasks']) && (end($_SESSION['tasks']))->getId() != null)  : ?> <?= $nameLastTask ?> <?php endif; ?>" autofocus required>
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
                            <input type="text" name="hours" id="hours" class="inputsTime" value="<?php if (isset($_SESSION['tasks']) && (end($_SESSION['tasks']))->getId() != null) :  ?><?= $durationLastTaskhours ?><?php endif?>" readonly>
                            <p id="a"> : </p>
                            
                            <input type="text" name="minutes" id="minutes" class="inputsTime" value="<?php if (isset($_SESSION['tasks']) && (end($_SESSION['tasks']))->getId() != null) :  ?><?= $durationLastTaskminutes ?><?php endif?>" readonly>
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
                       
                            <input type="date" name="Date" id="date" pattern="\d{1,2}-\d{1,2}-\d{4}" value="<?php if (isset($_SESSION['tasks']) && (end($_SESSION['tasks']))->getId() != null) :  ?><?= date($dateLastTask) ?><?php endif?>">
                            
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
    
    <div id='BoutonAction'>
        <div class="divBoutonTache Add">
            <!-- Bouton d'ajout de tâches -->
            <button class="boutonTaches Add" type="button">Register a new task</button>
        </div>
        
        <div class="divBoutonTache Supr">
            <!-- Bouton d'ajout de tâches -->
            <a href="index.php?action=TaskSupression&IdTask=<?php if (isset($_SESSION['tasks']) && (end($_SESSION['tasks']))->getId() != null)  : ?> <?= $idLastTast ?> <?php endif; ?>"><button class="boutonTaches Supr" type="button">Delete a task</button></a>
            
        </div>

        <div class="divBoutonTache Modif">
            <!-- Bouton d'ajout de tâches -->
            <button class="boutonTaches Modif" type="button">Modify a task</button>
        </div>
    </div>
    <!-- Graphiques -->
    <div id="graphiques">
        <div id="piechart">
            <h1>Tasks distribution</h1>
            <canvas id="myChart1"></canvas>
        </div>
        <div id="barchart">
            <h1>Average duration for each task</h1>
            <canvas id="myChart2"></canvas>
        </div>
    </div>
</div> 
    






<?php
$labels = [];
$data1 = [];
$data2 = [];
$taskDurations = [];
$taskCounts = [];

if (isset($_SESSION['tasks'])) {
    foreach ($_SESSION['tasks'] as $task) {
        $taskName = $task->getNameTask();
        $taskDuration = $task->getDuration();

        // Vérifier si le nom de tâche existe déjà dans le tableau des labels
        if (!in_array($taskName, $labels)) {
            $labels[] = $taskName;
            $taskDurations[$taskName] = $taskDuration;
            $taskCounts[$taskName] = 1;
        } else {
            // Ajouter la durée à la durée existante pour ce nom de tâche
            $taskDurations[$taskName] += $taskDuration;
            $taskCounts[$taskName]++;
        }
    }

    // Remplir les tableaux de données avec les durées correspondantes
    foreach ($labels as $label) {
        $data1[] = $taskDurations[$label]; // Exemple de valeur statique pour le graphique 1
        $data2[] = $taskDurations[$label] / $taskCounts[$label]; // Calculer la moyenne sur une semaine
    }
}
?>

<input type="hiden" id="labels" value="<?= htmlspecialchars(json_encode($labels)) ?>">
<input type="hiden" id="data1" value="<?= htmlspecialchars(json_encode($data1)) ?>">
<input type="hiden" id="data2" value="<?= htmlspecialchars(json_encode($data2)) ?>">


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    
    const labels = <?= json_encode($labels) ?>;
    const data1 = <?= json_encode($data1) ?>;
    const data2 = <?= json_encode($data2) ?>;

    const ctx1 = document.getElementById('myChart1');
    const ctx2 = document.getElementById('myChart2');

    new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: 'Distribution Duration',
                data: data1,
                borderWidth: 0,
                backgroundColor: (context) => {
                    const index = context.dataIndex;
                    const count = context.dataset.data.length;
                    const startColor = [90, 74, 71]; // Couleur de départ (noir)
                    const endColor = [236, 228, 227]; // Couleur de fin (blanc)
                    const color = [];

                    // Calculer les valeurs de couleur pour chaque canal (rouge, vert, bleu)
                    for (let i = 0; i < 3; i++) {
                        const startValue = startColor[i];
                        const endValue = endColor[i];
                        const value = Math.round(startValue + (endValue - startValue) * (index / (count - 1)));
                        color.push(value);
                    }

                    return `rgb(${color.join(',')})`;
                }
            }]
        },
        options: {
            responsive: true,
            onClick: (event, elements) => {
                if (elements.length > 0) {
                    const clickedIndex = elements[0].index;
                    const clickedLabel = labels[clickedIndex];
                    console.log(`Clicked label: ${clickedLabel}`);
                }
            }
            
        }
    });

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Average Duration',
                data: data2,
                backgroundColor: (context) => {
                    const index = context.dataIndex;
                    const count = context.dataset.data.length;
                    const startColor = [0, 0, 0]; // Couleur de départ (noir)
                    const endColor = [236, 228, 227]; // Couleur de fin (blanc)
                    const color = [];

                    // Calculer les valeurs de couleur pour chaque canal (rouge, vert, bleu)
                    for (let i = 0; i < 3; i++) {
                        const startValue = startColor[i];
                        const endValue = endColor[i];
                        const value = Math.round(startValue + (endValue - startValue) * (index / (count - 1)));
                        color.push(value);
                    }

                    return `rgb(${color.join(',')})`;
                },
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            indexAxis: 'y',
            plugins: {
                
                
            }
        }
    });
});
</script>


