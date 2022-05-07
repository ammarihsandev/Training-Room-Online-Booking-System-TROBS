<?php
session_start();  ?>
<!DOCTYPE html> 
    <head> 
    </head>
    <body>
	<br/><br/>
        <div class="container"> 


<?php
include('connect.php');

$Client_Email = $_REQUEST['Client_Email'];
$Client_Password = $_REQUEST['Client_Password'];
 

$query= "SELECT * FROM client WHERE Client_email='".$Client_Email."' AND Client_Password='".$Client_Password."'";
$result=mysql_query($query);
$count=mysql_num_rows($result);	
if($count == 1)
 {
 $row = mysql_fetch_array($result);
  $_SESSION['myid'] = $row['Client_ID'];
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"account/\";
</script>";

}
  
 else

 {
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"login.php?n=1\";
</script>";
 }
 
?>
          		 
          		 
        </div>
    </body>
</html>