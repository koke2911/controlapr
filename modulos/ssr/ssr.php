<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar SSR</title>
    <link rel="stylesheet" href="../../static/bootstrap-4.6/bootstrap.min.css">
    <link rel="stylesheet" href="../../static/vendor/datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../../static/vendor/datatables/dataTables.cellEdit.css">
    <link rel="stylesheet" href="../../static/css/select.dataTables.min.css">
    <link href="../../static/js/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">

    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->
    <script src="../../static/js/fontawesome.all.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">SSR</h2>
        <div class="card shadow mb-12">
            <div class="card-body">
                <div class="container-fluid">
                    <center>
                        <button class="btn btn-warning" style="margin: 10px;" id="btn_nuevo">Nuevo</button>
                        <button class="btn btn-primary" style="margin: 10px;" id="btn_guardar" disabled>Guardar</button>
                        <button class="btn btn-secondary" style="margin: 10px;" id="btn_cancelar" disabled>Cancelar</button>
                        <button class="btn btn-danger" style="margin: 10px;" id="btn_aliminar" disabled>Eliminar</button>
                    </center>
                </div>
            </div>
        </div>
        <form id="SSRForm">
            <div class="card mb-4">
                <div class="card-header" data-toggle="collapse" data-target="#datosSSR" aria-expanded="false" aria-controls="datosSSR">
                    <i class="fas fa-male mr-1"></i> Datos del SSR
                </div>
                <div class="card shadow mb-12 collapse" id="datosSSR">
                    <!-- <div class="card shadow mb-12"> -->
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_id" class="form-label">Id #</label>
                                            <input type="text" class="form-control" id="txt_id" name="txt_id" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_rut" class="form-label">RUT (11111111-1)</label>
                                            <input type="text" class="form-control" id="txt_rut" name="txt_rut" disabled maxlength="12">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_nombre_ssr" class="form-label">Nombre SSR</label>
                                            <input type="text" class="form-control" id="txt_nombre_ssr" name="txt_nombre_ssr" disabled maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="cmb_region" class="form-label">Region</label>
                                            <select class="form-control" id="cmb_region" name="cmb_region" disabled>
                                                <option value="">Seleccione una Region</option>
                                                <option value="I">I</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                                <option value="V">V</option>
                                                <option value="VI">VI</option>
                                                <option value="VII">VII</option>
                                                <option value="VIII">VIII</option>
                                                <option value="IX">IX</option>
                                                <option value="X">X</option>
                                                <option value="XI">XI</option>
                                                <option value="XII">XII</option>
                                                <option value="XIII">XIII</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="cmb_comuna" class="form-label">Comuna</label>
                                            <select class="form-control" id="cmb_comuna" name="cmb_comuna" disabled>
                                                <option value="">Seleccione una Comuna</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" disabled maxlength="30">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_direccion" class="form-label"> Direccion</label>
                                            <input type="text" class="form-control" id="txt_direccion" name="txt_direccion" disabled maxlength="9">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_presidente" class="form-label"> Presidente</label>
                                            <input type="text" class="form-control" id="txt_presidente" name="txt_presidente" disabled maxlength="9">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_secretario" class="form-label"> Secretario</label>
                                            <input type="text" class="form-control" id="txt_secretario" name="txt_secretario" disabled maxlength="9">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_tesorero" class="form-label"> Tesorero</label>
                                            <input type="text" class="form-control" id="txt_tesorero" name="txt_tesorero" disabled maxlength="9">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_nombre" class="form-label"> Nombre</label>
                                            <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" disabled maxlength="9">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_contacto" class="form-label"> Contacto</label>
                                            <input type="text" class="form-control" id="txt_contacto" name="txt_contacto" disabled maxlength="9">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_nombre2" class="form-label"> Nombre 2</label>
                                            <input type="text" class="form-control" id="txt_nombre2" name="txt_nombre2" disabled maxlength="9">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_contacto2" class="form-label"> Contacto 2</label>
                                            <input type="text" class="form-control" id="txt_contacto2" name="txt_contacto2" disabled maxlength="9">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_arranques" class="form-label"> Arranques</label>
                                            <input type="text" class="form-control" id="txt_arranques" name="txt_arranques" disabled maxlength="9">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_medidores" class="form-label"> Medidores</label>
                                            <input type="text" class="form-control" id="txt_medidores" name="txt_medidores" disabled maxlength="9">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="cmb_foto_portada" class="form-label"> Foto portada</label>
                                            <select class="form-control" id="cmb_foto_portada" name="cmb_foto_portada" disabled>
                                                <option value="" selected>Seleccione</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-1">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-house-user mr-1"></i> Listado de SSR (doble click para ver y editar)</div>
                    <div class="card shadow mb-12">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="grid_ssr" name="grid_ssr">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>R.U.T</th>
                                                <th>Nombre</th>
                                                <th>Region</th>
                                                <th>Email</th>
                                                <th>Arranques</th>
                                                <th>Medidores</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../../static/bootstrap-4.6/jquery-3.6.0.min.js"></script>
    <script src="../../static/bootstrap-4.6/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../static/vendor/datepicker/moment.min.js"></script>
    <script type="text/javascript" src="../../static/vendor/datepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="../../static/vendor/datepicker/bootstrap-datetimepicker.es.js"></script>
    <script type="text/javascript" src="../../static/vendor/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../../static/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="../../static/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="../../static/vendor/datatables/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../../static/js/fnReloadAjax.js"></script>
    <script type="text/javascript" src="../../static/vendor/datatables/dataTables.cellEdit.js"></script>
    <script type="text/javascript" src="../../static/vendor/datatables/fnFindCellRowNodes.js"></script>
    <script type="text/javascript" src="../../static/js/jquery-validation/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="../../static/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../../static/js/Multiple-Select/dist/js/bootstrap-multiselect.min.js"></script>
    <script type="text/javascript" src="../../static/js/Multiple-Select/dist/js/bootstrap-multiselect.min.js"></script>
    <script type="text/javascript" src="../../static/js/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../../static/js/datatables.responsive.min.js"></script>
    <script src="../../js/ssr/ssr.js"></script>
</body>

</html>