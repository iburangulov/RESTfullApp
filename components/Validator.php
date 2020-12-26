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
            'title' => '.{5,250}',
            'subtitle' => '.{5,250}',
            'content' => '.{5,65000}',
        ];

        foreach ($validable as $name => $value) {
            $valueList = explode('|', $value);
            foreach ($valueList as $pattern) {
                if ($pattern === 'confirmation') {
                    if (!isset($_POST['password_confirmation'])) {
                        $_SESSION['validation_errors'] = 'Password must match';
                    }
                    if (($name) !== htmlspecialchars(trim($_POST['password_confirmation']))) {
                        $_SESSION['validation_errors'] = 'Password must match';
                    }
                    continue;
                }
                if (!preg_match('~' . $patternList[$pattern] . '~', $name)) {
                    $_SESSION['validation_errors'] = 'Validation error!';
                }
            }
        }
    }
}