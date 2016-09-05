<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Grupo  Michelagnoli CRM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/mood.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/uniform.default.css" rel="stylesheet" media="screen">
    <link href="css/chosen.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
 <?php
  include('Navegacion.php'); 
 ?>
<div class="container theme-showcase" role="main" id="top">

      <div class="page-header">
<?php 

    if (isset($botonHeader))
    {
?>
          <a href="#" class="btn btn-success btn-lg pull-right" role="button" data-toggle="modal" data-target=".bs-nuevo-modal-sm">
              <?php echo $botonHeader?>
          </a>
<?php 
    }
    
?>
          <h1>
              <?php echo $encabezado; ?>
          </h1>
      </div>