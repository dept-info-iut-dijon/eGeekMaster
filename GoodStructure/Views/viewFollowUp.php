<!-- autor : Lola Cohidon -->
<link rel="stylesheet" href="Public/css/followUp3.css">
<script src="Public/Animation_js/followUp2.js"></script>
<div id = "viewFollowUp">

    <!-- Header -->
    <div id="Person">
        <h1>Surname Name</h1> <!--Displaying the user's first and last name-->
    </div>
    <!--Buttons-->
    <div class="buttons">
        <button id="suiviD" >Suivi détaillé</button>
        <div class="line"></div>
        <button id="suiviG" >Suivi global</button>
    </div>
    
    <!-- Global Text -->
    <div id="globalText">
        <canvas id="myChart2"></canvas>
    </div>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    
    const labels = <?= json_encode($labels) ?>;
    const data2 = <?= json_encode($taskCountPerYearMonth) ?>;

    
    const ctx2 = document.getElementById('myChart2');


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
            indexAxis: 'x',
            plugins: {
                
                
            }
        }
    });
});
</script>
