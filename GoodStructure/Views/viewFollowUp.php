<!-- autor : Lola Cohidon -->
<link rel="stylesheet" href="">
<div id = "viewFollowUp">

    <!-- Header -->
    <div id="Person">
        <h1>Nom Prénom</h1> <!--Displaying the user's first and last name-->
    </div>
    <!--Buttons-->
    <div class="buttons">
        <button onclick="showDetailed()">Suivi détaillé</button>
        <button onclick="showGlobal()">Suivi global</button>
    </div>
    <!--Content-->
    <div class = "content" id = "content">
</div>

<script src="Public/Animation_js/followUp.js"></script>
    
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

<?= $taskPercent['Cleaning'] ?> 
<?= $taskPercent['Shopping'] ?>
<?= $taskPercent['Cooking'] ?>
<?= $taskPercent['Dishes'] ?>
<?= $taskPercent['Laundry'] ?>
<?= $taskPercent['ChildsPlay'] ?>
<?= $taskPercent['ChildrensJourney'] ?>
<?= $taskPercent['ParentJourney'] ?>
<?= $taskPercent['ParentCare'] ?>
<?= $taskPercent['Administrative'] ?>
<?= $taskPercent['PetCare'] ?>  
<?= $taskPercent['Gardening'] ?>
<?= $taskPercent['DIY'] ?>
<?= $taskPercent['HouseholdManagement'] ?>
