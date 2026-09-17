<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/js/cadastro_usuario.js')

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a0dad, #8e44ad, #b56cff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .card-cadastro {
            width: 100%;
            max-width: 850px;
            background: white;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .titulo {
            text-align: center;
            color: #6a0dad;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .subtitulo {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .campo {
            margin-bottom: 20px;
        }

        .campo label {
            color: #555;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .form-control {
            border: 2px solid #eee;
            border-radius: 12px;
            padding: 11px 14px;
        }

        .form-control:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 0 3px rgba(142, 68, 173, 0.15);
        }

        .botao {
            width: 100%;
            border: none;
            border-radius: 12px;
            padding: 13px;
            background: linear-gradient(135deg, #6a0dad, #8e44ad);
            color: white;
            font-size: 16px;
            font-weight: bold;
            transition: 0.2s;
        }

        .botao:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .voltar {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #6a0dad;
            text-decoration: none;
            font-weight: 600;
        }

        .voltar:hover {
            text-decoration: underline;
        }

        .icone {
            text-align: center;
            font-size: 45px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="card-cadastro">

        <div class="icone">👤</div>

        <h1 class="titulo">Criar uma conta</h1>

        <p class="subtitulo">
            Cadastre seus dados para acessar o Estoque+
        </p>

        <div class="row">

            <div class="col-md-6 campo">
                <label for="nome">Nome:</label>
                <input type="text"
                    class="form-control"
                    id="nome"
                    name="nome"
                    placeholder="Digite seu nome">
            </div>

            <div class="col-md-6 campo">
                <label for="email">Email:</label>
                <input type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Digite seu email">
            </div>

            <div class="col-md-6 campo">
                <label for="senha">Senha:</label>
                <input type="password"
                    class="form-control"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha">
            </div>

            <div class="col-md-6 campo">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date"
                    class="form-control"
                    id="data_nascimento"
                    name="data_nascimento">
            </div>

            <div class="col-md-12 campo">
                <label for="cpf">CPF:</label>
                <input type="text"
                    class="form-control"
                    id="cpf"
                    name="cpf"
                    placeholder="Digite seu CPF">
            </div>

            <div class="col-12 mt-2">
                <button id="cadastro_usuario"
                    type="button"
                    class="botao">
                    Cadastrar usuário →
                </button>
            </div>



        </div>

        <a href="/login" class="voltar">
            Já tenho uma conta → Fazer login
        </a>

    </div>

</body>

</html>