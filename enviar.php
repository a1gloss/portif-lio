<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $relefone = addcslashes($_POST['telefone']);

    $para = "email@rmail";
    $assunto = "contato";

    $corpo = "Nome: ".$nome."\n"."E-mail".$email."\n"."Telefone".$telefone;

    $cabeca = "From "."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("houve um erro ao enviar o email");
    }



?>