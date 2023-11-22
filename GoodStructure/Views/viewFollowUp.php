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
$taskDurations = [];
$labels = [];
$tempT = 0;
$taskDurationsHours = [];
$taskDurationsMinutes = []; 

if (isset($_SESSION['tasks'])) {                         
    foreach ($_SESSION['tasks'] as $task) {
        $taskName = $task->getNameTask();
        $taskDuration = $task->getDuration();

        if (!in_array($taskName, $labels)) {
            $labels[] = $taskName;

            $taskDurations[$taskName] = $taskDuration;
            $tempT += $taskDuration;
        } else {
            $taskDurations[$taskName] += $taskDuration;
            $tempT += $taskDuration;
        }
    }

    foreach ($labels as $label) {
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













<?php
// Supposons que $donnees soit votre tableau de données avec des dates
$donnees = array(
    array('id' => 1, 'date' => '2023-01-15'),
    array('id' => 2, 'date' => '2022-01-20'),
    array('id' => 3, 'date' => '2023-01-05'),
    // ... autres données ...
);

// Initialiser un tableau pour stocker le nombre de tâches par année et mois
$nombreTachesParAnneeMois = array();

// Parcourir les données pour compter le nombre de tâches par année et mois
foreach ($donnees as $donnee) {
    // Extraire l'année et le mois de la date
    $annee = date('Y', strtotime($donnee['date']));
    $mois = date('n', strtotime($donnee['date']));

    // Construire une clé unique pour chaque année et mois
    $cle = "$annee-$mois";

    // Incrémenter le compteur pour la clé correspondante
    if (!isset($nombreTachesParAnneeMois[$cle])) {
        $nombreTachesParAnneeMois[$cle] = 1;
    } else {
        $nombreTachesParAnneeMois[$cle]++;
    }
}

// Afficher le tableau résultant
echo '<pre>';
print_r($nombreTachesParAnneeMois);
echo '</pre>';
?>







<?php
$taskCountPerMonth = [];
if (isset($_SESSION['tasks'])) {
    foreach ($_SESSION['tasks'] as $task) {
        $taskName = $task->getNameTask();
        $taskDuration = $task->getDuration();
        $taskDate = $task->getDateAdded();

        // Extraire l'année et le mois de la date de la tâche
        $year = date('Y', strtotime($taskDate));
        $month = date('n', strtotime($taskDate));

        // Vérifier si le nom de tâche existe déjà dans le tableau des labels
        if (!isset($labels[$taskName])) {
            $labels[$taskName] = true;
            $taskDurations[$taskName] = $taskDuration;
            $taskCounts[$taskName] = 1;
            $tempT += $taskDuration;
            $taskCountPerYearMonth[$year][$month][$taskName] = 1;
        } else {
            // Ajouter la durée à la durée existante pour ce nom de tâche
            $taskDurations[$taskName] += $taskDuration;
            $taskCounts[$taskName]++;
            $tempT += $taskDuration;
            $taskCountPerYearMonth[$year][$month][$taskName]++;
        }
    }

    // Calculer la proportion pour chaque tâche
    foreach ($labels as $label => $value) {
        $taskPercent[$label] = ceil(($taskDurations[$label] * 100) / $tempT);
    }

    // Afficher le tableau résultant pour le nombre de tâches par année et mois
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Année-Mois</th>';
    foreach ($labels as $label => $value) {
        echo '<th>' . htmlspecialchars($label) . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($taskCountPerYearMonth as $year => $yearData) {
        foreach ($yearData as $month => $monthData) {
            $yearMonth = $year . '-' . $month; // Fusionner l'année et le mois
            echo '<tr>';
            echo '<td>' . htmlspecialchars($yearMonth) . '</td>';
            foreach ($labels as $label => $value) {
                echo '<td>' . (isset($monthData[$label]) ? htmlspecialchars($monthData[$label]) : 0) . '</td>';
            }
            echo '</tr>';
        }
    }

    echo '</tbody>';
    echo '</table>';
}







if (isset($_SESSION['tasks'])) {
    foreach ($_SESSION['tasks'] as $task) {
        $taskName = $task->getNameTask();
        $taskDuration = $task->getDuration();
        $taskDate = $task->getDateAdded();

        // Extraire l'année et le mois de la date de la tâche
        $year = date('Y', strtotime($taskDate));
        $month = date('n', strtotime($taskDate));

        // Vérifier si le nom de tâche existe déjà dans le tableau des labels
        if (!isset($labels[$taskName])) {
            $labels[$taskName] = true;
            $taskDurations[$taskName] = $taskDuration;
            $taskCounts[$taskName] = 1;
            $tempT += $taskDuration;
            $taskCountPerYearMonth[$year][$month][$taskName] = 1;
        } else {
            // Ajouter la durée à la durée existante pour ce nom de tâche
            $taskDurations[$taskName] += $taskDuration;
            $taskCounts[$taskName]++;
            $tempT += $taskDuration;
            $taskCountPerYearMonth[$year][$month][$taskName]++;
        }
    }

    // Calculer la proportion pour chaque tâche
    foreach ($labels as $label => $value) {
        $taskPercent[$label] = ceil(($taskDurations[$label] * 100) / $tempT);
    }

    // Afficher le tableau résultant pour le nombre de tâches par année et mois
    echo '<pre>';
    print_r($taskCountPerYearMonth);
    echo '</pre>';
}    
?>

<?php
$taskDurations = [];
$labels = [];
$data1 = [];
$data2 = [];
$taskCounts = [];
$taskDate = [];
$tempT =0;

if (isset($_SESSION['tasks'])) {                         
    foreach ($_SESSION['tasks'] as $task) {
        $taskName = $task->getNameTask();
        $taskDuration = $task->getDuration();
        $taskDate = $task->getDateAdded();

        // Vérifier si le nom de tâche existe déjà dans le tableau des labels
        if (!in_array($taskName, $labels)) {
            $labels[] = $taskName;
            $taskDurations[$taskName] = $taskDuration;
            $taskCounts[$taskName] = 1;
            $taskDates[$taskName] = $taskDate;
            $tempT += $taskDuration;
        } else {
            // Ajouter la durée à la durée existante pour ce nom de tâche
            $taskDurations[$taskName] += $taskDuration;
            $taskCounts[$taskName]++;
            $tempT += $taskDuration;
        }
    }

    foreach ($labels as $label) {
        // Detaillé
        $taskPercent[$label] = ceil(($taskDurations[$label]*100) / $tempT);       
    }
    /*
    foreach() {
        $taskCountPerMonth[$month] = $taskCounts;
    }
    */
}
echo $taskDurations['DIY'];
foreach ($labels as $label) {
    echo "<p>Nom de la tâche : $label</p>";
    echo "<p>Total de la durée : $taskDurations[$label] minutes</p>";
    echo "<p>Nombre de fois effectuée : $taskCounts[$label]</p>";
    echo "<p>$taskDates[$label]</p>";
    echo "<p>$taskPercent[$label]</p>";
    echo "<hr>";
}

$DIY = "DIY";
echo "<p>Total de la durée : $taskDurations[$DIY] minutes</p>";
echo "<p>Nombre de fois effectuée : $taskCounts[$label]</p>";
$pour = ($taskDurations[$DIY] * 100)/$tempT;
echo $tempT;
echo $taskDurations[$label];
?>