<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once APPPATH."/third_party/PHPExcel/PHPExcel.php";
ini_set('memory_limit','2048M');
 
Class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    	
    }
}
?>