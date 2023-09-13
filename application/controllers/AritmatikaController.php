<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AritmatikaController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('aritmatik');
    }

	public function index()
	{
        $number1 = 2;
        $number2 = 2;
        try {
            echo "<p> $number1 + $number2 = "."<b>".$this->aritmatik->tambah($number1, $number2)."</b>".".<p>";
            echo "<p> $number1 - $number2 = "."<b>".$this->aritmatik->kurang($number1, $number2)."</b>".".<p>";
            echo "<p> $number1 x $number2 = "."<b>".$this->aritmatik->kali($number1, $number2)."</b>".".<p>";
            echo "<p> $number1 : $number2 = "."<b>".$this->aritmatik->bagi($number1, $number2)."</b>".".<p>";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
	}
}
