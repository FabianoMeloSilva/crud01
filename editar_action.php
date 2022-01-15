<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
 
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email){/*duas maneiras de realizar*/ 
    /*$usuario = $usuarioDao->findById($id);*/
    /*mais recomendado */
    $usuario = new Usuario();   /*desse modo economiso uma consulta */
    $usuario->setId($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);


    $usuarioDao->update($usuario);

    /*$sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();*/

    header("location: index.php");
    exit;
} else {    
    header("location: editar.php?id=".$id);
    exit;
}