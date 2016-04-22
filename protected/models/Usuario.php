<?php

//Comentario de una línea
/*
    Comentario multilínea
 */

/*
 * Incluir archivo incondicionalmente
 */
require_once 'PEAR.php';

/*
 * Incluir archivo condicionalmente
 */
include_once 'PEAR.php';

/*
 * Constante
 * Clase_nombreConstante
 */
define('NET_SAMPLE_OK', 1);

/*
 * Definición de variable global
 * Clase_nombreVariable
 */
$GLOBALS['_NET_SAMPLE_Count'] = 0;

class Net_Sample
{
    public $foo = 'unknown';
    private $_good = true;
    
    function setFoo($arg1, $arg2 = 0)
    {
        if ($arg1 == 'good' || $arg1 == 'fair') {
            $this->foo = $arg1;
            return 1;
        }else{
            return 0;
        }
    }  
}
?>
