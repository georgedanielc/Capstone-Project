<!DOCTYPE html>

<?php include('session.php'); ?>	
<?php include('dbconn.php'); ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Invoice</title>

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="favicon.jpg"/>
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js.txt"></script>
<script type="text/javascript" src="script.js"></script>


</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->

    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
<!--**************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-left">
				<button type="submit" id="print" onclick="printPage()">Print</button>
                  <h2>Barangay Mahabang Parang</h2>
                  <address>
                <strong>Office of the Barangay</strong><br>
                MParang<br>
                
                <abbr title="Phone">P:</abbr> 09595564
              </address>
                </div>
				                <div class="pull-right">
                  <h2></h2>
                </div>
                <!-- /pull-right -->
                <div class="clearfix"></div>

                <!-- /pull-left -->
                <div class="row">
				
				<?php
				include ('dbconn.php');
				if (isset($_GET['reservation_id']))
				$reservation_id=$_GET['reservation_id'];
				$result= mysqli_query($conn,"select * from reservation_request where reservation_id='$reservation_id'") or die (mysql_error());

			
				while ($row= mysqli_fetch_array ($result) ){
			
					?>
				
                  <div class="col-md-9">
                    <h4><?php echo $row['username']; ?></h4>
                    <address>
                  <strong>Enterprise Corp.</strong><br>
                  234 Great Ave, Suite 600<br>
                  San Francisco, CA 94107<br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> INVOICE NO : </div>
                      <div class="pull-right"> <?php echo $row['reservation_id']; ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> INVOICE DATE : </div>
                      <div class="pull-right"> <?php include('currentdate.php'); ?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>

                  </div>
                  <!-- /invoice-body -->
                </div>
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-left">ReservationID</th>
                      <th class="text-left">Description</th>
                      <th style="width:140px" class="text-right">Date Reserved</th>
                      <th style="width:90px" class="text-right">Date Requested</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="text-left"><?php echo $row['reservation_id']; ?></td>
                      <td><?php echo $row['iname']; ?></td>
                      <td class="text-right"><?php echo $row['datereserved']; ?></td>
                      <td class="text-right"><?php echo $row['datereq']; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" rowspan="4">
                        <h4>Terms and Conditions</h4>
                        <p>Thank you for your using our services. We do expect you to come at the barangay 3 days before your requested date, so please process this invoice within that time. </p>
                        <td class="text-right"><strong></strong></td>
                        <td class="text-right"></td>
                    </tr>
                    
                  </tbody>
                </table>
                <br>
                <br>
              </div>
			  <?php } ?>


	
              <!--/col-lg-12 mt -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
 
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->

</body>
<script>

function printPage() {
    window.print();
}

</script>
</html>
