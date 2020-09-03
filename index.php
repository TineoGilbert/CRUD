<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Dependecia CSS de BootsTrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card bg-light mb-3" ">
                    <div class=" card-header"><i class="fas fa-lock"> Información Cofidencial</i></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="text-right">
                                <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Insertar">
                                    <i class="fas fa-plus-circle"></i> Agregar Nuevo
                                </span>
                            </section>
                            <div id="Datos"></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted text-right">
                    Alls Rights Reserved Gilbert Tineo 2020
                </div>
            </div>
        </div>

    </div>
    </div>


    <!--Modal para Insertar Datos-->

    <!-- Modal -->
    <div class="modal fade" id="Insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertar Datos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="insertarDatos">
                        <label>Nombre</label>
                        <input type="text" id="Nombre" name="Nombre" class="form-control form-control-sm">

                        <label>Apellido</label>
                        <input type="text" id="Apellido" name="Apellido" class="form-control form-control-sm">

                        <label>Email</label>
                        <input type="text" id="Email" name="Email" class="form-control form-control-sm">

                        <label>Teléfono</label>
                        <input type="text" id="Telefono" name="Telefono" class="form-control form-control-sm">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnGuardarDatos" onclick="agregarDatos()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!--Final de Modal Insertar Datos-->

    <!--Modal para Actualizar Datos-->


    <!-- Modal -->
    <div class="modal fade" id="Actualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="insertarDatosu">
                        <input type="text" id="idu" name="idu" hidden="">
                        <label>Nombre</label>
                        <input type="text" id="Nombreu" name="Nombreu" class="form-control form-control-sm">
                        <label>Apellido</label>
                        <input type="text" id="Apellidou" name="Apellidou" class="form-control form-control-sm"><br>
                        <label>Email</label>
                        <input type="text" id="Emailu" name="Emailu" class="form-control form-control-sm"><br>
                        <label>Teléfono</label>
                        <input type="text" id="Telefonou" name="Telefonou" class="form-control form-control-sm"><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="actualizarDatos()">Actualizar</button>
                </div>
            </div>
        </div>
    </div>

    <!---Final Modal para Actualizar Datos->



       <!--Depemdecias de FontWesome-->

    <script src="https://kit.fontawesome.com/d01099666b.js" crossorigin="anonymous"></script>


    <!--Dependecias de JS BootsTrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



    <!--Dependencia de CDN Jquery -->

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <!--Dependencias de Sweet Alert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="js/funciones.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            mostrarDatos();
        });
    </script>


</body>

</html>

<!--Hecho por Gilbert E. Tineo 2020-->