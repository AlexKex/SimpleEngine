<?php
/**
 * Created by PhpStorm.
 * User: Alex Pryakhin
 * Date: 18.04.2017
 * Time: 13:36
 */

namespace controllers;


abstract class AbstractController
{
    abstract public function actionIndex();

    protected function render(string $template){
        
    }
}