<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>K.S.F.D - Bootstrap Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet">
    <!-- DATA TABLE CSS -->
    <link href="<?php echo base_url('assets/css/table.css');?>" rel="stylesheet">



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

  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js');?>"></script>
  	<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#dt1').dataTable({ 
            "bAutoWidth": true 
        });
			} );
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
          <a class="navbar-brand" href="index.html">
            <img src="<?php echo base_url('assets/img/logo30.png');?>" alt=""> K.S.F.D Dashboard</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url('index.php/super_admin')?>"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin/logout')?>"><i class="icon-lock icon-white"></i> Logout</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin/signup')?>"><i class="icon-user icon-white"></i> User</a></li>
              <li class="active"><a href="<?php echo base_url('index.php/super_admin/view_product')?>"><i class="icon-user icon-white"></i> Product</a></li>
              <li><a href="<?php echo base_url('index.php/super_admin/manage_page')?>"><i class="icon-user icon-white"></i> Manager</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">


			 <!--Product Table -->


		<h4><strong>Product List</strong></h4>

		<table class="display" id="dt1">
        <thead>
          <tr>
            <th>ID</th>
            <th>中文名</th>
            <th>韩语名</th>
            <th>零售价</th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>积分</th>
            <th>库存</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          if ($query->num_rows() > 0){
            foreach ($query->result() as $row)
            {
              if($i%2==0) $oddeven="odd";
              else $oddeven="even";
              echo "<tr class='".$oddeven." gradeA'>";
              echo "<td>".$row->id."</td>";
              echo "<td>".$row->cn_name."</td>";
              echo "<td>".$row->kr_name."</td>";
              echo "<td class='center'>".$row->fullprice."</td>";
              echo "<td class='center'>".$row->A."</td>";
              echo "<td class='center'>".$row->B."</td>";
              echo "<td class='center'>".$row->C."</td>";
              echo "<td class='center'>".$row->D."</td>";
              echo "<td class='center'>".$row->point_jf."</td>";
              echo "<td class='center'>".$row->stock."</td>";
              echo "</tr>";
            }
          }
          ?>
          <!--
          <tr class="odd gradeX">
            <td>Trident</td>
            <td>Internet Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center"> 4</td>
            <td class="center">X</td>
            <td>Trident</td>
            <td>Internet Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center"> 4</td>
            <td class="center">X</td>
          </tr>
        -->

          
          
        </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	<br>	

      	
      	<br>
	<!-- FOOTER -->	
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="<?php echo base_url('assets/img/logo.png');?>" alt=""></p>
      			<p>K.S.F.D财务智能系统 - Copyright 2014</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/admin.js');?>"></script>

  
</body></html>