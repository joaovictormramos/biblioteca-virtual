<?php
require_once 'conecta_bd.php';

if(!empty($_POST)){
    try{
        $sql = "INSERT INTO cliente 
                    (nome, cpf, data_nasc, usuario, telefone, senha) 
                VALUES 
                    (:nome, :cpf, :data_nasc, :user, :telefone, :senha)";
        $stmt = $pdo->prepare($sql);

        $dados = array(
            ':nome' => $_POST['nome'],
            ':cpf' => $_POST['cpf'],
            ':data_nasc' => $_POST['data_nasc'],
            ':user' => $_POST['user'],
            ':telefone' => $_POST['telefone'],
            ':senha' => md5($_POST['senha'])
        );

        if($stmt->execute($dados)){
            header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
        }
    }catch (PDOException $e) {
        die($e->getMessage());
        header("Location: index.php?msgErro=Falha ao cadastrar...");
    }
}
else{
    header("Location: index.php?msgErro=Erro de acesso.");
}
die();

?>