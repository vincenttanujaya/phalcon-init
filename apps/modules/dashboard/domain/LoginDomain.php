<?php

namespace Phalcon\Init\Dashboard\Domain;

use Phalcon\Init\Dashboard\Dto\UserDTO;
use Phalcon\Init\Dashboard\Models\IdeasModel;
use Phalcon\Init\Dashboard\Models\UserModel;
use Phalcon\Init\Dashboard\Presentation\ResponseCreatorPresentationLayer;

class LoginDomain extends GenericDomain
{
    public function authUser(UserDTO $params){
        try {
            $email= $params->getEmail();
            $pass = $params->getPassword();
            $user = UserModel::findFirst("email='$email'");
            if ($user) {
                if ($pass == $user->password) {
                    $userDTO = new UserDTO();
                    $userDTO->setEmail($user->email);
                    $userDTO->setName($user->name);
                    $userDTO->setId($user->id);
                    $userDTO->setPassword($user->password);
                    $response = new ResponseCreatorPresentationLayer(200,'Data Ditemukan',$userDTO);
                    return $response->getResponse();
                }
            }
            $response = new ResponseCreatorPresentationLayer(400,'Data Tidak Ditemukan',null);
        } catch (\Exception $e) {
            $response = new ResponseCreatorPresentationLayer(500,'Terjadi Kesalahan Pada Server',null);
        }
        return $response->getResponse();
    }
}