<?php

 $nome = addslashes($_POST['nome']); 
 $email = addslashes($_POST['email']); 
 $telefone = addslashes($_POST['tel-box']);

     $to = "tropicalcusconervoso@gmail.com";
     $assunto = "Contato";

     $body = "Nome: ". $nome. "\n". "Email: ". $email. "\n  Telefone: ". $telefone. "\n\n";
     

     $cabeca = "From: alexandreleandro.r@gmail.com "."\n". "Reply-To: ". $email. "\n". "X=Mailer: PHP/" .phpversion();

     if(mail($to, $assunto, $body, $cabeca)){
        echo("Email enviado com sucesso!");
     }else{
        echo("Falha ao enviar email!");
     }
?>