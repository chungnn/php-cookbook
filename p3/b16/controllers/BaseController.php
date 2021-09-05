<?php 
use Jenssegers\Blade\Blade;
require_once APP_DIR . DS . "libs" . DS . "StringUtil.php";

abstract class BaseController {

    protected $view;

    public function __construct()  {
        $this->view = new Blade(APP_DIR  . DS . 'views', APP_DIR  . DS . 'cache');
    }

}