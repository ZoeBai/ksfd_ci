<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>K.S.F.D - Bootstrap Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Long Qianzhi">

    <!-- Le styles -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/flexslider.css');?>" rel="stylesheet">
    
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.0.js');?>"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png');?>">

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="<?php echo base_url('assets/css/raleway.css');?>" rel="stylesheet" type="text/css">
  	<link href="<?php echo base_url('assets/css/open_sans.css');?>" rel="stylesheet" type="text/css">

<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>


    
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><img src="<?php echo base_url('assets/img/logo30.png');?>" alt=""> K.S.F.D Dashboard</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href=""><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin/logout')?>"><i class="icon-lock icon-white"></i> Logout</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin/signup')?>"><i class="icon-user icon-white"></i> User</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin/view_product')?>"><i class="icon-user icon-white"></i> Product</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin/manage_page')?>"><i class="icon-user icon-white"></i> Manager</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>User Profile</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img src="<?php echo base_url('assets/img/face80x80.jpg');?>" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->
				<h1><?php echo $name;?></h1>
				<h3><?= $id?>, China</h3>
				<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>
					</div>
				</div>
        </div>

      <!-- DONUT CHART BLOCK -->
       <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>Site Bandwidth</dtitle>
		  		<hr>
	        	<div id="load"></div>
	        	<h2>45%</h2>
			</div>
        </div>


      <!-- DONUT CHART BLOCK -->
       <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>Disk Space</dtitle>
		  		<hr>
	        	<div id="space"></div>
	        	<h2>21%</h2>
			</div>
        </div>
        
        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Local Time</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div>
			</div>

      <!-- SERVER UPTIME -->
			<div class="half-unit">
	      		<dtitle>Server Uptime</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="<?php echo base_url('assets/img/up.png');?>" alt=""> <bold>Up</bold> | 356ms.</p>
				</div>
			</div>

        </div>
      </div><!-- /row -->
      
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit">
      		<dtitle>Inbox (1)</dtitle>
      		<hr>
      		<div class="framemail">
    			<div class="window">
			        <ul class="mail">
			            <li>
			                <i class="unread"></i>
			                <img class="avatar" src="<?php echo base_url('assets/img/photo01.jpeg');?>" alt="avatar">
			                <p class="sender">Adam W.</p>
			                <p class="message"><strong>Working</strong> - This is the last...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="<?php echo base_url('assets/img/photo02.jpg');?>" alt="avatar">
			                <p class="sender">Dan E.</p>
			                <p class="message"><strong>Hey man!</strong> - You have to taste ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="<?php echo base_url('assets/img/photo03.jpg');?>" alt="avatar">
			                <p class="sender">Leonard N.</p>
			                <p class="message"><strong>New Mac :D</strong> - So happy with ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="<?php echo base_url('assets/img/photo04.jpg');?>" alt="avatar">
			                <p class="sender">Peter B.</p>
			                <p class="message"><strong>Thank you</strong> - Finally I can ...</p>
			                <div class="actions">
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>
			            </li>
			        </ul>
    			</div>
			</div>
		</div><!-- /dash-unit -->
    </div><!-- /span3 -->

	  <!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
      		<dtitle>Other Information</dtitle>
      		<hr>
			    <div class="section-graph">
			      <div id="importantchart"></div>
			      <br>
			      <div class="graph-info">
			        <i class="graph-arrow"></i>
			        <span class="graph-info-big">634.39</span>
			        <span class="graph-info-small">+2.18 (3.71%)</span>
			      </div>
			    </div>
			</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Last Month Revenue</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>$879</bold> | <ok>Approved</ok></p>
					<br>
					<p><bold>$377</bold> | Pending</p>
					<br>
					<p><bold>$156</bold> | <bad>Denied</bad></p>
					<br>
					<p><img src="<?php echo base_url('assets/img/up-small.png');?>" alt=""> 12% Compared Last Month</p>

				</div>

			</div>
        </div>
        

    	<!-- GAUGE CHART BLOCK -->     
		<div class="col-sm-3 col-lg-3">
			<div class="dash-unit">
	      		<dtitle>CPU Load</dtitle>
	      		<hr>
	      		<div class="info-user">
					<span aria-hidden="true" class="li_lab fs2"></span>
				</div>
				<canvas id="canvas" width="300" height="300">
			</canvas></div>
		</div>
      </div><!-- /row -->
     
 
	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
      	<div class="col-sm-3 col-lg-3">
	  
	  <!-- BARS CHART - lineandbars.js file -->     
      		<div class="half-unit">
	      		<dtitle>Stock Information</dtitle>
	      		<hr>
	      		<div class="cont">
	      		 <div class="info-aapl">
			        <h4>AAPL</h4>
			        <ul>
			          <li><span class="orange" style="height: 37.5%"></span></li>
			          <li><span class="orange" style="height: 47.5%"></span></li>
			          <li><span class="orange" style="height: 70%"></span></li>
			          <li><span class="orange" style="height: 85%"></span></li>
			          <li><span class="green" style="height: 75%"></span></li>
			          <li><span class="green" style="height: 50%"></span></li>
			          <li><span class="green" style="height: 15%"></span></li>
			        </ul>
			      </div>
			      </div>
      		</div>

	  <!-- TO DO LIST -->     
      		<div class="half-unit">
	      		<dtitle>To Do List</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>13</bold> | Pending Tasks</p>
				</div>
		             <div class="progress">
				        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>
					        
				        </div>
				     </div>
      		</div>
      	</div>

      	<div class="col-sm-3 col-lg-3">

	  <!-- LIVE VISITORS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Live Visitors</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>388</bold></p>
      			<p><img src="assets/img/up-small.png" alt=""> 412 Max. | <img src="assets/img/down-small.png" alt=""> 89 Min.</p>
	      		</div>
      		</div>
      		
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Page Views</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>145.0K</bold></p>
      			<p><img src="assets/img/up-small.png" alt=""> 23.88%</p>
	      		</div>
      		</div>
      	</div>

      	<div class="col-sm-3 col-lg-3">
	  <!-- TOTAL SUBSCRIBERS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Total Subscribers</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>14.744</bold></p>
      			<p>98 Subscribed Today</p>
	      		</div>
      		</div>
      		
	  <!-- FOLLOWERS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Twitter Followers</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>17.833 Followers</bold></p>
      			<p>@SomeUser</p>
	      		</div>
      		</div>
      	</div>

	  <!-- LATEST NEWS BLOCK -->     
      	<div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Latest News</dtitle>
	      		<hr>
				<div class="info-user">
					<span aria-hidden="true" class="li_news fs2"></span>
				</div>
				<br>
      			<div class="text">
      				<p><b>Alvarez.is:</b> A beautiful new Dashboard theme has been realised by Carlos Alvarez. Please, visit <a href="http://alvarez.is">Alvarez.is</a> for more details.</p>
      				<p><grey>Last Update: 5 minutes ago.</grey></p>
      			</div>
      		</div>
      	</div>
      </div><!-- /row -->
      
	  <!-- FOURTH ROW OF BLOCKS -->     
	<d
     
      
      
	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="<?php echo base_url('assets/img/logo.png');?>" alt=""></p>
      			<p>凯诗菲蒂财务自动化办公系统 - 龙潜智 编写 - Copyright 2014</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/lineandbars.js');?>"></script>
    
	<script type="text/javascript" src="<?php echo base_url('assets/js/dash-charts.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/gauge.js');?>"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/noty/jquery.noty.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/noty/layouts/top.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/noty/layouts/topLeft.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/noty/layouts/topRight.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/noty/layouts/topCenter.js');?>');?>"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/noty/themes/default.j');?>s"></script>
	<script>
		var n = noty({
			text: '<img src="<?php echo base_url('assets/img/face36x36.jpg');?>"> <strong> <?php echo $name;?> </strong> <br /> 你好，欢迎使用凯诗菲蒂财务系统. 本系统由龙潜智设计。若发现任何故障请联系 longqianzhi[at] gmail.com',
			type: 'alert',
			layout: 'topRight',
			closeWith: ['hover'],
		});
	</script>
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/highcharts.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.flexslider.js');?>" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/admin.js');?>"></script>
  
</body></html>