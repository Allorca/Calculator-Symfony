<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 17/01/2018
 * Time: 19:51
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('calculator/index.html.twig');
    }
}