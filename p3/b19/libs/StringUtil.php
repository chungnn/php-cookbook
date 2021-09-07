<?php

class StringUtil {

    public static function formatPrice($price) {
        return number_format($price, 0, ",", ".");
    }

}

