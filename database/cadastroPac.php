<?php
include_once("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$dataNasc = $_POST["dataNasc"];
$genero = $_POST["genero"];
$endereco = $_POST["endereco"];
$medicamentos = $_POST["medicamentos"];
$senha = $_POST["password"];

$sql = "INSERT INTO paciente(cpf, nome, senha, email, telefone, dataNasc, genero, endereco, medicamentos)
                 VALUES ('$cpf', '$nome', '$senha', '$email', '$telefone', 
                        '$dataNasc', '$genero', '$endereco', '$medicamentos')";

echo $sql;

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Registro salvo com sucesso!");
        window.location = "cadastroPaciente.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Erro");
        window.history.back();
    </script>
<?php
}
?>