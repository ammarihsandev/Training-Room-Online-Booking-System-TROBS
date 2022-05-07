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
	 

<center><h1><b><font color="orange">-{ UPDATE CLIENT PROFILE }-</font></b></h1></center>
<br/><br/>

<div class="col-xs-12 col-sm-3 col-md-3"></div>
         
		 <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                 <?php 
$query="SELECT * FROM client WHERE Client_ID='".$_REQUEST['id']."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);

$queryr="SELECT * FROM client WHERE Client_ID='".$result['Client_ID']."'";
	$resourcer=mysql_query($queryr,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$resultr=mysql_fetch_array($resourcer);


echo " 
<center>
<table width=\"100%\" style=\"border-width: 2px; border-style: dotted; border-color: white; border-radius: 25px; background-color: #FAFAFA;\" ><tr><td><br/>
<center><table>
<tr><td>
 <p class=\"fa fa-folder-open\">   Client ID: <b>".$resultr['Client_ID']."</b></p><br/>
<form action=\"updateprofile_exec.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"editprofile\"> 
  <center><table> 
 <tr><td><b>Name </b></td><td><input class=\"form-control\" type=\"text\" name=\"Client_Name\" value=\"".$result['Client_Name']."\" required  ><br /></td></tr>  
 <tr><td><b>Email</b></td><td><input type=\"text\" name=\"Client_Email\" value=\"".$result['Client_Email']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Phone</b></td><td><input type=\"text\" name=\"Client_Phone\" value=\"".$result['Client_Phone']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Company</b></td><td><input type=\"text\" name=\"Client_Company\" value=\"".$result['Client_Company']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Loyalty Level</b></td><td><input type=\"text\" name=\"Loyalty\" value=\"".$result['Loyalty']."\" required  class=\"form-control\" ><br/></td></tr> 
 <tr><td><b>Loyalty History</b></td><td><input type=\"text\" name=\"Loyalty_history\" value=\"".$result['Loyalty_history']."\" required  class=\"form-control\" ><br/></td></tr> 
 <input type=\"hidden\" name=\"Client_ID\" value=\"".$result['Client_ID']."\" required  class=\"form-control\" >
 <tr><td><b>Profile Picture</b></td><td><input type=\"file\" name=\"image\" value=\"Upload Profile Picture\" /></td></tr>
 <tr><td colspan=\"2\"><center><br/><input  type=\"submit\" class=\"btn btn-default\" name=\"go\" value=\"Kemaskini Maklumat\" onclick=\"alert(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value);\"></center></td></tr>
 </table></center></form>
<br /></td></tr></table></center></td></tr></table></center>	";

	?>
	

            </div>
        </div>
 
	 <div class="col-xs-12 col-sm-2 col-md-2"></div>
	  <!--Booking History --> 
	     </div>  