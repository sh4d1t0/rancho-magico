 <?php
$date = date("Y-m-d", time());
?>

        
        <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title">Registro de Usuario</h3>
            </div>
            <div class="panel-body">
                <div class="container col-xs-12 col-sm-6 col-md-5 col-lg-3">
                    <form name="alta" action="<?php echo base_url();?>registro/alta.html" method="POST" role="form">
                        <div class="form-group">
                        <label for="nombre">* Primer Nombre:</label>
                        <?php echo form_error('nombre'); ?>
                        <input type="text" name="nombre" class="form-control" title="Indique su primer nombre" required autocomplete="on" value="<?php echo set_value('nombre'); ?>">
                        </div>
                        <div class="form-group">
                        <label for="nombre2">Segundo Nombre:</label>
                            <input type="text" name="nombre2" class="form-control" autocomplete=”on” value="<?php echo set_value('nombre2'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="apellidop">* Apellido Paterno</label>
                            <?php echo form_error('apellidop'); ?>
                            <input type="text" name="apellidop" class="form-control" title="Ingrese su apellido paterno" required autocomplete=”off” value="<?php echo set_value('apellidop'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="apellidom">* Apellido Materno</label>
                            <?php echo form_error('apellidom'); ?>
                            <input type="text" name="apellidom" class="form-control" title="Ingrese su apellido materno" required autocomplete=”off” value="<?php echo set_value('apellidom'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="correo">* Correo Electrónico:</label>
                            <?php echo form_error('correo'); ?>
                            <input type="email" name="correo"  class="form-control" title="Ingrese su correo electrónico" required value="<?php echo set_value('correo'); ?>" >
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="tel" name="telefono" class="form-control"autocomplete=”on” >
                        </div>
                        <input type="hidden" value="<?=$date?>" name="fechaAlta">
                        <br>
                        <br>        
                        <img src="http://www.mdbjranch.com/graphics/contactDividerLine.png">
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="nombre">* Usuario:</label>
                            <?php echo form_error('usuario'); ?>
                            <input type="text" name="usuario" class="form-control" maxlength="12" title="Ingrese un nombre de usuario" required autocomplete=”off” value="<?php echo set_value('usuario'); ?>">
                            <span class="help-block">Mínimo 5 caracteres.</span>
                        </div>
                        <div class="form-group">
                            <label for="contrasena">* Contraseña:</label>
                            <?php echo form_error('contrasena'); ?>
                            <input type="password" name="contrasena" class="form-control" title="Ingrese su contraseña" required maxlength="8">
                            <span class="help-block">Máximo 8 caracteres</span>
                        </div>
                        <div class="form-group">
                            <label for="contrasena2">* Repetir Contraseña:</label>
                            <?php echo form_error('contrasena2'); ?>
                            <input type="password" name="contrasena2" class="form-control" title="Repita la contraseña" required maxlength="8">
                        </div>
                        <!-- Boton Alta -->
                        <input type="submit" value="Alta" name="enviar" class="btn btn-default">
                        <!-- Politicas -->
                        <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox" checked="true"> Acepto Politicas de Privacidad</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>