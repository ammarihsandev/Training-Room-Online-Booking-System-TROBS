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
$Booking_price = "371";
}
else if ($_SESSION['duration'] == "2 hari")
{
$Booking_price = "657.20";
}
else if ($_SESSION['duration'] == "1 jam")
{
$Booking_price = "106";
}
else
{
$Booking_price = "265";
}
}

else
{
if ($_SESSION['duration'] == "1 hari")
{
$Booking_price = "339.20";
}
else if ($_SESSION['duration'] == "2 hari")
{
$Booking_price = "625.40";
}
else if ($_SESSION['duration'] == "1 jam")
{
$Booking_price = "84.80";
}
else
{
$Booking_price = "233.20";
}
}






$Booking_Time = $_SESSION['Booking_Time'];

$Peserta = $_SESSION['peserta']; 
$Makan_Price = ($Peserta*25); 


if ($_SESSION['makan'] == "Tidak")
{ $amount = $Booking_price; }
else
{
$amount = ($Booking_price+$Makan_Price);
}
?>


<?php
/**
 * This is a sample code for manual integration with senangPay
 * It is so simple that you can do it in a single file
 * Make sure that in senangPay Dashboard you have key in the return URL referring to this file for example http://myserver.com/senangpay_sample.php
 */

# please fill in the required info as below
$merchant_id = '180145690649139';
$secretkey = '1437-112';


# this part is to process data from the form that user key in, make sure that all of the info is passed so that we can process the payment
if(isset($_POST['detail']) && isset($_POST['amount']) && isset($_POST['order_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']))
{

 



$queryzs = "INSERT INTO booking(Booking_ID, Booking_Date, Client_ID, Program, Total_Peserta, Jumlah_Hari, Price, Susun_Atur, Makanan_TCI, Detail) VALUES('".$_POST['order_id']."', '".$_POST['Booking_Time']."',  '".$_POST['Client_ID']."', '".$_POST['Program']."','".$_POST['Peserta']."','".$_POST['duration']."','".$_POST['price']."','".$_POST['Susun_Atur']."', '".$_POST['makan']."', '".$_POST['Detail']."')";
mysql_query($queryzs,$link);

    # assuming all of the data passed is correct and no validation required. Preferably you will need to validate the data passed
    $hashed_string = md5($secretkey.urldecode($_POST['detail']).urldecode($_POST['amount']).urldecode($_POST['order_id']));
    
    # now we send the data to senangPay by using post method
    ?>
    <html>
    <head>
    <title>senangPay Sample Code</title>
    </head>
    <body onload="document.order.submit()">
        <form name="order" method="post" action="https://app.senangpay.my/payment/<?php echo $merchant_id; ?>">
            <input type="hidden" name="detail" value="<?php echo $_POST['detail']; ?>">
            <input type="hidden" name="amount" value="<?php echo $_POST['amount']; ?>">
            <input type="hidden" name="order_id" value="<?php echo $_POST['order_id']; ?>">
            <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
            <input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
            <input type="hidden" name="hash" value="<?php echo $hashed_string; ?>">
        </form>
    </body>
    </html>
    <?php
}
# this part is to process the response received from senangPay, make sure we receive all required info
else if(isset($_GET['status_id']) && isset($_GET['order_id']) && isset($_GET['msg']) && isset($_GET['transaction_id']) && isset($_GET['hash']))
{
    # verify that the data was not tempered, verify the hash
    $hashed_string = md5($secretkey.urldecode($_GET['status_id']).urldecode($_GET['order_id']).urldecode($_GET['transaction_id']).urldecode($_GET['msg']));
    
    # if hash is the same then we know the data is valid
    if($hashed_string == urldecode($_GET['hash']))
    {
        # this is a simple result page showing either the payment was successful or failed. In real life you will need to process the order made by the customer
        if(urldecode($_GET['status_id']) == '1'){
            echo 'Payment was successful with message: '.urldecode($_GET['msg']);
$status = "Paid ".$_GET['amount'];
 $querytyu="UPDATE booking SET Detail='".$status."' WHERE Student_ID='".$_GET['status_id']."'";
		  mysql_query($querytyu,$link);

}
        else{
            echo 'Payment failed with message: '.urldecode($_GET['msg']);

$status = "Fail ".$_GET['amount'];
 $querytyu="UPDATE booking SET Detail='".$status."' WHERE Student_ID='".$_GET['status_id']."'";
		  mysql_query($querytyu,$link);
}
    }
    else
        echo 'Hashed value is not correct';
}
# this part is to show the form where customer can key in their information
else
{
    # by right the detail, amount and order ID must be populated by the system, in this example you can key in the value yourself
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


<script src="http://code.jquery.com/jquery-1.7.2.js"></script>
 
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
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
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
        <a href="#step-4" type="button" class="btn btn-warning btn-circle">4</a>
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
echo "<Br/>-";}
else { echo "<br/><b>Makan</b>: &nbsp; ".$_SESSION['makan']." &nbsp; (".$_SESSION['peserta']." pax) </li>";}
?>
                                                                    
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>RM <?php echo $Booking_price; ?></b><br/><br/><br/><br/><br/> <?php if ($_SESSION['makan'] == "Tidak"){
echo "<br/>";}
else {echo "<Br/><b>RM ".$Makan_Price." </b>";}
?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;">RM <?php echo 
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

<center><img src="https://app.senangpay.my/public/img/logo-senangpay-wc.png"></img></center>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
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

<br/><center><input type="submit" class="btn btn-warning"  name="Submit" border="0" value="Make Full Payment" /> </center>
                
        </form>
<br/><center>atau</center>

<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
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
<input type="hidden" name="Detail" value="Pending | Deposit">
<br/><center><input type="submit" class="btn btn-warning"  name="Submit" border="0" value="Make Deposit 50%" /> </center>
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
Nota: Selesai bank-in, mohon menyambung isi maklumat pada form dibawah ini dengan memberikan bukti pembayaran.</i></p>

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

                      <p><textarea name="Keterangan" class="form-control" rows="5" cols="10"></textarea></p> 
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
	 
<?php
}
?>	 
