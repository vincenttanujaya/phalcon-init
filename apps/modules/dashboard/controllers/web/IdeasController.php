<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Init\Dashboard\Domain\IdeaDomain;
use Phalcon\Init\Dashboard\Models\IdeasModel;
use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;

class IdeasController extends Controller
{
    public function indexAction()
    {
        $ideaDomain = new IdeaDomain();
        $ideas = $ideaDomain->getAll();

        $this->view->ideas = $ideas['data'];
        $this->view->pick('ideas/index');
    }

    public function storeAction(){
        $ideas = new IdeasModel();
        $ideas->user_id = 1;
        $ideas->title = $this->request->getPost('title');
        $ideas->description = $this->request->getPost('description');

        if ($ideas->save() === false) {
            echo "Umh, We can't store ideas right now: \n";
        
            $messages = $ideas->getMessages();
        
            foreach ($messages as $message) {
                echo $message, "\n";
            }
        } else {
            $this->flashSession->success('Sukses menyimpan');
            $this->response->redirect('/ideas');
            $this->view->disable();
        }
    }

    public function rateAction(){
        echo $this->request->getPost('id');
    }
}