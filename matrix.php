<?php
    class Matrix {
        public $rows;
        public $cols;
        public $value;
        public function scalarMultiply( $lamda ) {
            for ( $i = 0; $i < $this->rows; ++$i ) {
                for ( $o = 0; $o < $this->cols; ++$o ) {
                    $this->value[ $i ][ $o ] *= $lamda;
                }
            }
        }
        public function scalarDivide( $lamda ) {
            $this->scalarMultiply( 1/$lamda );
        }
        public function printMatrix() {
            for ( $i = 0; $i < $this->rows; ++$i ) {
                for ( $o = 0; $o < $this->cols; ++$o ) {
                    echo $this->value[ $i ][ $o ] . " ";
                }
                echo "\n";
            }
        }
        public function add( $matrix ) {
            for ( $i = 0; $i < $this->rows; ++$i ) {
                for ( $o = 0; $o < $this->cols; ++$o ) {
                    $this->value[ $i ][ $o ] += $matrix->value[ $i ][ $o ];
                }
            }
        }
        public function multiply( $matrix ) {
            if ( $this->cols != $matrix->rows ) {
                return false;
            }
            $temp = new Matrix();
            $temp->rows = $matrix->rows;
            $temp->cols = $this->cols;
            $vector1 = new Vector();
            $vector2 = new Vector();
            $vector1->rows = $this->rows;
            $vector2->rows = $matrix->cols;
            for ( $i = 0; $i < $this->rows; ++$i ) {
                for ( $j = 0; $j < $matrix->cols; ++$j ) {
                    for ( $k = 0; $k < $matrix->rows; ++$k ) {
                        $vector1->value[ $k ] = $this->value[ $i ][ $k ];
                        $vector2->value[ $k ] = $matrix->value[ $k ][ $j ];
                    }
                    $temp->value[ $i ][ $j ] = $vector1->dotProduct( $vector2 );
                }
            }
            $this->value = $temp->value;
        }
        public function substract( $matrix ) {
            $matrix->scalarMultiply( -1 );
            $this->add( $matrix );
        }
        public function divide() {
        }
    }
?>
