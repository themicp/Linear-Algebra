<?php
    interface Number {
        public function add( $a );
        public function subtract( $a );
        public function multiply( $a );
        public function divide( $a );
    }

    class Real implements Number {
        public $value;

        function __construct ( $real ) {
            $this->value = $real;
        }
        public function add ( $a ) {
        }
        public function subtract( $a ) {
        }
        public function multiply( $a ) {
        }
        public function divide( $a ) {
        }
    }

    class Integer implements Number {
        public $value;

        function __construct ( $int ) {
            $this->value = $int;
        }
        public function add ( $a ) {
            return $this->value + $a; 
        }
        public function subtract( $a ) {
            return $this->value - $a;
        }
        public function multiply( $a ) {
            return $this->value * $a;
        }
        public function divide( $a ) {
            return $this->value / $a;
        }
    }

    class Fraction implements Number {
        public $numerator;
        public $denominator;

        function __construct ( $numerator, $denominator ) {
            $this->numerator = $numerator;
            $this->denominator = $denominator;
        }

        public function GCD( $a, $b ) {
            if ( $b == 0 ) {
                return $a;
            }
            return GCD( $b, $a % $b );
        }
        public function LCM( $a, $b ) {
            return abs( $a * $b )/GCD( $a, $b );
        }
        public function add ( $f ) {
            $numerator = $f->denominator;
            $numerator = $numerator->multiply( $this->numerator );
            $temp = $this->denominator;
            $temp - $temp->multiply( $f->numerator );
            $numerator = $numerator->add( $temp );

            $denominator = $f->denominator;
            $denominator = $denominator->multiply( $this->denominator );

            return new Fraction ( $numerator, $denominator );
        }
        public function subtract( $a ) {
        }
        public function multiply( $a ) {
            return new Fraction( $this->numerator->multiply
        }
        public function divide( $a ) {
        }
    }
?>
