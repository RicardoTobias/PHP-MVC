<?php

/**
 * Index Controller
 * 
 * Este controlador, irá gerenciar as páginas do projeto
 * 
 * PHP version 7.1
 *
 * @category  PHP-MVC
 * @package   RTW_System
 * @author    Ricardo Tobias <ricardosantostobias@yahoo.com.br>
 * @copyright 2017 Ricardo Tobias Ltd
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link      none
 * 
 */

namespace App\Controllers;

use SON\Controller\Action;

/**
 * Index Controller
 * 
 * Esta classe gerencia as páginas em HTML.
 * 
 * @category  PHP-MVC
 * @package   RTW_System
 * @author    Ricardo Tobias <ricardosantostobias@yahoo.com.br>
 * @copyright 2017 Ricardo Tobias Ltd
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link      none
 */
class IndexController extends Action {

    /** 
     * Index
     * 
     * Este método executa a função de renderizar a página principal
     * 
     * @access public 
     * 
     * @return string
     */
    public function index() {
        $this->render('index');
    }

    /** 
     * Contact
     * 
     * Este método executa a função de renderizar a página de contato
     * 
     * @access public 
     * 
     * @return string
     */
    public function contact() {
        $this->render('contact');
    }

}
