<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Formulario para el ingreso de datos proporcionado por el usuario -->
<div class="container">
<form action="{{ url('/user') }}" method="post" enctype="multipart/form-data">
    <!-- Imprecion de llave de seguridad que solicita laravel para recepcionar información -->
   
    <h1>Inicio de Sesión</h1>



   

    <div class="form-group">
    <label for="Usuario">Usuario</label>
        <input class="form-control" type="text" value="" name="Usuario" id="Usuario">
    </div>

    <div class="form-group">
    <label for="Password">Password</label>
        <input class="form-control" type="password" value="" name="Password" id="Password">
    </div>
    <br>
    <br>







    <input type="submit" value="Iniciar Session" class="btn btn-success">

    <a href="{{ url('/user/create') }}" class="btn btn-info">Registrarse</a>

    
    

</form>
</div>