<?php

/**
 * Created by IntelliJ IDEA.
 * User: Samuel
 * Date: 26/06/2017
 * Time: 10:53
 */
class DBase
{
    private $dbh;

    function __construct()
    {
        if (is_null($this->dbh)) {
            $dsn = 'mysql:host=localhost;port=3306;dbname=trabalho_pos_2017';
            try {
                $this->dbh = new \PDO($dsn, 'root', '123');
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }


    }

    function saveUser($email, $senha)
    {
        $sql = "insert into usuario (email, senha) values(:email, :senha)";
        $dbh = $this->dbh;
        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':email', $email, \PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, \PDO::PARAM_STR);
        $stmt->execute();

    }

    function saveProduct($nome, $valor)
    {
        $sql = "insert into produto (nome, valor) values(:nome, :valor)";
        $dbh = $this->dbh;
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':nome', $nome, \PDO::PARAM_STR);
        $stmt->bindParam(':valor', $valor, \PDO::PARAM_STR);
        $stmt->execute();
    }

}