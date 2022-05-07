<?php
session_start();
include("header.php"); 
include("../connect.php"); 
?>

 <!-- Welcome section -->
	<div class="u-welcome wow animated bounceInDown" id="u-welcome">
		<div class="container">
			<h3>Welcome to <span class="highlight-color">TROBS</span> </h3>
			<p>Training Room Online Booking System </p>
		</div>
	</div>
	<!-- Welcome section -->
	
	 <!--Progress Bar -->


                 <?php
 
$query="SELECT * FROM client WHERE Client_ID='".$_SESSION['myid']."'";
	$resource=mysql_query($query,$link) or die ("An unexpected error occured while <b>retreving</b> the record, Please try again!");
	$result=mysql_fetch_array($resource);
?>


<?php
if ($result['Loyalty'] == 0)
{
?>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".progress-bar").animate({
    width: "1%"
}, 2500);
});//]]> 
</script>
	<div class="col-xs-2 col-sm-2 progress-container"> </div>
	<div class="col-xs-8 col-sm-8 progress-container">
		<div class="progress progress-striped active">
			<div class="progress-bar progress-bar-warning"></div><b>Status kelayakan anda untuk menikmati LOYALTY PROGRAM : 0%</b>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 progress-container"> </div><br/><br/><br/>
	<center><a href="booking.php"><span class="blink_me"> <font color="orange"><b><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp; Cukup 5 hari sewaan, dapatkan voucher diskaun RM100! &nbsp;<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> </b></span></a></center>


<?php
}
else if ($result['Loyalty'] == 1)
{
?>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".progress-bar").animate({
    width: "20%"
}, 2500);
});//]]> 
</script>
	<div class="col-xs-2 col-sm-2 progress-container"> </div>
	<div class="col-xs-8 col-sm-8 progress-container" >
		<div class="progress progress-striped active">
			<div class="progress-bar progress-bar-warning"><b>Status kelayakan anda untuk menikmati LOYALTY PROGRAM : 20%</b></div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 progress-container"> </div><br/><br/><br/>
	<center><a href="booking.php"><span class="blink_me"> <font color="orange"><b><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp; Hanya 4 hari sewaan lagi untuk dapatkan voucher diskaun RM100! &nbsp;<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> </b></span></a></center>



<?php
}
else if ($result['Loyalty'] == 2)
{
?>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".progress-bar").animate({
    width: "40%"
}, 2500);
});//]]> 
</script>
	<div class="col-xs-2 col-sm-2 progress-container"> </div>
	<div class="col-xs-8 col-sm-8 progress-container">
		<div class="progress progress-striped active">
			<div class="progress-bar progress-bar-warning" style="width:0%"><b>Status kelayakan anda untuk menikmati LOYALTY PROGRAM : 40%</b></div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 progress-container"> </div><br/><br/><br/>
	<center><a href="booking.php"><span class="blink_me"> <font color="orange"><b><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp; Hanya 3 hari sewaan lagi untuk dapatkan voucher diskaun RM100! &nbsp;<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> </b></span></a></center>


<?php
}
else if ($result['Loyalty'] == 3)
{
?>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".progress-bar").animate({
    width: "60%"
}, 2500);
});//]]> 
</script>
	<div class="col-xs-2 col-sm-2 progress-container"> </div>
	<div class="col-xs-8 col-sm-8 progress-container">
		<div class="progress progress-striped active">
			<div class="progress-bar progress-bar-warning" style="width:0%"><b>Status kelayakan anda untuk menikmati LOYALTY PROGRAM : 60%</b></div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 progress-container"> </div><br/><br/><br/>
	<center><a href="booking.php"><span class="blink_me"> <font color="orange"><b><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp; Hanya 2 hari sewaan lagi untuk dapatkan voucher diskaun RM100! &nbsp;<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> </b></span></a></center>


<?php
}
else if ($result['Loyalty'] == 4)
{
?>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".progress-bar").animate({
    width: "80%"
}, 2500);
});//]]> 
</script>
	<div class="col-xs-2 col-sm-2 progress-container"> </div>
	<div class="col-xs-8 col-sm-8 progress-container">
		<div class="progress progress-striped active">
			<div class="progress-bar progress-bar-warning" style="width:0%"><b>Status kelayakan anda untuk menikmati LOYALTY PROGRAM : 80%</b></div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 progress-container"> </div><br/><br/><br/>
	<center><a href="booking.php"><span class="blink_me"> <font color="orange"><b><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp; Hanya 1 hari sewaan lagi untuk dapatkan voucher diskaun RM100! &nbsp;<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> </b></span></a></center>



<?php
}
else if ($result['Loyalty'] == 5)
{
?>
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(".progress-bar").animate({
    width: "100%"
}, 2500);
});//]]> 
</script>
	<div class="col-xs-2 col-sm-2 progress-container"> </div>
	<div class="col-xs-8 col-sm-8 progress-container">
		<div class="progress progress-striped active">
			<div class="progress-bar progress-bar-warning" style="width:0%"><b>Status kelayakan anda untuk menikmati LOYALTY PROGRAM : 100%</b></div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 progress-container"> </div><br/><br/><br/>
	<center><a href="booking.php"><span class="blink_me"> <font color="orange"><b><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>&nbsp; Dapatkan voucher diskaun RM100 anda! Hubungi kami untuk pertanyaan. &nbsp;<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> </b></span></a></center>
<?php
}
?>

	<br/><br/><br/>
	
	<div class="col-md-1"></div>
	 
	<div class="col-md-10"> 
		<div class="alert alert-warning" role="alert"><i><b>"</b>Loyalty Program adalah inisiatif untuk menghargai pengguna Cubic Bilik Seminar Ampang. Bermula 2017, untuk setiap 5 hari sewaan, nikmati diskaun RM100 pada sewaan hari ke-6. (tertakhluk pada terma dan syarat)<b>"</b></i>
		</div><br/>
	</div>
	
	<div class="col-md-1"></div> <br/><br/><br/> 
	 	 <!--Progress Bar -->










 <br/><br/><br/>  



	 <div class="content-head center">
						<h3 class="center_divider">
							<em>
							<span class="head-tngl-left1"></span>
							<span class="head-tngl-left2"></span>
							<span class="head-tngl-left3"></span>
							ZON<span class="highlight-color"> CUBIC</span>
							<span class="head-tngl-right1"></span>
							<span class="head-tngl-right2"></span>
							<span class="head-tngl-right3"></span>
							</em>
						</h3> 
					</div>


<div class="u-services">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="ct-ribbon">
				<span class="ct-triangle"></span> 
				<span class="ct-triangle two"></span> 
				<span><i class="icon_contacts"></i></span>
				</span>
				<div class="us-content">
					<h4>ZON PROFILE</h4>
					<h5>-----------------------</h5>
					<p>Kemas kini maklumat anda.</p>
					<a href="profile.php" class="btn-small">Update Profile Anda</a>
				</div>
			</div>
			<!-- end of column 1 -->
			<div class="col-md-4">
				<span class="ct-ribbon">
				<span class="ct-triangle"></span> 
				<span class="ct-triangle two"></span> 
				<span><i class="icon_clipboard"></i></span>
				</span>
				<div class="us-content">
					<h4>ZON PROGRAM</h4>
					<h5>-----------------------</h5>
					<p>Akses kepada rekod tempahan dan pembayaran anda.</p>
					<a href="program.php" class="btn-small">Lihat Program<sup>2</sup> Anda</a>
				</div>
			</div>
			<!-- end of column 2 -->
			<div class="col-md-4">
				<span class="ct-ribbon">
				<span class="ct-triangle"></span> 
				<span class="ct-triangle two"></span> 
				<span><i class="icon_star"></i></span>
				</span>
				<div class="us-content">
					<h4>Zon Booking</h4>
					<h5>-----------------------</h5>
					<p>Tempah dengan lebih pantas dan senang. Semak calendar Cubic dan rancang waktu tempahan anda.</p>
					<a href="booking.php" class="btn-small">Book CUBIC Sekarang!</a>
				</div>
			</div>
			<!-- end of column 3 -->
			<div class="clearfix seprator_bottom_twenty"></div>
			<div class="clearfix seprator_bottom_twenty"></div>
			 
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
</div>





<?php
include("footer.php");
?>	
	 
	 
