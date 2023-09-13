<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('is_prime')) {
    function primakah($number) {
        if ($number <= 1) {
            return false;
        }
        
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        
        return true;
    }
}
