<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de Software</title>
    <link rel="stylesheet" href="../../static/bootstrap-4.6/bootstrap.min.css">
    <link rel="stylesheet" href="../../static/vendor/datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../../static/vendor/datatables/dataTables.cellEdit.css">
    <link rel="stylesheet" href="../../static/css/select.dataTables.min.css">
    <link href="../../static/js/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">

    <script src="../../static/js/fontawesome.all.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container mt-12" style="max-width: 80%">
        <h2 class="text-center">Pago de Software</h2>
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
        <form id="PagosForm">
            <div class="card mb-4">
                <div class="card-header" data-toggle="collapse" data-target="#datosPago" aria-expanded="false" aria-controls="datosPago">
                    <i class="fas fa-male mr-1"></i>Pago de Software
                </div>
                <div class="card shadow mb-12 collapse" id="datosPago">
                    <!-- <div class="card shadow mb-12"> -->
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_id" class="form-label">Id #</label>
                                            <input type="text" class="form-control" id="txt_id" name="txt_id" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_fecha_pago" class="form-label">Fecha de pago de software</label>
                                            <input type="date" class="form-control" id="txt_fecha_pago" name="txt_fecha_pago" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_mes" class="form-label">Mes</label>
                                            <input type="text" class="form-control" id="txt_mes" name="txt_mes" required placeholder="Mes">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_nombre_ssr" class="form-label">Nombre SSR</label>
                                            <select class="form-control" id="txt_nombre_ssr" name="txt_nombre_ssr" disabled required>
                                                <option value="">Seleccione un SSR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_rut" class="form-label">Rut</label>
                                            <input type="text" class="form-control" id="txt_rut" name="txt_rut" disabled required maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="txt_email" name="txt_email" disabled required maxlength="50">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_region" class="form-label">Región</label>
                                            <select class="form-control" id="txt_region" name="txt_region" disabled required>
                                                <option value="">Seleccione una región</option>
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
                                                <option value="RM">RM</option>
                                                <option value="XIV">XIV</option>
                                                <option value="XV">XV</option>
                                                <option value="XVI">XVI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_contacto" class="form-label">Contacto</label>
                                            <input type="text" class="form-control" id="txt_contacto" name="txt_contacto" disabled maxlength="20">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" hidden>
                                        <div class="mb-3">
                                            <label for="txt_cargo" class="form-label">Cargo</label>
                                            <input type="text" class="form-control" id="txt_cargo" name="txt_cargo" disabled maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" hidden>
                                        <div class="mb-3">
                                            <label for="txt_numero" class="form-label">Número</label>
                                            <input type="text" class="form-control" id="txt_numero" name="txt_numero" disabled maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" hidden>
                                        <div class="mb-3">
                                            <label for="txt_contacto2" class="form-label">Contacto 2</label>
                                            <input type="text" class="form-control" id="txt_contacto2" name="txt_contacto2" disabled maxlength="20">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_total_pago" class="form-label">Total de pago</label>
                                            <input type="text" class="form-control" id="txt_total_pago" name="txt_total_pago" disabled required maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_numero_factura" class="form-label">Nº factura</label>
                                            <input type="text" class="form-control" id="txt_numero_factura" name="txt_numero_factura" disabled required maxlength="20">
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
                    <div class="card-header"><i class="fas fa-house-user mr-1"></i> Listado de Pagos (doble click para ver y editar)</div>
                    <div class="card shadow mb-12">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="grid_pago" name="grid_pago">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Fecha</th>
                                                <th>APR</th>
                                                <th>Mes</th>
                                                <th>Total $</th>
                                                <th>N° Factura</th>
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
    <script src="../../js/pago/pago.js"></script>
</body>

</html>