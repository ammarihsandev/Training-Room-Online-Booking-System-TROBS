<?php
session_start();
include("header.php"); 
include("../connect.php"); 
?>

<center><h1><b><font color="orange">-{ Update Payment Information }-</font></b></h1></center>
<br/><br/>

<?php 
	 $Invois_No=$_REQUEST['Invois_No'];
	 $Payment_Time=$_REQUEST['Payment_Time'];
	 $Payment_ID=$_REQUEST['Payment_ID'];
	 $image=$_REQUEST['image'];
	 $Payment_Detail=$_REQUEST['Payment_Detail']; 
	 $Booking_Time=$_REQUEST['Booking_Time']; 
	 $Payment_cost=$_REQUEST['Payment_cost']; 
	 $Payment_remaining=$_REQUEST['Payment_remaining'];
	 $Payment_pdf=$_REQUEST['proimage']; 
	 
	 if(!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) { 
	$location=$Payment_pdf; 
}
else
{
	 
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../download/" . $_FILES["image"]["name"]);
			$location="bilikseminar.trainingcube.com.my/zon/download/" . $_FILES["image"]["name"];
					
	}
	
	 $query="UPDATE payment SET Invois_No='".$Invois_No."', Payment_Time='".$Payment_Time."', Payment_Detail='".$Payment_Detail."',  Booking_Time='".$Booking_Time."',  Payment_cost='".$Payment_cost."',  Payment_remaining='".$Payment_remaining."', Payment_pdf='".$location."' WHERE Payment_ID='".$Payment_ID."'";
		
		  if(!mysql_query($query,$link))
		  {die ;}
		  else
		 {
		 echo "
		<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> The Information updated successfully </p>.<p> Please <a href=\"payment.php\" class=\"alert-link\">Click Here</a> To view the updated Invois.</p>
                            </div></center>
";}

	 ?>
	

            </div>
        </div>
 
	 
	  <!--Booking History --> 
	     </div>  
	     
	 <br/><Br/> 
 
