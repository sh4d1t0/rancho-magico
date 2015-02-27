

        <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title">Datos de cuenta</h3>
            
            </div>
            <div class="panel-body">
                <div class="container col-xs-12 col-sm-6 col-md-5 col-lg-3">
                    <form name="alta" action="<?php echo base_url();?>cuenta/modificar.html" method="POST" role="form">
            <div class="alert alert-info" role="alert">Corrige los datos que desees</div>
                        <div class="form-group">
                        <label for="nombre">* Primer Nombre:</label>
                        <?php echo form_error('nombre'); ?>
                        <input type="text" name="nombre" class="form-control" title="Indique su primer nombre" required value="<?php echo $primer_nombre; ?>">
                        </div>
                        <div class="form-group">
                        <label for="nombre2">Segundo Nombre:</label>
                            <input type="text" name="nombre2" class="form-control" value="<?php echo $segundo_nombre ?>">
                        </div>
                        <div class="form-group">
                            <label for="apellidop">* Apellido Paterno</label>
                            <?php echo form_error('apellidop'); ?>
                            <input type="text" name="apellidop" class="form-control" title="Ingrese su apellido paterno" required  value="<?php echo $apellidop; ?>">
                        </div>
                        <div class="form-group">
                            <label for="apellidom">* Apellido Materno</label>
                            <?php echo form_error('apellidom'); ?>
                            <input type="text" name="apellidom" class="form-control" title="Ingrese su apellido materno" required value="<?php echo $apellidom; ?>">
                        </div>
                        <div class="form-group">
                            <label for="correo">* Correo Electrónico:</label>
                            <?php echo form_error('correo'); ?>
                            <input type="email" name="correo"  class="form-control" title="Ingrese su correo electrónico" required value="<?php echo $correo; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="tel" name="telefono" class="form-control" value="<?php echo $telefono; ?>" >
                        </div>
                        <br>
                        <br>        
                        <img src="http://www.mdbjranch.com/graphics/contactDividerLine.png">
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="nombre">* Usuario:</label>
                            <?php echo form_error('usuario'); ?>
                            <input type="text" name="usuario" class="form-control"  value="<?php echo $usuario; ?>" readonly>
                            
                        </div>
                        
                        <label for="cambiar">Desea cambiar la contraseña?</label>
                        <input type="checkbox" id="cambiar" onclick="valor()">
                        <div class="form-group">
                            <label for="contrasena">* Contraseña:</label>
                            <?php echo form_error('contrasena'); ?>
                            <input type="password" name="contrasena" class="form-control" title="Ingrese su contraseña" required maxlength="8" id="contrasena" readonly >
                            <span class="help-block">Máximo 8 caracteres</span>
                        </div>
                        <div class="form-group">
                            <label for="contrasena2">* Repetir Contraseña:</label>
                            <?php echo form_error('contrasena2'); ?>
                            <input type="password" name="contrasena2" class="form-control" title="Repita la contraseña" required maxlength="8" id="contrasena2"  readonly>
                        </div>
                        <!-- Boton Alta -->
                        <input type="submit" value="Modificar" name="enviar" class="btn btn-default">
                        <input type="button" value="Cancelar" name="cancelar" class="btn btn-default" onClick="location.href='bienvenida_usuarios'">
                        <!-- Politicas -->
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<script>

function valor(){
    
    var x=document.getElementById("cambiar");
    if (x){
        
        document.getElementById("contrasena").readOnly=false;
        document.getElementById("contrasena2").readOnly=false;
    }
}
</script>