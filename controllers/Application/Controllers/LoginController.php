<?php
/**
 * Created by PhpStorm.
 * User: z_kurtev
 * Date: 2019-03-13
 * Time: 9:02 PM
 */


namespace Application\Controllers;

use Ascmvc\Mvc\Controller;
use Application\Models\Entity\Users;
use Application\Services\SessionService;
use Application\Services\CrudSessionsServiceTrait;

use Ascmvc\AscmvcControllerFactoryInterface;
use Ascmvc\Mvc\AscmvcEventManager;
use Ascmvc\Mvc\AscmvcEvent;

class LoginController extends Controller 
{

    public function indexAction($vars = null)
    {
        $session = new SessionService();
        $session->loginVerification();

        $this->view['bodyjs'] = 1;

        $this->view['templatefile'] = 'login';

        return $this->view;

    }
}
