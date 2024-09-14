<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Incluye Bootstrap CSS para estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Incluye Moment.js para manipulación de fechas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/es.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <!-- Fecha -->
                <div class="form-group mb-3">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control">
                </div>

                <!-- Horario -->
                <div class="form-group mb-3">
                    <label for="horarioSelect">Horario</label>
                    <select id="horarioSelect" class="form-select">
                        <option value="" selected disabled>Selecciona una opción</option>
                        <!-- <option value="10-14">08:00-14:00</option> -->
                        <!-- <option value="15-18">15:00-19:00</option> -->
                        <option value="08-09">08:00-09:00</option>
                        <option value="09-10">09:00-10:00</option>
                        <option value="10-11">10:00-11:00</option>
                        <option value="11-12">11:00-12:00</option>
                        <option value="12-13">12:00-13:00</option>
                        <option value="13-14">13:00-14:00</option>
                        <option value="15-16">15:00-16:00</option>
                        <option value="16-17">16:00-17:00</option>
                        <option value="17-18">17:00-18:00</option>
                        <option value="18-19">18:00-19:00</option>
                    </select>
                </div>

                <!-- Mostrar Fecha -->
                <div class="form-group mb-3">
                    <label for="fechaPantalla" hidden>Fecha Seleccionada</label>
                    <p id="fechaPantalla"></p>
                </div>

                <!-- Mostrar Horario -->
                <div class="form-group mb-3">
                    <label for="horarioPantalla" hidden>Horario Seleccionado</label>
                    <p id="horarioPantalla"></p>
                </div>

                <div id="contenedor"></div>
            </div>
        </div>
    </div>

    <!-- jQuery 3.5.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap 5.0 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Custom -->
    <script src="assets/js/fecha.js"></script>
</body>
</html>
