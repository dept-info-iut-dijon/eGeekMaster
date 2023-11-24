<!-- 
autor : Lola Cohidon
author : Théo Cornu
-->
<link rel="stylesheet" href="Public/css/followUp16.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="Public/Animation_js/followUp3.js"></script>

<div id = "viewFollowUp">

    <!-- Header -->
    <div id="Person">
        <h1 id="PersonTitle">Surname Name</h1> <!--Displaying the user's first and last name-->
    </div>
    <!--Buttons-->
    <div class="buttons">
        <button id="suiviD" >Detailed tracking</button>
        <div class="line"></div>
        <button id="suiviG" >Overall tracking</button>
    </div>
    <!--Detailed tracking-->
    <input type="hidden" id="data2" value="<?= htmlspecialchars(json_encode($taskCountPerYearMonth)) ?>">


    
</div>


    




