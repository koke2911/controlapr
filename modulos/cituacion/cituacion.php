<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situacion Comercial</title>
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
        <h2 class="text-center">Situacion Comercial</h2>
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
        <form id="CituacionForm">
            <div class="card mb-4">
                <div class="card-header" data-toggle="collapse" data-target="#datosCituacion" aria-expanded="false" aria-controls="datosCituacion">
                    <i class="fas fa-male mr-1"></i>Situacion Comercial
                </div>
                <div class="card shadow mb-12 collapse" id="datosCituacion">
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
                                            <label for="txt_apr" class="form-label">SSR - APR</label>
                                            <select class="form-control" id="txt_apr" name="txt_apr" disabled required>
                                                <option value="">Seleccione un SSR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" hidden>
                                        <div class="mb-3">
                                            <label for="txt_giro" class="form-label">Giro Comercial</label>
                                            <input type="text" class="form-control" id="txt_giro" name="txt_giro" placeholder="" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_rut" class="form-label">Rut</label>
                                            <input type="text" class="form-control" id="txt_rut" name="txt_rut" disabled required maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_arranques" class="form-label">Arranques</label>
                                            <input type="text" class="form-control" id="txt_arranques" name="txt_arranques" disabled required maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_medidores" class="form-label">Medidores</label>
                                            <input type="text" class="form-control" id="txt_medidores" name="txt_medidores" disabled required maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_factura" class="form-label">N° Factura</label>
                                            <input type="text" class="form-control" id="txt_factura" name="txt_factura" disabled required maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_fecha_adquisicion" class="form-label">Fecha Adquisición</label>
                                            <input type="date" class="form-control" id="txt_fecha_adquisicion" name="txt_fecha_adquisicion" disabled required maxlength="50">
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
                                    <table class="table table-bordered" id="grid_cituacion" name="grid_cituacion">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>SSR</th>
                                                <th>Rut</th>
                                                <th>Arranques</th>
                                                <th>Medidores</th>
                                                <th>N° Factura</th>
                                                <th>Fecha Adquisición</th>
                                                <th>Medidores</th>
                                                <th>Ver Medidores</th>
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

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    
    <script src="../../js/cituacion/cituacion.js"></script>
</body>

</html>