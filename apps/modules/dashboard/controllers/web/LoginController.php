<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Init\Dashboard\Models\UserModel;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;

class LoginController extends Controller
{
    public function indexAction()
    {
        $this->view->pick('dashboard/login');
    }

    public function authAction()
    {
        $request = new Request();
        dd($request->getPost());
    }
}
