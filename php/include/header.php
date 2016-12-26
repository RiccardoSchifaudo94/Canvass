<html lang="en">
<head>
  <title>Canvass</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../../css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="../../css/form.css">
  <link rel="stylesheet" type="text/css" href="../../css/tabs.css">
  <link rel="stylesheet" type="text/css" href="../../css/demo.css">
  <link rel="stylesheet" type="text/css" href="../../css/datatables/datatables.css">
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../../css/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="../../css/adminLTE/AdminLTE.css">
  <link rel="stylesheet" type="text/css" href="../../css/datatables/datatables.min.css"/>

  <?php

  		include("../../php/include/connessione.php");
  		include("../../php/service_functions/utility.php");
  		include("../../php/service_functions/less_compiler.php");

  ?>	


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../js/bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/s/dt/dt-1.10.10/datatables.min.js"></script>
</head>
<?php  include("../../php/include/modals.php");  ?>

<body>
<?php  include("../../php/include/sidebar.php");  ?>

<?php  
	
	$name_page =  basename($_SERVER['PHP_SELF']);
    if($name_page == "index.php")
	{
 ?>
	<button class="canvass-btn-add" data-toggle="modal" data-target="#createIdea"><i class="fa fa-plus"></i></button>	
<?php
	}// chiudi if basename($_Server diPHP self)
?>

<?php  
	
	$name_page =  basename($_SERVER['PHP_SELF']);
    if($name_page == "dettagli-idea.php")
	{
 ?>
	<button class="canvass-btn-add" data-toggle="modal" data-target="#deleteIdea"><i class="fa fa-trash-o"></i></button>	
<?php
	}// chiudi if basename($_Server diPHP self)
?>

<?php  
	
	$name_page =  basename($_SERVER['PHP_SELF']);
    if($name_page == "visualizza-idea.php")
	{
 ?>
	<button class="canvass-btn-add" data-toggle="modal" data-target="#writeComment"><i class="fa fa-comments-o"></i></button>	
<?php
	}// chiudi if basename($_Server diPHP self)
?>