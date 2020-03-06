<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tree.css">  
    <title>Tree Automação</title>
  </head>

  <body class="cor-fundo">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
              <img class="tree-logo" src="./img/Logo_cabecalhosss.png" alt="Tree Automação">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Quem Somos
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Soluções</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Parcerias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contatos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navigation -->  
    <div class="container mrtop" >
    <div class="table-responsive">
      <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Data</th>
            <th>Dispositivo</th>
            <th>Mensagem</th>
          </tr>
        </thead>
        <tbody>        
            <?php foreach($users as $v){ ?>
              <tr>
                <td> <?php echo $v['dtlog'] ?> </td>
                <td> <?php echo $v['device'] ?> </td>
                <td> <?php echo $v['message'] ?> </td>
             
              </tr>
            <?php } ?>
        



        </tbody>
      </table>
    </div>
    </div>

    <!-- Page Content -->
    
    <!-- End Page Content -->

<!--Bottom Footer-->

<!--Bottom Footer-->     

    <!-- JavaScript (Opcional) -->
    <script src=<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>></script>
<!-- Core plugin JavaScript-->
	<script src=<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js')?>></script>
	<script src=<?php echo base_url('vendor/datatables/jquery.dataTables.min.js') ?>></script>
	<script src=<?php echo base_url('vendor/datatables/dataTables.bootstrap4.min.js') ?>></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>