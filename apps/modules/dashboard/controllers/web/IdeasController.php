<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Init\Dashboard\Domain\IdeaDomain;
use Phalcon\Init\Dashboard\Models\IdeasModel;
use Phalcon\Mvc\Controller;

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
        echo($this->request->getPost());
        $ideas = new IdeasModel();
        $ideas->user_id = 1;
        $ideas->title = "foo";
        $ideas->description = "lorem ipsum dolor sit amet";

        if ($ideas->save() === false) {
            echo "Umh, We can't store ideas right now: \n";
        
            $messages = $ideas->getMessages();
        
            foreach ($messages as $message) {
                echo $message, "\n";
            }
        } else {
            echo 'Great, a new ideas was saved successfully!';
        }
    }
}