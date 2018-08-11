<?php
 session_start();
 ini_set('display_errors',1);
    ini_set('display_startup_erros',1);

require_once "../../../../autoload.php";
require_once "../../../../../../db.php";
require_once "../Configuration/dynamicConfiguration.php";
\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");

$querysel=('SELECT FROM ');
$result = $connection->query($querysel);
if($result->num_rows >0 ){
    while($qsel = $result->fetch_assoc()){
        $name  =  $qsel['name'];
        $price  = $qsel['price1'];
        $quantity = $qsel['quantity'];
    }
}

$name = $_POST[''];
$email =  $_POST[''];
$fone = $_POST[''];
$cpf = $_POST[''];
$rua = $_POST[''];
$numero = $_POST[''];
$bairo = $_POST[''];
$cep = $_POST[''];
$cid =$_POST[''];
$est = $_POST[''];
$pais = $_POST[''];
$apto = $_POST[''];

$payment = new \PagSeguro\Domains\Requests\Payment();

/**
 * Nome completo do comprador. Especifica o nome completo do comprador que está realizando o pagamento. Este campo é
 * opcional e você pode enviá-lo caso já tenha capturado os dados do comprador em seu sistema e queira evitar que ele
 * preencha esses dados novamente no PagSeguro.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: No mínimo duas sequências de caracteres, com o limite total de 50 caracteres.
 *
 * @var string $senderName
 */
$payment->setSender()->setName('Antonio Vinicius');

/**
 * E-mail do comprador. Especifica o e-mail do comprador que está realizando o pagamento. Este campo é opcional e você
 * pode enviá-lo caso já tenha capturado os dados do comprador em seu sistema e queira evitar que ele preencha esses
 * dados novamente no PagSeguro.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: um e-mail válido (p.e., usuario@site.com.br), com no máximo 60 caracteres.
 *
 * @var string $senderEmail
 */
$payment->setSender()->setEmail('antoniovinicus29@gmail.com');

/** @var \PagSeguro\Domains\Phone $phone */
$payment->setSender()->setPhone()->withParameters(
    11,
    56273440
);

/** @var \PagSeguro\Domains\Document $document */
$payment->setSender()->setDocument()->withParameters(
    'CPF',
    44090635888
);

/** @var \PagSeguro\Domains\Address $address */
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

/** @var \PagSeguro\Domains\ShippingCost $shippingCost */
$payment->setShipping()->setCost()->withParameters(20.00);

/** @var \PagSeguro\Domains\ShippingType $shippingType */
$payment->setShipping()->setType()->withParameters(\PagSeguro\Enum\Shipping\Type::SEDEX);

/**
 * Lista de itens contidos na transação. O número de itens sob este elemento corresponde ao valor de itemCount.
 *
 * @var \PagSeguro\Domains\Item $item
 * @var array $items
 */
$items = ['item1'];

$payment->setItems('caminhao azul');

/**
 * Moeda utilizada. Indica a moeda na qual o pagamento será feito. No momento, a única opção disponível é BRL (Real).
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Case sensitive. Somente o valor BRL é aceito.
 *
 * @var string $currency
 */
$payment->setCurrency('BRL');

/**
 * Valor extra. Especifica um valor extra que deve ser adicionado ou subtraído ao valor total do pagamento. Esse valor
 * pode representar uma taxa extra a ser cobrada no pagamento ou um desconto a ser concedido, caso o valor seja
 * negativo.
 *
 * Presença: Opcional.
 * Tipo: Número.
 * Formato: Decimal (positivo ou negativo), com duas casas decimais separadas por ponto (p.e., 1234.56 ou -1234.56),
 * maior ou igual a -9999999.00 e menor ou igual a 9999999.00. Quando negativo, este valor não pode ser maior ou igual
 * à soma dos valores dos produtos.
 *
 * @var string $extraAmount
 */
$payment->setExtraAmount('29');

/**
 * Código de referência. Define um código para fazer referência ao pagamento. Este código fica associado à transação
 * criada pelo pagamento e é útil para vincular as transações do PagSeguro às vendas registradas no seu sistema.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Livre, com o limite de 200 caracteres.
 *
 * @var string $reference
 */
$payment->setReference('4440');

/**
 * URL de redirecionamento após o pagamento. Determina a URL para a qual o comprador será redirecionado após o final do
 * fluxo de pagamento. Este parâmetro permite que seja informado um endereço de específico para cada pagamento
 * realizado.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres.
 *
 * @var string $redirectUrl
 */
//$payment->setRedirectUrl($redirectUrl);

/**
 * URL para envio de notificações sobre o pagamento. Determina a URL para a qual o PagSeguro enviará os códigos de
 * notificação relacionados ao pagamento. Toda vez que houver uma mudança no status da transação e que demandar sua
 * atenção, uma nova notificação será enviada para este endereço.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres.
 *
 * @var string $notificationUrl
 */
//$payment->setNotificationUrl($notificationUrl);

/*
 * ???
 * Custom info
 */
$payment->addParameter()->withParameters('itemId', '0003')->index(3);
$payment->addParameter()->withParameters('itemDescription', 'Notebook Amarelo')->index(3);
$payment->addParameter()->withParameters('itemQuantity', '1')->index(3);
$payment->addParameter()->withParameters('itemAmount', '200.00')->index(3);

/*
 * ???
 * Set discount by payment method
 */
$payment->addPaymentMethod()->withParameters(
    PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    PagSeguro\Enum\PaymentMethod\Config\Keys::DISCOUNT_PERCENT,
    10.00
);

/*
 * ???
 * Set max installments without fee
 */
$payment->addPaymentMethod()->withParameters(
    PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    PagSeguro\Enum\PaymentMethod\Config\Keys::MAX_INSTALLMENTS_NO_INTEREST,
    2
);

/*
 * ???
 * Set max installments
 */
$payment->addPaymentMethod()->withParameters(
    PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    PagSeguro\Enum\PaymentMethod\Config\Keys::MAX_INSTALLMENTS_LIMIT,
    6
);

/*
 * ???
 * Set accepted payments methods group
 */
$payment->acceptPaymentMethod()->groups(
    \PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    \PagSeguro\Enum\PaymentMethod\Group::BALANCE
);

/*
 * ???
 * Set accepted payments methods
 */
$payment->acceptPaymentMethod()->name(\PagSeguro\Enum\PaymentMethod\Name::DEBITO_ITAU);

/*
 * ???
 * Exclude accepted payments methods group
 */
$payment->excludePaymentMethod()->group(\PagSeguro\Enum\PaymentMethod\Group::BOLETO);

    
//try {
//    /** @var \PagSeguro\Domains\Requests\Payment $payment */
//    $response = $payment->register(
//        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
//        $credential,
//        true
//    );
//} catch (Exception $e) {
//    die($e->getMessage());
//}

?>
<!DOCTYPE html>
<html>
<head>
<?php if (\PagSeguro\Configuration\Configure::getEnvironment()->getEnvironment() == "sandbox") {
    ?>
        <!--Para integração em ambiente de testes no Sandbox use este link-->
        <script type="text/javascript"
                src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
        </script>
<?php
} else {
?>
        <!--Para integração em ambiente de produção use este link-->
        <script type="text/javascript"
                src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
        </script>
<?php
} ?>
</head>
<body>
<!-- A irá exibir o modal para pagamento -->
<script>PagSeguroLightbox(<?= $response->getCode() ?>);</script>
</body>
</html>
