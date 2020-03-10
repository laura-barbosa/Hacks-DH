<?php
function logarUsuario ( $email $senha ){
    $nomeArquivo = "usuarios.json";
    $jsonUsuarios= file_get_contents($nomeArquivo);
    $arrayUsuarios = json_decode($jsonUsuarios,true)

    foreach($arrayUsuarios["usuarios"] as $yey = $value){
        if( $email== $value{"email"}. " ".$senha== $value["senha"]){
            echo "existe dentro do json"
        }
    }
}

?>