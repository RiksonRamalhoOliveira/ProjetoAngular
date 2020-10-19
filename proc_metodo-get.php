<?php
    //$nome_cliente = $_GET['nome_cliente'];
    $nome_cliente1 = filter_input(INPUT_GET,"nome_cliente",FILTER_SANITIZE_STRING);
    $email_cliente1 = filter_input(INPUT_GET,"email_cliente",FILTER_SANITIZE_EMAIL);
    echo 'Nome do cliente: '.$nome_cliente1.'<br>';
    echo 'E-mail do cliente: '.$email_cliente1.'<br>';
?>