// On-Load
$(function() {
    // Initialize Default Chart
    loadGraphs();
});

function loadGraphs() {
    var stationGraph = new purpleChart("pm25Chart", "6022", "pm2.5_alt");
    var stationGraph2 = new purpleChart("pm10Chart", "6022", "pm10.0_atm");
}

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
} 

class purpleChart { 
    LOADING_BAR = `<img src='images/Bar Chart-1s-200px.gif'>`;
    /**
     * 
     * @param {string} chartDiv ID of HighCharts container
     * @param {string} Station ID number for PurpleAir API
     * @param {string} PM data variable of interest
     */
    constructor(chartDiv, stationID, pmType) {
        this.chartDiv = chartDiv;
        this.stationID = stationID;
        this.pmType = pmType;
        document.getElementById(chartDiv).innerHTML = this.LOADING_BAR;
        
        const instance = this; // Object reference for inside the deferred then
        
        // Handles multiple deferred calls so we dont end up with a nested mess
        $.when(
            instance.getPurpleData(instance.stationID, instance.pmType)
        ).then(function(stnData) {
            // Check for errors
            // Combine JSON data into one package
            instance.stnData = stnData["data"];
            
            instance.createAQChart();
        }, function() {
            instance.exception("There was an error recieving data from PurpleAir");
        });
    }
    
    /**
     * Gets 3-day obs data from PurpleAir Sensor on campus, returns AJAX call
     */
    getPurpleData(stn, pmVar)
    {
        var apiKey = "230A24F3-C3F6-11ED-B6F4-42010A800007"
        var purpleURL = "https://api.purpleair.com/v1/sensors/" + stn + "/history?fields=" + pmVar + "&api_key=" + apiKey;
        
        return $.ajax({
            timeout: 10000,
            url: purpleURL,
            type: 'GET',
            crossDomain: true
        });
    }
    
    /**
     * Creates the HighChart chart for the StnData in object
     */
    createAQChart() {
        this.chartData = {}
        this.chartData["data"] = [];
        this.chartData["timeStamps"] = [];

        // Loop through each day of data
        for (var i=0; i < this.stnData.length; i++) {
            var valid_date = this.stnData[i][0] * 1000;
            
            this.chartData["data"].push([valid_date,this.stnData[i][1]]);
            this.chartData["timeStamps"].push(valid_date);
        } 
        this.chartData["data"].sort();
        
        // Build Chart
        this.chartTitle =  this.pmType + " - UNC Charlotte Campus";
        this.chartSubTitle = "3-Day History";
        this.airQualityChart();
    }

    airQualityChart()
    {
        this.chartInstance = Highcharts.chart(this.chartDiv, {
            chart: {
                type: 'spline',
                height: '40%',
            },
            exporting: {
                sourceHeight: 1080,
                sourceWidth: 1920,
            },
            title: {
                text: this.chartTitle,
            },
            subtitle: {
                text: this.chartSubTitle,
            },
            xAxis: {
                title: {
                    text: "Valid Local Time"
                },
                type: 'datetime',
                labels: {
                    rotation: -35,
                    formatter: function() {
                        return Highcharts.dateFormat('%b-%d %H:%M', this.value);
                    }
                }
            },
            yAxis: {
                title: {
                    text: this.pmType,
                },
            },
            plotOptions: {
                series : {
                    lineWidth: 2,
                    marker: {
                        enabled: true,
                        symbol: 'circle',
                        radius: 3,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [
              {
                name: this.pmType,
                data: this.chartData["data"],
                color: "#CB0003",
              },
            ],
            credits: {
                enabled: true,
                text: 'PurpleAir',
                href: 'https://www.purpleair.com/',
            },
        });
        this.chartInstance.reflow();
    }
    
    /**
     * Handles exceptions
     */
    exception(message) {
        document.getElementById(this.chartDiv).innerHTML = message;
    }
}