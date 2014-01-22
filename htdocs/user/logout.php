<?php
/*
	user/logout.php

	allows a user to logout of the site.

*/

class page_output
{
	function check_permissions()
	{
		return user_online();
	}

	function check_requirements()
	{
		// nothing todo
		return 1;
	}

	
	function execute()
	{
		// nothing todo
		return 1;
	}


	function render_html()
	{
		/////////////////////////
	
		print "<h3>USER LOGOUT</h3>";
	
		print "<form id=\"logoutForm\" method=\"POST\" action=\"user/logout-process.php\">
		<input type=\"submit\" value=\"Click here if you are not redirected\">
		</form>";
		
		print "<script type=\"text/javascript\">
    		document.getElementById('logoutForm').submit(); 
		</script>";
		/////////////////////////
	}
}


?>
