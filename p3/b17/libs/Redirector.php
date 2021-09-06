<?php

class Redirector {

    public static function redirectTo($uri) {
        header("Location: $uri");
    }

}