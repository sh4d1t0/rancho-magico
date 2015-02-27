<div class="container">
          
<div class="jumbotron">
<h1>Acceso a Rancho Mágico</h1>
</div>
          
<div class="row">
              
<div class="col-lg-6">
<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-pencil-square-o"></i> Registrate</h3>
</div>
<div class="panel-body">
<div class="well"><h1>Registrate</h1></div>      
<a href="registro.html">Registrate</a>
</div>
</div>
</div>
                            
<div class="col-lg-6">
<div class="panel panel-info">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-user"></i> Login</h3>
</div>
    <?php echo validation_errors(); ?>
<div class="panel-body">
<div class="form-group">
    <form action="<?php echo base_url();?>verificar_login" role="form" method="POST">
<label for="nombre">Usuario:</label>
<input type="text" name="usuario" class="form-control" maxlength="12" title="Ingrese un nombre de usuario" required>
</div>
<div class="form-group">
<label for="contrasena">Contraseña:</label>
<input type="password" name="contrasena" class="form-control" title="Ingrese su contraseña" required maxlength="8">
</div>
<button type="submit" class="btn btn-default">Ingresar</button>
</form>
</div>
</div>            
</div>            
</div>          
</div>