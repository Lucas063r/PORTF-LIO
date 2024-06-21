<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];
    
    $para = "la3680627@gmail.com";
    $assunto = "Coleta de dados - Inteliogia";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: la3680627@gmail.com"."\r\n"."Reply-to: ".$email."\r\n"."X-Mailer: PHP/".phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o email!";
    }
?>

