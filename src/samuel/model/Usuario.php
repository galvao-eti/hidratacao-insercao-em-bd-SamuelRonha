<?php
namespace model;
/**
 * Created by IntelliJ IDEA.
 * User: Samuel
 * Date: 26/06/2017
 * Time: 10:46
 */

class Usuario
{
    private $email;
    private $senha;

    private $sql = "insert into usuario (login, pass) values(:email, :senha)";

    /**
     * Usuario constructor.
     * @param $email
     * @param $senha
     */
    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }


    function save(){
        $p = new Pdo($this->sql);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }




}