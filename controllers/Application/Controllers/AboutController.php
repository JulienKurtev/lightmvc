<?php
/**
 * Created by PhpStorm.
 * User: z_kurtev
 * Date: 2019-03-13
 * Time: 9:02 PM
 */


namespace Application\Controllers;

use Ascmvc\Mvc\Controller;

class AboutController extends Controller
{
    public function indexAction($vars = null)
    {
        //$this->view['bodyjs'] = 1;

        //$this->view['templatefile'] = 'index_index';

        //return $this->view;

        return "This is About Controller";
    }
}
