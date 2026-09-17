<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Controle de Estoque</title>

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

        .container {
            width: 90%;
            max-width: 1100px;
            min-height: 550px;
            background: white;
            border-radius: 25px;
            display: flex;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .lado-esquerdo {
            width: 50%;
            background: #6a0dad;
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .lado-esquerdo h1 {
            font-size: 45px;
            margin-bottom: 20px;
        }

        .lado-esquerdo h1 span {
            color: #e0b3ff;
        }

        .lado-esquerdo p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .botao {
            width: fit-content;
            padding: 15px 30px;
            background: white;
            color: #6a0dad;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            transition: 0.3s;
        }

        .botao:hover {
            background: #e0b3ff;
            color: white;
            transform: translateY(-3px);
        }

        .botoes {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
        }

        .lado-direito {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .estoque {
            text-align: center;
        }

        .icone {
            font-size: 110px;
            margin-bottom: 20px;
        }

        .estoque h2 {
            color: #6a0dad;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .estoque p {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }

        .cards {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .card {
            background: #f3e8ff;
            padding: 18px;
            border-radius: 12px;
            min-width: 100px;
        }

        .card strong {
            display: block;
            color: #6a0dad;
            font-size: 22px;
        }

        .card span {
            color: #666;
            font-size: 13px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .lado-esquerdo,
            .lado-direito {
                width: 100%;
            }

            .lado-esquerdo {
                padding: 40px;
            }

            .lado-esquerdo h1 {
                font-size: 35px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="lado-esquerdo">

            <h1>
                Bem-vindo ao <span>Estoque</span>
            </h1>

            <p>
                Organize seus produtos, acompanhe seu estoque
                e mantenha tudo sob controle de forma simples,
                rápida e eficiente.
            </p>


  

        <div class="botoes">

    <a href="/cadastro_produto" class="botao">
    Entrar no sistema →
   </a>  

    <a href="/login" class="botao">
        Fazer login →
    </a>

    <a href="/cadastro_usuario" class="botao">
        Criar uma conta →
    </a>
</div>

        </div>

        <div class="lado-direito">

            <div class="estoque">

                <div class="icone">📦</div>

                <h2>Controle de Estoque</h2>

                <p>
                    Gerencie seus produtos de limpeza,
                    consulte informações e acompanhe
                    as movimentações do estoque.
                </p>

                <div class="cards">

                    <div class="card">
                        <strong>📦</strong>
                        <span>Produtos</span>
                    </div>

                    <div class="card">
                        <strong>🔍</strong>
                        <span>Consultas</span>
                    </div>

                    <div class="card">
                        <strong>📊</strong>
                        <span>Controle</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>