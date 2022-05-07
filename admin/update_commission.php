<?php
session_start();
include("header.php"); 
include("../connect.php"); 
?>

<center><h1><b><font color="orange">-{ Commission Updated }-</font></b></h1></center>
<br/><br/>

<?php 
	 $Booking_ID=$_REQUEST['id']; 
	 
	 
	
	 $query="UPDATE booking SET Comm_Status='Paid' WHERE Booking_ID='".$Booking_ID."'";
		
		  if(!mysql_query($query,$link))
		  {die ;}
		  else
		 {
		 echo "
		<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> The Commission Information Updated successfully </p>.<p> Please <a href=\"commission.php\" class=\"alert-link\">Click Here</a> To view the updated Commission.</p>
                            </div></center>
";}

	 ?>
	

            </div>
        </div>
 
	 
	  <!--Booking History --> 
	     </div>  
	     
	 <br/><Br/> 
 
