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

//    public final function create(array $fields)
//    {
//        $fieldList = array_keys($fields);
//        $fieldList = '`' . implode('`, `', $fieldList) . '`';
//        $valuesList = array_values($fields);
//        $valuesList = '\'' . implode('\',\'', $valuesList) . '\'';
//        $db = DB::getPDO();
//        $query = "INSERT INTO `$this->table` ($fieldList) VALUES ($valuesList)";
//        $status = $db->query($query);
//        return $status;
//    }
}