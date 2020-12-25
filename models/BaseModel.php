<?php
namespace models;

abstract class BaseModel
{
    protected $table;

    public final function __construct($table)
    {
        $this->table = $table;
    }
}