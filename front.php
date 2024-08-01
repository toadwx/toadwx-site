<div class="main">
    
    <div class="upper">
        <div class="current">
            <h3>Current Conditions</h3>
            
            <table style="width:75%;margin-left:12%;">
                <tbody>
                    <tr>
                        <td style="text-align:center">
                            <div id="current_img"></div>
                        </td>
                        <td style="text-align:center;font-size:0.7em;">
                            <div id="current_cond" style="font-size:1.7em"></div>
                            
                            <div><i>Last Updated:</i></div>

                            <div id="datetim"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <table style="width:75%; margin-left:12%;" class="curr-table">
                <tbody>
                    <tr>
                        <td>Temperature</td>
                        <td id="T" style="text-align:right;"></td>
                    </tr>
                    <tr>
                        <td>Dew Point</td>
                        <td id="Td" style="text-align:right;"></td>
                    </tr>
                    <tr>
                        <td>Pressure</td>
                        <td id="p" style="text-align:right;"></td>
                    </tr>
                    <tr>
                        <td>Wind</td>
                        <td id="w" style="text-align:right;"></td>
                    </tr>
                    <tr>
                        <td>Today's High/Low</td>
                        <td id="today-climo" style="text-align:right;"></td>
                    </tr>
                    <tr>
                        <td>Daily Rainfall</td>
                        <td id="r" style="text-align:right;"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="forecast">
            <h3>Short-Term Forecast</h3>
            
            <table>
                <tbody>
                    <tr>
                        <td id="day0"></td>
                        <td id="day1"></td>
                        <td id="day2"></td>
                        <td id="day3"></td>
                        <td id="day4"></td>
                        <td id="day5"></td>
                    </tr>
                    <tr>
                        <td id="day0_img"></td>
                        <td id="day1_img"></td>
                        <td id="day2_img"></td>
                        <td id="day3_img"></td>
                        <td id="day4_img"></td>
                        <td id="day5_img"></td>
                    </tr>
                    <tr>
                        <!--<td><br/></td>-->
                    </tr>
                    <tr>
                        <td id="day0_temp"></td>
                        <td id="day1_temp"></td>
                        <td id="day2_temp"></td>
                        <td id="day3_temp"></td>
                        <td id="day4_temp"></td>
                        <td id="day5_temp"></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div id="forecasterName" class="forecast-attribution">Forecast by: Ricky Matthews</div>
        </div>
        
        <!--<div class="tweets">
            <a class="twitter-timeline" data-height="400" data-width="400" href="https://twitter.com/UNCCWeather?ref_src=twsrc%5Etfw">Tweets by UNCCWeather</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div> -->
    </div>
    <br>
    <div class="lower">
        <a href="storm.php" class="graphic-link w50">
            <img src="images/clt-lightning.jpg" class="graphic-link-image">
            <div class="graphic-link-overlay">
                <h2>STORM</h2>
                Student Organization of Meteorology
            </div>
        </a>
        <a href="https://geoearth.charlotte.edu/undergraduate-programs/meteorology" class="graphic-link w50">
            <img src="images/metr_group.jpg" class="graphic-link-image">
            <div class="graphic-link-overlay">
                <h2>Meteorology at Charlotte</h2>
                Learn more about the Meteorology Program
            </div>
        </a>

    </div>

</div>
