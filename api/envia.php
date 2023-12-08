<?php
// Verificar se foi passado algum dado no formulário se nao estiver vazio       

if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"])) {
    
    $to = 'victor.fellers@gmail.com';                               //Codigo puxado da internet
    $subject = 'Contato do Site';
    $message = 'hello';
    $headers = 'From: victor.feller@hotmail.com' . "\r\n" .
        'Reply-To: victor.feller@hotmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        
    if(mail($to, $subject, $message, $headers)){
        echo json_encode(["status" => "success", "message" => "Enviado Com Sucesso"]);
    }else{
        echo json_encode(["status" => "erro", "message" => "Não foi possivel enviar o E-mail"]);
    }

} else {
    echo json_encode(["status" => "erro", "message" => "Nenhum dado foi enviado"]);     //Se nao tiver, aparecer essa mensagem no status de erro
}
?>