document.addEventListener('DOMContentLoaded', function() {
    
/*
function ShowGraph1() {
    const labels = JSON.parse(document.getElementById('labels').value);
    
    const data1 = JSON.parse(document.getElementById('data1').value);
    
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

    
};

function ShowGraph2(){
    const labels = JSON.parse(document.getElementById('labels').value);
    const ctx2 = document.getElementById('myChart2');
    const data2 = JSON.parse(document.getElementById('data2').value);
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
};

function ShowGraphs(){
    ShowGraph1();
    ShowGraph2();
};

window.addEventListener('load',ShowGraphs);
*/


document.getElementById('exportButton').addEventListener('click', function(event) {
    const selectedMonth = document.getElementById('monthPDF').value;
    const selectedYear = document.getElementById('yearPDF').value;
    /*
    // get size of report page
    var reportPage = document.getElementById('reportPage');
    var reportPageHeight = reportPage.clientHeight;
    var reportPageWidth = reportPage.clientWidth;
    
    // create a new canvas object that we will populate with all other canvas objects
    var pdfCanvas = document.createElement('canvas');
    pdfCanvas.id = 'canvaspdf';
    pdfCanvas.width = reportPageWidth;
    pdfCanvas.height = reportPageHeight;
    var pdfctx = pdfCanvas.getContext('2d');
    var pdfctxX = 0;
    var pdfctxY = 0;
    var buffer = 100;
    
    // for each chart.js chart
    document.querySelectorAll('canvas').forEach(function(chartCanvas, index) {
        // get the chart height/width
        var canvasHeight = chartCanvas.clientHeight;
        var canvasWidth = chartCanvas.clientWidth;
        
        // draw the chart into the new canvas
        pdfctx.drawImage(chartCanvas, pdfctxX, pdfctxY, canvasWidth, canvasHeight);
        pdfctxX += canvasWidth + buffer;
        
        // our report page is in a grid pattern so replicate that in the new canvas
        if (index % 2 === 1) {
            pdfctxX = 0;
            pdfctxY += canvasHeight + buffer;
        }
    });
    */
    // create new pdf and add our new canvas as an image
    var pdf = new jsPDF(); // 'l', 'pt', [reportPageWidth, reportPageHeight]
    pdf.text(`Recapitulatif de ${getMonthName(selectedMonth)} ${selectedYear}`, 20, 20);
    // pdf.addImage(pdfCanvas.toDataURL('image/png'), 'PNG', 0, 0);
    
    // download the pdf
    pdf.save(`recap_${selectedMonth}_${selectedYear}.pdf`);

    
});

// Fonction pour obtenir le nom du mois en lettres
function getMonthName(month) {
    const months = [
        "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
        "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"
    ];

    return months[parseInt(month, 10) - 1];
}
});
