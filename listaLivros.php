<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca linda</title>
    <link rel="stylesheet" href="biblioteca.css">
</head>
<body>
<?php require 'menu.php' ?>
<?php require 'conectar.php'?>
<div>
<h1>livros disponiveis<h1>
    <div>
        <?php
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn){
            echo"deu ruim familia";
            die("Falha em conectar com o banco de dados: " . mysqli_connect_error());
        }
        mysqli_query($conn,"SET NAMES 'utf8'");
        mysqli_query($conn,"SET character_set_connection=utf8");
        mysqli_query($conn,"SET character_set_client=utf8");
        mysqli_query($conn,"SET character_set_results=utf8");
        $sql = "SELECT id_livro, nome_livro, Status_livro FROM livros";
        echo"<div>";
        if ($result = mysqli_query($conn, $sql)){
            echo"<table>";
            echo"<tr>";
            echo"<th>ID livro</th>";
            echo"<th>Nome Do Livro</th>";
            echo"<th>Status Do Livro</th>";
            echo"</tr>";
            echo"</table>";
            if(mysqli_num_rows($result)> 0){
                while($rows = mysqli_fetch_assoc($result)){
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>" . $rows['id_livro'] . "</th>";
                    echo "<th>" . $rows['nome_livro'] . "</th>";
                    echo "<th>" . $rows['Status_livro'] . "</th>";
                    echo "</tr>";
                    echo "</table>";
                }
            }
        }
        echo"</div>";
        ?>
    </div>
</div>

</body>
</html>