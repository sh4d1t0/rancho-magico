<link href="<?php echo base_url('assets/css/customcarrousel.css'); ?>" rel="stylesheet" type="text/css"/>    
        <div class="container-fluid">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="<?php echo base_url('assets/img/boletos/admisiongeneral.jpg'); ?>" class="img-responsive"></div>
                        <div class="col-md-3">
                            <h2>Admisión General</h2>
                            <h5> Nuestra Admisión General incluye toda una experiencia: </h5>
<ul>
<li>Recorrido animal</li>
<li>Todos los talleres (excepto panadería)</li>
<li>Actividad de monta</li>
<li>Herpetario</li>
<li>Aviario</li>
<li>Iguanario</li>
</ul>

</div>

<div class="col-md-3">
<ul>
<li>Laboratorio de Morfología</li>
<li>Bosque Mágico</li>
<li>Paseo en Trenecito infantil</li>
<li>Clínica Veterinaria Infantil</li>
<li>Cancha de futbol</li>
<li>Deslizadores</li>
</ul>
</div>

<div class="col-md-3">
<ul>
<li>Tobogán Acuático</li>
<li>Toro Mecánico</li>
<li>Juegos infantiles y mecánicos</li>
<li>Bolódromo acuático y terrestre</li>
<li>Circuito de cables y Tirolesa</li>
<li>Estacionamiento</li>
                            </ul>

</div>
<?php   
echo form_open('carrito/add');
echo form_hidden('id', 1);
echo form_hidden('nombre', "Admision General");
echo form_hidden('precio', 145.00);
echo form_submit('action', 'Agregar al carrito');
echo form_close(); ?>
</div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="<?php echo base_url('assets/img/boletos/paqueteinfantil.jpg'); ?>" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Paquete Infantil</h2>
                            <h4>Todas las actividades de Admisión General</h4>
                            <ul>
                                <li>Taller de Pizza</li>
                                <li>Taller de Panqué</li>
                            </ul>
                            <?php   
echo form_open('carrito/add');
echo form_hidden('id', 2);
echo form_hidden('nombre', "Paquete Infantil");
echo form_hidden('precio', 195.00);
echo form_submit('action', 'Agregar al carrito');
echo form_close(); ?>
                        </div>
                    </div>
                </div>            
            </div>  
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="<?php echo base_url('assets/img/boletos/paqueteextremo.jpg'); ?>" class="img-responsive"></div>
                        <div class="col-md-9">
                            <h2>Paquete Extremo</h2>
                            <h4>Todas las actividades de Admisión General</h4>
                            <ul>
                                <li>Gotcha</li>
                                <li>Cuatrimotos</li>
                                <li>Eurobungee</li>
                            </ul>
                            <?php   
echo form_open('carrito/add');
echo form_hidden('id', 3);
echo form_hidden('nombre', "Paquete Extremo");
echo form_hidden('precio', 350.00);
echo form_submit('action', 'Agregar al carrito');
echo form_close(); ?>
                        </div>
                    </div>
                </div>           
            </div> 
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="http://placehold.it/50x50"><small>Admision General</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="http://placehold.it/50x50"><small>Paquete Infantil</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="http://placehold.it/50x50"><small>Paquete Extremo</small></a></li>
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/boletos_carrousel.js'); ?>" type="text/javascript"></script>
  </body>
</html>

        




