<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="<?php echo $author;?>">
    <meta name="site_url" content="<?php echo site_url(); ?>">
    <meta name="base_url" content="<?php echo base_url(); ?>">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/images/favicon.png">
    <title><?php echo $title;?></title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSwS -->
    <link href="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/theme/eliteadmin/dist/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url(); ?>assets/theme/eliteadmin/dist/css/pages/dashboard3.css" rel="stylesheet">
    

    <link href="https://fonts.googleapis.com/css2?family=Trirong&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://kit.fontawesome.com/b377fabc22.js" crossorigin="anonymous"></script>
<!-- All Jquery -->
<script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>

<script src="<?php echo base_url()?>assets/plugins/JQuery/jquery-ui/jquery-ui.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-form/jquery.form.js"></script>


<link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
<link href="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
        
</head>
<style>
    body, h1,h2,h3,h4,h5,h6, small, .th-sarabun{
        font-family: 'Sarabun', sans-serif;
    }
</style>

<body class="skin-default  fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Credit Bank By CLLI.</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?php $this->load->view('admin/theme/navbar.php'); ?>
        <?php $this->load->view('admin/theme/left_sidebar.php'); ?>
