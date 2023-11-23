<!-- 
autor : Lola Cohidon
author : Théo Cornu
-->
<link rel="stylesheet" href="Public/css/followUp15.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="Public/Animation_js/followUp2.js"></script>

<div id = "viewFollowUp">

    <!-- Header -->
    <div id="Person">
        <h1 id="PersonTitle">Surname Name</h1> <!--Displaying the user's first and last name-->
    </div>
    <!--Buttons-->
    <div class="buttons">
        <button id="suiviD" >Detailed tracking</button>
        <div class="line"></div>
        <button id="suiviG" >Overall tracking</button>
    </div>
    <!--Detailed tracking-->
    <input type="hidden" id="labels" value="<?= json_encode($labels) ?>">
    <input type="hidden" id="data2" value="<?= json_encode($taskCountPerYearMonth) ?>">
</div>


    
<?php
    /**
     * @author Enzo
     */
    
    $taskDurations = [];
    $labels = [];
    $tempT = 0;
    $taskDates = [];
    $taskCountPerYearMonth = [];
    $taskCountPerYear = [];

    if (isset($_SESSION['tasks'])) {                         
        foreach ($_SESSION['tasks'] as $task) {
            // Get name, duration and date of the task
            $taskName = $task->getNameTask();
            $taskDuration = $task->getDuration();
            $taskDate = $task->getDateAdded();

            // Separate the date in year and month
            $year = date('Y', strtotime($taskDate));
            $month = date('n', strtotime($taskDate));

            // If taskname is not in labels
            if (!in_array($taskName, $labels)) {
                // For detail part
                $labels[] = $taskName;
                $taskDurations[$taskName] = $taskDuration;
                $tempT += $taskDuration;

                // For global part
                // Per year
                if (!isset($taskCountPerYear[$year][$taskName])) {
                    $taskCountPerYear[$year][$taskName] = 1;
                } else {
                    $taskCountPerYear[$year][$taskName]++;
                }
                // Per month
                if (!isset($taskCountPerYearMonth[$year][$month][$taskName])) {
                    $taskCountPerYearMonth[$year][$month][$taskName] = 1;
                } else {
                    $taskCountPerYearMonth[$year][$month][$taskName]++;
                }
            } else {
                // For detail part
                $taskDurations[$taskName] += $taskDuration;
                $tempT += $taskDuration;

                // For global part
                // Per year
                if (!isset($taskCountPerYear[$year][$taskName])) {
                    $taskCountPerYear[$year][$taskName] = 1;
                } else {
                    $taskCountPerYear[$year][$taskName]++;
                }
                // Per month
                if (!isset($taskCountPerYearMonth[$year][$month][$taskName])) {
                    $taskCountPerYearMonth[$year][$month][$taskName] = 1;
                } else {
                    $taskCountPerYearMonth[$year][$month][$taskName]++;
                }
            }
        }

        foreach ($labels as $label) {
            // For detail part
            $taskPercent[$label] = ceil(($taskDurations[$label]*100) / $tempT);      
            
        }
    }
?>



