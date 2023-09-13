<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('romawi');
        $this->load->library('FormatTanggal');
    }

	public function index()
	{
        $number = 10;
        $number2 = 7;
        $romawi1 = 'X';
        $romawi2 = 'VII';
        echo "<h1>Tugas Mentoring 7</h1>";
        echo "<hr>";
        echo "<h3>Bilangan Aritmatika Ke Romawi</h3>";
        echo "<p>$number dalam angka romawi adalah ".": "."<b>".romawi($number)."</b>"."</p>";
        echo "<p>$number2 dalam angka romawi adalah ".": "."<b>".romawi($number2)."</b>"."</p>";
        echo "<br>";
        echo "<h3>Bilangan Romawi Ke Angka</h3>";
        echo "<p>$romawi1 dalam angka romawi adalah ".": "."<b>".angka($romawi1)."</b>"."</p>";
        echo "<p>$romawi2 dalam angka romawi adalah ".": "."<b>".angka($romawi2)."</b>"."</p>";
        echo "<br>";
        echo "<h3>Format Tanggal</h3>";
        echo "<p>Tanggal sekarang format y-m-d ".": "."<b>".$this->formattanggal->dateNumeric()."</b>"."</p>";
        echo "<p>Tanggal sekarang format d M Y ".": "."<b>".$this->formattanggal->dateText()."</b>"."</p>";
        echo "<br>";


	}
}
