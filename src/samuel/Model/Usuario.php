<?php
include_once('Traits/Hydrator.php');

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

    /**
     * Usuario constructor.
     * @param $email
     * @param $senha
     */

    use Hydrator;


    function save($objects, $p)
    {
        $this->hydrator($objects);
        $p->saveUser($this->email, $this->senha);
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
