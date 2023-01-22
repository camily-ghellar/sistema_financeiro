$(function () { // quando o documento estiver pronto/carregado
    
    // código para mapear click do botão cadastro
    $(document).on("click", "#bt_cadastrar", function () {
        //pegar dados da tela
        nome= $("#nome").val();
        cpf = $("#cpf").val();
        endereco = $("#endereco").val();

        // preparar dados no formato json
        var dados = JSON.stringify({ nome:nome, cpf:cpf, endereco:endereco });

        // fazer requisição para o back-end
     
        url= 'http://localhost/cadastrar_pessoa.php';

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json', // os dados são recebidos no formato json
            contentType: 'application/json', // tipo dos dados enviados
            data: dados, // estes são os dados enviados
            success: cadastroOk,
            error: function () {
                alert("Erro na conexão, verifique o backend. ");
                // https://api.jquery.com/jquery.ajax/
            }
        });
        function cadastroOk(retorno) {
            if (retorno.resultado == "ok") { // a operação deu certo?
                alert("Pessoa cadastrada com sucesso!")
            } else {
                
                alert("ERRO: " + retorno.resultado + ":" + retorno.detalhes);
            }
        }

    });

});