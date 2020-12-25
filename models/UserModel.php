<?php
namespace models;

use components\DB;

class UserModel extends BaseModel
{
    public function attempt(string $email, string $password)
    {
        $user = DB::getByName($this->table, 'email', $email);
    }

}