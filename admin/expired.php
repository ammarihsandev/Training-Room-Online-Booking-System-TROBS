<?php
session_start();
session_destroy();
?>
	
<?php
echo "<center><strong><br/><br/>You're Session already Expired...</strong><br/><br/>Please Re-Login to continue your activity...<br/><br/><br/>Redirecting to the home page...
<br><br/><img src=\"http://report.careercube.com.my/account/image/loadink.gif\"></img></center> <br/>
<script language=\"javascript\" type=\"text/javascript\">
window.setTimeout('window.location=\"../login.php\";',3000);
</script></center>";
?>