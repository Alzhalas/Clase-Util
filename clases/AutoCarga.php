<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AutoCarga
 *
 * @author Usuario
 */
class AutoCarga {
          static function cargar($clase)
    {
        $archivo="clases/". str_replace('\\', '/', $clase) . ".php";
        if(file_exists($archivo))
        {
            require $archivo;
        }
    }
    
}spl_autoload_register('AutoCarga::cargar');


