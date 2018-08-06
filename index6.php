<?php

include("conexao.php");

$pedido = intval($_GET['pedido']);

$code_pedido = "select * from pedido where ped_codigo = '$pedido'";
$exec_pedido = $mysqli->query($code_pedido) or die($mysqli->error);
$pedido = $exec_pedido->fetch_assoc();

$num = $exec_pedido->num_rows;

if($num != 1) echo "<p>Pedido não encontrado</p>";
else{


        $code_item = "select * from ped_item where ite_ped_codigo = '$pedido'";
        $exec_item = $mysqli->query($code_item) or die($mysqli->error);
        $item = $exec_item->fetch_assoc();
        $num = $exec_item->num_rows;

        if($num == 0) echo "<p>Este pedido não possui nenhum item.</p>";
        else{

?>
<!-- Declaração do formulário -->  
<form method="post" target="pagseguro"  
action="https://pagseguro.uol.com.br/v2/checkout/payment.html">  
          
        <!-- Campos obrigatórios -->  
        <input name="receiverEmail" type="hidden" value="seuemail@pagseguro.com.br">  
        <input name="currency" type="hidden" value="BRL">  
  
        <!-- Itens do pagamento (ao menos um item é obrigatório) -->
        <?php
        $i = 1;
        do{
        ?>  
                <input name="itemId<?php echo $i; ?>" type="hidden" value="<?php echo $item['ite_pro_codigo']; ?>">  
                <input name="itemDescription<?php echo $i; ?>" type="hidden" value="<?php echo $item['ite_pro_nome']; ?>">  
                <input name="itemAmount<?php echo $i; ?>" type="hidden" value="<?php echo number_format($item['ite_pro_preco'], 2, '.', ''); ?>">  
                <input name="itemQuantity<?php echo $i; ?>" type="hidden" value="<?php echo $item['ite_pro_quantidade']; ?>">  
                <input name="itemWeight<?php echo $i; ?>" type="hidden" value="<?php echo $item['ite_pro_peso']; ?>">
        <?php 
        $i++;
        } while($item = $exec_item->fetch_assoc()); ?>
  
        <!-- Código de referência do pagamento no seu sistema (opcional) -->  
        <input name="reference" type="hidden" value="<?php echo $pedido['ped_codigo']; ?>">  
          
        <!-- Informações de frete (opcionais) -->  
        <input name="shippingType" type="hidden" value="1">  
        <input name="shippingAddressPostalCode" type="hidden" value="<?php echo $pedido['ped_cep']; ?>">  
        <input name="shippingAddressStreet" type="hidden" value="<?php echo $pedido['ped_endereco']; ?>">  
        <input name="shippingAddressNumber" type="hidden" value="<?php echo $pedido['ped_numero']; ?>">  
        <input name="shippingAddressComplement" type="hidden" value="<?php echo $pedido['ped_complemento']; ?>">  
        <input name="shippingAddressDistrict" type="hidden" value="<?php echo $pedido['ped_bairro']; ?>">  
        <input name="shippingAddressCity" type="hidden" value="<?php echo $pedido['ped_cidade']; ?>">  
        <input name="shippingAddressState" type="hidden" value="<?php echo $pedido['ped_estado']; ?>">  
        <input name="shippingAddressCountry" type="hidden" value="BRA">  
  
        <!-- Dados do comprador (opcionais) -->  
        <input name="senderName" type="hidden" value="<?php echo $pedido['ped_cliente']; ?>">  
        <input name="senderAreaCode" type="hidden" value="<?php echo $pedido['ped_codigodearea']; ?>">  
        <input name="senderPhone" type="hidden" value="<?php echo $pedido['ped_telefone']; ?>">  
        <input name="senderEmail" type="hidden" value="<?php echo $pedido['ped_emaildocliente']; ?>">  
  
        <!-- submit do form (obrigatório) -->  
        <input alt="Pague com PagSeguro" name="submit"  type="image"  
src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/120x53-pagar.gif"/>  
          
</form>
<?php }} ?>