<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 16:54
 */

namespace controllers;

use models\CadenaModel;
require 'application/models/CadenaModel.php';

class CadenaController
{
    public function CombinaAccion(){
        $accion = 'hazCombina';
        require 'application/views/form.php';
    }

    public function hazCombinaAccion(){
        $model = new CadenaModel($_POST['op1'], $_POST['op2']);
        $model->Combina();
        $resultado = $model->getResultado();
        require 'application/views/resultado.php';
    }

    public function CuentaAccion(){
        $accion = 'hazCuenta';
        require 'application/views/form2.php';
    }

    public function hazCuentaAccion(){
        $model = new CadenaModel($_POST['op1']);
        $model->Cuenta();
        $resultado = $model->getResultado();
        require 'application/views/resultado.php';
    }

    
}