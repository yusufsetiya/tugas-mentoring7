<?php 

// Library dengan format y-m-d dan d M Y
class FormatTanggal {
    public function dateNumeric() {
        return date('Y-m-d');
    }
    public function dateText() {
        return date('d M Y');
    }
}

?>