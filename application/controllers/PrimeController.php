<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrimeController extends CI_Controller {

	public function index()
	{
        $number = 2;
        if (primakah($number)) {
            echo "<h1>$number adalah bilangan prima.</h1>";
        } else {
            echo "<h1>$number bukan bilangan prima.</h1>";
        }
	}
}
