<?php
include("header.php"); 
include("../connect.php"); 
?>
<style> 

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style> 
	 
		  <br/><br/> 
	<!--Booking History --> 
	 <div class="content-head center">
						<h3 class="center_divider">
							<em>
							<span class="head-tngl-left1"></span>
							<span class="head-tngl-left2"></span>
							<span class="head-tngl-left3"></span>
							PROFILE<span class="highlight-color"> INFORMATION</span>
							<span class="head-tngl-right1"></span>
							<span class="head-tngl-right2"></span>
							<span class="head-tngl-right3"></span>
							</em>
						</h3> 
					</div>

				
			<center><p>View your Profile Information.</p></center>
			<br/><br/> 

<div class="col-xs-12 col-sm-3 col-md-3"></div>
         
		 <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
               


                            
  
<?php
	 $Client_Password=$_REQUEST['Client_Password'];
	  $query2 = "SELECT * FROM CCRS_user WHERE Client_ID = '".$_SESSION['myid']."'";
	 $resource2=mysql_query($query2,$link) or die ("");
	$row2=mysql_fetch_array($resource2);
	 		
	 $query="UPDATE client SET Client_Password ='".$Client_Password."' WHERE Client_ID='".$_SESSION['myid']."'";
	
		   if(!mysql_query($query,$link))
		  {die ;}
		  else
		 {
		 echo "
		<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> Your Password updated successfully </p>.
                            </div></center>
";}
$Client_Email = $row2['Client_Email'];
$Client_Name = $row2['Client_Name'];

$email="ask@mytrainingcube.com";
$ToEmail =$Client_Email;
$ToSubject = "Cubic Zon | Password Changed";
$EmailBody =   "
Cubic Zon Email Confirmation\n\n
Dear $Client_Name, You just update your password. Your new information: \n
Email: $Client_Email \n
Password: $Client_Password\n
\n\n";

$Message = $EmailBody;
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$email."\r\n";
mail($ToEmail,$ToSubject,$Message, $headers);
	 ?>
	

            </div>
        </div>
 
	 
	  <!--Booking History --> 
	     </div>  
	     
	 <br/><Br/> 
<?php
include("footer.php");
?>	
	 
	 
