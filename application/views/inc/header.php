<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/offcanvas.css" rel="stylesheet">
	   <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
      <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
    <![endif]-->

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>


   
  </head>

  <body>

     <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo index_page(); ?>">Leads.lo</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo index_page(); ?>">Home</a></li>

             <li class="dropdown">
              <a href="<?php echo base_url("sales"); ?>" class="dropdown-toggle" data-toggle="dropdown">Sales <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url("add_data"); ?>">Add Leads</a></li>
                <li><a href="<?php echo base_url("today"); ?>">Show Today's</a></li>
                <li><a href="<?php echo base_url("show_records"); ?>">All Contacts</a></li>                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>

            
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">



