<?php
    include_once("conexao.php");
    $cod = $_SESSION["cod"];
    $sql = "SELECT img from psicologo WHERE cod = $cod";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while ($exibir = $result->fetch_assoc()){
            ?>
            <div class="exibir">
            <img src=uploads/<?php echo $exibir["img"]?>> 
            </div>
            <?php
        }         
    } 
    else {
        echo "Nenhum registro encontrado.";
    }

    $conn->close();
?>