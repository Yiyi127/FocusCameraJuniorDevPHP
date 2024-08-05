<?php
namespace Src\Utils;

class Validator {
    public static function sanitizeString($str) {
        return filter_var($str, FILTER_SANITIZE_STRING);
    }

    public static function sanitizeEmail($email) {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
