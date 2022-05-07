<?php
include("header.php"); 

?>

     <style type="text/css">
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.cc-selector-2 input{
    position:absolute;
    z-index:999;
}
.teaters{background-image:url(teaters.png);}
.classrooms{background-image:url(ushapes.png);}
.ushapes{background-image:url(classrooms.png);}
.klusters{background-image:url(klusters.png);}
.makeups{background-image:url(makeups.png);}
.cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:200px;height:240px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}


.buying-selling.active {
    background: #7BB712;   
}
.buying-selling {
    width: 130px; 
    padding: 10px;
    position: relative;
}
.buying-selling-word {
    font-size: 15px;
    font-weight: 600;
    margin-left: 22px;
}
.radio-dot:before, .radio-dot:after {
    content: "";
    display: block;
    position: absolute;
    background: #fff;
    border-radius: 100%;
}
.radio-dot:before {
    width: 20px;
    height: 20px;
    border: 1px solid #ccc;
    top: 10px;
    left: 16px;
}
.radio-dot:after {
    width: 12px;
    height: 12px;
    border-radius: 100%;
    top: 14px;
    left: 20px;
}
.buying-selling.active {
    background: #EFA209;   
}
.buying-selling {
    width: 130px; 
    padding: 10px;
    position: relative;
}
.buying-selling-word {
    font-size: 15px;
    font-weight: 600;
    margin-left: 22px;
}
.radio-dot:before, .radio-dot:after {
    content: "";
    display: block;
    position: absolute;
    background: #fff;
    border-radius: 100%;
}
.radio-dot:before {
    width: 20px;
    height: 20px;
    border: 1px solid #ccc;
    top: 10px;
    left: 16px;
}
.radio-dot:after {
    width: 12px;
    height: 12px;
    border-radius: 100%;
    top: 14px;
    left: 20px;
}
.buying-selling.active .buying-selling-word {
    color: #fff;
}
.buying-selling.active .radio-dot:after {
    background: #426C2A;
}
.buying-selling.active .radio-dot:before {
    background: #fff;
    border-color: #C48200;
}
.buying-selling:hover .radio-dot:before {
    border-color: #895B00;
}
.buying-selling.active:hover .radio-dot:before {
    border-color: #895B00;
}
.buying-selling.active .radio-dot:after {
    background: #426C2A;
}
.buying-selling:hover .radio-dot:after {
    background: #895B00;
}
.buying-selling.active:hover .radio-dot:after {
    background: #426C2A; 
}
@media (max-width: 400px) {   
    .mobile-br {
        display: none;   
    }
    .buying-selling {
        width: 49%;
        padding: 10px;
        position: relative;
    }
}
    </style>
  
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
        <a href="#step-1" type="button" class="btn btn-warning btn-circle">1</a>
        <p>Carian Masa</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Carian Bilik</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Tambahan</p>
      </div>
            <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
        <p>Pembayaran</p>
      </div>
             
    </div>
  </div>
  
  <form role="form" action="bookings.php" method="POST">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-10 col-md-offset-1">
        <div class="col-md-8">
          <center><h3> Step 1</h3></center>




<center>
<iframe src="https://calendar.google.com/calendar/embed?title=Kekosongan%20Cubic&amp;showTabs=0&amp;height=300&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=ammarihsan04%40gmail.com&amp;color=%2329527A&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%2323164E&amp;src=en.malaysia%23holiday%40group.v.calendar.google.com&amp;color=%2342104A&amp;src=id.malaysia%23holiday%40group.v.calendar.google.com&amp;color=%2329527A&amp;ctz=Asia%2FKuala_Lumpur" style="border-width:0" width="500" height="300" frameborder="0" scrolling="no"></iframe>
		</center>
<br/><br/><br/><br/><br/>

</div>
 <div class="col-md-1">
       </div>

        <div class="col-md-4">
<div class="form-group">
<br/><br/>
<h4>Tarikh Masih lagi Kosong?</h4>

<h3>SEWA SEKARANG!</h3><br/>
            <label class="control-label">Tarikh Booking</label>
            <input maxlength="200" name="Booking_Time" type="text" required="required" class="form-control" placeholder="31/12/2017" />
          </div>
          <div class="form-group">
           
<label class="control-label">Duration</label> 
           		    		<div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons">
        <label class="btn btn-default buying-selling">
            <input type="radio" name="duration" value="1 jam" id="1 jam" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word">1 Jam</span>
        </label>
    
        <label class="btn btn-default buying-selling">
            <input type="radio" name="duration" value="1/2 hari" id="1/2 hari" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word">½ Hari</span>
        </label>
        
        <label class="btn btn-default buying-selling">
            <input type="radio" name="duration" value="1 hari" id="1 hari" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word">1 Hari</span>
        </label>
        
        <label class="btn btn-default buying-selling">
            <input type="radio" name="duration" value="2 hari" id="2 hari" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word">2 Hari</span>
        </label>
</div>
             


          </div>
         
        </div>





          <Center><button class="btn btn-warning nextBtn btn-lg" type="button" ><b>Seterusnya >> </b></button></center>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-12">
        <div class="col-md-12">
          <center><h3> Step 2</h3>
 <h3>Sila Pilih Susun Atur Program Anda</h3>
<h2 id="greeting"></h2>
 
    <div class="cc-selector-2">
        <input id="teaters" type="radio" name="susunatur" value="Teater" />
        <label class="drinkcard-cc teaters" for="teaters"></label>

        <input id="classrooms" type="radio" name="susunatur" value="Classroom" />
        <label class="drinkcard-cc classrooms" for="classrooms"></label>

 <input id="ushapes" type="radio" name="susunatur" value="U-Shape" />
        <label class="drinkcard-cc ushapes" for="ushapes"></label>

 <input id="klusters" type="radio" name="susunatur" value="Kluster" />
        <label class="drinkcard-cc klusters" for="klusters"></label>

 <input id="makeups" type="radio" name="susunatur" value="Make Up" />
        <label class="drinkcard-cc makeups" for="makeups"></label>
    </div>
     
<div>
			    			<div class="form-group"> Nama Program &nbsp; &nbsp;<input type="text" name="program" id="company" placeholder="Nama Program" size="30"> <br/><br/>
 Jumlah Peserta &nbsp;<input type="text" name="peserta" id="jumlahpeserta" placeholder="Jumlah Peserta" size="30">
			    			</div>
			    		</div>

 <br/><Br/><br/>
<center><button class="btn btn-warning nextBtn btn-lg" type="button" ><b>Seterusnya</b></button></center>  </center><br/><Br/>
    </div>  </div>  </div>
    
    <div class="row setup-content" id="step-3">
      <div class="col-xs-12">
        <div class="col-md-12">
          <Center><h3>Step 4</h3>
          
          
           


			    	<div class="row">


    <h3>Anda Inginkan Pakej Makan?</h3>

			    		<div class="buying-selling-group" id="buying-selling-group" data-toggle="buttons">
        <label class="btn btn-default buying-selling">
            <input type="radio" name="makan" value="Tidak" id="tidak" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word">Tidak</span>
        </label>
    
        <label class="btn btn-default buying-selling">
            <input type="radio" name="makan" value="Menu A" id="menua" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word">Ya, Menu A</span>
        </label>
        
        <label class="btn btn-default buying-selling">
            <input type="radio" name="makan" value="Menu B" id="menub" autocomplete="off">
            <span class="radio-dot"></span>
            <span class="buying-selling-word">Ya, Menu B</span>
        </label>
</div>
<br/>
<img src="menucubic.png"></img><br/>
		    	</div> 
          
          <button class="btn btn-warning nextBtn btn-lg" type="submit" ><b>Seterusnya >></b></button>
<br/><br/>          </center>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-4">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 5</h3>
          
          
          
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
                                                                    <li><b>Sewa Bilik Seminar</b><br/>Duration : 1 Hari<br/>Tarikh : 29/2/2017<br/>Participant : 30 Orang</li>
                                                                    <li><b>Tambahan </b><br/>Makan (40 pax) </br>Flipchart (20 pax) </li>
                                                                    
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>RM 339.20</b><br/><br/><br/><br/><br/><b>RM 200.00</b><Br/><b>RM 20.00 </b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:orange;">RM 559.20</span></h3>
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
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Buat Pembayaran</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">

<p class="lead">More complex content example:</p>
            <div id="tab" class="btn-group" data-toggle="buttons-radio">
              <a href="#prices2" class="btn btn-large btn-warning active" data-toggle="tab"><b>Kad kredit/debit, Online Banking</b></a>
              <a href="#features2" class="btn btn-large btn-warning" data-toggle="tab"><b>Cash Deposit Machine</b></a> 
            </div>
             
            <div class="tab-content">
              <div class="tab-pane active" id="prices2">
                <br>
                <p class="lead">Kad kredit/debit, Online Banking</p>
                <div class="row">
                    <div class="span3">
Klik pautan berikut untuk terus akses kepada pautan pembayaran:

<br/><br/>


                      <img src="https://app.senangpay.my/public/img/logo-senangpay-wc.png">  <Br/>
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
Bank in duit tunai melalui mesin deposit ke akaun berikut:

Nama Akaun: TRAINING CUBE INTERNATIONAL SDN. BHD. 
No. Akaun: 860-090-764-2 
Bank: CIMB

                      <p><textarea></textarea></p> 
<P>
Nota: Selesai bank-in, mohon menyambung isi maklumat pada seksyen seterusnya dengan memberikan bukti pembayaran.</p>
                    </div>
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
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          <button class="btn btn-warning btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>
	<script type="text/javascript">
	$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-warning').addClass('btn-default');
          $item.addClass('btn-warning');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-warning').trigger('click');
});
	</script> 
	  <!--Time Availability -->

<?php
include("footer.php");
?>	
	 
	 
