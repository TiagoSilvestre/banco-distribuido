function addCampo(tit){
    $( "#myModalLabel" ).text(tit);
}

$('.cadastrar').click(function(){
    var campo = $('#myModalLabel').text();
    var valor = $('.novoCadastro').val();

    if(campo == "Adicionar Logradouros"){
        logradouros(valor);
    }else if(campo == "Adicionar Bairro"){
        bairro(valor);
    }else if(campo == "Adicionar Cidade"){
        cidade(valor);
    }else if(campo == "Adicionar Estado"){
        estado(valor);
    }else if(campo == "Adicionar Pais"){
        pais(valor);
    }
});

/**********   LOGRADOROS       *********/

function logradouros(value){
    $('.processando').css('display', 'block')
    $.ajax({
        type: 'POST',
        data: {campo : 'logradouros', valor : value},
        url:'processa.php',
    }).done(function(id) {
        var lo = JSON.parse(id);
        $("select[name='Logradouros_idLogradouro']").append("<option value='"+ lo['id'] +"'>"+ value +"</option>");
        alert('Cadastrado com sucesso!');
        $('.processando').css('display', 'none');
        $('.novoCadastro').val('');

    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}


/**********   BAIRROS       *********/

function bairro(value){
    $('.processando').css('display', 'block')
    $.ajax({
        type: 'POST',
        data: {campo : 'bairros', valor : value},
        url:'processa.php',
    }).done(function(id) {
        var lo = JSON.parse(id);
        $("select[name='Bairros_idBairro']").append("<option value='"+ lo['id'] +"'>"+ value +"</option>");
        alert('Cadastrado com sucesso!');
        $('.processando').css('display', 'none');
        $('.novoCadastro').val('');
    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}

/**********   CIDADES       *********/

function cidade(value){
    $('.processando').css('display', 'block')
    $.ajax({
        type: 'POST',
        data: {campo : 'cidades', valor : value},
        url:'processa.php',
    }).done(function(id) {
        var lo = JSON.parse(id);
        $("select[name='Cidades_idCidade']").append("<option value='"+ lo['id'] +"'>"+ value +"</option>");
        alert('Cadastrado com sucesso');
        $('.processando').css('display', 'none');
        $('.novoCadastro').val('');
    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}

/**********   ESTADOS       *********/

function estado(value){
    $('.processando').css('display', 'block')
    $.ajax({
        type: 'POST',
        data: {campo : 'estados', valor : value},
        url:'processa.php',
    }).done(function(id) {
        var lo = JSON.parse(id);
        $("select[name='Estados_idEstado']").append("<option value='"+ lo['id'] +"'>"+ value +"</option>");
        alert('Cadastrado com sucesso!');
        $('.processando').css('display', 'none');
        $('.novoCadastro').val('');
    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}

/**********   PAISES       *********/

function pais(value){
    $('.processando').css('display', 'block');
    $.ajax({
        type: 'POST',
        data: {campo : 'paises', valor : value},
        url:'processa.php',
    }).done(function(id) {
        var lo = JSON.parse(id);
        $("select[name='Paises_idPais']").append("<option value='"+ lo['id'] +"'>"+ value +"</option>");
        alert('Cadastrado com sucesso!');
        $('.processando').css('display', 'none');
        $('.novoCadastro').val('');
    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}

/**********   CONSULTA DE DADOS       *********/

function consultaPessoa(){
    var codigo = $('input[name=codigo]').val();
    var nome = $('input[name=nomePessoa]').val();

    $.ajax({
        type: 'POST',
        data: {codigo : codigo, nome : nome},
        url:'consulta.php',
    }).done(function(retorno) {
        var a = JSON.parse(retorno);
        $("input[name='nomePessoa']").val(a['nome']);
        $('select#logradouro1').val(a['logradouro']);
        $('select#bairro1').val(a['bairro']);
        $('select#cidade1').val(a['cidade']);
        $('select#estado1').val(a['estado']);
        $('select#pais1').val(a['pais']);
    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}