$(document).ready(function() {

    $("#entrar").click(function() {

        $.ajax({
            url: "/api/login",
            method: "POST",

            data: {
                email: $("#email").val(),
                senha: $("#senha").val()
            },

            success: function(response) {

                console.log(response);

                if (response.erro == 'n') {

                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Login realizado com sucesso!',
                        confirmButtonColor: '#6a0dad'
                    }).then(function() {

                        window.location.href = "/cadastro_produto";

                    });

                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: response.mensagem,
                        confirmButtonColor: '#6a0dad'
                    });

                }
            },

            error: function(xhr) {

                console.log(xhr.responseText);

                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Erro ao realizar o login.',
                    confirmButtonColor: '#6a0dad'
                });

            }
        });

    });

});