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
	 

<center><h1><b><font color="orange">-{ UPDATE PROGRAM }-</font></b></h1></center>
<br/><br/>

<div class="col-xs-12 col-sm-3 col-md-3"></div>
         
		 <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                 <?php 
$query="SELECT * FROM booking WHERE Booking_ID='".$_REQUEST['id']."'";
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
 <p class=\"fa fa-folder-open\">  
 Updating the Program information. <br/> <br/>Client: <b>".$resultr['Client_Name']."</b></p><br/>
<form action=\"updateprogram_exec.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"editprofile\"> 
  <center><table> 
 <tr><td><b>Tarikh Program </b></td><td><input class=\"form-control\" type=\"text\" name=\"Booking_Date\" value=\"".$result['Booking_Date']."\" required  ><br /></td></tr>  
 <tr><td><b>Nama Program</b></td><td><input type=\"text\" name=\"Program\" value=\"".$result['Program']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Susun Atur</b></td><td><input type=\"text\" name=\"Susun_Atur\" value=\"".$result['Susun_Atur']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Harga</b></td><td><input type=\"text\" name=\"Price\" value=\"".$result['Price']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Total Peserta</b></td><td><input type=\"text\" name=\"Total_Peserta\" value=\"".$result['Total_Peserta']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Makanan</b></td><td><input type=\"text\" name=\"Makanan_TCI\" value=\"".$result['Makanan_TCI']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Detail</b></td><td><input type=\"text\" name=\"Detail\" value=\"".$result['Detail']."\" required  class=\"form-control\" ><br/></td></tr>
 <tr><td><b>Keterangan</b></td><td><input type=\"text\" name=\"Keterangan\" value=\"".$result['Keterangan']."\" required  class=\"form-control\" ><br/></td></tr>
 <input type=\"hidden\" name=\"Booking_ID\" value=\"".$result['Booking_ID']."\" required  class=\"form-control\" >
 <input type=\"hidden\" name=\"Client_ID\" value=\"".$result['Client_ID']."\" required  class=\"form-control\" >
 <tr><td colspan=\"2\"><center><br/><input  type=\"submit\" class=\"btn btn-default\" name=\"go\" value=\"Kemaskini Maklumat\" onclick=\"alert(document.myform.opttwo.options[document.myform.opttwo.selectedIndex].value);\"></center></td></tr>
 </table></center></form>
<br /></td></tr></table></center></td></tr></table></center>	";

	?>
	

            </div>
        </div>
 
	 <div class="col-xs-12 col-sm-2 col-md-2"></div>
	  <!--Booking History --> 
	     </div>  
	     
 
	 
