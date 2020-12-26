<?php

namespace components;

class Validator
{
    /*

    required array [
    'some_key' => 'required|name'
    ]

    */
    public static function validate(array $validable)
    {
        $patternList = [
            'required' => '.+',
            'name' => '[A-Z]{0,1}[a-z]{2,22}',
            'email' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}',
            'password' => '.{4,22}',
        ];

        foreach ($validable as $name => $value) {
            $valueList = explode('|', $value);
            foreach ($valueList as $pattern) {
                if (!preg_match('~' . $patternList[$pattern] . '~', $name))
                {
                    $_SESSION['validation_errors'] = 'Validation error!';
                }
            }
        }
        return true;
    }
}