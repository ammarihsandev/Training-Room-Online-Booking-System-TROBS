<?php   
include("header.php");
?>

<center><h1><b><font color="orange">-{ ZON Program }-</font></b></h1></center>
<br/><br/>
    <?php    	 
         $queryi="SELECT * FROM booking ORDER BY Booking_ID DESC";
		  $resourcei=mysql_query($queryi,$link);
		  $rowi = mysql_fetch_array($resourcei); 
		  
		$queryo="SELECT * FROM booking ORDER BY Booking_ID DESC";
		  $resourceo=mysql_query($queryo,$link);
		  $username_array = array();
	while($rowo = mysql_fetch_array($resourceo)){

         $queryq="SELECT * FROM client WHERE Client_ID = ".$rowo['Client_ID']."";
		  $resourceq=mysql_query($queryq,$link);
		  $rowq = mysql_fetch_array($resourceq);


 $username_array[] = "
 <tr class=\"gradeU\">
 <td>".$rowq['Client_Name']."</td>
 <td>".$rowo['Booking_Date']."</td>
 <td>".$rowo['Program']."</td> 
 <td>".$rowo['Susun_Atur']."</td>
 <td>RM ".$rowo['Price']."</td>
 <td>".$rowo['Total_Peserta']." orang</td>
 <td>".$rowo['Detail']."</td>
 <td><center><a href=\"updateprogram.php?id=".$rowo['Booking_ID']."\">edit</a></center></td> </tr>";
}
$username_string = implode("", $username_array); 
echo "
<div class=\"panel-body\">
 <div class=\"dataTable_wrapper\">
 
                               <table id=\"example\" class=\"table table-responsive\">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Tarikh</th>
                                            <th>Tajuk Program</th> 
                                            <th>Susun Atur</th>
                                            <th>Price</th>
                                            <th>Peserta</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>".$username_string."  </tbody>
                                </table></div></div>";

?>


<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
		$('#example').dataTable( {
    "pageLength": 50
});

</script>