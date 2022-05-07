<?php
session_start();
include("header.php"); 
include("../connect.php"); 
?>

<center><h1><b><font color="orange">-{ Update Client Information }-</font></b></h1></center>
<br/><br/>

<?php 
	 $Client_Name=$_REQUEST['Client_Name'];
	 $Client_Email=$_REQUEST['Client_Email'];
	 $image=$_REQUEST['image'];
	 $Client_Phone=$_REQUEST['Client_Phone']; 
	 $Client_Company=$_REQUEST['Client_Company']; 
	 $Loyalty=$_REQUEST['Loyalty'];  
	 $Loyalty_history=$_REQUEST['Loyalty_history'];  
	 $Client_ID=$_REQUEST['Client_ID']; 
	 $Client_Img=$_REQUEST['proimage']; 
	 
	 if(!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) { 
	$location=$Client_Img; 
}
else
{
	 
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../image/" . $_FILES["image"]["name"]);
			$location="bilikseminar.trainingcube.com.my/zon/image/" . $_FILES["image"]["name"];
					
	}
	
	 $query="UPDATE client SET Client_Name='".$Client_Name."', Client_Email='".$Client_Email."', Client_Phone='".$Client_Phone."',  Client_Company='".$Client_Company."',  Loyalty='".$Loyalty."' ,  Loyalty_history='".$Loyalty_history."' WHERE Client_ID='".$Client_ID."'";
		
		  if(!mysql_query($query,$link))
		  {die ;}
		  else
		 {
		 echo "
		<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> The Information updated successfully </p>.<p> Please <a href=\"client.php\" class=\"alert-link\">Click Here</a> To view the updated profile.</p>
                            </div></center>
";}

	 ?>
	

            </div>
        </div>
 
	 
	  <!--Booking History --> 
	     </div>  
	     
	 <br/><Br/> 
 
