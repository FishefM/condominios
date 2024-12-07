<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Empleados</title>
</head>

<body>
    <h1>GESTOR DE EMPLEADOS</h1>
    <div class="container">
        <div class="fila">
            <button class="btn btn-primary">
                <i class="fa-solid fa-plus"></i> Agregar
            </button>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Ver Empleados eliminados
                </label>
            </div>
        </div>
        <!-- Tabla de reporte -->
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo electronico</th>
                        <th>Teléfono</th>
                        <th>Teléfono de emergencia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Pérez</td>
                        <td>yucefhernandez@hotmail.com</td>
                        <td>5545516139</td>
                        <td>5545162132</td>
                        <td>Borrar Editar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>