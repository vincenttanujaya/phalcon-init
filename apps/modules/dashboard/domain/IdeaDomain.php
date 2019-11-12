<?php

namespace Phalcon\Init\Dashboard\Domain;

use Phalcon\Init\Dashboard\Models\IdeasModel;
use Phalcon\Init\Dashboard\Presentation\ResponseCreatorPresentationLayer;

class IdeaDomain extends GenericDomain
{
    public function getAll(){
        try {
            $ideas = IdeasModel::find();
            $response = new ResponseCreatorPresentationLayer(200,'Data Ditemukan',$ideas);
        } catch (\Exception $e) {
            $response = new ResponseCreatorPresentationLayer(500,'Terjadi Kesalahan Pada Server',null);
        }
        return $response->getResponse();
    }
}