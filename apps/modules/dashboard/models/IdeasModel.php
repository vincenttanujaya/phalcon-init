<?php

namespace Phalcon\Init\Dashboard\Models;
use Phalcon\Mvc\Model;

class IdeasModel extends Model
{
    protected $id;
    protected $user_id;
    protected $title;
    protected $description;

    public function onConstruct()
    {
        $this->setSource('ideas');
    }

    public function getId()
    {
        return $this->id;
    }

    public function setUserId($user_id)
    {
        return $this->user_id = $user_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($desc)
    {
        $this->description = $desc;
    }

    public function getDescription()
    {
        return $this->description;
    }
}