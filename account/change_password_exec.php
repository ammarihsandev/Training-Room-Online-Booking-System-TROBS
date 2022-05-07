<?php
session_start();
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
							PASSWORD<span class="highlight-color"> UPDATE</span>
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
	 $Client_Password=$_REQUEST['User_password'];
	  $query2 = "SELECT * FROM client WHERE Client_ID = '".$_SESSION['myid']."'";
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
$ToSubject = "Zon Cubic – Emel Pengesahan ";
$EmailBody =   "  
Kepada Tuan/Puan $Client_Name, \n
Anda telah berjaya memperbaharui kata laluan anda. Maklumat adalah seperti berikut: \n
 \n
Emel: $Client_Email \n
Kata Laluan: $Client_Password
 \n \n 
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
	 
	 
