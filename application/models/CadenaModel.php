<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace models;
class CadenaModel
{
    private $_op1;

    private $_result;
    public function __construct($_op1)
    {
        $this->_op1 = $_op1;

    }
     public function min() /*String de Mayúsculas a Minúsculas*/
   {
       $this->_result = strtolower($this->_op1);
   }

    public function may() /*String de Minúsculas a Mayúsculas*/
    {
        $this->_result = strtoupper($this->_op1);
    }

    public function cmay() /*Convierte el primer carácter de una cadena a mayúsculas*/
    {
        $this->_result = ucfirst($this->_op1);
    }

    public function count() /*Contar carácteres*/
    {
        $this->_result = strlen($this->_op1);
    }

    public function inverse() /*Invierte una string*/
    {
        $this->_result = strrev($this->_op1);
    }

       public function getResult()
    {
        return $this->_result;
    }
}