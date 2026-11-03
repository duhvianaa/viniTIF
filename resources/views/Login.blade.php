
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Estoque+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/js/login.js')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #6a0dad, #8e44ad, #b56cff);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 90%;
            max-width: 950px;
            min-height: 520px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            display: flex;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        /* LADO ESQUERDO */

        .lado-esquerdo {
            width: 45%;
            background: #6a0dad;
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .lado-esquerdo .icone {
            font-size: 70px;
            margin-bottom: 20px;
        }

        .lado-esquerdo h1 {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .lado-esquerdo h1 span {
            color: #e0b3ff;
        }

        .lado-esquerdo p {
            font-size: 17px;
            line-height: 1.6;
            color: #f1e5ff;
        }

        /* LADO DIREITO */

        .lado-direito {
            width: 55%;
            padding: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .formulario {
            width: 100%;
            max-width: 400px;
        }

        .formulario h2 {
            color: #6a0dad;
            font-size: 32px;
            margin-bottom: 8px;
        }

        .subtitulo {
            color: #777;
            margin-bottom: 30px;
        }

        .campo {
            margin-bottom: 20px;
        }

        .campo label {
            display: block;
            color: #555;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .campo input {
            width: 100%;
            height: 48px;
            border: 2px solid #e5d5f5;
            border-radius: 10px;
            padding: 0 15px;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
        }

        .campo input:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 5px rgba(106, 13, 173, 0.2);
        }

        .lembrar {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 25px;
            color: #666;
        }

        .lembrar input {
            accent-color: #6a0dad;
            width: 16px;
            height: 16px;
        }

        .botao {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 10px;
            background: #6a0dad;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .botao:hover {
            background: #8e44ad;
            transform: translateY(-2px);
        }

        .rodape {
            text-align: center;
            margin-top: 25px;
            color: #999;
            font-size: 13px;
        }

        @media (max-width: 750px) {

            .login-container {
                flex-direction: column;
                width: 92%;
            }

            .lado-esquerdo,
            .lado-direito {
                width: 100%;
            }

            .lado-esquerdo {
                padding: 35px;
                text-align: center;
            }

            .lado-esquerdo h1 {
                font-size: 32px;
            }

            .lado-direito {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">

        <!-- LADO ESQUERDO -->

        <div class="lado-esquerdo">

            <div class="icone">📦</div>

            <h1>
                Estoque<span>+</span>
            </h1>

            <p>
                Controle seus produtos de limpeza
                de forma simples, rápida e organizada.
            </p>

        </div>


        <!-- LADO DIREITO -->

        <div class="lado-direito">

            <div class="formulario">

                <h2>Bem-vindo!</h2>

                <p class="subtitulo">
                    Entre na sua conta para continuar.
                </p>


                <div class="campo">

                    <label for="email">
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        placeholder="Digite seu e-mail"
                    >

                </div>


                <div class="campo">

                    <label for="senha">
                        Senha
                    </label>

                    <input
                        type="password"
                        id="senha"
                        placeholder="Digite sua senha"
                    >

                </div>


                <div class="lembrar">

                    <input
                        type="checkbox"
                        id="lembrar"
                    >

                    <label for="lembrar">
                        Lembrar de mim
                    </label>

                </div>


                <button
                    type="button"
                    id="entrar"
                    class="botao"
                >
                    Entrar →
                </button>


                <div class="rodape">
                    Sistema de Controle de Estoque
                </div>

            </div>

        </div>

    </div>

</body>

</html>
