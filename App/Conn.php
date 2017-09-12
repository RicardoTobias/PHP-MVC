<?php

namespace App;

/**
 * Description of Conn 
 * 
 * @author RicardoTobias <ricardosantostobias@yahoo.com.br>
 * @version 0.1
 * @copyright  lincense
 * @access public
 * @package 
 * @subpackage 
 * 
 * */
class Conn {
    /**
     * Variables comments
     * */

    /**
     * __construct
     * @access public 
     * @param null
     * @return void 
     */
    public static function getDb() {
        return new \PDO("mysql:host=localhost;dbname=mvc","root","");
    }

}
