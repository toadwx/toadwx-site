<html>
    <head>
        <?php include("header.php");?>

        <script>
			// UNCC ARCHIVE FORM VALIDATION
			// The form is validated before it can even be sent to the PHP Script...
			unccArchiveValidate(form)
			{
				fail = ""
				if (form.startDate.value == "") fail = "No Start Date Was Entered!\n"
				else if (form.endDate.value == "") fail = "No End Date Was Entered!\n"
				
				if (fail == "") {
					return true
				} 
				else {alert(fail); return false }
			}
		</script>
    </head>
    <body>
        <?php include("navbar.php");?>
        
        <div class="app-container">
            <h3>McEniry Weather Station Archive</h3>
            <div>
                <p>
                    This will allow you to download data from our Davis Instruments Vantage Pro 2 
                    weather station. Data is available from 25-Jan-2015 19:20 through XXXXXX.
                    <br><br>
                    Limit the size of your request to avoid any memory errors.
                    <br><br>
                </p>
                <form method="post" action="download-data-req.php" onsubmit="return unccArchiveValidate(this)" class="downloadDialog">
                    Start Date: <input type="datetime-local" name="startDate" min="2015-01-25T19:20:00"><br>
                    End Date: <input type="datetime-local" name="endDate" min="2015-01-25T19:20:00"><br>
                <input type="submit" value="Download CSV">
		</form>
            </div>
        </div>

        <?php include("footer.php");?>

    </body>
</html>