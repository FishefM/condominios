<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <!-- Encabezado y botón de retroceso -->
        <div class="d-flex align-items-center mb-3">
            <button class="btn btn-light me-3">
                ←
            </button>
            <h2 class="mb-0">Reporte de reservaciones</h2>
        </div>

        <!-- Filtros -->
        <div class="row mb-4">
            <div class="col-md-3">
                <label for="mes" class="form-label">Mes</label>
                <select class="form-select" id="mes">
                    <option selected>Selecciona un mes</option>
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="año" class="form-label">Año</label>
                <input type="number" class="form-control" id="año" placeholder="Año">
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <button class="btn btn-primary w-100">Generar reporte</button>
            </div>
        </div>

        <!-- Tabla de reporte -->
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nombre del condómino</th>
                        <th>Tipo de evento</th>
                        <th>Fecha</th>
                        <th>Turno</th>
                        <th>Cantidad de personas</th>
                        <th>Detalles</th>     
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Pérez</td>
                        <td>Boda</td>
                        <td>24/11/24</td>
                        <td>Matutino</td>
                        <td>20</td>
                        <td>La boda de funalito y manuelita</td>
                    </tr>
                    <!-- Más filas según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>