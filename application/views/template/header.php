<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Aulas</title>

        <meta http-equiv="Content-Language" content="pt-br">

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" 
              rel="stylesheet">
        <!-- JS -->
        <link href="<?php echo base_url('assets/js/bootstrap.min.js') ?>" 
              rel="stylesheet">

        <script src="<?php echo base_url('DataTables/jquery.min.js') ?>"></script>

        <!-- Data Tables -->
        <!-- On Line -->
        <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jszip-2.5.0/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/r-2.2.2/datatables.min.css"/>-->

        <!-- Off Line / Local -->
        <link rel="stylesheet" type="text/css" 
              href="<?php echo base_url('DataTables/datatables.min.css') ?>"/>

        <!-- On Line -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <!-- Off Line / Local -->


    </head>

    <body>
        <div class="container">
            <?php if ($this->session->userdata('estou_logado')) {
                ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Projeto Tin N5 - Senac GRV</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cadastros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>alunos">Alunos</a>
                                    <a class="dropdown-item" href="#">Professor</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuario">Usuário</a>

                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="<?php echo base_url(); ?>login/sair" tabindex="-1" aria-disabled="true">Sair</a>
                                    </li>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            <?php } ?>
