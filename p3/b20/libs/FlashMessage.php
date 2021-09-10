<?php

class FlashMessage {

    private static $messages;

    public const TYPE_SUCCESS = 1;
    public const TYPE_WARNING = 2;
    public const TYPE_ERROR = 3;

    public static function register($type, $message) {
        static::$messages[$type][] = $message;
        $_SESSION['flash_messages'] = static::$messages;
    }

    public static function getMessages() {
        $messages = $_SESSION['flash_messages'] ?? [];
        unset($_SESSION['flash_messages']);
        return $messages;
    }

}