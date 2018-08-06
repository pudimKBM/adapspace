function LoadFrete() {
    
    var cep_destino = $('#cep_destino').val();
    
    $.ajax({
        url: 'a_frete.php',
        type: 'POST',
        dataType: 'html',
        cache: false,
        data: {cep_destino: cep_destino},
        success: function (data) {
            
            console.log('Valor = ' + data);
            
            $('#valor_frete').text(data);
            
            var val_prod = $('#valor_pro').val();
            
            val_prod = val_prod.replace(',', '.');
            data     = data.replace(',', '.');
            
            var total = parseFloat(data) + parseFloat(val_prod);
            
            $('#valor_prodfrete').val(total);
            
            
           
        }, beforeSend: function () {
           
        }, error: function (jqXHR, textStatus, errorThrown) {
            console.log('Erro');
            
        }
    });
}
