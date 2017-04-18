<?php
/**
 * Created by PhpStorm.
 * User: Alex Pryakhin
 * Date: 18.04.2017
 * Time: 16:30
 */

namespace controllers;


class DefaultController extends AbstractController
{
    public function actionIndex()
    {
        echo "Main page";
    }
}