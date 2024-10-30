<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de  Tareas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style> .cabecera-celeste { background-color: #b3e5fc; /* Color celeste */ } </style>
</head>
<body>
    <!-- Menú Top -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tareas</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <!-- Formulario -->
    <div class="container mt-5">
        <h2>Lista de Tareas</h2>
        <a href="{{ route('tareanueva') }}" class="btn btn-primary" >  Nueva Tarea</a>
        <br>
        <br>
        <table class="table">
             <thead class="cabecera-celeste">
                 <tr>
                     <th>#</th>
                      <th>DNI</th>
                      <th>Título</th> 
                      <th>Desccripcion</th> 
                      <th>Fecha de Creacióm</th> 
                      <th>Fecha de Vencimiento</th> 
                      <th>Estado</th> 
                      <th>Opciones</th> 
                </tr> 
            </thead>
             <tbody>
                 
                    @for ($i = 0; $i < count($datos); $i++) 
                           
                        <tr> 
                            <td>{{ $i+1 }}</td> 
                            <td>{{ $datos[$i]["DNI"]; }}</td> 
                            <td>{{ $datos[$i]["Titulo"]; }}</td> 
                            <td>{{ $datos[$i]["Descripcion"]; }}</td> 
                            <td>{{ $datos[$i]["FechaCreacion"]; }}</td> 
                            <td>{{ $datos[$i]["FechaVencimiento"]; }}</td> 
                            <td>{{ $datos[$i]["Estado"]; }}</td> 
                            <td> skldfhdsb sdgjkdfh</td>
                        </tr> 
                    @endfor
             </tbody> 
        </table>
      
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
