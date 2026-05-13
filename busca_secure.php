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
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";

    echo "<hr>";
    echo "<b>Consulta executada:</b>";
    echo $sql;
    echo "<hr>";

    $resultado = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($resultado, "s", $usuario);
    mysqli_stmt_execute($resultado);
    $res_final = mysqli_stmt_get_result($resultado);
    while($dados = mysqli_fetch_assoc($res_final)){
        echo "Usuário: " . $dados["usuario"] . "<br>";
        echo "Perfil: " . $dados["perfil"] . "<br>";
        echo "<hr>";
    }
    if(mysqli_num_rows($res_final) == 0){
        echo "<h3>Nenhum usuário encontrado!</h3> <br><br>";
        echo "Input Usuário: " .$usuario;
    }
?>