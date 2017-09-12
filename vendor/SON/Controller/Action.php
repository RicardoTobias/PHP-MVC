<?php
/**
 * Action
 * 
 * Este, irá gerenciar as ações do projeto
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

namespace SON\Controller;

/**
 * Action
 * 
 * Esta classe vai gerenciar as Classes Controladoras do sistema.
 * 
 * @category  PHP-MVC
 * @package   RTW_System
 * @author    Ricardo Tobias <ricardosantostobias@yahoo.com.br>
 * @copyright 2017 Ricardo Tobias Ltd
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPL
 * @link      none
 */
abstract class Action {
    /**
     * Variables comments
     * */
    protected $_view;
    private $action;

    /**
     * __construct
     * @access public 
     * @param null
     * @return void 
     */
    function __construct() {
         $this->_view = new \stdClass();
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
    protected function render($action, $layout = true){
        
        $this->action = $action;
        
        if($layout == true && file_exists( __DIR__ . "/../../../App/Views/layout.phtml")){ 
            
            include_once __DIR__ . "/../../../App/Views/layout.phtml"; 
        
        } else { 
            $this->content();         
        } 
    }
        
    protected function content(){ 
        
        $current = get_class($this);
        
        $singleClassName = strtolower(
            (str_replace(
                "Controller",
                "",
                str_replace(
                    "App\\Controllers\\",
                    "",
                    $current
                    )
                )
            )
        );
        
        include_once __DIR__ . "/../../../App/Views/".$singleClassName."/".$this->action.".phtml";
    }

}
