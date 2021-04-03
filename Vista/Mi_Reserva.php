<?php
include_once 'layouts/header_Mi_Reserva.php';
?>
<title>Mi Reserva</title>
<?php
include_once 'layouts/nav_Mi_Reserva.php';
?>

<section class="ContenedorFormularioReserva">
    <div class="panel panel-primary">

        <div class="panel-heading">
            <h4 class=" estiloTextReserva">Mi Reserva</h4>
        </div>
        <div class="panel-body">
            <form action="" class="form-horizontal">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Pasajero</h3>
                                        <hr class="LineaHorizontal">
                                    </div>
                                    <div class="card-body">


                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nombre</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtNombre" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Apellido</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtApellido" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Cedula</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtCedula" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Telefono</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtTelefono" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Correo</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtCorreo" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Genero</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtGenero" class="form-control">
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content ContenedorFormularioInformacionReserva">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Informacion de Reserva</h3>
                                        <hr class="LineaHorizontal">
                                    </div>
                                    <div class="card-body">


                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Estado</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtEstado" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Hora Salida</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtHoraSalida" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Silla Seleccionada</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtSilla" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Origen</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtOrigen" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Destino</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtDestino" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">FechaLlegada</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtFechaLlegada" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">FechaSalida</label>
                                            <div class="col-sm-4">
                                                <input type="date" id="txtFechaSalida" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Tipo de Vuelo</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtTipo Vuelo" class="form-control">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Estado Vuelo</label>
                                            <div class="col-sm-4">
                                                <input type="text" id="txtEstado Vuelo" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer row">
                    <p class="ColorTextoModalIniciarSesion estiloTextReserva">Si quiere cancelar su reserva solo tiene como plaso minimo de 8 dias antes del Vuelo</p>
                    <br>
                    <div class="offset-sm-2 col-sm-12 float-right">
                        <button type="button" class="btn btn-danger">Cancelar Reserva</button>
                    </div>
                </div>
            </form>
        </div>
</section>
<?php
include_once 'layouts/footer_Mi_Reserva.php';
?>