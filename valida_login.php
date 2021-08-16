<?php

    //verifica se a autentificação foi realizada
    $usuario_autentificado = false;

    //usuarios do sistema
    $usuarios_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
    ];

    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */
    
    foreach($usuarios_app as $user){

        if($user['email'] ==  $_POST['email'] && $user['senha'] ==  $_POST['senha']){
            $usuario_autentificado = true;
        };

    }
    
    if($usuario_autentificado){
        echo 'Usuario autenticado';
    }else{
       header('Location: index.php?login=erro');
    }

    /*
    ptint_r($_GET)

    echo '<br>';

    echo $_GET['email'];
    echo '<br>;
    echo $_GET['senha'];
    */

?>