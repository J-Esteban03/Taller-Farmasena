<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VER</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url();?>/assets/dist/img/milogo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DASHBOARD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="<?= base_url('index.php/Dashboard');?>" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/personas/listado_per');?>" class="nav-link">
            <i class="nav-icon fa-solid fa-list-ul"></i>
              <p>
                listado personas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/usarios/listado_usu');?>" class="nav-link">
            <i class="nav-icon fa-solid fa-list-ul"></i>
              <p>
                Listado Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/productos/listado_pro');?>" class="nav-link">
            <i class="nav-icon fa-solid fa-list-ul"></i>
              <p>
                listado Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/Login/cerrarSession') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                cerrar session
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="container mt-5">
            <h1 class="text-center mb-3">Datos Persona</h1>
          <?php echo form_open(''); ?>
          <!-- Input Documento -->
          <div class="form-group">
            <?php
              echo form_label('Documento', 'documento');
    
              $data = [
                'name'      => 'documento',
                'value'     => $documento,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
                'type' => 'number',
              ];
              echo form_input($data);
            ?>
          </div>
          <!-- Input Nombre -->
          <div class="form-group">
            <?php
              echo form_label('Nombre', 'nombre');
    
              $data = [
                'name'      => 'nombre',
                'value'     => $nombre,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
              ];
              echo form_input($data);
            ?>
          </div>
          <!-- Input Apellido -->
          <div class="form-group">
            <?php
              echo form_label('Apellido', 'apellido');
    
              $data = [
                'name'      => 'apellido',
                'value'     => $apellido,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
              ];
              echo form_input($data);
            ?>
          </div>
          <!-- Input Correo-->
          <div class="form-group">
            <?php
              echo form_label('Correo', 'correo');
    
              $data = [
                'name'      => 'correo',
                'value'     => $correo,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
              ];
              echo form_input($data);
            ?>
          </div>
          <!-- Input Direccion-->
          <div class="form-group">
            <?php
              echo form_label('Direccion', 'direccion');
    
              $data = [
                'name'      => 'direccion',
                'value'     => $direccion,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
              ];
              echo form_input($data);
            ?>
          </div>
          <!-- Input Genero  -->
          <div class="form-group">
            <?php
              echo "Genero".'</br>';
              ?>
                <?php echo "Masculino";?>  <input type="radio" name="genero" value="masculino" <?= set_radio('myradio', '1' ) ?>>
                <?php echo "Femenino";?>   <input type="radio" name="genero" value="femenino" <?= set_radio('myradio', '2') ?>>
              <?php
              $data = [
                'name'      => 'genero',
                'value'     => $genero,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
              ];
            ?>
          </div>
          <!-- Input Habilidades -->
          <div class="form-group">
            <?php
              echo "</br>";
              echo "Habilidades".'</br>';
              ?>
                <?php echo "Php";?> <input type="checkbox" class="ms-1" name="habilidades" value="php" <?= set_checkbox('php', '1') ?>>
                <?php echo "Python";?> <input type="checkbox" class="ms-1" name="habilidades" value="python" <?= set_checkbox('python', '2') ?>>
                <?php echo "Java";?> <input type="checkbox" class="ms-1" name="habilidades" value="java" <?= set_checkbox('java', '3') ?>>
  
              <?php
              $data = [
                'name'      => 'habilidades',
                'value'     => '',
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
  
              ];
            ?>
          </div>
          <!-- Input Perfil-->
          <div class="form-group">
            <?php
             echo "</br>";
              echo form_label('Perfil', 'perfil');
    
              $data = [
                'name'      => 'perfil',
                'value'     => $perfil,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
                'cols' => '2',
                'rows' => '2', 
              ];
              echo form_textarea($data);
            ?>
          </div>
          <!-- Input Usuario-->
          <div class="form-group">
            <?php
              echo form_label('Usuario', 'usuario');
    
              $data = [
                'name'      => 'usuario',
                'value'     => $usuario,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
              ];
              echo form_input($data);
            ?>
          </div>
          <!-- Input Contraseña-->
          <div class="form-group">
            <?php
              echo form_label('Contraseña', 'contrasena');
    
              $data = [
                'name'      => 'contrasena',
                'value'     => '',
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
                'type' => 'password',
              ];
              echo form_input($data);
            ?>
          </div>
           <!-- Input Año De Grado-->
          <div class="form-group">
            <?php
              echo form_label('Año de grado', 'año_grado');
    
              $data = [
                'name'      => 'año_grado',
                'value'     => $año_grado,
                'readonly' => 'readonly',
                'class'=> 'form-control input-lg',
              ];
              echo form_input($data);
            ?>
          </div>
          <div class="text-center mt-4">
            <a href="../listado_per"  class="btn btn-success">Atras</a>
          </div>
          <?php echo form_close(); ?>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/assets/dist/js/demo.js"></script>
</body>
</html>