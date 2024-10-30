<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevas Tareas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                <a class="nav-link" href="{{ route('listatareas') }}">Tarea</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <!-- Formulario -->
    <div class="container mt-5">
        <h2>Nueva Tarea</h2>
        <a class="btn btn-success" href="{{ route('listatareas') }}">Regresar</a>
     <form  action="{{route('registronuevatarea')}}" method="POST" >
     @csrf
            <div class="form-group">
                <label for="DNI">DNI:</label>
                <input type="text" class="form-control" id="dnitarea" name="dnitarea" placeholder="Ingresa el DNI del responsable">
            </div>
            <div class="form-group">
                <label for="Titulo">Titulo:</label>
                <input type="text" class="form-control" id="titulotarea" name="titulotarea" placeholder="Ingresa el título">
            </div>
            <div class="form-group">
                <label for="Descripcion">Descripcion:</label>
                <textarea class="form-control" id="descripciontarea" name="descripciontarea" placeholder="Ingresa el título" ></textarea>
            </div>
            <div class="form-group">
                <label for="Fecha">Fecha de Vencimiento:</label>
                <input type="date" class="form-control" id="fechatarea" name="fechatarea" >
            </div>
            <div class="form-group">
                <label for="Estado">Estado:</label>
                <select class="form-control" id="estadoarea" name="estadoarea">
                        <option value="Pendiente">Pendiente</option>
                        <option value="Progreso">Progreso</option>
                        <option value="Completada">Completada</option>
                </select>
            </div>
            
            <!--<div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña">
            </div>-->
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
      
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
