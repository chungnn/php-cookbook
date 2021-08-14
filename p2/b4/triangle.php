<?php 

class Triangle {
    private $a;
    private $b;
    private $c;
    
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    public function check() {
        if($this->a != '' &&
            $this->b != '' &&
            $this->c != '' ) {
            if($this->a + $this->b > $this->c && 
                $this->b + $this->c > $this->a && 
                $this->c + $this->a > $this->b) {
                return true;
            }
            return false;
        }
        return null;
    }
    
    public function validate(){
        $errors = [
            "a" => '',
            "b" => '',
            "c" => '',
        ];
        if($this->a == '') {
            $errors['a'] = "Cần nhập số a";
        }
        if($this->b == '') {
            $errors['b'] = "Cần nhập số b";
        }
        if($this->c == '') {
            $errors['c'] = "Cần nhập số c";
        }
        return $errors;
    }
}

$trio = new Triangle(2, 2, 3);
var_dump($trio->check());
var_dump($trio->a);

