<?php 
$servername = "localhost";
$username = "root";
$password= "";
$database = "fullstackeletro";

//criando a conexão
$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn){
    die ("A conexão ao BD Falhou:" . mysqli_connect_error());
}
$sql = "select * from produtos";
$result=$conn->query($sql);


if ($result->num_rows >0){
    while ($row = $result-> fetch_assoc()) {
    

    }

}else {
    echo "Nenhum produto cadastrado!";

}


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script src="./js/funcoes.js"></script>
    </head>
    <body>
    
        <!--Menu-->
        
        <?php
include('menu.html');
?>
        <header>
           <h3>Produtos</h3> 
        </header>
       <hr>
      
       <section class="categorias" ></p><!--Categoria de produtos da loja-->
           <ul>
            <h3>Categorias</h3>
            <br>
            <li onclick="exibir_todos()">Todos(12)</li>
            <br>
            <li onclick= "exibir_categoria('geladeira')">Geladeira(3)</li>
            <br>
            <li onclick="exibir_categoria('fogao')">Fogões (3)</li>
            <br>
            <li onclick="exibir_categoria('microondas')">Microodas (3)</li>
            <br>
            <li onclick="exibir_categoria('Lavalouca')">Lava-louça(1)</li>
            <br>
            <li onclick="exibir_categoria('Maquinadelavar')">Maquina de Lavar (2)</li>
            <br>
         </ul>

        </section>

         <section class="produtos"> <!--dIV PRINCIPAL DOS PRODUTOS DA LOJA-->

         <?php 
         $sql = "select * from produtos";
         $result=$conn->query($sql);
         
         
         if ($result->num_rows >0){
             while ($row = $result-> fetch_assoc()) {
                 
        ?>

        <div class="box_produto" id="geladeira <?php echo $row ["categorias"]?> style="display: block; ><!--dIV FILHA COM as configuraçoes dos produtos e imagem-->
        <img src=<?php echo $row ["imagem"]?> width="120px" onmousemove="aumentar(this)" onmouseout="diminuir(this)">
        <br>
        <p class="descrição"><?php echo $row["descriçao"]?></p>
        <hr>
        <p class="preço"><strike><?php echo $row ["preço"]?></strike></p> 
        <p class="preçofinal"><?php echo $row ["preçofinal"]?></p>
        </div>
                             
        <?php
     }
     } else {
             echo "Nenhum produto cadastrado!";
    }
    
    ?>

    

   <a href="pedidos.php"><button style="background: red; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Pedidos Realizados</button></a>




        
    </body>
    <footer id="rodape2">
    <p id="rodape1"> Formas de Pagamento</p>
    <img src="./imagens/1.jpg" alt="Forma de pagamento" width="350" align="center">
    <p>&copy;Recode pro</p>

</footer>
</html>