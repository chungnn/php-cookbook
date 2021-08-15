<?php
class Counter {
    
    public static $counter = 0;
    
    public static function get() {
        return self::$counter;
    }
    
    public static function inc() {
        self::$counter++;
    }
    
}

echo "Counter is: " . Counter::$counter . "<br />";
Counter::inc();
echo "Counter is: " . Counter::get() . "<br />";
