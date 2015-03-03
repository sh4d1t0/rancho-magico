<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Bienvenido:  <?php echo $usuario; ?></a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
          
          <?php
            $seccion = $this->uri->segment(1);
            if ($seccion == "boletos"){
                $menu_boletos = "active";
                $menu_pedidos = "";
                $menu_cuenta = "";
                $menu_carrito="";
                $visibilidad="display: none;";
                $menu_compra="";
                //var_dump($boletos);
            }elseif ($seccion == "bienvenida_usuarios"){
                $menu_boletos = "";
                $menu_pedidos = "active";
                $menu_cuenta = "";
                $menu_carrito="";
                $menu_compra="";
                $visibilidad="display: none;";
            }elseif ($seccion == "cuenta"){
                $menu_boletos = "";
                $menu_pedidos = "";
                $menu_cuenta = "active";
                $menu_carrito="";
                $menu_compra="";
                $visibilidad="display: none;";
            }elseif ($seccion == "carrito"){
                $menu_boletos = "";
                $menu_pedidos = "";
                $menu_cuenta = "";
                $menu_carrito="active";
                $menu_compra="";
                $visibilidad="display: none;";
            }elseif($seccion == "pago"){
                $menu_boletos = "";
                $menu_pedidos = "";
                $menu_cuenta = "";
                $menu_carrito="";
                $menu_compra="active";
                $visibilidad="";
                
            }
          ?>
          
          <li class="<?php echo $menu_boletos; ?>"><a href="boletos.html" ><span class="glyphicon glyphicon-tags"></span> Boletos</a></li>
          <li class="<?php echo $menu_pedidos; ?>"><a href="bienvenida_usuarios.html"><span class="glyphicon glyphicon-th-list"></span> Pedidos</a></li>
          <li class="<?php echo $menu_cuenta; ?>"><a href="cuenta.html"><span class="glyphicon glyphicon-user"></span> Cuenta</a></li>
          <li class="<?php echo $menu_carrito; ?>"><a href="carrito.html"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
          <li><a href="bienvenida_usuarios/logout"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
          <li class="<?php echo $menu_compra; ?>" style="<?php echo $visibilidad; ?>"><a href="#" ><span class="glyphicon glyphicon-ok-circle"></span> Confirmar Compra</a></li>
          
          
          
          
      </ul>
    </div>
  </div>
</nav>