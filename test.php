<?php
    include 'vector.php';
    include 'matrix.php';
    include 'abstract.php';
    include 'number.php';

    $two = new Integer( 15 );
    echo $two->value;
/* MATRIX TEST
    $matrix1 = new Matrix();
    $matrix2 = new Matrix();

    $matrix1->rows = 2;
    $matrix1->cols = 2;
    $matrix2->rows = 2;
    $matrix2->cols = 2;

    $matrix1->value[ 0 ][ 0 ] = 0;
    $matrix1->value[ 0 ][ 1 ] = 1;
    $matrix1->value[ 1 ][ 0 ] = 2;
    $matrix1->value[ 1 ][ 1 ] = 3;

    $matrix2->value[ 0 ][ 0 ] = 0;
    $matrix2->value[ 0 ][ 1 ] = 1;
    $matrix2->value[ 1 ][ 0 ] = 2;
    $matrix2->value[ 1 ][ 1 ] = 3;

    $matrix1->multiply( $matrix2 );
    $matrix1->printMatrix();
*/
/* VECTOR TEST
    $vector1 = new Vector();
    $vector2 = new Vector();

    $vector1->rows = 4;
    $vector2->rows = 4;

    $vector1->value[ 0 ] = 0;
    $vector1->value[ 1 ] = 5;
    $vector1->value[ 2 ] = 5;
    $vector1->value[ 3 ] = 5;

    $vector2->value[ 0 ] = 1;
    $vector2->value[ 1 ] = 1;
    $vector2->value[ 2 ] = 2;
    $vector2->value[ 3 ] = 3;

    $vector1->printVector();
    $vector1->scalarMultiply( 2 );
    $vector1->printVector();
    $vector1->scalarDivide( 2 );
    $vector1->printVector();
*/
?>
