<?php
include_once("conexao.php");

$filtro = isset ($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM PRESTADOR WHERE NOME LIKE '%$filtro%' OR ESPECIALIDADES LIKE '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


?>




<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CONSULTA CADASTRO DE PRESTADOR</title>
        <link rel="stylesheet" type="text/css" href="_css/style.css">
    </head>
    <body>
        <header>            
            <img src="_img/banner-topo.jpg">
            <div class="titulo">
                <h1>CORPO CLÍNICO</h1>
            </div>
          
        </header>
        <nav class="menu">
            <?php
                $menu= ["CADASTRO", "CONSULTA"];
                $links= ["index.php", "consulta.php"];

                for ($c=0; $c<=1; $c++)
                    echo "<li><a href='$links[$c]'>$menu[$c]</a></li>";
            ?>
        </nav>
        <section class="consulta">
            <h2>CONSULTA PRESTADOR</h2>
            
            <div class="consulta" id="container"> 
                
                <form method="get" action="">
                    <label class="label-left">Filtrar por nome ou especialidade: </label> 
                    <input type="text" name="filtro" class="campo-left" id="filtro" required autofocus> 
                    <input type="submit" value="Pesquisar" class="botao-left" >

                </form>
                
                <label class="label-left" id="qtd_reg">
                     <?php
                    echo "$registros registros encontrados!";
                    
                    print "<br><br>";
                    ?>                    
                </label>
                    
               
                    <?php
                            while ($exibir_registros = mysqli_fetch_array ($consulta)){
                            $nome = $exibir_registros [1];
                            $codigo = $exibir_registros [3];
                            $especialidade = $exibir_registros [4];
                            $mail = $exibir_registros [5];
                            $telefone1 = $exibir_registros [6];
                            $telefone2 = $exibir_registros [7];
                            $consultorio = $exibir_registros [8];
                            $inf = $exibir_registros [11];
                            
                            print "<article class='bloco' <br>";                        
                                print "<strong>Nome: </strong> $nome <br>";
                                print "<strong>CRM: </strong> $codigo <br>";
                                print "<strong>Especialidade: </strong> $especialidade <br>";
                                print "<strong>E-mail: </strong> $mail <br>";
                                print "<strong>Telefones: </strong> $telefone1 / $telefone2 <br>";   
                                print "<strong>Consultório: </strong> $consultorio <br>";
                                print "<strong>Informação Adicional: </strong> $inf";                                
                            print "</article>";

                        }
                    
                    mysqli_close($conexao); 
                        
                    
                    ?>
                </div>
            
        </section>
        <footer></footer>

    </body>
</html>