<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>K.S.F.D 自动化办公系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-style.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css');?>">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

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
	 <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
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
          <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/img/logo30.png');?>" alt=""> K.S.F.D Dashboard</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url('index.php/super_admin');?>"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin');?>"><i class="icon-lock icon-white"></i> Login</a></li>
              <li class="active"><a href="<?php echo base_url('index.php/super_admin/signup');?>"><i class="icon-user icon-white"></i> User</a></li>
             
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        <div class="row">

        	<div class="col-lg-6">
        		
        		<div class="register-info-wraper">
        			<div id="register-info">
        				<div class="cont2">
        					<div class="thumbnail">
								<img src="<?php echo base_url('assets/img/face.jpg');?>" alt="Marcel Newman" class="img-circle">
							</div><!-- /thumbnail -->
							<h2>用户资料示例</h2>
        				</div>
        				<div class="row">
        					<div class="col-lg-3">
        						<div class="cont3">
        							<p><ok>Username:</ok> LIJINGPENG</p>
        							<p><ok>Mail:</ok> ljp@ksfdchina.com</p>
        							<p><ok>Location:</ok> Incheon, Korea</p>
        							<p><ok>Address:</ok> Blahblah Ave. 879</p>
        						</div>
        					</div>
        					<div class="col-lg-3">
        						<div class="cont3">
        						<p><ok>Registered:</ok> April 9, 2014</p>
        						<p><ok>Last Login:</ok> January 29, 2014</p>
        						<p><ok>Phone:</ok> +82 010 663553</p>
        						<p><ok>Mobile</ok> +82 010 093384</p>
        						</div>
        					</div>
        				</div><!-- /inner row -->
						<hr>
						<div class="cont2">
							<h2>Choose Your Option</h2>
						</div>
						<br>
							<div class="info-user2">
								<span aria-hidden="true" class="li_user fs1"></span>
								<span aria-hidden="true" class="li_settings fs1"></span>
								<span aria-hidden="true" class="li_mail fs1"></span>
								<span aria-hidden="true" class="li_key fs1"></span>
								<span aria-hidden="true" class="li_lock fs1"></span>
								<span aria-hidden="true" class="li_pen fs1"></span>
							</div>

        				
        			</div>
        		</div>

        	</div>

        	<div class="col-sm-6 col-lg-6">
        		<div id="register-wraper">
        		    <form id="register-form" class="form" action="<?php echo base_url('index.php/super_admin/new_user_submit');?>">
        		        <legend>User Register</legend>
        		    
        		        <div class="body">

    		        		<label for="id">ID</label>
    		        		<input name="id" class="input-huge" type="text">
        		        	<!-- name -->
    		        		<label for="name">Real Name</label>
    		        		<input name="name" class="input-huge" type="text">
        		        	<!-- address -->
        		        	<label>Address</label>
        		        	<input name="address" class="input-huge" type="text">
        		        	<!-- note -->
        		        	<label>Phone Number</label>
        		        	<input name="note" class="input-huge" type="text">
        		        	<!-- password -->
        		        	<label>Password</label>
        		        	<input name="password" class="input-huge" type="text">

        		        </div>
        		    
        		        <div class="footer">
        		            <label class="checkbox inline">
        		                <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
        		            </label>
        		            <button type="submit" class="btn btn-success">Register</button>
        		        </div>
        		    </form>
        		</div>
        	</div>

        </div>
    </div>

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
    <script src="assets/js/bootstrap.js"></script>

  
</body></html>