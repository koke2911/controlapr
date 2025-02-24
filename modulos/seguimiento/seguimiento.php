<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obs y Seguimiento</title>
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
        <h2 class="text-center">Obs y Seguimiento</h2>
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
        <form id="SeguimientoForm">
            <div class="card mb-4">
                <div class="card-header" data-toggle="collapse" data-target="#datosSeg" aria-expanded="false" aria-controls="datosSeg">
                    <i class="fas fa-male mr-1"></i>Obs y Seguimiento
                </div>
                <div class="card shadow mb-12 collapse" id="datosSeg">
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
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_estado" class="form-label">Estado</label>
                                            <select class="form-control selectpicker" id="txt_estado" name="txt_estado" data-style="btn-black">
                                                <option value="Pendiente" data-content="<span style='background-color:#F7F769; color:#000000;'>Pendiente</span>">Pendiente</option>
                                                <option value="No solucionado" data-content="<span style='background-color:#FB6666; color:#000000;'>No solucionado</span>">No solucionado</option>
                                                <option value="Solucionado" data-content="<span style='background-color:#96D796; color:#000000;'>Solucionado</span>">Solucionado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_fecha" class="form-label">Fecha</label>
                                            <input type="date" class="form-control" id="txt_fecha" name="txt_fecha" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="cmb_apr" class="form-label">APR</label>
                                            <select class="form-control" id="cmb_apr" name="cmb_apr" disabled required></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_nombre_contacto" class="form-label">Nombre Contacto</label>
                                            <input type="text" class="form-control" id="txt_nombre_contacto" name="txt_nombre_contacto" disabled required maxlength="20">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_cargo" class="form-label">Cargo</label>
                                            <input type="text" class="form-control" id="txt_cargo" name="txt_cargo" disabled required maxlength="20">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="txt_contacto" class="form-label">Contacto</label>
                                            <input type="text" class="form-control" id="txt_contacto" name="txt_contacto" disabled required maxlength="20">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="mb-6">
                                            <label for="txt_problema" class="form-label">Problema</label>
                                            <textarea class="form-control" id="txt_problema" name="txt_problema" disabled required maxlength="2000" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="mb-6">
                                            <label for="txt_solucion" class="form-label">Solución</label>
                                            <textarea class="form-control" id="txt_solucion" name="txt_solucion" disabled maxlength="2000" rows="3"></textarea>
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
                    <div class="card-header"><i class="fas fa-house-user mr-1"></i> Listado de Seguimientos (doble click para ver y editar)</div>
                    <div class="card shadow mb-12">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="grid_seg" name="grid_seg">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Fecha</th>
                                                <th>APR</th>
                                                <th>Nombre</th>
                                                <th>Cargo</th>
                                                <th>Contacto</th>
                                                <th>Problema</th>
                                                <th>Solucion</th>
                                                <th>Estado</th>
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
    
    <script src="../../js/seguimiento/seguimiento.js"></script>
</body>

</html>