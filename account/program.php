<?php
session_start();
include("header.php"); 
include("../connect.php");
?> 

		 
		  <br/><br/>
	<!--Booking History --> 
	 <div class="content-head center">
						<h3 class="center_divider">
							<em>
							<span class="head-tngl-left1"></span>
							<span class="head-tngl-left2"></span>
							<span class="head-tngl-left3"></span>
							REKOD<span class="highlight-color"> SEWAAN</span>
							<span class="head-tngl-right1"></span>
							<span class="head-tngl-right2"></span>
							<span class="head-tngl-right3"></span>
							</em>
						</h3> 
					</div>

				
			<center><p>Check your full booking history.</p></center>
			<br/><br/>
			
			
<div class="container">
	<div class="row"> 
        <div role="tabpanel">
            <div class="col-sm-3">
                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                    <li role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Program History</a></li>
                    <li role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Payment History</a></li> 
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <?php    
$Client_ID = $_SESSION['myid'];		 
         $queryi="SELECT * FROM booking WHERE Client_ID = '".$Client_ID."' ORDER BY Booking_ID DESC";
		  $resourcei=mysql_query($queryi,$link);
		  $rowi = mysql_fetch_array($resourcei);
		  
		
		  
		$queryo="SELECT * FROM booking WHERE Client_ID = '".$Client_ID."' ORDER BY Booking_ID DESC";
		  $resourceo=mysql_query($queryo,$link);
		  $username_array = array();
	while($rowo = mysql_fetch_array($resourceo)){
 $username_array[] = "
 <tr class=\"gradeU\">
 <td>".$rowo['Booking_Date']."</td>
 <td>".$rowo['Jumlah_Hari']."</td>
 <td>".$rowo['Program']."</td> 
 <td>".$rowo['Susun_Atur']."</td>
 <td>RM ".$rowo['Price']."</td>
 <td>".$rowo['Total_Peserta']." orang</td>
 <td>".$rowo['Detail']."</td></tr>";
}
$username_string = implode("", $username_array); 
echo "
<div class=\"panel-body\">
 <div class=\"dataTable_wrapper\">
 
                               <table class=\"table table-responsive\">
                                    <thead>
                                        <tr>
                                            <th>Tarikh</th>
                                            <th>Tempoh</th>
                                            <th>Tajuk Program</th> 
                                            <th>Susun Atur</th>
                                            <th>Harga</th>
                                            <th>Peserta</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>".$username_string."  </tbody>
                                </table></div></div>";

?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <?php    
$School_ID = $_SESSION['myid'];		 
         $queryi="SELECT * FROM booking WHERE Client_ID = '".$Client_ID."' ORDER BY Booking_ID DESC";
		  $resourcei=mysql_query($queryi,$link);
		  $rowi = mysql_fetch_array($resourcei);
		  
		
		  
		$queryo="SELECT * FROM payment WHERE Client_ID = '".$Client_ID."' ORDER BY Payment_ID DESC";
		  $resourceo=mysql_query($queryo,$link);
		  $username_array = array();
	while($rowo = mysql_fetch_array($resourceo)){
 $username_array[] = "
 <tr class=\"gradeU\">
 <td>".$rowo['Invois_No']."</td> 
 <td>".$rowo['Payment_Detail']."</td>
 <td><center>".$rowo['Booking_Time']."</center></td> 
 <td><center>RM ".$rowo['Payment_cost']."</center></td>
 <td><center>RM ".$rowo['Payment_remaining']."</center></td>
 <td><a href=\"http://".$rowo['Payment_pdf']."\"><center><p class=\"fa fa-download\"><br/>Download<p></center></a></td></tr>";
}
$username_string = implode("", $username_array); 
echo "
<div class=\"panel-body\">
 <div class=\"dataTable_wrapper\">
 
                               <table class=\"table table-responsive\">
                                    <thead>
                                        <tr>
                                            <th>No Invois</th> 
                                            <th>Jenis</th>
                                            <th>Tarikh Sewaan</th>
                                            <th>Bayaran Telah Ditunaikan</th> 
                                            <th>Baki Perlu Ditunaikan</th>
                                            <th>Muat Turun Invois</th>
                                        </tr>
                                    </thead>
                                    <tbody>".$username_string."  </tbody>
                                </table></div></div>";

?>
                    </div> 
                </div>
            </div>
        </div>
	</div>
</div>





	  
                       
                    

    
    
<?php
include("footer.php");
?>	
	 
	 
