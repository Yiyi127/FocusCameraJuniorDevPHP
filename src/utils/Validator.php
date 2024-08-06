<?php
namespace Src\Utils;

class Validator {
    public static function sanitizeString($string) {
        return filter_var($string, FILTER_SANITIZE_STRING);
    }

    public static function sanitizeEmail($email) {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function sanitizeInt($int) {
        return filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }

    public static function validateInt($int) {
        return filter_var($int, FILTER_VALIDATE_INT);
    }
}
