<?php
/**
 * Arquivo de configuração de inicialização do sistema
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

namespace SON\Init;

/**
 * Description of Bootstrap 
 * 
 * @author RicardoTobias <ricardosantostobias@yahoo.com.br>
 * @version 0.1
 * @copyright  lincense
 * @access public
 * @package 
 * @subpackage 
 * 
 * */
abstract class Bootstrap {
    /**
     * Adicionaremos rotas nesta variável privada
     * 
     * @var array $_routes armazenaremos as rotas neste array
     */
    private $_routes;
    
    /**
     * Método Construtor para iniciar a classe.
     * 
     * @return array
     */
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    
    abstract protected function initRoutes();

    /**
     * Método para capturar URL's.
     * 
     * @param string $url Todas as urls serão armazenadas aqui
     * 
     * @return string
     */
    protected function run($url) {
         array_walk(
                $this->_routes, 
                function ($route) 
                use ($url) {
                    if($url === $route['route'])
                    {
                        $class = "App\\Controllers\\".ucfirst($route['controller']);
                        $controller = new $class;
                        $action = $route['action'];
                        $controller->$action();
                    }
                }
            );
    }
    
    /**
     * Método para configurar URL's.
     * 
     * @param array $routes Todas as rotas estarão aqui
     * 
     * @return string
     */
    protected function setRoutes(array $routes) {
        $this->_routes = $routes;
    }

    /**
     * Método para capturar URL's.
     * 
     * @return string
     */
    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}
