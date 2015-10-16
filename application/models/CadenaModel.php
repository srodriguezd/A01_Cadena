<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 16:57
 */

namespace models;


class CadenaModel     //combinar carácteres, contar carácteres,
{
    private $_op1;
    private $_op2;
    private $_resultado;


    /**
     * @param $_op1
     * @param $_op2
     */
    public function __construct($_op1, $_op2)
    {
        $this->_op1 = $_op1;
        $this->_op2 = $_op2;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return $this->_resultado;
    }

    public function Combina(){
        $this->_resultado = $this->_op1 . $this->_op2;

    }

    public function Cuenta(){
        $this->_resultado = strlen($this->_op1);
    }


}