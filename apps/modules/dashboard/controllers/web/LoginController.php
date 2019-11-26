<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Init\Dashboard\Models\UserModel;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Init\Dashboard\Domain\LoginDomain;
use Phalcon\Init\Dashboard\Dto\UserDTO;

class LoginController extends Controller
{
    public function indexAction()
    {
        $this->view->pick('dashboard/login');
    }

    protected function __registerSession(UserDTO $params)
    {
        $this->session->set('auth', array(
            'isLog' => 'Y',
            'id' => $params->getId(),
            'email' => $params->getEmail(),
            'name' => $params->getName()
        ));
    }

    public function authAction()
    {
        $userDTO = new UserDTO();
        $userDTO->setEmail($this->request->get('email'));
        $userDTO->setPassword($this->request->get('password'));

        $loginDomain = new LoginDomain();
        $statusAuth = $loginDomain->authUser($userDTO);
        if ($statusAuth['data']) {
            $this->__registerSession($statusAuth['data']);
            $this->response->redirect('/ideas');
        }
        echo $statusAuth['message'];
    }
}
