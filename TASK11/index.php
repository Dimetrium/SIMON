<?php

include 'config.php';

function __autoload($class)
{
   $directorys = array( 
            '/lib/'
        );
        foreach($directorys as $directory)
        {
            if(file_exists(dirname(__FILE__).$directory.$class.'.php'))
            {
                require_once(dirname(__FILE__).$directory.$class.'.php');
                return;
            }            
        }
}
$objCalc = new Calc;
$A = $objCalc->setA(10);
$B = $objCalc->setB(5);
$sum = $objCalc->sum(); 
$sub = $objCalc->sub(); 
$mul = $objCalc->mul(); 
$div = $objCalc->div(); 
include TEMPLATES;
