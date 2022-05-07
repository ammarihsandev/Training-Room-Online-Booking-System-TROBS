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
$_SESSION['myid'] = $_SESSION['myid'];
$query="SELECT * FROM client WHERE Client_ID='".$_SESSION['myid']."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

echo " 
<center>
<table width=\"100%\" style=\"border-width: 2px; border-style: dotted; border-color: white; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td><br/>
<center><table>
<tr><td>
 <p class=\"fa fa-folder-open\">  
 Updating the user information. ID: <b>".$result['Client_ID']."</b></p><br/>
<form action=\"modify_profile_exec.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"editprofile\">
<input type=\"hidden\" name=\"proimage\" value=\"".$result['Client_Img']."\">
  <center><table>
 <tr><td><b>Nama </b></td><td><input class=\"form-control\" type=\"text\" name=\"Client_Name\" value=\"".$result['Client_Name']."\" required  ><br /></td></tr>
 <tr><td><b>No Telefon </b></td><td><input class=\"form-control\" type=\"text\" name=\"Client_Phone\" value=\"".$result['Client_Phone']."\" required  ><br /></td></tr> 
 <tr><td><b>Alamat Emel</b></td><td><input type=\"text\" name=\"Client_Email\" value=\"".$result['Client_Email']."\" required  class=\"form-control\" ><br/></td></tr>
".$isstudent."
 <tr><td><b>Gambar Profil</b></td><td><input type=\"file\" name=\"image\" value=\"Upload Profile Picture\" /></td></tr>
 <tr><td colspan=\"2\"><center><br/><input  type=\"submit\" class=\"btn btn-default\" name=\"go\" value=\"Kemaskini Maklumat\" onclick=\"alert(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value);\"></center></td></tr>
 </table></center></form>
<br /></td></tr></table></center></td></tr></table></center>	";

	?>
	

            </div>
        </div>
 
	 <div class="col-xs-12 col-sm-2 col-md-2"></div>
	  <!--Booking History --> 
	     </div>  
	     
	 <br/><Br/> 
<?php
include("footer.php");
?>	
	 
	 
