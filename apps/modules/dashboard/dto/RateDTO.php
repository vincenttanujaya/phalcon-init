<?php

namespace Phalcon\Init\Dashboard\Dto;

class RateDTO extends GenericDTO
{
    private $id;
    private $idea_id;
    private $value;

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of idea_id
     */ 
    public function getIdea_id()
    {
        return $this->idea_id;
    }

    /**
     * Set the value of idea_id
     *
     * @return  self
     */ 
    public function setIdea_id($idea_id)
    {
        $this->idea_id = $idea_id;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
