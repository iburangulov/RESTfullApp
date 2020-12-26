<?php

namespace models;

use components\DB;

abstract class BaseModel
{
    protected $table;

    public final function __construct($table)
    {
        $this->table = $table;
    }

    public final function create(array $fields)
    {
        $fieldList = array_keys($fields);
        $fieldList = '`' . implode('`, `', $fieldList) . '`';
        $valuesList = array_values($fields);
        $valuesList = '\'' . implode('\',\'', $valuesList) . '\'';
        $pdo = DB::getPDO();
        if ($pdo) {
            $query = "INSERT INTO `$this->table` ($fieldList) VALUES ($valuesList)";
            try {
                $pdo->query($query);
                return true;
            } catch (\Exception $exception) {
                return false;
            }
        } else return false;
    }

}