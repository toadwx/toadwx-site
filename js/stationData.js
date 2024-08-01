// Update Intervals
stn_intvl = 300 * 1000;

// Initial load
$(document).ready(function() {
  updateStn();
  setInterval(updateStn, stn_intvl);
});

function updateStn() {
  loadJSON("https://mesonet.agron.iastate.edu/json/current.py?network=NC_ASOS&station=JQF", parseStn,'jsonp');
}

function parseStn(data){
  
  //--------------------------------------------------------------------
  // Parse JSON data
  //--------------------------------------------------------------------
  var stnID = data["id"];
  var obsData = data["last_ob"];
  var dateTime = obsData["local_valid"];
  var barometer = obsData["altimeter[in]"];
  var outTemp = obsData["airtemp[F]"];
  var dewpoint = obsData["dewpointtemp[F]"];
  var wndspd = obsData ["windspeed[kt]"];
  var wnddir = obsData["winddirection[deg]"];
  var rainTot = obsData["precip_today[in]"];
  var maxT = obsData["max_dayairtemp[F]"];
  var minT = obsData["min_dayairtemp[F]"];
  var skyCover = obsData["skycover[code]"][0];
  var currWx = obsData["presentwx"][0];
  
  //--------------------------------------------------------------------
  // Modify data to our liking (units, SI units, the works)
  //--------------------------------------------------------------------
  var barometer = barometer * 33.8637526;
  var outTemp = parseInt(outTemp);
  var dewpoint = parseInt(dewpoint);
  var barometer = parseFloat(barometer).toFixed(1);
  var wndspd = parseInt(wndspd);
  var wnddir = parseInt(wnddir);
  var rainTot = parseFloat(rainTot).toFixed(2);
  var maxT = parseInt(maxT);
  var minT = parseInt(minT);
  
  // If NaN value for rain total, correct to 0.00
  if (isNaN(rainTot)){
    var rainTot = parseFloat(0.00).toFixed(2);
  }
  
  //--------------------------------------------------------------------
  // Update html content
  //--------------------------------------------------------------------
  document.getElementById("datetim").innerHTML = "<i>" + dateTime + "</i>";
  document.getElementById("T").innerHTML = outTemp + "&#176;F";
  document.getElementById("Td").innerHTML = dewpoint + "&#176;F";
  document.getElementById("p").innerHTML = barometer + " mb";
  document.getElementById("w").innerHTML = wndspd + " mph (" + wnddir + "&#176;)";
  document.getElementById("r").innerHTML = rainTot + " in";
  document.getElementById("today-climo").innerHTML = maxT + "&#176;F / " + minT + "&#176;F";
  
}