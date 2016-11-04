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
    $.ajax({
        type: 'POST',
        data: {campo : 'logradouros', valor : value},
        url:'processa.php',
    }).done(function( msg ) {
        $("select[name='Logradouros_idLogradouro']").append("<option>"+ value +"</option>");
        alert( msg );
        $('.novoCadastro').val('');

    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}


/**********   BAIRROS       *********/
function bairro(value){
    $.ajax({
        type: 'POST',
        data: {campo : 'bairros', valor : value},
        url:'processa.php',
    }).done(function( msg ) {
        $("select[name='Bairros_idBairro']").append("<option>"+ value +"</option>");
        alert( msg );
        $('.novoCadastro').val('');

    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}

/**********   CIDADES       *********/
function cidade(value){
    $.ajax({
        type: 'POST',
        data: {campo : 'cidades', valor : value},
        url:'processa.php',
    }).done(function( msg ) {
        $("select[name='Cidades_idCidade']").append("<option>"+ value +"</option>");
        alert( msg );
        $('.novoCadastro').val('');

    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}

/**********   ESTADOS       *********/
function estado(value){
    $.ajax({
        type: 'POST',
        data: {campo : 'estados', valor : value},
        url:'processa.php',
    }).done(function( msg ) {
        $("select[name='Estados_idEstado']").append("<option>"+ value +"</option>");
        alert( msg );
        $('.novoCadastro').val('');

    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}

/**********   PAISES       *********/
function pais(value){
    $.ajax({
        type: 'POST',
        data: {campo : 'paises', valor : value},
        url:'processa.php',
    }).done(function( msg ) {
        $("select[name='Paises_idPais']").append("<option>"+ value +"</option>");
        alert( msg );
        $('.novoCadastro').val('');

    }).fail(function() {
        alert( "Ocorreram erros ao salvar" );
    });
}