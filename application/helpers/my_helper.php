<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function pa($arr, $pre = true) {
  if($pre) {
    echo "<pre>";
  }

  if(is_array($arr)) {
    print_r($arr);
  } else {
    echo "Please use array. this is a " . gettype($arr);
  }
}

function e($var, $br = false) {
  if($br) {
    echo $var . "<br />";
  } else {
    echo $var;
  }
}
