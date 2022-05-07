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

$query= "SELECT * FROM admin WHERE admin_email='".$Client_Email."' AND admin_password='".$Client_Password."'";
$result=mysql_query($query);
$count=mysql_num_rows($result);	
if($count == 1)
 {
 $row = mysql_fetch_array($result);
  $_SESSION['adminid'] = $row['admin_ID'];
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"admin/\";
</script>";

}
  
 else

 {
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"admin.php?n=1\";
</script>";
 }
 
?>
          		 
          		 
        </div>
    </body>
</html>