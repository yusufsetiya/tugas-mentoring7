<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

//buatkan library untuk operasi bilangan aritmatika menggunakan try catch
class Aritmatik {
    public function tambah($a, $b) {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Variabel a atau b tidak boleh diisi string.");
            }
            return $a + $b;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function kurang($a, $b) {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Variabel a atau b tidak boleh diisi string.");
            }
            return $a - $b;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function kali($a, $b) {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Variabel a atau b tidak boleh diisi string.");
            }
            return $a * $b;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function bagi($a, $b) {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Variabel a atau b tidak boleh diisi string.");
            }
            if ($b === 0) {
                throw new Exception("Pembagi tidak boleh 0.");
            }
            return $a / $b;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>