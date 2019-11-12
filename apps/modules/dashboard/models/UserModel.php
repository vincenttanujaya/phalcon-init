<?php

namespace Phalcon\Init\Dashboard\Models;
use Phalcon\Mvc\Model;

class UserModel extends Model
{
    public function initialize()
    {
        $this->setSource('users');
    }
}