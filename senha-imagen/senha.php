<?php
$senha = '1234';
$hash = password_hash($senha, PASSWORD_DEFAULT);


echo "senha original: ".$senha."<br/>";
echo "Hash: ".$hash;

echo "<hr/>";
?>

<?php
$hash = '$2y$10$Io/ewc.V7j1ID/fQaWdCOucjm3A4vXdWGv4ZZgQgzB023E.U8m4N2';
$senha = '1234';
 if(password_verify($senha, $hash)){
     echo 'Senha correta';
 }else{
     echo 'Senha ERRADA';
 }


