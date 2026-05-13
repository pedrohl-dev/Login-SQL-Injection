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

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

    echo "<hr>";
    echo "<b>Consulta executada:</b>";
    echo $sql;
    echo "<hr>";

    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $dados = mysqli_fetch_assoc($resultado);
        echo "</h2>Acesso Liberado!</h2>";
        echo "Usuario:" .$dados["usuario"] . "<br>";
        echo "Perfil: " . $dados["perfil"] . "<br>";
    } else {
        echo "<h2>Acesso negado!</h2>";
    };
}
?>