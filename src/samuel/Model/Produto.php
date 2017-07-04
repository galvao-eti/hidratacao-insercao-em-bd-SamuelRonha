<?php
include_once('Traits/Hydrator.php');

/**
 * Created by IntelliJ IDEA.
 * User: Samuel
 * Date: 26/06/2017
 * Time: 10:46
 */
class Produto
{
    private $nome;
    private $valor;

    /**
     * Produto constructor.
     * @param $nome
     * @param $valor
     */

    use Hydrator;


    function save($objects, $p)
    {
        $this->hydrator($objects);
        $p->saveProduct($this->nome, $this->valor);
    }

    /**
     * @return mixed
     */
    public function getnome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setnome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}