<h1>Login da Empresa</h1>
<form method="POST">

    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario">

    <label for="senha">Senha:</label>
    <input type="password" name="senha">
    <br><br>

    <button type="submit">Entrar</button>
</form>
<?php
if($_POST){
    $conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "empresa_segura"
    );

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = ? and senha = ?";

    echo "<hr>";
    echo "<b>Consulta executada:</b>";
    echo $sql;
    echo "<hr>";

    $resultado = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($resultado, "ss", $usuario, $senha);
    mysqli_stmt_execute($resultado);
    $res_final = mysqli_stmt_get_result($resultado);
    if(mysqli_num_rows($res_final) > 0){
        echo "</h2>Acesso Liberado!</h2>";
    } else {
        echo "<h2>Acesso negado!</h2>";
        echo "Input Usuario: " . $usuario . "<br>";
        echo "Input Senha: " . $senha;
    };
}
?>