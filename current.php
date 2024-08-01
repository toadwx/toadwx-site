<html>
    <head>
        <?php include("header.php");?>
    </head>
    <body>
        <?php include("navbar.php");?>
        
        <div class="app-container">
        <h3>Current Conditions</h3>
        <div>
            <label class="radio-container">24 hours
                <input type="radio" name="timescaleRadio" value="24-hr">
                <span class="radio-checkmark"></span>
            </label>
            <label class="radio-container">48 hours
                <input type="radio" checked="checked" name="timescaleRadio" value="48-hr">
                <span class="radio-checkmark"></span>
            </label>
            <label class="radio-container">72 hours
                <input type="radio" name="timescaleRadio" value="3-day">
                <span class="radio-checkmark"></span>
            </label>
            <label class="radio-container">Custom 24 hour period ending:
                <input type="radio" name="timescaleRadio" value="custom">
                <span class="radio-checkmark"></span>
            </label>
            <input id="customDatePick" type="date" name="customDatePick">
        </div>
        <div class="tab">
            <button id="defaultTabButton" class="tablinks active" onclick="openTab(event, 'tempChartCont')">Temperatures</button>
            <button class="tablinks" onclick="openTab(event, 'prcpChartCont')">Precipitation</button>
            <button class="tablinks" onclick="openTab(event, 'windChartCont')">Wind</button>
            <button class="tablinks" onclick="openTab(event, 'tableChartCont')">Data Table</button>
        </div>
        <div id="tempChartCont" class="tabcontent" style="display:block"><div id="tempChart"></div></div>
        <div id="prcpChartCont" class="tabcontent"><div id="prcpChart"></div></div>
        <div id="windChartCont" class="tabcontent"><div id="windChart"></div></div>
        <div id="tableChartCont" class="tabcontent">
            <button id="downloadCSV" onclick="tableToCSV('tableChart')">Download CSV</button>
            <table id="tableChart" class="data-table"></table>
        </div>
        </div>
    
        <?php include("footer.php");?>
        
        <script type="text/javascript" src="js/currentConditions.js"></script>
    </body>
</html>