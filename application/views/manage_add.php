<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>K.S.F.D Admin - 凯诗菲蒂智能财务系统</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">K.S.F.D 财务管理终端</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong><?php echo $name?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>本系统正常运行...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="message-footer">
                            <a href="#">阅读所有信息</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">数据库运行正常 <span class="label label-primary">Normal</span></a>
                        </li>
                        <li>
                            <a href="#">未发现安全隐患 <span class="label label-success">Safe</span></a>
                        </li>
                        
                        <li>
                            <a href="#">正在试运行状态 <span class="label label-warning">Testing</span></a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#">查看所有</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> 用户资料</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> 设定</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('index.php/super_admin/logout')?>"><i class="fa fa-fw fa-power-off"></i> 登出</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url('index.php/super_admin')?>"><i class="fa fa-fw fa-dashboard"></i> 控制面板</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/super_admin/view_product')?>"><i class="fa fa-fw fa-bar-chart-o"></i> 查看商品</a>
                    </li>
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                            <i class="fa fa-fw fa-edit"></i> 管理商品 <i class="fa fa-fw fa-caret-down"></i>
                        </a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url('index.php/super_admin/manage_page')?>">增加项目</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/super_admin/manage_page_del')?>">删除项目</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            增加商品信息
                            <small>K.S.F.D 会员专用</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> 
                                <a href="<?php echo base_url('index.php/super_admin')?>">控制面板</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> 添加信息
                            </li>
                        </ol>
                    </div>

                    <!--------------------- -->
                    <form id="form1" role="form" action="<?php echo base_url('index.php/super_admin/add_product')?>">

                        <div class='col-lg-6'>
                            <div class="form-group">
                                <label>商品ID</label>
                                <input class="form-control" name="id">
                            </div>
                            <div class="form-group">
                                <label>中文名</label>
                                <input class="form-control" name="cn_name">
                            </div>
                            <div class="form-group">
                                <label>韩语名</label>
                                <input class="form-control" name="kr_name">
                            </div>
                            <div class="form-group">
                                <label>零售价</label>
                                <input class="form-control" name="fullprice">
                            </div>
                            <div class="form-group">
                                <label>积分</label>
                                <input class="form-control" name="fullprice">
                            </div>
                            <div class="form-group">
                                <label>库存</label>
                                <input class="form-control" name="fullprice">
                            </div>
                            <div class="form-group">
                                <label>Logo URL</label>
                                <input class="form-control" name="logo">
                            </div>
                        </div>

                        <div class='col-lg-6'>
                            <div class="form-group">
                                <label>A</label>
                                <input class="form-control" name="A">
                            </div>
                            <div class="form-group">
                                <label>B</label>
                                <input class="form-control" name="B">
                            </div>
                            <div class="form-group">
                                <label>C</label>
                                <input class="form-control" name="C">
                            </div>
                            <div class="form-group">
                                <label>D</label>
                                <input class="form-control" name="D">
                            </div>
                            <div class="form-group">
                                <label>简单介绍</label>
                                <textarea class="form-control" rows="8" name="intro"></textarea>
                            </div>
                        </div>


                        <div class='col-md-12'>
                            <div class='box box-info'>
                                <div class='box-header'>
                                    <h3 class='box-title'>详细介绍 <small>为了保持服务器的处理速度，若加图片，请使用第三方图床</small></h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <div class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></div>
                                        <div class="btn btn-info btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></div>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>
                                    <form>
                                        <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            请在此输入产品的详细介绍.
                                        </textarea>
                                    </form>
                                </div>
                                <input type="hidden" id="detail" name="detail">
                            </div><!-- /.box -->
                            <br/>
                            <center>
                                <div id="submit_btn" class="btn btn-lg btn-success">Submit Button</div>
                                <button type="reset" class="btn btn-lg btn-warning">Reset Button</button>
                            </center>
                        </div>
                    </form>


                    <!-------------------------- -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.0.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/ckeditor/ckeditor.js');?>"></script>
    <script src="<?php echo base_url('assets/js/app.js');?>"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url('assets/js/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>


    <script type="text/javascript">
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.

            CKEDITOR.replace( 'editor1', {
                language: 'chinese simplified',
                uiColor: '#C0B9B9'
            });
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();

            $('#submit_btn').on("click",function(){
                var data = CKEDITOR.instances.editor1.getData();
                $('#detail').val(data);
                $('#form1').submit();
            });
        });
    </script>

</body>

</html>
