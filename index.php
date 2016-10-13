<?php

$array1 = array( 
	array('key'=>'word1', 'value'=>1),
	array('key'=>'word2', 'value'=>2),
	array('key'=>'word3', 'value'=>3),
);

$array2 = array(
        array('key'=>'word4', 'value'=>4),
        array('key'=>'word5', 'value'=>5),
        array('key'=>'word6', 'value'=>6),
);


array array_change_key_case ( array $array1 [, int $case = CASE_LOWER ] )

array array_diff ( array $array1 , array $array2 )

array array_intersect ( array $array1 , array $array2 )

bool array_key_exists ( mixed $key , array $array1 )

array array_keys ( array $array1 [, mixed $search_value = null [, bool $strict = false ]] )

int array_push ( array &$array1 , mixed $value1 )

array array_reverse ( array $array1 [, bool $preserve_keys = false ] )

array array_replace ( array $array1 , array $array2  )

mixed array_shift ( array &$array )

array array_slice ( array $array1 , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )

array array_splice ( array &$array1 , int $offset [, int $length = count($array1)[, mixed $replacement = array() ]] )

number array_sum ( array $array1 )

array array_udiff ( array $array1 , array $array2 , callable $value_compare_func )

array array_values ( array $array1 )

array array_unique ( array $array1 [, int $sort_flags = SORT_STRING ] )

?>

