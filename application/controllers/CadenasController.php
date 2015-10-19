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
namespace controllers;
use models\CadenaModel;
require 'application/models/CadenaModel.php';
class CalculatorController
{
    public function minAction()
    {
        $action = 'domin';
        require 'application/views/form.phtml';
    }
    public function doMinAction()
    {
        $model = new CadenaModel($_POST['op1']);
        $model->min();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function mayAction()
    {
        $action = 'domay';
        require 'application/views/form.phtml';
    }
    public function doMayAction()
    {
        $model = new CadenaModel($_POST['op1']);
        $model->may();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function cmayAction()
    {
        $action = 'docmay';
        require 'application/views/form.phtml';
    }
    public function doCmayAction()
    {
        $model = new CadenaModel($_POST['op1']);
        $model->cmay();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function countAction()
    {
        $action = 'docount';
        require 'application/views/form.phtml';
    }
    public function doCountAction()
    {
        $model = new CadenaModel($_POST['op1']);
        $model->count();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function inverseAction()
    {
        $action = 'doinverse';
        require 'application/views/form.phtml';
    }
    public function doInverseAction()
    {
        $model = new CadenaModel($_POST['op1']);
        $model->inverse();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }
} 
