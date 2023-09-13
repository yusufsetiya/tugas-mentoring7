<?php 
//Helper konversi angka ke angka romawi
function romawi($angka){
    $romawi = array(
        'M' => 1000, 
        'CM' => 900, 
        'D' => 500, 
        'CD' => 400, 
        'C' => 100, 
        'XC' => 90, 
        'L' => 50, 
        'XL' => 40, 
        'X' => 10, 
        'IX' => 9, 
        'V' => 5, 
        'IV' => 4, 
        'I' => 1
    );
    $hasil = '';
    foreach ($romawi as $key => $value){
        while($angka >= $value){
            $hasil .= $key;
            $angka -= $value;
        }
    }
    return $hasil;
}

// Helper konversi angka romawi ke angka
function angka($romawi){
    $angka = array(
        'M' => 1000, 
        'CM' => 900, 
        'D' => 500, 
        'CD' => 400, 
        'C' => 100, 
        'XC' => 90, 
        'L' => 50, 
        'XL' => 40, 
        'X' => 10, 
        'IX' => 9, 
        'V' => 5, 
        'IV' => 4, 
        'I' => 1
    );
    $hasil = 0;
    foreach ($angka as $key => $value){
        while(strpos($romawi, $key) === 0){
            $hasil += $value;
            $romawi = substr($romawi, strlen($key));
        }
    }
    return $hasil;
}

?>