$(document).ready(function () {

    $(".formulario").submit(function (event) {

        event.preventDefault();

        $.ajax({
            url: "/api/cadastro_produto",
            method: "POST",

            data: {
                nome_produto: $("#nome").val(),
                categoria: $("#categoria").val(),
                codigo: $("#codigo").val(),
                fornecedor: $("#fornecedor").val(),
                quantidade_estoque: $("#quantidade").val(),
                data_vencimento: $("#validade").val(),
                descricao: $("#descricao").val()
            },

            success: function (response) {

                console.log(response);

                if (response.erro == "n") {

                    Swal.fire({
                        icon: "success",
                        title: "Sucesso!",
                        text: response.mensagem,
                        confirmButtonColor: "#6a0dad"
                    });

                    $(".formulario")[0].reset();

                } else {

                    Swal.fire({
                        icon: "error",
                        title: "Erro!",
                        text: response.mensagem,
                        confirmButtonColor: "#6a0dad"
                    });

                }
            },

            error: function (xhr) {

    console.log("STATUS:", xhr.status);
    console.log("ERRO:", xhr.responseText);

    Swal.fire({
        icon: "error",
        title: "Erro!",
        text: xhr.responseText,
        confirmButtonColor: "#6a0dad"
    });

}
        });

    });

});