<div class="footer-row">
    <div>
        <button id="footer-toggle">
            <h3>
                <span class="open-text">CLICK FOR MORE</span>
                <span class="close-text" hidden>LESS</span>
            </h3>
        </button>
    </div>
    <div>
        <div class="social-container">
            <img alt="UNC Charlotte Logo" class="footer-logo" src="images/charlotte-logo-footer.png"/>
        </div>
    </div>
</div>

<span id="footer-span" hidden>
<div class="page-footer">
    <img src="images/background_clt.jpg" class="back-image"/>
    <div class="footer-container">
        <div class="col">
            <h3>Campus Links</h3>
            <ul>
                <li><a href="https://emergency.charlotte.edu" title="Alerts and Advisories at UNC Charlotte">Alerts</a></li>
                <li><a href="https://jobs.charlotte.edu" title="Jobs at UNC Charlotte">Jobs</a></li>
                <li><a href="https://giving.charlotte.edu" title="Make a gift to UNC Charlotte">Make a Gift</a></li>
                <li><a href="https://maps.charlotte.edu" title="Directions to UNC Charlotte">Maps / Directions</a></li>
                <li><a href="https://accessibility.charlotte.edu" title="Accessibility resources at UNC Charlotte" style="vertical-align: top;"><i class="fa fa-wheelchair" aria-hidden="true"></i> Accessibility</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>Resources</h3>
            <ul>
                <li><a href="https://www.charlotte.edu/gateway/alumni-friends" title="Alumni and Friends">Alumni &amp; Friends</a></li>
                <li><a href="https://www.charlotte.edu/gateway/faculty-staff" title="Faculty and Staff">Faculty &amp; Staff</a></li>
                <li><a href="https://www.charlotte.edu/gateway/prospective-students" title="Prospective Students">Prospective Students</a></li>
                <li><a href="https://www.charlotte.edu/gateway/community" title="Community">Community</a></li>
                <li><a href="https://www.charlotte.edu/gateway/current-students" title="Current Students"> Current Students</a></li>
                <li><a href="https://www.charlotte.edu/gateway/parents-family" title="Parents and Family"> Parents and Family</a></li>
            </ul>
        </div>

        <div class="col">
            <h3>Stay In Touch</h3>
            <div class="social">
                <a href="https://www.facebook.com/UNCCharlotte" target="_blank"><span class="fa fa-facebook" title="Facebook"></span><span class="sr-only">facebook</span></a>
                <a href="https://www.instagram.com/unccharlotte/" target="_blank"><span class="fa fa-instagram" title="Instagram"></span><span class="sr-only">instagram</span></a>
                <a href="https://www.flickr.com/photos/stakeyourclaim/sets/" target="_blank"><span class="fa fa-flickr" title="Flickr"></span><span class="sr-only">flickr</span></a>
                <a href="https://www.linkedin.com/school/166586/" target="_blank"><span class="fa fa-linkedin" title="LinkedIn"></span><span class="sr-only">linkedin</span></a>
                <a href="https://twitter.com/UNCCharlotte" target="_blank"><span class="fa fa-twitter" title="Twitter"></span><span class="sr-only">twitter</span></a>
                <a href="https://www.youtube.com/user/unccharlottevideo" target="_blank"><span class="fa fa-youtube-play" title="YouTube"></span><span class="sr-only">youtube</span></a>
                <a href="https://maps.charlotte.edu" target="_blank"><span class="fa fa-map-marker" title="Maps"></span><span class="sr-only">maps</span></a><br/>
                <p class="small"><a href="https://www.charlotte.edu" title="www.charlotte.edu">The University of North Carolina at Charlotte</a><br/>9201 University City Blvd, Charlotte, NC 28223-0001<br/>704-687-8622</p>
                <p class="small">&copy; 2023 UNC Charlotte | All Rights Reserved <br/> <a href="https://www.charlotte.edu/contact" title="Contact Us">Contact Us</a> | <a href="https://legal.charlotte.edu/termsofuse" title="Terms of Use">Terms of Use</a> | <a href="https://legal.charlotte.edu/policies" title="University Policy"> University Policies</a><br /><a href="https://incidentreport.charlotte.edu/" title="Report a Concern">Report a Concern</a></p>
            </div>
        </div>
    </div>
</div>
</span>

<script type='text/javascript'>
$(function(){

    $('.open-text').click(function(){
        $('.open-text').hide();
        $('.close-text').show();
        $('#footer-span').show();
    });

    $('.close-text').click(function(){
        $('.close-text').hide();
        $('#footer-span').hide();
        $('.open-text').show();
    });

});
</script>