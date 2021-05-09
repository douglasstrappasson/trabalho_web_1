<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>FORMULÁRIO PARA CADASTRO DE PRESTADOR</title>
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
        <section class="cadastro">
            <h2>CADASTRO DE PRESTADOR</h2>
            
            <div class="cadastro" id="container"> 
                
            <form method="post" action="processa.php">
                
                <label class="label-left-form-clear">Nome: </label>                
                <label class="label-left-form">CPF: </label> <br>
                
                <input type="text" name= "NOME" class="campo-left-form-clear" axlength="40">                 
                <input type="text" name= "CPF" class="campo-left-form" maxlength="11">
                
                <label class="label-left-form-clear">Código do conselho: </label> <br>
                <label class="label-left-form">Especialidades: </label> <br>

                
                <input type="text" name= "N_CONSELHO" class="campo-left-form-clear" maxlength="5">   
                <input type="text" name= "ESPECIALIDADES" class="campo-left-form" maxlength="40">
                
                <label class="label-left-form-clear">E-mail: </label> <br>
                <label class="label-left-form">Telefone: </label> <br>

                
                <input type="text" name= "MAIL" class="campo-left-form-clear" maxlength="40">
                <input type="text" name= "TEL_1" class="campo-left-form" maxlength="11">
                 
                <label class="label-left-form-clear">Telefone: </label> <br>
                <label class="label-left-form">Consultório: </label> <br>
                
                <input type="text" name= "TEL_2" class="campo-left-form-clear" maxlength="11">       
                <input type="text" name= "CONSULTORIO" class="campo-left-form" maxlength="40">
                
                <label class="label-left-form-clear">Nome da Mãe: </label> <br>
                <label class="label-left-form">Nome do Pai: </label> <br>
                
                <input type="text" name= "FIL_MAE" class="campo-left-form-clear" maxlength="40">
                <input type="text" name= "FIL_PAI" class="campo-left-form" maxlength="40">
                
                <label class="label-left-form-clear">Informações adicionais: </label> <br>
                <input type="text" name= "INF_ADC" class="campo-left-form-clear" id="campo-inf-adc" maxlength="100">
                
                <input type="submit" value="Salvar" class="botao-left-form-clear">
                <input type="reset" value="Cancelar" class="botao-left-form">
            </form>
               
            </div>
            
        </section>
        <footer></footer>

    </body>
</html>