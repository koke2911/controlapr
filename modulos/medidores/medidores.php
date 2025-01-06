<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidores</title>
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
        <h2 class="text-center">Medidores</h2>
        <!-- <div class="card shadow mb-12">
            <div class="card-body">
                <div class="container-fluid">
                    <center>
                        <button class="btn btn-warning" style="margin: 10px;" id="btn_nuevo">Nuevo</button>
                        <button class="btn btn-primary" style="margin: 10px;" id="btn_guardar" disabled>Guardar</button>
                        <button class="btn btn-secondary" style="margin: 10px;" id="btn_cancelar" disabled>Cancelar</button>
                        <button class="btn btn-danger" style="margin: 10px;" id="btn_aliminar" disabled>Eliminar</button>
                    </center>
                </div>
            </div> -->
    </div>
    <form id="PagosForm">
        <div class="card mb-4">
            <div class="card-header" data-toggle="collapse" data-target="#datosMedidor" aria-expanded="true" aria-controls="datosMedidor">
                <i class="fas fa-male mr-1"></i>SSR
            </div>
            <div class="card shadow mb-12 collapse" id="datosMedidor">
                <!-- <div class="card shadow mb-12"> -->
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="txt_apr" class="form-label">SSR - APR</label>
                                        <select class="form-control" id="txt_apr" name="txt_apr">
                                            <option value="">Seleccione un SSR</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                    <div class="mb-3">
                                        <label for="txt_apr" class="form-label">Cantidad Medidores</label>
                                        <input type="text" class="form-control" id="txt_cantidad_medidores" name="txt_cantidad_medidores" placeholder="" disabled>

                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                    <div class="mb-3">
                                        <label for="txt_serie" class="form-label">N° Serie</label>
                                        <input type="text" class="form-control" id="txt_serie" name="txt_serie" placeholder="Enter para Buscar">

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
                <div class="card-header"><i class="fas fa-house-user mr-1"></i> Listado de Medidores</div>
                <div class="card shadow mb-12">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <!-- <div id="medidoresDiv"></div> -->
                                <table class="table table-bordered" id="grid_medidor" name="grid_medidor">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width: 15%;">N° Factura</th>
                                            <th style="width: 40%;">APR</th>
                                            <th style="width: 15%;">Fecha Adquisición</th>
                                            <th style="width: 15%;">Numero Serie</th>
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
    <script src="../../js/medidores/medidores.js"></script>
</body>

</html>