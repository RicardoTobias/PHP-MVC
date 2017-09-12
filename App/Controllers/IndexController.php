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
class IndexController {

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
    
    /** 
     * Render
     * 
     * Este método ajuda na execução de renderização das páginas
     * 
     * @access public 
     * 
     * @return array
     */
    public function render($action){
        $current = get_class($this);
        $singleClassName = strtolower(
            (str_replace(
                "Controller",
                "",
                str_replace(
                    "App\\Controllers\\",
                    "",
                    $current)
                )
            )
        );
        
        include_once __DIR__ . '/../Views/'.$singleClassName.'/'.$action.'.phtml';
    }

}
