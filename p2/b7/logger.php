<?php 

class Logger {
    
    public function write($data) {
        
    }
    
}

class FileLogger extends Logger{
    
    public function write($data) {
        echo "will write to file";
    }
    
}

class MongoLogger extends Logger {
    
    public function write($data) {
        echo "will write to mongodb ";
    }
    
}

$fileLogger = new FileLogger();
$fileLogger->write("abc");
echo "<br />";
$mongoLogger = new MongoLogger();
$mongoLogger->write("xyz");


