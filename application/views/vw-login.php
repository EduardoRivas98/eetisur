<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE.edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Eetisur</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/cdn.jsdelivr.net_npm_simple-datatables@7.1.2_dist_style.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
    <script src="<?php echo base_url(); ?>assets/js/use.fontawesome.com_releases_v6.3.0_js_all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed" style="background-color: #f4f4f4;">

    <div class="container" style="height: 100vh;">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-4">
                <div class="card shadow-lg rounded">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <img src="<?=base_url()?>assets/images/logos/logow.png" alt="Logo de la empresa" class="mb-4" style="width: 140px;">
                            <h2 class="text-dark">Inicio de Sesión</h2>
                        </div>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="height: 38px;">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Usuario">
                                </div>
                            </div>
                            <div class="mb-2"></div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="height: 38px;">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="mb-2"></div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" id='login'>
                                    <i class="fas fa-sign-in-alt"></i>
                                    Iniciar Sesión
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/js/scripts.js"></script>
    <script src="<?=base_url()?>assets/js/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/js/datatables-simple-demo.js"></script>
    <script src="<?=base_url()?>assets/js/login.js"></script>
</body>

</html>
