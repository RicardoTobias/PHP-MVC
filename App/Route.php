<?php

/**
 * Arquivo de configuração de rotas 
 * 
 * PHP version 7.1
 *
 * @category  PHP-MVC
 * @package   RTW_System
 * @author    Ricardo Tobias <ricardosantostobias@yahoo.com.br>
 * @copyright 2017 Ricardo Tobias
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link      none
 */

namespace App;


use SON\Init\Bootstrap;

/**
 * Classe de rotas no PHP
 * 
 * @category  PHP-MVC
 * @package   RTW_System
 * @author    Ricardo Tobias <ricardosantostobias@yahoo.com.br>
 * @copyright 2017 Ricardo Tobias
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link      none
 */
class Route extends Bootstrap {

    /**
     * Método para iniciar e configurar rotas.
     * 
     * @return array
     */
    protected function initRoutes() {

        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['contact'] = array(
            'route' => '/contact',
            'controller' => 'indexController',
            'action' => 'contact'
        );
        
        $this->setRoutes($routes);
    }

}
