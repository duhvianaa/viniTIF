<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/js/cadastro_produto.js')

    <title>Cadastro de Produto</title>

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
            padding: 30px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            background: white;
            border-radius: 25px;
            padding: 45px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .titulo {
            text-align: center;
            margin-bottom: 35px;
        }

        .titulo h1 {
            color: #6a0dad;
            font-size: 35px;
            margin-bottom: 10px;
        }

        .titulo p {
            color: #666;
            font-size: 16px;
        }

        .formulario {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .campo {
            display: flex;
            flex-direction: column;
        }

        .campo-completo {
            grid-column: span 2;
        }

        label {
            color: #6a0dad;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 13px 15px;
            border: 2px solid #e5d5f5;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 5px rgba(106, 13, 173, 0.2);
        }

        textarea {
            height: 110px;
            resize: none;
        }

        .botoes {
            grid-column: span 2;
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .botao {
            padding: 14px 30px;
            border-radius: 10px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            border: none;
            font-size: 15px;
            transition: 0.3s;
        }

        .cadastrar {
            background: #6a0dad;
            color: white;
        }

        .cadastrar:hover {
            background: #8e44ad;
            transform: translateY(-2px);
        }

        .voltar {
            background: #f3e8ff;
            color: #6a0dad;
        }

        .voltar:hover {
            background: #e0b3ff;
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 700px) {
            .container {
                width: 100%;
                padding: 30px 25px;
            }

            .formulario {
                grid-template-columns: 1fr;
            }

            .campo-completo,
            .botoes {
                grid-column: span 1;
            }

            .titulo h1 {
                font-size: 28px;
            }

            .botoes {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="titulo">
            <h1>📦 Cadastro de Produto</h1>

            <p>
                Cadastre um novo produto no seu estoque
            </p>
        </div>

        <form class="formulario">

            <div class="campo">
                <label for="nome">Nome do produto</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    placeholder="Digite o nome do produto"
                >
            </div>

            <div class="campo">
                <label for="codigo">Código</label>
                <input
                    type="text"
                    id="codigo"
                    name="codigo"
                    placeholder="Digite o código"
                >
            </div>

            <div class="campo">
                <label for="categoria">Categoria</label>

                <select id="categoria" name="categoria">
                    <option value="">Selecione uma categoria</option>
                    <option value="limpeza">Limpeza</option>
                    <option value="higiene">Higiene</option>
                    <option value="desinfetante">Desinfetante</option>
                    <option value="detergente">Detergente</option>
                    <option value="outros">Outros</option>
                </select>
            </div>

            <div class="campo">
                <label for="fornecedor">Fornecedor</label>
                <input
                    type="text"
                    id="fornecedor"
                    name="fornecedor"
                    placeholder="Digite o fornecedor"
                >
            </div>

            <div class="campo">
                <label for="quantidade">Quantidade em estoque</label>
                <input
                    type="number"
                    id="quantidade"
                    name="quantidade"
                    min="0"
                    placeholder="Digite a quantidade"
                >
            </div>

            <div class="campo">
                <label for="validade">Data de validade</label>
                <input
                    type="date"
                    id="validade"
                    name="validade"
                >
            </div>

            <div class="campo campo-completo">
                <label for="descricao">Descrição</label>

                <textarea
                    id="descricao"
                    name="descricao"
                    placeholder="Digite uma descrição do produto..."
                ></textarea>
            </div>

            <div class="botoes">

                <a href="/" class="botao voltar">
                    ← Voltar
                </a>

                <button type="submit" class="botao cadastrar">
                    Cadastrar produto
                </button>

            </div>

        </form>

    </div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@vite('resources/js/cadastro_produto.js')
</body>

</html>
