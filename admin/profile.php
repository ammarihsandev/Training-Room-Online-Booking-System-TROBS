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
	 <script>
        function validate(){

        var a = document.getElementById("User_password").value;
        var b = document.getElementById("User_password_c").value;
        if (a!=b) {
        alert("Passwords do no match");
        return false;
        }
    }
   </script>
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

<div class="col-xs-12 col-sm-2 col-md-2"></div>

<?php
 $_SESSION['myid'] = $_SESSION['myid'];
$query="SELECT * FROM client WHERE Client_ID='".$_SESSION['myid']."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);
?>

        
		 <div class="col-xs-12 col-sm-5 col-md-5">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="<?php echo $result['Client_Img']; ?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?php echo $result['Client_Name']; ?></h4>
                        
                        <p><i class="glyphicon glyphicon-briefcase"></i><?php echo $result['Client_Company']; ?>
                            <br />
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $result['Client_Email']; ?>
                            <br />
                            <i class="glyphicon glyphicon-phone"></i> <?php echo $result['Client_Phone']; ?>
                            <br /> </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <a href="modify_profile.php"><button type="button" class="btn btn-warning">
                               <i class="glyphicon glyphicon-pencil"></i> Modify Profile</button></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <div class="col-xs-12 col-sm-3 col-md-3">
          
   <div class="well well-sm">
                <div class="row">
                     
                    <div class="col-sm-12 col-md-12">
                        <h4>
                            New Password:</h4>
                        
                        <p><div class="form-group">

  <?php


echo " 
<form action=\"change_password_exec.php\" method=\"post\" name=\"editprofile\" onSubmit=\"return validate();\">

<input class=\"form-control\" type=\"password\" name=\"User_password\" id=\"User_password\" required  class=\"form-control\" >
<br/>Sila sahkan Password baru:

<input class=\"form-control\" type=\"password\" name=\"User_password_c\" id=\"User_password_c\"  required  class=\"form-control\" >

<input  type=\"submit\" class=\"btn btn-warning\" name=\"go\" value=\"Kemaskini Password\"></form>";
?>

                        </div>
                    </div>
                </div>
            </div>
             
</div>
	 <div class="col-xs-12 col-sm-2 col-md-2"></div>
	  <!--Booking History --> 
	     </div>  
	     
	 <br/><Br/> 
<?php
include("footer.php");
?>	
	 
	 
