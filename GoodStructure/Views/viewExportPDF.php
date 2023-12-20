<!-- author : Lola Cohidon-->
<link rel="stylesheet" href="Public/css/exportPDF2.css">
<div id="PDFpage">
    <!--Title of the page-->
    <div id="titlePDF">
        <h1>Export PDF</h1>
    </div>
    <!--Text to explain the page-->
    <div id="textPDF">
        <p>Export a summary of the chosen month to PDF:</p>
    </div>
    <!--Form to choose the date-->
    <p id="month">Month :</p>
    <!--Select the month-->
    <select id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>

    <p id="year">Year :</p>
    <select id="year">
        <option value="2024">2024</option>
    </select>

    <button id="exportButton">Export PDF</button>

    <script src="Public/Animation_js/exportPDF.js"></script>