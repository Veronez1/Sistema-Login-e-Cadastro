<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <h2 class="teste">Olá, <?php echo $_SESSION['nome'];?></h2>
    <h2 class="teste1"><a href="logout.php">Sair</a></h2>

    <div class="CRUD">
        <div class="container">
            <div class="header">
            <span>Cadastro de Funcionários</span>
            <button onclick="openModal()" id="new">Incluir</i></button>
            </div>

            <div class="divTable">
            <table>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Função</th>
                    <th>Salário</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>

            <div class="modal-container">
            <div class="modal">
                <form>
                <label for="m-nome">Nome</label>
                <input id="m-nome" type="text" required />
        
                <label for="m-funcao">Função</label>
                <input id="m-funcao" type="text" required />
        
                <label for="m-salario">Salário</label>
                <input id="m-salario" type="number" required />
                <button id="btnSalvar">Salvar</button>
                </form>
            </div>
            </div>

        </div>
        <script src="script.js"></script>
    </div>
</body>

</html>