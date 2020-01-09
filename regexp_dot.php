<?php

preg_match('/^(.)/', 'Привет', $matches_1);
preg_match('/^(.)/u', 'Привет', $matches_2);

var_dump($matches_1, $matches_2);

/*
array(2) {
  [0]=>
  string(1) "�"
  [1]=>
  string(1) "�"
}
array(2) {
  [0]=>
  string(2) "П"
  [1]=>
  string(2) "П"
}
 */
