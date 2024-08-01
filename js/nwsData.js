// Update Intervals
fcst_intvl = 3600 * 1000;
student_fcst = false;

// Initial load
$(document).ready(function() {
  updateFcst();
  setInterval(updateFcst, fcst_intvl);
});

function updateFcst() {
  loadJSON("https://forecast.weather.gov/MapClick.php?lon=-80.73204&lat=35.30629&FcstType=json", parseFcst,'jsonp');
}

// loadJSON method to open the JSON file.
function loadJSON(path, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        success(JSON.parse(xhr.responseText));
      }
      else {
        error(xhr);
      }
    }
  };
  xhr.open('GET', path, true);
  xhr.send();
}

function parseFcst(Data) {
  
  // Forecast variables
  var days = Data['time']['startPeriodName'].slice(0,6);
  var tempLabels = Data['time']['tempLabel'].slice(0,9);
  var tempVals = Data['data']['temperature'].slice(0,9);
  var icons = Data['data']['iconLink'].slice(0,9);
  
  // Current obs variables
  var currIcon = 'https://forecast.weather.gov/newimages/medium/' + Data['currentobservation']['Weatherimage'];
  var currCond = Data['currentobservation']['Weather'];
  
  // Hazardous weather
  var hazards = Data['data']['hazard'];
  
  // Update 5-day forecast images/temps
  for (let i = 0; i < days.length; i++) {
    var dayId = "day" + i;
    
    if (tempLabels[i] == 'Low') {
      var labColor = 'blue';
    } else {
      var labColor = 'red';
    }
    
    document.getElementById(dayId).innerHTML = "<b>" + days[i] + "</b>";
    document.getElementById(dayId+"_img").innerHTML = "<img src=" + icons[i] + " />";
    document.getElementById(dayId+"_temp").innerHTML = "<span style='color:"+labColor+";'><b>" + tempLabels[i] + ": " + tempVals[i] + "&#176;F</b></span>";
  }
  
  // Update front page current conditions
  document.getElementById("current_img").innerHTML = "<img src=" + currIcon + " />";
  document.getElementById("current_cond").innerHTML = "<b>" + currCond + "</b>";
  
  // Update appropriate forecast attribution
  if (student_fcst){
    document.getElementById("forecasterName").innerHTML = "Forecast by: Ricky Matthews";
  }else{
    document.getElementById("forecasterName").innerHTML = "Forecast by: National Weather Service - GSP";
  }

}