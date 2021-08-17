<?php
    
    session_start();

    print_r($_SESSION);
    echo '<hr>';

    //verifica se a autentificação foi realizada
    $usuario_autentificado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    //usuarios do sistema
    $usuarios_app = [
        ['id' => 1,'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1],
        ['id' => 2,'email' => 'user@teste.com.br', 'senha' => '123456','perfil_id' => 1],
        ['id' => 3,'email' => 'jose@teste.com.br', 'senha' => 'abcd','perfil_id' => 2],
        ['id' => 4,'email' => 'paula@teste.com.br', 'senha' => 'abcd','perfil_id' => 2]
    ];

    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */
    
    foreach($usuarios_app as $user){

        if($user['email'] ==  $_POST['email'] && $user['senha'] ==  $_POST['senha']){
            $usuario_autentificado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        };

    }
    
    if($usuario_autentificado){
        $_SESSION['autentificado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autentificado'] = 'NAO';
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