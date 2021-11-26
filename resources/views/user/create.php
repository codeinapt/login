<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Formulario para el ingreso de datos proporcionado por el usuario -->
<div class="container">
<form action="{{ url('/user') }}" method="post" enctype="multipart/form-data">
    <!-- Imprecion de llave de seguridad que solicita laravel para recepcionar información -->
   
    <h1>Agregar Nuevo Usuario</h1>



    <div class="form-group">
    <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" value="" name="Nombre" id="Nombre">
    </div>
    
    <div class="form-group">
    <label for="Apellido">Apellido</label>
        <input class="form-control" type="text" value="" name="Apellido" id="Apellido">
    </div>
    <br>br
    <div class="form-group">
    <label for="Tipo-Documento">Tipo Documento</label>
        <select name="Tipo-Documeto">
            <option value="1">Cedula Ciudadania</option>
            <option value="2">Cedula Extranjeria</option>
            <option value="3">Tarjeta Identidad</option>
        </select>
    </div>

    <br>

    <div class="form-group">
    <label for="Fecha-Nacimiento">Fecha Nacimiento</label>
        <input class="form-control" type="date" value="" name="Fecha-Nacimiento" id="Fecha-Nacimiento">
    </div>

    <div class="form-group">
    <label for="Ciudad-Nacimiento">Ciudad Nacimiento</label>
        <input class="form-control" type="text" value="" name="Ciudad-Nacimiento" id="Ciudad-Nacimiento">
    </div>

    <div class="form-group">
    <label for="Telefono">Telefono</label>
        <input class="form-control" type="number" value="" name="Telefono" id="Telefono">
    </div>

    <div class="form-group">
    <label for="Usuario">Usuario</label>
        <input class="form-control" type="text" value="" name="Usuario" id="Usuario">
    </div>

    <div class="form-group">
    <label for="Password">Password</label>
        <input class="form-control" type="password" value="" name="Password" id="Password">
    </div>







    <input type="submit" value="Agregar Nuevo Usuario" class="btn btn-success">

    <a href="{{ url('user/') }}" class="btn btn-info">Regresar</a>

    
    

</form>
</div>
