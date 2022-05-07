<?php
session_start();
include("header.php"); 
include("../connect.php"); 
$_SESSION['Booking_Time'] = $_POST['Booking_Time'];
$_SESSION['duration'] = $_POST['duration'];
$_SESSION['susunatur'] = $_POST['susunatur'];
$_SESSION['program'] = $_POST['program'];
$_SESSION['makan'] = $_POST['makan'];
$_SESSION['peserta'] = $_POST['peserta'];

$program = $_SESSION['program'];
$makan = $_SESSION['makan'];
$susunatur = $_SESSION['susunatur'];
$duration = $_SESSION['duration'];

if ($_SESSION['peserta'] > 30)
{
if ($_SESSION['duration'] == "1 hari")
{
$Booking_price = "350";
}
else if ($_SESSION['duration'] == "2 hari")
{
$Booking_price = "620.00";
}
else if ($_SESSION['duration'] == "1 jam")
{
$Booking_price = "100";
}
else
{
$Booking_price = "250";
}
}

else
{
if ($_SESSION['duration'] == "1 hari")
{
$Booking_price = "350.00";
}
else if ($_SESSION['duration'] == "2 hari")
{
$Booking_price = "650.00";
}
else if ($_SESSION['duration'] == "1 jam")
{
$Booking_price = "100.00";
}
else
{
$Booking_price = "250.00";
}
}



$Booking_Time = $_SESSION['Booking_Time'];

$Peserta = $_SESSION['peserta']; 
if ($Peserta < 15)
{
	if ($_SESSION['duration'] == "2 hari")
		{
		$Makan_Price = 900;
		}
		else 
		{
		$Makan_Price = 450 ;
		}
}
else 
{
	if ($_SESSION['duration'] == "2 hari")
		{
		$Makan_Price = ($Peserta*30*2);
		}
		else 
		{
		$Makan_Price = ($Peserta*30);
		}
; 
}

?>





		    <br/><br/>  

		 
	 
	  <!--Booking History --> 
	 
	 
	 
	  <!--Time Availability -->
	 
	 <div class="content-head center">
						<h3 class="center_divider">
							<em>
							<span class="head-tngl-left1"></span>
							<span class="head-tngl-left2"></span>
							<span class="head-tngl-left3"></span>
							KEKOSONGAN<span class="highlight-color"> CUBIC</span>
							<span class="head-tngl-right1"></span>
							<span class="head-tngl-right2"></span>
							<span class="head-tngl-right3"></span>
							</em>
						</h3> 
					</div>
 



				
			<center><p>Sila check kekosongan Cubic dibawah....</p></center>
			
			<br/><br/>
			  

				<div class="col-md-3"></div>
	 
	 <div class="col-md-6"></div>
	 </div>
	  <!--	 <div class="responsive-iframe-container big-container">  -->
		

		</div>
		
		<div class="col-md-3"></div> 
		
	 </div>	


<script src="https://code.jquery.com/jquery-1.7.2.js"></script>
 
    <style type="text/css">
 .btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });


$(window).resize(function() {
  if ($(window).width() <= 600) {
    $('#prop-type-group').removeClass('btn-group');
    $('#prop-type-group').addClass('btn-group-vertical');
  } else {
    $('#prop-type-group').addClass('btn-group');
    $('#prop-type-group').removeClass('btn-group-vertical');
  }
});


    </script>
</head>
<body>
	<div class="container">

    
   <div class="row">    
 
    
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="booking.php#step-1" type="button" class="btn btn-default btn-circle" >1</a>
        <p>Carian Masa</p>
      </div>
      <div class="stepwizard-step">
        <a href="booking.php#step-2" type="button" class="btn btn-default btn-circle">2</a>
        <p>Carian Bilik</p>
      </div>
      <div class="stepwizard-step">
        <a href="booking.php#step-3" type="button" class="btn btn-default btn-circle">3</a>
        <p>Tambahan</p>
      </div>
        <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle">4</a>
        <p>Terma & Syarat</p>
      </div>

        <div class="stepwizard-step">
        <a href="#step-5" type="button" class="btn btn-warning btn-circle">5</a>
        <p>Pembayaran</p>
      </div>
             
    </div>
  </div>
  
	

    
     
    <div class="row setup-content" id="step-4">
      <div class="col-xs-12">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <Center><h3> Step 4</h3>
          
          
          
          <div class="shopping_cart">
                        <form class="form-horizontal" role="form" action="" method="post" id="payment-form">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
                                                Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td colspan="2">
                                                                 
                                                                <b>
                                                                    Cubic Bilik Seminar Ampang</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li><b>Sewa Bilik Seminar</b><br/>Duration : <?php echo $_SESSION['duration']; ?><br/>Tarikh : <?php echo $Booking_Time; ?><br/>Participant : <?php echo $_SESSION['peserta']; ?> Orang<br/>Susun Atur : <?php echo $_SESSION['susunatur']; ?></li>
                                                                    <li><b>Tambahan </b>

<?php if ($_SESSION['makan'] == "Tidak"){
$totalgst = $Booking_price*0.06;
echo "<Br/>-
<br/><b>GST 6% </b>";}
else { 
$totalgst = ($Booking_price+$Makan_Price)*0.06;
echo "<br/>Makan: &nbsp; ".$_SESSION['makan']." &nbsp; (".$_SESSION['peserta']." pax)<br/><b>GST 6% </b> </li>";}
?>
 
                                                                    
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>RM <?php echo $Booking_price; ?></b><br/><br/><br/><br/><br/> <?php if ($_SESSION['makan'] == "Tidak"){
																$amount =$totalgst+$Booking_price;
echo "<br/><br/><b>RM ".$totalgst."</b>";}
else {
$amount =$totalgst+$Makan_Price+$Booking_price;
echo "<Br/><b>RM ".$Makan_Price." </b><br/><b>RM ".$totalgst."</b>";}
?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;">RM <?php  
														echo 
$amount; ?> </span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center; width:100%;"><a style="width:100%;"
                                                                                        data-toggle="collapse"
                                                                                        data-parent="#accordion"
                                                                                        href="#collapseTwo"
                                                                                        class=" btn btn-warning"
                                                                                        onclick="$(this).fadeOut(); $('#payInfo').fadeIn();"> >> Buat Pembayaran</a></div>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
 
            <div id="tab" class="btn-group" data-toggle="buttons-radio">
<center><h3>Buat Pembayaran</h3><br/>
              <a href="#prices2" class="btn btn-large btn-warning active" data-toggle="tab"><b>Kad kredit/debit, Online Banking</b></a>
              <a href="#features2" class="btn btn-large btn-warning" data-toggle="tab"><b>Cash Deposit Machine</b></a> </center>
            </div>
             
            <div class="tab-content">
              <div class="tab-pane active" id="prices2">
                <br>
                <p class="lead">Kad kredit/debit, Online Banking</p>
                <div class="row">
                    <div class="span3"> 

<br/><br/>
 <?php
session_start();
$_SESSION['myid'] = $_SESSION['myid'];
            $query = "SELECT * FROM client WHERE Client_ID = '".$_SESSION['myid']."'";
    $resource=mysql_query($query,$link);
   $row = mysql_fetch_assoc($resource);
   
    $queryt = "SELECT * FROM LoginInfo WHERE Login_email = '".$row['User_email']."' ORDER BY LoginInfo_ID DESC LIMIT 1,1";
    $resourcet=mysql_query($queryt,$link);
   $rowt = mysql_fetch_assoc($resourcet); 
             ?>
 <form></form>
<center><img src="https://app.senangpay.my/public/img/logo-senangpay-wc.png"></img></center>
<form method="post" action="bookings2.php">
<input type="hidden" name="detail" value="Sewa Bilik Cubic (<?php echo $duration; ?>)">
<input type="hidden" name="amount" value="<?php echo $amount; ?>" size="30">
<input type="hidden" name="order_id" value="<?php echo time(); ?>" placeholder="Unique id to reference the transaction or order" size="30">
<input type="hidden" name="name" value="<?php echo $row['Client_Name']; ?>" size="30">
<input type="hidden" name="email" value="<?php echo $row['Client_Email']; ?>" size="30">
<input type="hidden" name="phone" value="<?php echo $row['Client_Phone']; ?>" size="30">
<input type="hidden" name="Booking_Time" value="<?php echo $Booking_Time; ?>" size="30">
<input type="hidden" name="Client_ID" value="<?php echo $row['Client_ID']; ?>" size="30">
<input type="hidden" name="Program" value="<?php echo $program; ?>" size="30">
<input type="hidden" name="Peserta" value="<?php echo $Peserta; ?>" size="30">
<input type="hidden" name="duration" value="<?php echo $duration; ?>" size="30">
<input type="hidden" name="price" value="<?php echo $amount; ?>" size="30">
<input type="hidden" name="Susun_Atur" value="<?php echo $susunatur; ?>" size="30">
<input type="hidden" name="makan" value="<?php echo $makan; ?>" size="30">
<input type="hidden" name="Detail" value="Pending | Full Payment">

<br/><center><input type="submit" class="btn btn-warning"  name="Submit1" border="0" value="Make Full Payment" /> </center>
                
        </form> 
        
        
<br/><center>atau</center>

<form method="post" action="bookings2.php">
<input type="hidden" name="detail" value="Sewa Bilik Cubic (<?php echo $duration; ?>)">
<input type="hidden" name="amount" value="<?php echo $amount/2; ?>" size="30">
<input type="hidden" name="order_id" value="<?php echo time(); ?>" placeholder="Unique id to reference the transaction or order" size="30">
<input type="hidden" name="name" value="<?php echo $row['Client_Name']; ?>" size="30">
<input type="hidden" name="email" value="<?php echo $row['Client_Email']; ?>" size="30">
<input type="hidden" name="phone" value="<?php echo $row['Client_Phone']; ?>" size="30">
<input type="hidden" name="Booking_Time" value="<?php echo $Booking_Time; ?>" size="30">
<input type="hidden" name="Client_ID" value="<?php echo $row['Client_ID']; ?>" size="30">
<input type="hidden" name="Program" value="<?php echo $program; ?>" size="30">
<input type="hidden" name="Peserta" value="<?php echo $Peserta; ?>" size="30">
<input type="hidden" name="duration" value="<?php echo $duration; ?>" size="30">
<input type="hidden" name="price" value="<?php echo $amount; ?>" size="30">
<input type="hidden" name="Susun_Atur" value="<?php echo $susunatur; ?>" size="30">
<input type="hidden" name="makan" value="<?php echo $makan; ?>" size="30">
<input type="hidden" name="Detail" value="Pending | Deposit">
<br/><center><input type="submit" class="btn btn-warning"  name="Submit2" border="0" value="Make Deposit 50%" /> </center>
        </form>

 <Br/>
                    </div>
                    <div class="span9">
                      <p>  </p> 
                    </div>
                </div>
              </div>
              <div class="tab-pane" id="features2">
                    <br>
                <p class="lead">Cash Deposit Machine</p>
                <div class="row">
                    <div class="span6">
<p>&nbsp;&nbsp;&nbsp;Bank in duit tunai melalui mesin deposit ke akaun berikut:
<br/>-----------------------------------------------------------------
<br/> &nbsp;&nbsp;&nbsp;Nama Akaun: <B>TRAINING CUBE INTERNATIONAL SDN. BHD. </b>
<br/> &nbsp;&nbsp;&nbsp;No. Akaun: <B>860-090-764-2 </b>
<br/> &nbsp;&nbsp;&nbsp;Bank: <b>CIMB </b>
<br/>-----------------------------------------------------------------<br/><Br/>
</p>
<P>&nbsp;&nbsp;&nbsp;<i>
<b>Nota: Selesai bank-in, Bukti pembayaran perlu diemelkan ke ask@mytrainingcube.com 
<br/>
atau whatsapp 0133241016</b></i></p>

<form method="post" action="paym.php">
<input type="hidden" name="detail" value="Sewa Bilik Cubic (<?php echo $duration; ?>)">
<input type="hidden" name="amount" value="<?php echo $amount; ?>" size="30">
<input type="hidden" name="order_id" value="<?php echo time(); ?>" placeholder="Unique id to reference the transaction or order" size="30">
<input type="hidden" name="name" value="<?php echo $row['Client_Name']; ?>" size="30">
<input type="hidden" name="email" value="<?php echo $row['Client_Email']; ?>" size="30">
<input type="hidden" name="phone" value="<?php echo $row['Client_Phone']; ?>" size="30">
<input type="hidden" name="Booking_Time" value="<?php echo $Booking_Time; ?>" size="30">
<input type="hidden" name="Client_ID" value="<?php echo $row['Client_ID']; ?>" size="30">
<input type="hidden" name="Program" value="<?php echo $program; ?>" size="30">
<input type="hidden" name="Peserta" value="<?php echo $Peserta; ?>" size="30">
<input type="hidden" name="duration" value="<?php echo $duration; ?>" size="30">
<input type="hidden" name="price" value="<?php echo $amount; ?>" size="30">
<input type="hidden" name="Susun_Atur" value="<?php echo $susunatur; ?>" size="30">
<input type="hidden" name="makan" value="<?php echo $makan; ?>" size="30">
<input type="hidden" name="Detail" value="Pending Verification">
<input type="hidden" name="Keterangan" value="Manual Payment">
 
                    </div>

<br/><center><input type="submit" class="btn btn-warning"  name="Submit" border="0" value="Hantar" /> </center>

        </form>

                </div>
              </div>
                            
            </div>
                      <br/><br/>
                                        
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                </div>
                </form> 
          
          
          

          
        </div>
      </div>
    </div>
  </form>
  
</div>
	

	  <!--Time Availability -->

<?php
include("footer.php");
?>	
	  
