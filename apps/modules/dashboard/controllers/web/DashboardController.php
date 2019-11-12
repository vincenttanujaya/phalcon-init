<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Init\Dashboard\Models\UserModel;
use Phalcon\Mvc\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        $this->view->pick('dashboard/index');
    }

    public function randomAction(){
        $user = UserModel::find();
        echo count($user);
    }
}