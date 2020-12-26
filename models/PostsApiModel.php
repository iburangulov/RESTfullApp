<?php

namespace models;

use components\DB;
use PDO;

class PostsApiModel extends BaseModel
{

    public function getById($id)
    {
        $pdo = DB::getPDO();
        if ($pdo) {
            $result = DB::getByName($this->table, 'id', $id);
            if ($result) return $result;
            else return false;
        } else return false;
    }

    public function update(int $id, array $data)
    {
        $res = DB::updateByName($this->table, $id, $data);
        return $res;
    }

}