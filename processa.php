<?php
    
    include("conexao.php");
    
    $NOME = $_POST ['NOME'];
    $CPF = $_POST ['CPF'];
    $N_CONSELHO = $_POST ['N_CONSELHO'];
    $ESPECIALIDADES = $_POST ['ESPECIALIDADES'];
    $MAIL = $_POST ['MAIL'];
    $TEL_1 = $_POST ['TEL_1'];
    $TEL_2 = $_POST ['TEL_2'];
    $CONSULTORIO = $_POST ['CONSULTORIO'];
    $FIL_MAE = $_POST ['FIL_MAE'];
    $FIL_PAI = $_POST ['FIL_PAI'];
    $INF_ADC = $_POST ['INF_ADC'];

    $sql = "INSERT INTO PRESTADOR (NOME,CPF,N_CONSELHO,ESPECIALIDADES,MAIL,TEL_1,TEL_2,CONSULTORIO,FIL_MAE,FIL_PAI,INF_ADC) values ('$NOME','$CPF','$N_CONSELHO','$ESPECIALIDADES','$MAIL','$TEL_1','$TEL_2','$CONSULTORIO','$FIL_MAE','$FIL_PAI','$INF_ADC')";

    $salvar = mysqli_query($conexao, $sql);
    mysqli_close($conexao);

?>