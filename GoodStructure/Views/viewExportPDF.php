<!-- author : Lola Cohidon-->
<link rel="stylesheet" href="Public/css/exportPDF1.css">
<div id="PDFpage">

    <!--Title of the page-->
    <div id="titlePDF">
        <h1>Export PDF</h1>
    </div>
    <!--Form to choose the date-->
    <p id="chooseDate">Choose the date :</p>
    <!--Select the month-->
    <div class="selectMonth">
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
    </div>    
    <label for="year">Année :</label>
    <select id="year">
        <option value="2024">2024</option>
    </select>

    <button id="exportButton">Export PDF</button>

    <!-- Lien vers le fichier JavaScript externe -->
    <script src="script.js"></script>