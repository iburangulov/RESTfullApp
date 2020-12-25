<?php

namespace models;

use components\DB;
use components\Session;

class UserModel extends BaseModel
{
    public function attempt(string $email, string $password)
    {
        $result = DB::getByName($this->table, 'email', $email);
        if ($result) {
            if (isset($result['password']) && $result['password'] == md5($password)) {
                Session::auth($result['name'], $result['email'], $result['password']);
                return true;
            } else return false;
        } else return false;
    }

}