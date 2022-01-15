<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar.php">Adicionar Usuario:</a>

<table border="1" width="100%";>
    <tr> 
        <th>id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
       <tr>
           <th><?=$usuario->getId(); ?></th>
           <th><?=$usuario->getNome(); ?></th>
           <th><?=$usuario->getEmail(); ?></th>
           <th>
               <a href="editar.php?id=<?=$usuario->getId(); ?>">[Editar]</a>
               <a href="excluir.php?id=<?=$usuario->getId(); ?>" onclick="return confirm('Tem certeza que dezeja excluir?')">[Excluir]</a>
           </th>
        </tr> 
    <?php endforeach; ?>
</table>