<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;

 

?>
<form name="pagar" method="post" action="http://localhost/cacharposts.php" >
    TOTAL<input type="text" name="Ds_Merchant_Amount" value="<?php echo number_format($grand_total,2); ?>" />
    TIPO MONEDA<input type="text" name="Ds_Merchant_Currency" value="484" />
    NUMOER ORDEN<input type="text" name="Ds_Merchant_Order" value="<?php echo $numeroPedido; ?>" />
    DESCRIPCION<input type="text" name="Ds_Merchant_ProductDescription" value="Compra de boletos en linea: Rancho Magico"/>
    CODIGO DEL NEGOCIO<input type="text" name="Ds_Merchant_MerchantCode" value="4008636" />
    URL DE RESPUESTA<input type="text" name="Ds_Merchant_MerchantURL" value="http://www.ranchomagico.com.mx/mail.php" />
    SE ACEPTO EL PAGO?<input type="text" name="Ds_Merchant_UrlOK" value="" />
    SE DENEGO EL PAGO?<input type="text" name="Ds_Merchant_UrlKO" value="" />
    NOMBRE DE LA EMPRESA<input type="text" name="Ds_Merchant_MerchantName" value="Rancho Magico" />
    FIRMA GENERADA<input type="text" name="Ds_Merchant_MerchantSignature" value="" />
    TERMINAL<input type="text" name="Ds_Merchant_Terminal" value="001" />
    TIPO DE TRANSACCION<input type="text" name="Ds_Merchant_TransactionType" value="0" />
    

    
    
    
        <h1 align="center">Confirmación de Compra</h1>
        	Total de Compra:$<?php echo number_format($grand_total,2); ?>
</form>