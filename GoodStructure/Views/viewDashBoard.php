<link rel="stylesheet" href="Public/css/dashboard.css">
<div id="body">
    <div id="divBoutonTache">
        <!-- Bouton d'ajout de tâches -->
        <button id="boutonTaches" type="button">Register a new task</button>
        <div>
            <!-- Pour enzo -->
        </div>
    </div>

    <!-- Titre des graphiques -->
    <div id="titreDashboard">
        <div id="piechart">
            <h1>Tasks distribution</h1>
            <canvas id="cv"></canvas>
        </div>
        <div id="separator"></div>
        <div id="barchart">
            <h1>Average duration for each task</h1>
            <canvas id="coucou"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('cv');

  new Chart(ctx, {
    type: 'doughnut',
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

<script>
    
  const ctx = document.getElementById('coucou');

    new Chart(ctx, {
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