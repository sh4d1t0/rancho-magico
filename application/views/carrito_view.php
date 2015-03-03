<script>
function clear_cart() {
  var result = confirm('Esta seguro de limpiar el carrito?');
  
  if(result) {
    window.location = "<?php echo base_url(); ?>carrito/remove/all";
  }else{
    return false; // cancel button
  }
}
</script>
<div style="margin:0px auto; width:600px;" >
  <div style="padding-bottom:10px">
    <h1 align="center">Carrito de Compras</h1>
    <input type="button" value="Continua comprando" onclick="window.location='boletos'" />
  </div>
  <div style="color:#F00"><?php echo $message?></div>
  <table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%" class="table table-hover">
    <?php if ($cart = $this->cart->contents()): ?>
    <tr bgcolor="#FFFFFF" style="font-weight:bold">
      <td>Serial</td>
      <td>Nombre</td>
      <td>Precio</td>
      <td>Cantidad</td>
      <td>Monto</td>
      <td>Opcion</td>
    </tr>
    <?php
    echo form_open('carrito/update_cart');
    $grand_total = 0; $i = 1;
    
    foreach ($cart as $item):
      echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
      echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
      echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
      echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
      echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
    ?>
    <tr bgcolor="#FFFFFF">
      <td>
        <?php echo $i++; ?>
      </td>
      <td>
        <?php echo $item['name']; ?>
      </td>
      <td>
        $ <?php echo number_format($item['price'],2); ?>
      </td>
      <td>
        <?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
      </td>
      <?php $grand_total = $grand_total + $item['subtotal']; ?>
      <td>
        $ <?php echo number_format($item['subtotal'],2) ?>
      </td>
      <td>
        <?php echo anchor('carrito/remove/'.$item['rowid'],'Eliminar'); ?>
      </td>
      <?php endforeach; ?>
    </tr>
    <tr>
      <td><b>Total de pedido: $<?php echo number_format($grand_total,2); ?></b></td>
      <td colspan="5" align="right"><input type="button" value="Limpiar Carrito" onclick="clear_cart()">
          <input type="submit" value="Actualizar Carrito">
          <?php echo form_close(); ?>
          <input type="button" value="Ordenar" onclick="window.location='pago'"></td>
    </tr>
    <?php endif; ?>
  </table>
</div>
    