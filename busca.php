<form method="GET">
    <h1>Buscar Usario</h1>
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario">

    <br><br>
    <button>Pesquisar</button>
</form>
<?php
    $conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "empresa_segura"
    );

if(isset($_GET['usuario']))

    $usuario = $_GET['usuario'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

    echo "<hr>";
    echo "<b>Consulta executada:</b>";
    echo $sql;
    echo "<hr>";

    $resultado = mysqli_query($conexao, $sql);
    while($dados = mysqli_fetch_assoc($resultado)){
        echo "Usuário: " . $dados["usuario"] . "<br>";
        echo "Perfil: " . $dados["perfil"] . "<br>";
        echo "<hr>";
    }
?>