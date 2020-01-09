<?php

$cafe = "\x63\x61\x66\x65\xCC\x81"; // U+0301;́	; cc 81; COMBINING ACUTE ACCENT

preg_match_all('/\X/u', $cafe, $matches_1);
preg_match_all('/./u', $cafe, $matches_2);

var_dump($matches_1, $matches_2);

preg_match('/\p{L}\p{M}/u', $cafe, $matches_3);
var_dump($matches_3);

/*
array(1) {
  [0]=>
  array(4) {
    [0]=>
    string(1) "c"
    [1]=>
    string(1) "a"
    [2]=>
    string(1) "f"
    [3]=>
    string(3) "é"
  }
}
array(1) {
  [0]=>
  array(5) {
    [0]=>
    string(1) "c"
    [1]=>
    string(1) "a"
    [2]=>
    string(1) "f"
    [3]=>
    string(1) "e"
    [4]=>
    string(2) "́"
  }
}
array(1) {
  [0]=>
  string(3) "é"
}
 */