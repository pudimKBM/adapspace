<?php
 session_start();
 ini_set('display_errors',1);
    ini_set('display_startup_erros',1);

require_once "../../../../autoload.php";
require_once "../../../../../../db.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");

?>
<!DOCTYPE html>
<html>
    <head>
        <?php if (\PagSeguro\Configuration\Configure::getEnvironment()->getEnvironment() == "sandbox") : ?>
            <!--Para integração em ambiente de testes no Sandbox use este link-->
                <script
                    type="text/javascript"
                    src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
                </script>
        <?php else : ?>
        <!--Para integração em ambiente de produção use este link-->
                <script
                    type="text/javascript"
                    src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
                </script>
        <?php endif; ?>
    </head>
</html>

<?php
$emali = $_SESSION['email'];
$nome =$_POST['nome']. " " . $_POST['nome2'];
$cpf = $_POST['cpf'];
$telefone = 11986964243;
$payment = new \PagSeguro\Domains\Requests\Payment();
$queryusers = "SELECT*
FROM product, command
WHERE statut='ordered' AND id_user = '{$_SESSION['id']}' GROUP BY command.id";
    $resultusers = $connection->query($queryusers);
    
    if ($resultusers->num_rows > 0) {
     while ($rowitens = $resultusers->fetch_assoc()) {
            $id =$rowitens['id_produit'];
            $nome = $rowitens['name'];
            $quantidade = $rowitens['quantity'];
            $price = $rowitens['price'];
     }
}
$payment->setCurrency("BRL");
$payment->setReference("LIBPHP000001");

$payment->setRedirectUrl("http://www.adaptspace.com.br");

// Set your customer information.
$payment->setSender()->setName('João Comprador');
$payment->setSender()->setEmail('email@comprador.com.br');
$num =11986964243;
$ddd = substr($num, 0, 2);
$tel = substr($num, 2, 8);

$payment->setSender()->setPhone()->withParameters(
   
    $ddd,
    $tel
);
$payment->setSender()->setDocument()->withParameters(
    '44090635888',
    'insira um numero de CPF valido'
);

$rua= $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cid = $_POST['cidade'];
$est = $_POST['est'];
$pais = "BRA";
$comp = $_POST['comp'];
$payment->setShipping()->setAddress()->withParameters(
    'Av. Brig. Faria Lima',
    '1384',
    'Jardim Paulistano',
    '01452002',
    'São Paulo',
    'SP',
    'BRA',
    'apto. 114'
);
$payment->setShipping()->setCost()->withParameters(20.00);
$payment->setShipping()->setType()->withParameters(\PagSeguro\Enum\Shipping\Type::SEDEX);
//Add items by parameter using an array
//$payment->addParameter()->withArray(['notificationURL', 'http://www.lojamodelo.com.br/nofitication']);


//$payment->setRedirectUrl("http://www.lojamodelo.com.br");
$payment->setNotificationUrl("http://www.lojamodelo.com.br/nofitication");

try {
    $onlyCheckoutCode = true;
    $result = $payment->register(
        \PagSeguro\Configuration\Configure::getAccountCredentials(),
        $onlyCheckoutCode
    );

    echo "<h2>Criando requisi&ccedil;&atilde;o de pagamento. Aguarde...</h2>"
        . "<p>C&oacute;digo da transa&ccedil;&atilde;o: <strong>" . $result->getCode() . "</strong></p>"
        . "<script>PagSeguroLightbox('".$result->getCode()."');</script>";
} catch (Exception $e) {
    die($e->getMessage());
}
