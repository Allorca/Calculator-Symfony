<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 10/01/2018
 * Time: 20:04
 */

namespace App\Controller;

use App\Services\CalculatorService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; //Clase Request de Symfony para capturar datos de formulario.
//Recuperar servicios de symfony: $calculator = $this -> get('calculator'); Este es el servicio para no tener que ir creando modelos.


class CalculatorController extends Controller
{
    public function sumAction()
    {
        $action = $this->generateUrl('app_result_sumnumber');
        return $this->render('calculator/asknum.html.twig', ['action' => $action]);
    }
    public function doSumAction(Request $request, CalculatorService $calculatorService) //Llamar al servicio de calculadora
                                                                                        //desde cualquier lado.
    {

        $num1=$request->request->get('number1');
        $num2=$request->request->get('number2');

        $model = new CalculatorService($num1, $num2);
        $model->sum();
        $result = $model->getResult();

        $calculatorService = $this->getOp1; //¡FUNCIONA!
        return $this->render('calculator/resultado.html.twig',
            ['result' => $result]
        );
    }

    public function subAction()
    {
        $action = $this->generateUrl('app_result_subnumber');
        return $this->render('calculator/asknum.html.twig', ['action' => $action]);
    }
    public function doSubAction(Request $request)
    {
        $num1=$request->request->get('number1');
        $num2=$request->request->get('number2');

        $model = new CalculatorService($num1, $num2);
        $model->subtract();
        $result = $model->getResult();

        return $this->render('calculator/resultado.html.twig',
            ['result' => $result]
        );
    }

    public function multiAction()
    {
        $action = $this->generateUrl('app_result_multinumber');
        return $this->render('calculator/asknum.html.twig', ['action' => $action]);
    }
    public function doMultiAction(Request $request)
    {
        $num1=$request->request->get('number1');
        $num2=$request->request->get('number2');

        $model = new CalculatorService($num1, $num2);
        $model->multiply();
        $result = $model->getResult();

        return $this->render('calculator/resultado.html.twig',
            ['result' => $result]
        );
    }

    public function divAction()
    {
        $action = $this->generateUrl('app_result_divnumber');
        return $this->render('calculator/asknum.html.twig', ['action' => $action]);
    }
    public function doDivAction(Request $request)
    {
        $num1=$request->request->get('number1');
        $num2=$request->request->get('number2');

        $model = new CalculatorService($num1, $num2);
        $model->division();
        $result = $model->getResult();

        return $this->render('calculator/resultado.html.twig',
            ['result' => $result]
        );
    }
}