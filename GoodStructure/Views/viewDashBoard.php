<link rel="stylesheet" href="Public/css/dashboard1.css">
<div id="body">
    <div id="divBoutonTache">
            <!-- Bouton d'ajout de tâches -->
            <button id="boutonTaches" type="button">Register a new task</button>
            <div>
                    <!-- Pour enzo -->
            </div>
    </div>

    <!-- Graphiques -->
    <div id="titreDashboard">
        <div id="piechart">
            <h1>Tasks distribution</h1>
            <div style="position: relative; height: 380px">
                <canvas id="myChart1"></canvas>
            </div>
        </div>
        <div id="barchart">
            <h1>Average duration for each task</h1>
            <div style="position: relative">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx1 = document.getElementById('myChart1');

    new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: ["A", "B"],
            datasets: [{
                label: '# of Votes',
                data: [20, 30],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    const ctx2 = document.getElementById('myChart2');

    new Chart(ctx2, {
        type: 'bar',
        data: {
                labels: ["A", "B"],
                datasets: [{
                label: '# of Votes',
                data: [20, 30],
                borderWidth: 1
                }]
        },
        options: {
                scales: {
                y: {
                        beginAtZero: true
                }
                }
        }
    });
</script>