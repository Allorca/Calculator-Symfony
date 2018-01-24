<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 14/12/2017
 * Time: 15:43
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    public function number()
    {
        $number = mt_rand(0, 100);
        return $this->render('lucky/number.html.twig',
            ['number' => $number]
        );
    }
}