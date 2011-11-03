<?php
    class Vector {
        public $rows;
        public $value;
        public function scalarMultiply( $lamda ) {
            echo "multiplying with $lamda\n";
            for ( $i = 0; $i < $this->rows; ++$i ) {
                $this->value[ $i ] *= $lamda;
            }
        }
        public function scalarDivide( $lamda ) {
            $this->scalarMultiply( 1/$lamda );
        }
        public function printVector() {
            for ( $i = 0; $i < $this->rows; ++$i ) {
                echo $this->value[ $i ] . "\n";
            }
        }
        public function add( $vector ) {
            if ( $vector->rows != $this->rows ) {
                return false;
            }
            echo "performing addition..\n";
            for ( $i = 0; $i < $this->rows; ++$i ) {
                $this->value[ $i ] += $vector->value[ $i ];
            }
        }
        public function multiply( $vector ) {
            if ( $vector->rows != $this->rows ) {
                return false;
            }
            echo "multiplying..\n";
            for ( $i = 0; $i < $this->rows; ++$i ) {
                $this->value[ $i ] *= $vector->value[ $i ];
            }
        }
        public function substract( $vector ) {
            echo "performing substraction..\n";
            $vector->scalarMultiply( -1 );
            $this->add( $vector );
        }
        public function dotProduct( $vector ) {
            $dot = 0;
            for ( $i = 0; $i < $this->rows; ++$i ) {
                $dot += $this->value[ $i ] * $vector->value[ $i ];
            }
            return $dot;
        }
    }
?>
