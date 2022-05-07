<?php
session_start();
session_destroy();
?>
<body background="http://careercube.com.my/report/images/bg.jpg">
	
<?php
echo "<center><strong><br/><br/><h2>You have successfully Log out from the system...</strong><br/><br/>Redirecting to the home page...</h2>
<br><br/><img src=\"http://careercube.com.my/report/image/loadink.gif\"></img></center> <br/>
<script language=\"javascript\" type=\"text/javascript\">
window.setTimeout('window.location=\"../index.php\";',3000);
</script></center>";
?>
</body>