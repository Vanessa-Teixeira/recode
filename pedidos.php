        <?php 
         $servername = "localhost";
         $username = "root";
         $password= "";
         $database = "fullstackeletro";

    $conn = mysqli_connect($servername,$username,$password,$database);
            
            if (!$conn){
            die ("A conexão ao BD Falhou:" . mysqli_connect_error());
        }
            if (isset($_POST['Nome_cli'])&& isset($_POST['endereço_cli'])&& isset($_POST['telefone'])  && isset($_POST['nome_produto'])  && isset($_POST['valor_unitário'])&& isset($_POST['quantidade'])&& isset($_POST['valor total'])){
            
            $nome=$_POST['Nome_cli'];
            $endereco=$_POST['endereço_cli'];
            $telefone=$_POST['telefone'];
            $Nproduto=$_POST['nome_produto'];
            $Vunitario=$_POST['valor_unitário'];
            $qtd=$_POST['quantidade'];
            $vTotal=$_POST['valor total'];

            $sql="insert into  pedidos ('Nome_cli', 'endereço_cli', 'telefone', 'nome_produto', 'valor_unitário','quantidade' ,'valor total') values ('$nome','$endereco',$telefone,$Nproduto, $Vunitario,$qtd,$Vtotal)";
            $result=$conn->query($sql);
            }


?>

    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Pedidos - Full Stack Eletro</title>
            <link rel="stylesheet" href="css/estilo.css">
            <script src="./js/funcoes.js"></script>
        </head>
        <body>
        
    <?php

    include('menu.html');
    
    ?>

          
<div class="Formapedido">

<form method="post" action="">
<main> Socitar pedido</main>
<h4> Nome:</h4>
<input title="text" name="nome">
<h4> Endereço:</h4>
<input title="text" name="endereco">
<h4> Telefone:</h4>
<input title="text" name="telefone">
<h4> Categoria:</h4>
<input title="text" name="Nqproduto">
<h4> Valor Unitario:</h4>
<input title="number" name="Vunitario">
<h4> Quantidade:</h4>
<input title="number" name="qtd">
<h4> Valor Total:</h4>
<input title="number" name='Vtotal'>



<input type="submit" value="Enviar"></br>
</form>


    </div>

<?php 
  
  

    $sql = "select * from  pedidos";
    $result=$conn->query($sql);


    if ($result->num_rows >0){
            while ($row = $result-> fetch_assoc()) {
                echo "Nome:",$row['Nome_cli'],"<br>";
                echo "endereço:",$row['endereço_cli'],"<br>";
                echo "telefone:",$row['telefone'],"<br>";
                echo "Produto:",$row['nome_produto'],"<br>";
                echo "Valor:",$row['valor_unitário'],"<br>";
                echo "quantidade:",$row['quantidade'],"<br>";
                echo "valor total:",$row['valor total'],"<br>";
                echo  "<hr>";
              


    }

    } else {
        echo "Nenhum produto cadastrado";

    }


