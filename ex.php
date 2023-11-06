<?php
//Variáveis e Tipos de Dados:
$nome = "Maria"; // Variável de texto
$idade = 25;     // Variável numérica
$ativo = true;   // Variável booleana
//Estruturas de Controle:
if ($idade >= 18) {
    echo "É maior de idade";
  } else {
    echo "É menor de idade";
  }
  
  for ($i = 0; $i < 5; $i++) {
    echo "Número: " . $i;
  }
//Funções:
function saudacao($nome) {
    return "Olá, " . $nome . "!";
  }
  
  echo saudacao("João"); // Saída: "Olá, João!"
//Manipulação de Formulários (POST):
// HTML: <form action="processar.php" method="post">
$nome = $_POST['nome'];
$email = $_POST['email'];
echo "Nome: " . $nome . ", Email: " . $email;
//Banco de Dados (MySQL):
$conexao = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
while ($linha = mysqli_fetch_assoc($resultado)) {
  echo "Nome: " . $linha['nome'];
}
//Incluir Arquivos Externos:
// Incluir um arquivo externo
include("funcoes.php");

// Requer um arquivo externo (causa erro fatal se não encontrado)
require("config.php");

?>