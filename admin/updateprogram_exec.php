<?php
session_start();
include("header.php"); 
include("../connect.php"); 
?>

<center><h1><b><font color="orange">-{ Update Program Information }-</font></b></h1></center>
<br/><br/>

<?php 
	 $Booking_Date=$_REQUEST['Booking_Date'];
	 $Booking_ID=$_REQUEST['Booking_ID']; 
	 $Client_ID=$_REQUEST['Client_ID']; 
	 $Program=$_REQUEST['Program'];
	 $Susun_Atur=$_REQUEST['Susun_Atur']; 
	 $Price=$_REQUEST['Price']; 
	 $Total_Peserta=$_REQUEST['Total_Peserta']; 
	 $Detail=$_REQUEST['Detail'];    
	 $Keterangan=$_REQUEST['Keterangan'];    
	 

$queryr="SELECT * FROM client WHERE Client_ID='".$Client_ID."'";
	$resourcer=mysql_query($queryr,$link) or die ("An unexpected error occurred while <b>deleting</b> the record, Please try again!");
	$resultr=mysql_fetch_array($resourcer);

	
	 $query="UPDATE booking SET Booking_Date='".$Booking_Date."', Program='".$Program."',  Susun_Atur='".$Susun_Atur."',  Price='".$Price."',  Total_Peserta='".$Total_Peserta."', Detail='".$Detail."', Keterangan='".$Keterangan."' WHERE Booking_ID='".$Booking_ID."'";
		
		  if(!mysql_query($query,$link))
		  {die ;}
		  else
		 {
		 echo "
		<center> <div class=\"alert alert-success\">
                                <p class=\"fa fa-info-circle\"> The Information updated successfully </p>.<p> Please <a href=\"program.php\" class=\"alert-link\">Click Here</a> To view your updated program.</p>
                            </div></center>
";}


$emails="ask@mytrainingcube.com";
$ToEmail = $resultr['Client_Email'];
$email = $resultr['Client_Name'];
$ToSubject = "Zon Cubic – Pengesahan Tempahan Telah Berjaya";
$EmailBody =   "



Kepada Tuan/Puan $email, \n
Kami telah menerima transaksi anda. \n
Tempahan anda telah disahkan. \n
Status telah bertukar kepada $Detail \n
 \n
Maklumat Tempahan anda adalah seperti berikut: \n
Tarikh: $Booking_Date \n
Nama: $email \n
Susun Atur: $Susun_Atur \n
Pax: $Total_Peserta \n
Harga: $Price \n 
 
\n\n";

$Message = $EmailBody;
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$emails."\r\n";
mail($ToEmail,$ToSubject,$Message, $headers);

	 ?>
	

            </div>
        </div>
 
	 
	  <!--Booking History --> 
	     </div>  
	     
	 <br/><Br/> 
 
