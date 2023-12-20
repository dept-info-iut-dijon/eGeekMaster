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
        <option value="01">Janvier</option>
        <option value="02">Février</option>
        <option value="03">Mars</option>
        <option value="04">Avril</option>
        <option value="05">Mai</option>
        <option value="06">Juin</option>
        <option value="07">Juillet</option>
        <option value="08">Août</option>
        <option value="09">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Décembre</option>
    </select>

    <p id="year">Year :</p>
    <select id="year">
        <option value="2024">2024</option>
    </select>

    <button id="exportButton">Export PDF</button>

    <script src="Public/Animation_js/exportPDF.js"></script>