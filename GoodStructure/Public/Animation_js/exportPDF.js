document.getElementById('exportButton').addEventListener('click', function () {
    // Get selected month and year
    var selectedMonth = document.getElementById('month').value;
    var selectedYear = document.getElementById('year').value;

    // You can perform further actions here, such as sending data to a server or generating a PDF.
    // For now, let's log the selected values to the console.
    console.log('Selected Month:', selectedMonth);
    console.log('Selected Year:', selectedYear);
});