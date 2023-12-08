$(function () {

    $(document).on("submit", "#enviaEmail", function () {

        $.ajax({
            url: URL + "api/envia.php",               //Esse Url é o link la no index VER NUMERO 1
            type: "POST",
            dataType: "JSON",
            data: $(this).serialize(),              //Vai enviar os campos (this) deste formulario #enviaEmail.  O serialize é um metodo que pega todos os campos que tem dentro do #enviaEmail
            success: function (retorno) {             //QUando o ajax concluir a requisição, chama o sucesso
                if (retorno.status == "success") {

                } else {
                    $(".resultado").html(`<div class="alert alert-primary" role="alert"> ${retorno.message} </div>`)    //Pega a mensagem que passa no envia.php, na checagem
                }
            }
        })

        return false;
    })
})