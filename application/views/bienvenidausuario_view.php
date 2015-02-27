     
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    
                    
                    <div class="panel">
                        <p> <strong> Nombre:</strong><br> <?php echo $primer_nombre." ".$segundo_nombre; ?> </p>
                        <p> <strong>Apellido:</strong><br> <?php echo $apellidop." ".$apellidom; ?></p>
                        <p> <strong>Teléfono</strong><br> <?php echo $telefono; ?></p>
      <a href="cuenta.html">Modificar</a>
                    </div>
                    
                    
                    
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="page-header">
  <h1>Pedidos <small>Listado de tus pedidos</small></h1>
</div>

<div class="container-fluid">
<div class="row">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Descripcion</div>
  <div class="panel-body">
    <p>ESTA TABLA MUESTRA LA INFORMACIOND DE PEDIDOS GENERADA POR EL USUARIO</p>
  </div>

  <!-- Table -->
  <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No. Pedido</th>
                  <th>Total</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php /*var_dump($pedidos);*/ foreach ($pedidos as $p): ?>
                  <tr>
                   <td><?php echo $p->idPedido ?></td>
                    <td><?php echo $p->total ?></td>
                    </tr>
                    <?php endforeach;?>
              </tbody>
            </table>
          </div>
  <!-- Table -->
  
</div> 
                   </div>

                        </div>
                </div>
                
            </div>
            
            
        </div>
